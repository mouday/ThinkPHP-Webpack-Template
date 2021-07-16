<?php
declare (strict_types = 1);

namespace app\model;

use think\Model;

/**
 * 角色表
 *
 * @mixin \think\Model
 */
class RoleModel extends Model
{
    //
    protected $table = 'tb_role';

    public function users()
    {
        return $this->belongsToMany(UserModel::class, AccessModel::class);
    }
}
