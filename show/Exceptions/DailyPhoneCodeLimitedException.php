<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:29
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 今日短信限制发送
 */
namespace Show\Exceptions;

use Show\BaseClass\BaseException;

class DailyPhoneCodeLimitedException extends BaseException
{
    public function __construct()
    {
        parent::__construct('phone number was block today!', 10011);
    }

}