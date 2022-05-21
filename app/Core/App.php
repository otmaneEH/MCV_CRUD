<?php

class App
{
    protected $controller = "HomeController";
    protected $action = "index.php";
    protected $param = [];
    public function __construct()
    {
        $url= $_SERVER['REQUEST_URI'];
        $url= explode("/",$url);
    }
}
