<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:59
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */

namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class AccountOrPasswordWrongException extends BaseException
{
    public function __construct()
    {
        parent::__construct('account name or password wrong!', 10003);
    }
}