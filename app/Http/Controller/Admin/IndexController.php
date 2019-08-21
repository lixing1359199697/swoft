<?php declare(strict_types=1);
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/19 0019
 * Time: 15:15
 */

namespace App\Http\Controller\Admin;

use Swlib\SaberGM;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMethod;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;
use Swoft\Http\Message\Request;
use Swoft\Http\Message\Response;

/**
 * @Controller(prefix="admin")
 */
class IndexController
{
    /**
     *
     * @param Response $response
     * @return Response
     * @throws \Throwable
     *
     * @RequestMapping(route="index")
     */
    public function index(Response $response)
    {

        return view('home/ws_test');
    }

    /**
     * @RequestMapping()
     */
    public function add(Request $request)
    {
        return "MiddlewareController 666";
    }
}
