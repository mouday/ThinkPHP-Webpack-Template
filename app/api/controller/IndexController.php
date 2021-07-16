<?php

namespace app\api\controller;

use app\BaseController;
use app\model\UserModel;

class IndexController extends BaseController
{

    public function index()
    {
        return ['name' => 'Tom', 'age' => 23];
    }

}
