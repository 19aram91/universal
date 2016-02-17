<?php
abstract class Controller{

    protected function redirect($route) {
        header("location: " . $route);
        exit();
    }

    protected function Auth() {
        return (isset($_SESSION['loged_in']));
    }
}