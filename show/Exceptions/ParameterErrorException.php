<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:53
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 参数错误或缺失
 */
namespace Show\Exceptions;


use Show\BaseClass\BaseException;

class ParameterErrorException extends BaseException
{
    public function __construct($message)
    {
        parent::__construct($message, 10002);
    }
}