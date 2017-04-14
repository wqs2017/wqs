<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:24
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 手机验证码错误
 */
namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class WrongPhoneCodeException extends BaseException
{
    public function __construct()
    {
        parent::__construct('wrong phone code!', 10009);
    }
}