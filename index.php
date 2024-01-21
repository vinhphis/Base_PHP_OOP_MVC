<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Demo Website PHP OOP mô hình MVC</title>
</head>
<body>

<?php
require "vendor/autoload.php";

use Vinhphis\Oopdemo\Controllers\Router;
use Vinhphis\Oopdemo\Controllers\StudentController;

$router = new Router();
$router->addRoute('/index.php?home', function () {
    echo "đây là trang chủ";
});
$router->addRoute('/index.php?news', function () {
    echo "đây là tin tức";
});
// lấy ra function index trong StudentController và truyền vào router

$router->addRoute('/index.php?homes', [new StudentController(), 'index']);

// $_server : biến siêu toàn cục
$url = $_SERVER["REQUEST_URI"];
// echo $url. '<br>';

$router->getRoute($url) . '<br>';
?>
<a href="?homes">Quay về trang chủuuuu</a>
<a href="?home">Quay về trang chủ</a>
<a href="?news">Quay về tin tức</a>



</body>
</html>