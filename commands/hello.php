<?php
return function ($args) {
    $name = $args[0] ?? 'World';
    echo "Hello, $name\n";
};
