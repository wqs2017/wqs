<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/9
 * Time: 下午1:15
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */

namespace Show\Services;

class CurlService{

    private static $instance;

    private function __construct()
    {
    }
    private function __clone()
    {
        // TODO: Implement __clone() method.
    }
    public static function getInstance()
    {
        if(!(self::$instance instanceof self))
        {
            self::$instance = new self;
        }
        return self::$instance;
    }
    /**GET请求
     * @param $url
     * @return mixed
     */
    public function sendGetRequest($url)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }

    /**Post请求
     * @param $url
     * @param $data
     * @return mixed
     */
    public function sendPostRequest($url,$data)
    {
        $ch = curl_init();
        curl_setopt($ch,CURLOPT_URL,$url);
        curl_setopt($ch,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($ch,CURLOPT_POST,1);
        curl_setopt($ch,CURLOPT_POSTFIELDS,$data);
        curl_setopt($ch,CURLOPT_SSL_VERIFYHOST,false);
        curl_setopt($ch,CURLOPT_SSL_VERIFYPEER,false);
        $result = curl_exec($ch);
        curl_close($ch);
        return $result;
    }
}