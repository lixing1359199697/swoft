<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2019/8/19 0019
 * Time: 14:42
 */

namespace App\Http\Controller;
use Swoft\Http\Server\Annotation\Mapping\Controller;
use Swoft\Http\Server\Annotation\Mapping\RequestMapping;

/**
 * @Controller()
 * Class IndexController
 * @package App\Http\Controller
 */
class IndexController
{
    /**
     * @RequestMapping()
     */
    public function test()
    {
        return "我是注解路由";
    }

}