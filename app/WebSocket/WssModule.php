<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/21 0021
 * Time: 13:44
 */

namespace App\WebSocket;

use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;
use Swoole\WebSocket\Frame;
use Swoole\WebSocket\Server;
use Swoft\WebSocket\Server\Annotation\Mapping\WsModule;
use Swoft\WebSocket\Server\Annotation\Mapping\OnClose;
use Swoft\WebSocket\Server\Annotation\Mapping\OnHandshake;
use Swoft\WebSocket\Server\Annotation\Mapping\OnOpen;
use Swoft\WebSocket\Server\Annotation\Mapping\OnMessage;

/**
 * Class WssModule
 * @package App\WebSocket
 * @WsModule("/echo")
 */
class WssModule
{
    /**
     * @OnHandshake
     * @param Request $request
     * @param Response $response
     * @return array
     */
    public function OnHandshake(Request $request, Response $response)
    {
        return [true, $response];
    }

    /**
     * @OnOpen
     */
    public function OnOpen(Request $request, $fd)
    {
        server()->push($fd, 'hello, welcome!');
    }

    /**
     * @OnMessage
     */
    public function OnMessage(Server $server, Frame $frame)
    {
        $server->push($frame->fd, 'I have received message: '. $frame->data);
    }

    /**
     * @OnClose
     * @param Server $server
     * @param $fd
     */
    public function OnClose(Server $server, $fd)
    {
        echo "客户端--". $fd . "已关闭";
    }

}