<?php
declare (strict_types=1);

namespace app\middleware;


use app\JsonResult;


/**
 * 包装返回数据，以统一格式返回
 *
 * Class JsonResultMiddleware
 * @package app\middleware
 */
class JsonResultMiddleware
{
    /**
     * 处理请求
     *
     * @param \think\Request $request
     * @param \Closure $next
     * @return Response
     */
    public function handle($request, \Closure $next)
    {

        $response = $next($request);

        $result = $response->getData();

        // 返回 null
        if ($result == '') {
            $result = null;
        }

        // 统一返回 JsonResult
        if (! $result instanceof JsonResult) {
            $result = JsonResult::success($result);
        }

        $data = $result->toArray();

        return json($data);
    }
}
