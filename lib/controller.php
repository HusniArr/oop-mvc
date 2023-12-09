<?php

class Controller {

    public function model($model)
    {
        require_once ROOT. DS . 'app' . DS . 'models' . DS . $model . '.php';
        return new $model;
    }

    public function view($view, $data=[])
    {
        extract($data);
        $view = ROOT . DS . 'app' . DS . 'views' . DS . $view . '.php';
        // require_once ROOT . DS . 'app' . DS . 'views' . DS . 'master.php';
        if(file_exists($view)) require_once $view;
        else echo('Page Not Found');
        
    }
}