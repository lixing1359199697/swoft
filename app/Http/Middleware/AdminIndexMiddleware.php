<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/19 0019
 * Time: 18:56
 */

namespace App\Http\Middleware;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;
use Swoft\Bean\Annotation\Mapping\Bean;
use Swoft\Http\Server\Contract\MiddlewareInterface;

/**
 * @Bean()
 * Class AdminIndexMiddleware
 * @package App\Http\Middleware
 */
class AdminIndexMiddleware
{
    public function process(ServerRequestInterface $request, RequestHandlerInterface $handler)
    {
        return context()->getResponse()->withContent("我是admin中间件，你被我阻止了");

        $response = $handler->handle($request);

        return $response;
    }

}