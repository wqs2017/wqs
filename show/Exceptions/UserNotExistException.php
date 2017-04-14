<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:22
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 用户不存在
 */

namespace Show\Exceptions;


use Show\BaseClass\BaseException;

class UserNotExistException extends BaseException
{
    public function __construct()
    {
        parent::__construct('user not exist!',10008);
    }
}