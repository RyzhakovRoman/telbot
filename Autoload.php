<?php
function autoloadClasses($className){
    $class = __DIR__ . "/Classes/{$className}.php";
    $class = str_replace('\\', '/', $class);
    if (file_exists($class)) {
        include_once $class;
    }
}
spl_autoload_register('autoloadClasses');