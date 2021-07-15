<?php


namespace app;

/**
 * 统一的返回对象
 * Class JsonResult
 * @package app\common
 */
class JsonResult
{

    private $data;
    private $msg;
    private $code;

    /**
     * JsonResult constructor.
     */
    public function __construct($data, $msg, $code)
    {
        $this->data = $data;
        $this->msg = $msg;
        $this->code = $code;
    }

    public static function success($data = null, $msg = 'success', $code = 0)
    {
        return new self($data, $msg, $code);
    }

    public static function error($data = null, $msg = 'error', $code = -1)
    {
        return new self($data, $msg, $code);
    }

    public function toArray()
    {
        return [
            'data' => $this->data,
            'msg' => $this->msg,
            'code' => $this->code
        ];
    }
}