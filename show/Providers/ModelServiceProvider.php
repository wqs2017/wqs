<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/12
 * Time: 下午4:14
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */

namespace Show\Providers;


use Illuminate\Support\ServiceProvider;
use Show\Models\UserModel;

class ModelServiceProvider extends ServiceProvider
{

    public function register()
    {
        $this->app->singleton('UserModel',UserModel::class);
    }
}