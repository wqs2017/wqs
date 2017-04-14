<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/7
 * Time: 下午4:44
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;

class ShowPageController extends BaseController
{
    public function getIndexPage()
    {

        return view('show.index',['page'=>'show.pages.index']);
    }

    public function getPersonalPage()
    {
        return view('show.index',['page'=>'show.pages.personal']);
    }
    public function getAttentionPage()
    {
        return view('show.index',['page'=>'show.pages.attention']);
    }
    public function getLive_roomPage()
    {
        return view('show.index',['page'=>'show.pages.live_room']);
    }
    public function getCharge_centerPage()
    {
        return view('show.index',['page'=>'show.pages.charge_center']);
    }

}