<?php

namespace app\http\middleware;

class CORS
{
  public function handle($request, \Closure $next)
  {
    $response = $next($request);
    $origin = $request->server('HTTP_ORIGIN') ?: '';
    $allow_origin = [
      'http://zhjw.scu.edu.cn',
      'http://202.115.47.141'
    ];
    if (in_array($origin, $allow_origin)) {
      $response->header('Access-Control-Allow-Origin', $origin);
      $response->header('Access-Control-Allow-Headers', 'Authorization, Content-Type, Accept, Origin, If-Match, If-Modified-Since, If-None-Match, If-Unmodified-Since, X-Requested-With, X-Id, X-Token');
      $response->header('Access-Control-Expose-Headers', 'Authorization, authenticated');
      $response->header('Access-Control-Allow-Methods', 'GET, POST, PATCH, PUT, DELETE, OPTIONS');
      $response->header('Access-Control-Allow-Credentials', 'true');
    }
    return $response;
  }
}
