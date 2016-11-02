<?php
/**
 * 将CD对象中的属性值转换为大写形式
 */
class CDUpperCase {
    // 非数组类型的属性值转换为大写形式, 针对：$band, $title
    // $type保存了CD对象的属性名称
    // Q: $cd对象默认是引用方式传递的吗？
    // A: 参考：http://www.php.net/manual/zh/language.oop5.references.php
    public static function makeString(CD $cd, $type) {
        $cd->$type = strtoupper($cd->$type);
    }

    // 数组类型的属性值转换为大写形式, 针对：$tracks
    public static function makeArray(CD $cd, $type) {
        $cd->$type = array_map('strtoupper', $cd->$type);
    }
}
