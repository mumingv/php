<?php
namespace app\index\controller;

class IndexResponse
{
    public function hello()
    {
        $data = ['name' => 'thinkphp', 'status' => '1'];
        return json($data);
    }
}
