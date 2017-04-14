<?php
/**
 * Created by PhpStorm.
 * User: wqs
 * Date: 2017/3/21
 * Time: 下午3:00
 */

namespace Show\Repositories;
use Show\BaseClass\Repository;

class UserRepository extends Repository
{
    private static $instance;

    //构造函数，初始化这个模型
    private function __construct()
    {
        $this->Model = 'UserModel';
    }

    //防止外部克隆
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    /*instanceof
    （1）判断一个对象是否是某个类的实例，
    （2）判断一个对象是否实现了某个接口。*/

    public static function getInstance()
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self;
        }
        return self::$instance;
    }


}