<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:56
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class LoginExpireException extends BaseException
{
    public function __construct()
    {
        parent::__construct('user info  expire!', 10004);
    }
}