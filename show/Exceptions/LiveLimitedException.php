<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:19
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 无权开播
 */
namespace Show\Exceptions;
use Show\BaseClass\BaseException;

class LiveLimitedException extends BaseException
{
    public function __construct()
    {
        parent::__construct('Live unauthorized!', 10006);
    }
}