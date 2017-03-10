<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use EasyWeChat\Foundation\Application;

class TagController extends Controller
{
    //
    public function __construct(Application $wechat)
    {
        $this->wechat = $wechat;
        $this->tagServer = $wechat->user_tag;
    }

    public function Lists()
    {
        return $this->tagServer->lists();
    }

    public function create($tagName)
    {
        return $this->tagServer->create($tagName);
    }

    public function update($tagId, $tagName)
    {
        return $this->tagServer->update($tagId, $tagName);
    }

    public function delete($tagId)
    {
        return $this->tagServer->delete($tagId);
    }

    public function userTag($openId)
    {
        return $this->tagServer->userTags($openId);;
    }

    public function usersOfTag($tagId, $nextOpenId = '')
    {
        return $this->tagServer->usersOfTag($tagId, $nextOpenId);
    }

    /**
     * @param array $openIds
     * @param $tagId
     * @return bool
     * 批量打标签
     */
    public function batchTagUsers(array $openIds, $tagId)
    {
        return $this->tagServer->batchTagUsers($openIds, $tagId);
    }

}
