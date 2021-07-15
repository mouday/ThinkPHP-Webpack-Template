<?php

namespace app\api\controller;

use app\BaseController;

class IndexController extends BaseController
{

    public function index()
    {
        return ['name' => 'Tom', 'age' => 23];
    }
}
