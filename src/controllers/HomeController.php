<?php

namespace src\controllers;

use src\models;
use src\models\Users;

class HomeController
{
    public function index() 
    {
        echo 'Controller index';
    }

    public function find()
    {
        $model = new Users();
        $model->select();
    }
}