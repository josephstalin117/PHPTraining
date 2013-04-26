<?php

class A {
    protected static $a;  //将变量a设置为静态
    
    public static function init($value) { self::$a = $value; }
    public static function getA() { return self::$a; }
}

class B extends A {
    protected static $a; // 覆盖父类$a
    
    // inherit the init() method
    public static function getA() { return self::$a; }
}
 //↓静态方法与属性可直接通过范围解析符出之
B::init('lala');
echo 'A::$a = '.A::getA().'; B::$a = '.B::getA();
?>
