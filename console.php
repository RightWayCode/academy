<?php

require __DIR__ . "/commands/registry.php";

$command = $argv[1] ?? null;
$args = array_slice($argv, 2);

$commands = getCommands();

if (!isset($commands[$command])) {
    echo "Unknown command: $command\n";
    exit;
}

$handler = $commands[$command]; // यह function होना चाहिए
$handler($args); // call करना है
