<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:00
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 系统内部错误
 */
namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class SystemInnerException extends BaseException
{
    public function __construct($message)
    {
        parent::__construct($message, 444);
    }

}