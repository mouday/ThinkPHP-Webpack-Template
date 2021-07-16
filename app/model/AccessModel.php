<?php
declare (strict_types = 1);

namespace app\model;

use think\model\Pivot;

/**
 * 权限中间表
 *
 * @mixin \think\Model
 */
class AccessModel extends Pivot
{
    //
    protected $table = 'tb_access';
}
