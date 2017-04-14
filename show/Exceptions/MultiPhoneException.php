<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:26
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 手机号已经被使用
 */
namespace Show\Exceptions;


use Show\BaseClass\BaseException;

class MultiPhoneException extends BaseException
{
    public function __construct()
    {
        parent::__construct('the phone number already exist!', 10010);
    }

}