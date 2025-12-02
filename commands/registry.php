<?php

function getCommands()
{
    return [
        'hello' => require __DIR__ . '/hello.php',
        // 'make:controller' => require __DIR__ . '/make_controller.php',
    ];
}
