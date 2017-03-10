<?php

namespace App\Http\Controllers;

use EasyWeChat\Foundation\Application;

use Illuminate\Http\Request;

class MaterialController extends Controller
{
    //
    public function __construct(Application $wechat)
    {
        $this->wechat = $wechat;
        // 永久素材
        $this->material = $this->wechat->material;
        // 临时素材
        $this->temporary = $this->wechat->material_temporary;

    }

    public function uploadImage()
    {
        return $this->material->uploadImage(public_path() . '/11.png');
    }

    public function uploadVoice()
    {
        return $this->material->uploadVoice(public_path() . '/11.png');
    }

    public function uploadVideo()
    {
        return $this->material->uploadVideo(public_path() . '/11.png', "视频标题", "视频描述");
    }


    public function uploadThumb()
    {
        return $this->material->uploadThumb(public_path() . '/11.png');
    }

    public function uploadArticle()
    {
        // 上传单篇图文
        $article = new Article([
            'title' => 'xxx',
            'thumb_media_id' => $mediaId,
            //...
        ]);
        return $this->material->uploadArticle($article);

        // 或者多篇图文
        return $this->material->uploadArticle([$article, $article2]);
    }


    public function updateArticle()
    {
        // 上传单篇图文
        $article = new Article([
            'title' => 'xxx',
            'thumb_media_id' => 'xxx',
            //...
        ]);
        return $this->material->updateArticle($mediaId, $article);

        // 指定更新多图文中的第 2 篇
        return $this->material->uploadArticle($mediaId, $article, 2);
    }

    public function get($mediaId)
    {
        $resource = $this->material->get($mediaId);
    }

}
