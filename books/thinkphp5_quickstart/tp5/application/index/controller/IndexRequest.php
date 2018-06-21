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

	// 3.请求和响应->请求信息
    public function hello2(Request $request)
    {
        echo '请求参数：';
        dump($request->param());
        echo 'name:'.$request->param('name');

		// 助手函数
		dump(input());
		echo 'name:'.input('name');	
    }
}
