<?php

class App{
    protected $controller = "Main";

    public function __construct(){
        $controller = isset($_GET['page']) ? ($_GET['page']) : $this->controller;
        $model = isset($_GET['action']) ? ($_GET['action']) : null;

        $controller .= 'Ctrl';
        $controller = ucfirst($controller);

        require_once '../controllers/admin/'.$controller.'.php';
        $obj = new $controller;
        if(isset($model)){
            $obj->$model();
        }
    }
}