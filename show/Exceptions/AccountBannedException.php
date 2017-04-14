<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:16
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 账号被封禁
 */
namespace Show\Exceptions;


use Show\BaseClass\BaseException;

class AccountBannedException extends BaseException
{
    public function __construct()
    {
        parent::__construct('account was banned!', 10005);
    }
}