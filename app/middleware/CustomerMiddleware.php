<?php
declare (strict_types=1);

namespace app\middleware;

use \Think\response\View as ViewResponse;

class CustomerMiddleware
{
    /**
     * 为视图响应添加公共参数
     * @param $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        $response = $next($request);
        
        $evn_data = [
            'app_debug'=> env('app_debug'),
            'static_url' => config('customer.static_url')
        ];

        if ($response instanceOf ViewResponse) {
            foreach($evn_data as $key => $value){
                if (!$response->getVars($key)) {
                    $response->assign($key, $value);
                }
            }
        }

        return $response;

    }
}
