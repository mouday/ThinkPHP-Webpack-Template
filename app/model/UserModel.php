<?php
declare (strict_types = 1);

namespace app\model;

use think\Model;

/**
 * 用户表
 *
 * @mixin \think\Model
 */
class UserModel extends Model
{
    protected $table = 'tb_user';

    public function roles()
    {
        return $this->belongsToMany(RoleModel::class, AccessModel::class, 'role_id', 'user_id');
    }
}
