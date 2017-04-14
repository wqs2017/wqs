<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/10
 * Time: 下午2:55
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace App\Http\Controllers;

use Illuminate\Contracts\Cache\Repository;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Config;
use Show\BaseClass\DBHandler;
use Show\BaseClass\Response;
use Show\Models\UserModel;
use Show\Repositories\UserRepository;
use Show\Services\LiveService;
use Show\Services\MessageService;
use Show\Services\VerifyCodeService;

class TestController extends Controller
{
    public function keenstingTest()
    {
//        return Response::wrapData(['name'=>'keensting']);
//        if(MessageService::getInstance()->VerifyPhoneCode('13126734215','6050')){
            echo 'ok';
//        }
//        $_SESSION['user']=[
//            'name'=>'kensting',
//            'age'=>123
//        ];

//        print_r($_SESSION);

//        if(LiveService::getInstance()->getLiveStatus('keensting'))
//        {
//            print_r('live');
//        }else {
//            print_r('close');
//        }
//        $handler = new DBHandler('UserModel');

        app('UserModel')->find(1);
        echo 'asdasd';
//        $user = $handler->execute(1);
        echo '1111';
//        print_r($user->toArray());
    }

    public function getWqsPage(){
//        $unionModel=UserRepository::getInstance()->findById(1);
        $unionModel=UserRepository::getInstance()->findById('1');
//        $unionModel=\show\BaseClass\Repository::findById(1);
        return view('wqs.wqs',['data'=>$unionModel]);
    }
    public function getTestPage(){
        $unionModel=UserRepository::getInstance()->findById('1');
//        return view('wqs.wqs',['data'=>$unionModel]);
        return Response::wrapData($unionModel);
    }
}