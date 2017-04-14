<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/9
 * Time: 下午1:18
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\Services;


class VerifyCodeService
{
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

    /**获取验证码
     * @return array
     */
    public function getVerifyInfo()
    {
         return $this->pickVerifyFormula();

    }


    /**验证验证码
     * @param $number
     * @return bool
     */
    public function checkVerifyInfo($number)
    {
        $verify = $_SESSION['user']['verify'];

        if($verify['index']==1)
        {
            $dest_number = $verify['data']['var1'];
        }elseif($verify['index']==2)
        {
            $dest_number = $verify['data']['var2'];
        }else
        {
            $dest_number = $verify['data']['result'];
        }

        if($dest_number == $number)
        {
            unset($_SESSION['user']['verify']);
            return true;
        }else
        {
            return false;
        }


    }


    /**生成验证码表达式
     * @return array
     */
    private function pickVerifyFormula()
    {
        $var1 = rand(1,9);
        $var2 = rand(1,9);
        $op = random_int(1,3);//1+ 2- 3*
        if($op==1)
        {
            $sign = '+';
            $result = $var1 + $var2;
        }elseif($op==2)
        {
            $sign = '-';
            $result = $var1 - $var2;
        }else
        {
            $sign = 'x';
            $result = $var2 * $var1;
        }


        $verify_formula = [
            'var1'=>$var1,
            'op'=>$sign,
            'var2'=>$var2,
            'result'=>$result
        ];

        $verify_index = random_int(1,3);

        //写入session
        $_SESSION['user']['verify'] = [
            'index'=>$verify_index,
            'data'=>$verify_formula
        ];

        //隐藏一个参数
        if($verify_index==1)
        {
            $var1 = '?';
        }elseif($verify_index==2)
        {
            $var2 = '?';
        }
        else
        {
            $result = '?';
        }

        return [
            'var1'=>$this->changeVarForm($var1),
            'op'=>$sign,
            'var2'=>$this->changeVarForm($var2),
            'result'=>$result
        ];



    }

    /**字符转换
     * @param $var
     * @return int
     */
    private function changeVarForm($var)
    {
        if($var === '?') return '?';


        if($var == 1)
        {
            $value1 = [
                '1',
                '一',
                '壹',
                'one'
            ];
            return $value1[random_int(0,3)];

        }elseif($var == 2)
        {
            $value2 = [
                '2',
                '二',
                '贰',
                'two'
            ];
            return $value2[random_int(0,3)];

        }elseif($var == 3)
        {
            $value3 = [
                '3',
                '三',
                '叁',
                'three'
            ];
            return $value3[random_int(0,3)];

        }elseif($var == 4)
        {
            $value4 = [
                '4',
                '四',
                '肆',
                'four'
            ];
            return $value4[random_int(0,3)];

        }elseif($var == 5)
        {
            $value5 = [
                '5',
                '五',
                '伍',
                'five'
            ];
            return $value5[random_int(0,3)];

        }elseif($var == 6)
        {
            $value6 = [
                '6',
                '六',
                '陆',
                'six'
            ];
            return $value6[random_int(0,3)];

        }elseif($var == 7)
        {
            $value7 = [
                '7',
                '七',
                '柒',
                'seven'
            ];
            return $value7[random_int(0,3)];

        }elseif($var == 8)
        {
            $value8 = [
                '8',
                '八',
                '捌',
                'eight'
            ];
            return $value8[random_int(0,3)];

        }elseif($var == 9)
        {
            $value9 = [
                '9',
                '九',
                '玖',
                'nine'
            ];
            return $value9[random_int(0,3)];

        }
    }
}