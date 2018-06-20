<?php
namespace app\index\controller;

use think\Controller;

class IndexView extends Controller
{
    public function hello($name = 'thinkphp')
    {
        $this->assign('name', $name); 
        return $this->fetch();
    }
}
