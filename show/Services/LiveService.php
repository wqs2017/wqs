<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午7:28
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\Services;


use Illuminate\Support\Facades\Config;
use Qiniu\Pili\Client;
use Qiniu\Pili\Mac;

class LiveService
{
    private static $instance;
    private $conf;

    private function __construct()
    {
        $this->conf = Config::get('show.Qiniu');
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


    /**初始化霹雳引擎,获取hub
     * @return \Qiniu\Pili\Hub
     */
    private function initializePiliEngine()
    {
        $mac = new Mac($this->conf['AccessKey'],$this->conf['SecretKey']);

        $client = new Client($mac);

        return $client->hub($this->conf['LiveHub']);

    }


    /**创建新的直播流
     * @param $key
     */
    public function createNewStream($key)
    {
        $hub = $this->initializePiliEngine();

        try{
            $re = $hub->create($key);
            print_r($re);
        }catch(\Exception $e)
        {
            print_r($e->getMessage());
        }
    }


    /**禁用流
     * @param $key
     */
    public function disableStream($key)
    {
        $hub = $this->initializePiliEngine();

        $stream = $hub->stream($key);

        $stream->disable();
    }


    /**启用已经存在的流
     * @param $key
     */
    public function enableStream($key)
    {
        $hub = $this->initializePiliEngine();

        $stream = $hub->stream($key);

        $stream->enable();

    }


    /**获取流信息
     * @param $key
     */
    public function getStreamInfo($key)
    {
        $hub = $this->initializePiliEngine();

        $stream = $hub->stream($key);

        $info = $stream->info();

        print_r($info);
    }


    /**获取当前流的状态
     * @param $key
     * @return bool
     */
    public function getLiveStatus($key)
    {
        $hub = $this->initializePiliEngine();

        $stream = $hub->stream($key);

        try {
            $stream->liveStatus();

            return true;
        }catch(\Exception $e)
        {

            return false;
        }

    }




}