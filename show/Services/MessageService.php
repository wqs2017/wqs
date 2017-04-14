<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午4:44
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\Services;


use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Show\Exceptions\DailyPhoneCodeLimitedException;
use Show\Exceptions\NoPhoneCodeException;
use Show\Exceptions\WrongPhoneCodeException;

class MessageService
{
    private static $instance;
    private $appkey;
    private $api;
    const TODAY_PHONE_CODE_SEND_NUMBER = 'tpcsn_';
    const DAILY_MESSAGE_LIMIT = 5;
    const PHONE_CODE = 'pc_';

    private function __construct()
    {
        $conf = Config::get('show.Message');
        $this->appkey = $conf['AppKey'];
        $this->api = $conf['Api'];

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


    /**检查每日短信发送限制
     * @param $phone
     * @return bool
     */
    private function checkPhoneCodeDailyLimit($phone)
    {
        $key = self::TODAY_PHONE_CODE_SEND_NUMBER.$phone;

        $data = Cache::get($key);

        if(empty($data))
        {
            Cache::put($key,['time'=>time(),'number'=>1],1440);
            return true;
        }else{

            if(time()>($data['time']+86400))//超过24小时
            {
                Cache::put($key,['time'=>time(),'number'=>1],1440);
                return true;
            }else
            {
                $data['number'] += 1;

                if($data['number'] > self::DAILY_MESSAGE_LIMIT)
                {
                    return false;
                }else{
                    Cache::put($key,$data,1440);
                    return true;
                }
            }

        }
    }


    /**发送手机验证码
     * @param $phone
     * @return bool
     * @throws DailyPhoneCodeLimitedException
     */
    public function sendPhoneCode($phone)
    {
        if($this->checkPhoneCodeDailyLimit($phone)) {
            $code = random_int(1000, 9999);

            $text = '您的验证码为' . $code . '，30分钟内有效【Mu直播】';

            $params = [
                'mobile'=>$phone,
                'content'=>$text,
                'appkey'=>$this->appkey
            ];

            $result = CurlService::getInstance()->sendPostRequest($this->api,$params);

            $result_array = json_decode($result,true);

            if($result_array['status']==0)
            {
                $this->cacheVrifyCode($phone,$code);
                return true;
            }else
            {
                Log::error('MessageService:'.$result);
                return false;
            }

        }else
        {
            throw new DailyPhoneCodeLimitedException;
        }
    }

    /**缓存手机验证码 30分钟
     * @param $phone
     * @param $code
     */
    private function cacheVrifyCode($phone,$code)
    {
        $key = self::PHONE_CODE.$phone;

        Cache::put($key,$code,30);//缓存30分钟;
    }

    /**验证手机号
     * @param $phone
     * @param $code
     * @return bool
     * @throws NoPhoneCodeException
     * @throws WrongPhoneCodeException
     */
    public function VerifyPhoneCode($phone,$code)
    {
        $key = self::PHONE_CODE.$phone;

        $cache_code = Cache::get($key);

        if(empty($cache_code))
        {
            throw new NoPhoneCodeException;
        }else
        {
            if($cache_code == $code)
            {
                Cache::forget($key);//验证完后直接释放缓存
                return true;
            }else{
                throw new WrongPhoneCodeException;
            }
        }
    }

}