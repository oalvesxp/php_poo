<?php

spl_autoload_register(
    function (string $className) 
    {
        $dir = str_replace('Locadora', 'src', $className) . '.php';
        $dir = str_replace('\\', DIRECTORY_SEPARATOR, $dir);

        $full = __DIR__ . DIRECTORY_SEPARATOR . $dir;

        if (file_exists($full)) {

            require_once $full;
        }
    }
);
