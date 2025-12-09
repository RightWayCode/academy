<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] === "GET") {
    $_SESSION['get_path'] = $_SERVER['REQUEST_URI'];
}