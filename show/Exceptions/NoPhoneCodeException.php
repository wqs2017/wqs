<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午5:17
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 该手机号没有验证码
 */
namespace Show\Exceptions;


use Show\BaseClass\BaseException;

class NoPhoneCodeException extends BaseException
{
    public function __construct()
    {
        parent::__construct('no phone code!', 10012);
    }
}