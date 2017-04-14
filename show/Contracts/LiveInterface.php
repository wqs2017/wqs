<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/12
 * Time: 下午3:38
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: 直播虚拟接口
 */
namespace Show\Contracts;

interface LiveInterface{

    public function startLive();
    public function closeLive();

}
