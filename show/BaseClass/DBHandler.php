<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/12
 * Time: 下午4:30
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */

namespace Show\BaseClass;

class DBHandler
{
    private $handler;

    public function __construct($table_object)
    {
        $this->handler = app($table_object);
    }

    public function execute($conditions)
    {
        if(is_array($conditions))//多种条件查询
        {

        }else//主键查询
        {
            return $this->handler->find($conditions);
        }
    }


}