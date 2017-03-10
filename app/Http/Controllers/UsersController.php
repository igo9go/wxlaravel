<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;


class UsersController extends Controller
{
    //
    public $wechat;

    public function __construct(Application $wechat)
    {
        $this->wechat = $wechat;
    }

    public function users()
    {
        return $this->wechat->user->lists();
    }

    public function user($openId)
    {
        return $this->wechat->user->get($openId);
    }

    public function remark($openId, $remark)
    {
        return $this->wechat->user->remark($openId, $remark); // 成功返回boolean
    }
}
