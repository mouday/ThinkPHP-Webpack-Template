<?php
namespace app\index\controller;

use app\BaseController;

class IndexController extends BaseController
{

    public function index()
    {
        return view('pages/index');
    }
}
