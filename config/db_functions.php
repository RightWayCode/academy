<?php
function db_conn() {
    $host = "localhost";
    $db   = "ashish_acadamy";
    $user = "root";
    $pass = "";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("DB Connection failed: " . $e->getMessage());
    }
}
// CREATE
function insertData($table, $data) {
    $pdo = db_conn();
    $columns = implode(", ", array_keys($data));
    $placeholders = ":" . implode(", :", array_keys($data));
    $sql = "INSERT INTO $table ($columns) VALUES ($placeholders)";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($data);
}

function sanitizeColumns($columns) {
    return implode(", ", array_map(function($col) {
        if ($col === '*') {
            return '*'; // don't wrap *
        }
        return "`" . str_replace("`", "", $col) . "`";
    }, $columns));
}

/**
 * Find one row (with optional columns)
 */
function findOne($table, $where = "1", $params = [], $columns = ['*']) {
    $pdo = db_conn();
    $cols = sanitizeColumns($columns);

    $sql = "SELECT $cols FROM $table WHERE $where LIMIT 1";
    // echo $sql;
    // die;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetch(PDO::FETCH_ASSOC); // single row
}

/**
 * Find many rows (with optional columns)
 */
function findMany($table, $where = "1", $params = [], $columns = ['*']) {
    $pdo = db_conn();
    $cols = sanitizeColumns($columns);

    $sql = "SELECT $cols FROM $table WHERE $where";
    // echo $sql;
    // die;
    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);
    return $stmt->fetchAll(PDO::FETCH_ASSOC); // multiple rows
}


// UPDATE
function updateData($table, $data, $where, $params = []) {
    $pdo = db_conn();
    $fields = [];
    foreach ($data as $key => $value) {
        $fields[] = "$key = :$key";
    }
    $updateString = implode(", ", $fields);
    $sql = "UPDATE $table SET $updateString WHERE $where";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute(array_merge($data, $params));
}

// DELETE
function deleteData($table, $where, $params = []) {
    $pdo = db_conn();
    $sql = "DELETE FROM $table WHERE $where";
    $stmt = $pdo->prepare($sql);
    return $stmt->execute($params);
}


// Pagination
function getPaginatedData($table, $limit, $offset, $orderBy = "id DESC") {
    $pdo = db_conn();
    $sql = "SELECT * FROM $table ORDER BY $orderBy LIMIT :limit OFFSET :offset";
    $stmt = $pdo->prepare($sql);
    $stmt->bindValue(":limit", (int)$limit, PDO::PARAM_INT);
    $stmt->bindValue(":offset", (int)$offset, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


function uploadFile($file, $oldPath = '', $dir = '') {
    // Ensure upload directory exists
    $uploadDir = __DIR__."/../assets/uploads/$dir";
    if (!is_dir($uploadDir)) {
        mkdir($uploadDir, 0777, true);
    }

    $save='';

    // File details
    $fileName = basename($file['name']);
    $targetPath = rtrim($uploadDir, '/') . "/" . $fileName;

    // If old file exists, delete it
    if (!empty($oldPath) && file_exists($oldPath)) {
        unlink($oldPath);
    }

    // If same name file already exists in folder, rename new one
    $fileExt = pathinfo($fileName, PATHINFO_EXTENSION);
    $fileBase = pathinfo($fileName, PATHINFO_FILENAME);

    $counter = 1;
    while (file_exists($targetPath)) {
        $targetPath = rtrim($uploadDir, '/') . "/" . $fileBase . "_" . $counter . "." . $fileExt;
        $save = $dir."/". $fileBase . "_" . $counter . "." . $fileExt;
        $counter++;
    }

    // Move uploaded file
    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        return $save; // return path for saving in DB
    } else {
        return false;
    }
}

function isUnique($table, $column, $value): bool {
    $pdo = db_conn();
    $sql = "SELECT COUNT(*) FROM `$table` WHERE `$column` = ?";
    $params = [$value];

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    return $stmt->fetchColumn() == 0; // true = unique, false = already exists
}

function countRows(string $table, string $condition = "", array $params = []): int {
    $pdo = db_conn(); // apna existing PDO connection function

    // Base query
    $sql = "SELECT COUNT(*) FROM `$table`";

    // Agar condition di gayi ho
    if (!empty($condition)) {
        $sql .= " WHERE $condition";
    }

    $stmt = $pdo->prepare($sql);
    $stmt->execute($params);

    // Total row count return karega (integer)
    return (int) $stmt->fetchColumn();
}
