<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:43
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\BaseClass;

use Exception;

class BaseException extends Exception
{
    protected $message;
    protected $code;
    public function __construct($message,$code)
    {
        $this->message = $message;
        $this->code = $code;
        parent::__construct($message, $code);
    }

}