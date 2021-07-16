<?php

namespace app\admin\controller;

use app\BaseController;
use app\model\UserModel;

class UserController extends BaseController
{

    // 查询列表数据
    public function getUserList()
    {
        return UserModel::with(['roles'])->select();
    }

    // 查询一条数据
    public function getUserById()
    {
        $user_id = input('id');
        return UserModel::with(['roles'])->find($user_id);
    }

    //添加关联
    public function addUserRole()
    {
        $user_id = input('user_id');
        $role_id = input('role_id');

        $user   = UserModel::find($user_id);
        $result = $user->roles()->attach([$role_id, $role_id]);

        return $result;
    }

    //移除关联
    public function removeUserRole()
    {
        $user_id = input('user_id');
        $role_id = input('role_id');

        $user   = UserModel::find($user_id);
        $result = $user->roles()->detach([$role_id, 2]);

        return $result;
    }

}
