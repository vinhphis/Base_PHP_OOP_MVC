<?php

namespace Vinhphis\Oopdemo\Controllers;

class Router
{
//    1 mảng chứa địa chỉ và action(handle)
    public $routes = [];

//    hàm để thêm route vào trong dự án
    public function addRoute($url, $handle)
    {
        $this->routes[$url] = $handle;
    }

    public function getRoute($url)
    {
        if (array_key_exists($url, $this->routes)) {
            $handle = $this->routes[$url];
            if (is_callable($handle)) {
                // thực thi hàm handle
                $handle();
            } else {
                echo "404 not found";
            }
        } else {
            echo "404 not found";
        }

    }
}