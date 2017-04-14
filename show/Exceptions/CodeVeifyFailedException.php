<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:50
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 验证码验证失败
 */
namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class CodeVerifyFailedException extends BaseException
{
    public function __construct()
    {
        parent::__construct('code verify failed!', 10001);
    }
}