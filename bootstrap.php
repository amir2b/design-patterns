<?php

define('ROOT_DIR', dirname($_SERVER['SCRIPT_FILENAME']).DIRECTORY_SEPARATOR);
define('ROOT_URL', "http://{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}");

spl_autoload_register(static function ($class) {
    $class = str_replace(['\\', '/'], DIRECTORY_SEPARATOR, $class);
    require_once ROOT_DIR."{$class}.php";
});

function load_page($title)
{
    $page_title = $title;
    require_once 'header.php';
}

function load_data()
{
    return [
        [
            'id' => 1,
            'name' => 'Amir',
            'age' => 31,
        ],
        [
            'id' => 2,
            'name' => 'Bashiri',
            'age' => 30,
        ],
        [
            'id' => 3,
            'name' => 'Barazandeh',
            'age' => 29,
        ],
    ];
}