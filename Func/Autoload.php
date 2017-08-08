<?php

spl_autoload_register("my_autoload");

function my_autoload($class){
    if (file_exists(__DIR__.'/../Controller/'.$class.'.php')) {
        require __DIR__.'/../Controller/'.$class.'.php';
    }
    if (file_exists(__DIR__ . '/../Model/' .$class.'.php')) {
        require __DIR__ . '/../Model/' .$class.'.php';
    }
    if (file_exists(__DIR__ . '/../Func/' .$class.'.php')) {
        require __DIR__ . '/../Func/' .$class.'.php';
    }
}