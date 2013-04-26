<?php
class A{
    public static $B='1';
    const B='2';
    public static function B(){
        return "3";
    }
}
echo A::$B . A::B. A::B();
?>
