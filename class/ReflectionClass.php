<?php
/***********************************************************
 *     FileName: ReflectionClass.php
 *         Desc: 反射类, 报告了一个类的有关信息
 *       Author: Jie Yin
 *        Email: mumingv@163.com
 *     HomePage: https://github.com/mumingv
 *      Version: 0.0.1
 *   LastChange: 2016-05-04 10:02:48
 *      History:
 ***********************************************************/

/*
ReflectionClass implements Reflector {
    // 常量
    const integer IS_IMPLICIT_ABSTRACT = 16 ;
    const integer IS_EXPLICIT_ABSTRACT = 32 ;
    const integer IS_FINAL = 64 ;
    // 属性
    public $name ;
    // 方法
    public __construct ( mixed $argument )
    public static string export ( mixed $argument [, bool $return = false ] )
    public mixed getConstant ( string $name )
    public array getConstants ( void )
    public ReflectionMethod getConstructor ( void )
    public array getDefaultProperties ( void )
    public string getDocComment ( void )
    public int getEndLine ( void )
    public ReflectionExtension getExtension ( void )
    public string getExtensionName ( void )
    public string getFileName ( void )
    public array getInterfaceNames ( void )
    public array getInterfaces ( void )
    public ReflectionMethod getMethod ( string $name )
    public array getMethods ([ int $filter ] ) //获取类的方法，返回值是由ReflectionMethod类对象组成的数组
    public int getModifiers ( void )
    public string getName ( void ) //获取类的名称
    public string getNamespaceName ( void )
    public object getParentClass ( void )
    public array getProperties ([ int $filter ] ) //获取类的属性, 返回值是由ReflectionProperty类对象组成的数组
    public ReflectionProperty getProperty ( string $name )
    public string getShortName ( void )
    public int getStartLine ( void )
    public array getStaticProperties ( void )
    public mixed getStaticPropertyValue ( string $name [, mixed &$def_value ] )
    public array getTraitAliases ( void )
    public array getTraitNames ( void )
    public array getTraits ( void )
    public bool hasConstant ( string $name )
    public bool hasMethod ( string $name )
    public bool hasProperty ( string $name )
    public bool implementsInterface ( string $interface )
    public bool inNamespace ( void )
    public bool isAbstract ( void )
    public bool isAnonymous ( void )
    public bool isCloneable ( void )
    public bool isFinal ( void )
    public bool isInstance ( object $object )
    public bool isInstantiable ( void )
    public bool isInterface ( void )
    public bool isInternal ( void )
    public bool isIterateable ( void )
    public bool isSubclassOf ( string $class )
    public bool isTrait ( void )
    public bool isUserDefined ( void )
    public object newInstance ( mixed $args [, mixed $... ] )
    public object newInstanceArgs ([ array $args ] )
    public object newInstanceWithoutConstructor ( void )
    public void setStaticPropertyValue ( string $name , string $value )
    public string __toString ( void )
}
 */

# 示例
class person {
    public $name;
    public $gender;
    public function say() {
        echo $this->name, ' is ', $this->gender, "\n";
    }
    public function __set($name, $value) {
        echo "__set($name, $value) is called.\n";
        $this->$name = $value;
    }
    public function __get($name) {
        echo "__get($name) is called.\n";
        if (!isset($this->$name)) {
            echo "$name is not set.\n";
            $this->$name = "default";
        }
        return $this->$name;
    }
}

// 根据类的反射对象
$obj = new ReflectionClass('person');

// 获取类的名称
$className = $obj->getName();
echo "class {$className} {\n";

// 获取类的属性
$props = array();
foreach($obj->getProperties() as $prop) {
    $props[$prop->getName()] = $prop; //$prop是ReflectionProperty类对象
}
is_array($props) && ksort($props);
foreach($props as $k => $v) {
    echo "    ";
    echo $v->isPublic() ? "public" : "",
        $v->isProtected() ? "protected" : "",
        $v->isPrivate() ? "private" : "",
        $v->isStatic() ? "static" : "";
    echo " \${$k};\n";
}

// 获取类的方法
$methods = array();
foreach($obj->getMethods() as $method) {
    $methods[$method->getName()] = $method; //$method是ReflectionMethod类对象
}
echo "\n";
is_array($methods) && ksort($methods);
foreach($methods as $k => $v) {
    echo "    function {$k}() {}\n";
}
echo "}\n";

















