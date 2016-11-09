<?php
/**
 * user表类，从BaseDao基类继承
 */
class User extends BaseDao {
    // BaseDao基类要求在子类中定义表名和主键名
    protected $_tableName = 'user';  // 表名
    protected $_primaryKey = 'id';  // 主键名

    // 根据用户姓名查询'user'表记录
    public function getUserByName($name) {
        $resultArr = $this->query($name, 'name');
        return $resultArr;
    }
}
