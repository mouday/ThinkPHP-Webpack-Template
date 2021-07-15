<?php
namespace app\controller;

use app\BaseController;
use app\model\UserModel;
use think\facade\Db;

class IndexController extends BaseController
{
    protected function initialize()
    {
        Db::event('before_select', function (){
           echo 'select';
        });
    }


    public function index()
    {
        // $result = UserModel::select();
        // return json($result);

        return view('pages/index');
    }

    public function hello($name = 'ThinkPHP6')
    {
        return 'hello,' . $name;
    }
}
