<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:20
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 余额不足
 */

namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class InsufficientFoundException extends BaseException
{
    public function __construct()
    {
        parent::__construct('insufficient found!', 10007);
    }
}