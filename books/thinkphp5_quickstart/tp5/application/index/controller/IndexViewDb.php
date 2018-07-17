<?php
namespace app\index\controller;

use think\Controller;
use think\Db;

class IndexViewDb extends Controller
{
    public function index()
    {
        $data = Db::name('think_data')->find();
        $this->assign('result', $data); 
        return $this->fetch();
    }

    /**
     * 创建表记录
     * @access public
     * @return void
     */
    public function create() {
        $result = Db::execute('insert into think_data_2 (id, name ,status) values (5, "thinkphp",1)');
        dump($result);
    }

    /**
     * 更新表记录
     * @access public
     * @return void
     */
    public function update() {
        $result = Db::execute('update think_data_2 set name = "framework" where id = 5 ');
        dump($result);
    }

    /**
     * 读取表记录
     * @access public
     * @return void
     */
    public function read() {
        $result = Db::query('select * from think_data_2 where id = 5');
        dump($result);
    }

    /**
     * 删除表记录
     * @access public
     * @return void
     */
    public function delete() {
        $result = Db::execute('delete from think_data_2 where id = 5 ');
        dump($result);
    }
}
