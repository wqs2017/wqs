<?php
/**
 * Created by PhpStorm.
 * User: KeenSting
 * Date: 2017/1/12
 * Time: 下午4:10
 * Name: 梁勋
 * Phone: 13126734215
 * QQ: 707719848
 * File Description: php文件描述
 */
namespace Show\Models;

use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    protected $connection = 'show';

    protected $table = 'ms_user';

    protected $primaryKey = 'id';

    protected $fillable = [
//        'user_id',
//        'nickname',
//        'gender',
//        'append_key',
//        'pwd',
//        'reg_time',
//        'email',
//        'phone',
//        'fans',
//        'marks',
//        'header',
//        'signer',
//        'is_presenter',
//        'status',
//        'auth'
    'id',
        'password',
        'username',
        'time'

    ];

    protected $visible = [
//        'user_id',
//        'nickname',
//        'gender',
//        'append_key',
//        'pwd',
//        'reg_time',
//        'email',
//        'phone',
//        'fans',
//        'marks',
//        'header',
//        'signer',
//        'is_presenter',
//        'status',
//        'auth'
        'id',
        'password',
        'username',
        'time'
    ];


    public $timestamps = false;

}