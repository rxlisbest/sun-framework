<?php
/**
 * Created by PhpStorm.
 * User: ruixinglong
 * Date: 2018/1/17
 * Time: 下午12:42
 */
$database = require(__DIR__ . '/database.php');

return [
    'base_path' => dirname(__DIR__),
    'path_info' => true,
    'database' => $database
];