<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/21 0021
 * Time: 9:12
 */

namespace App\Exception\Handler;


use Swoft\Http\Message\Response;
use Swoft\Http\Server\Exception\Handler\AbstractHttpErrorHandler;
use Throwable;

class IndexExceptionHandler extends AbstractHttpErrorHandler
{
    public function handle(Throwable $e, Response $response): Response
    {
        // TODO: Implement handle() method.
        $data = ['code'=>-1, 'msg'=>$e->getMessage()];

        return $response->withData();
    }
}