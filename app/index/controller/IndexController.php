<?php
namespace app\index\controller;

use app\BaseController;

class IndexController extends BaseController
{

    public function index()
    {
        return view('pages/index');
    }

    // /index/index/test?name=Tom
    public function test($name)
    {
        return $name;
    }

    public function hello()
    {
        // return url('hello');
        //    /index/Index/hello.html

        return url('Index/test', ['name'=> 'Tom']);
        // /index/test/Tom.html

    }
}
