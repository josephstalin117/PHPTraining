<?php

class A {
    protected static $a;  //������a����Ϊ��̬
    
    public static function init($value) { self::$a = $value; }
    public static function getA() { return self::$a; }
}

class B extends A {
    protected static $a; // ���Ǹ���$a
    
    // inherit the init() method
    public static function getA() { return self::$a; }
}
 //����̬���������Կ�ֱ��ͨ����Χ��������֮
B::init('lala');
echo 'A::$a = '.A::getA().'; B::$a = '.B::getA();
?>
