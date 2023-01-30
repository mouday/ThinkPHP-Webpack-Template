<?php


namespace app\index\controller\v1;


class BlogController
{
    //多级控制器 /index/v1.blog/index
    public function index()
    {
        return 'v1.Blog';
    }

    // 静态方法 /index/v1.blog/detail
    public static function detail()
    {
        return 'v1.static.detail';
    }
}