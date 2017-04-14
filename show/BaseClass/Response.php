<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午3:25
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\BaseClass;

class Response
{
    /**包装结果
     * @param null $data
     * @return string
     */
    public static function wrapData($data=null)
    {
        if(empty($data))
        {
            return json_encode(['error'=>0]);
        }else
        {
            return json_encode(['error'=>0,'data'=>$data]);
        }
    }

    /**包装异常
     * @param $code
     * @param $info
     * @return string
     */
    public static function  throwException($code,$info)
    {
        return json_encode(['error'=>$code,'info'=>$info]);
    }
}