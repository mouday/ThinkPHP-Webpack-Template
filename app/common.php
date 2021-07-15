<?php
// 应用公共文件

/**
 * 数组取值
 * @param $array
 * @param $value
 * @param null $default
 * @return mixed|null
 */
if (!function_exists('array_get')) {
    function array_get($array, $value, $default = null)
    {
        return isset($array[$value]) ? $array[$value] : $default;
    }
}
