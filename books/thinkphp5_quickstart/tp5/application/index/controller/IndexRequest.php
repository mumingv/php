<?php
namespace app\index\controller;

use think\Request;

class IndexRequest
{
    public function hello($name = 'World')
    {
        $request = Request::instance();
        // 获取当前URL地址 不含域名
        echo 'url: ' . $request->url() . '<br/>';
        return 'Hello,' . $name . '！';
    }
}
