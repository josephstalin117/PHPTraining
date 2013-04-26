<?php
class cA{
    protected static $item='Foo';
    protected static $other='cA';
    public static function method(){
        print self::$item."\r\n";
        print self::$other."\r\n";
    }
    public static function setOther($val){
        self::$other=$val;
    }
}
class cB extends cA{
    protected static $item='Bar';
    public static function setOther($val) {
        self::$other=$val;
    }
}
class cC extends cA{
    protected static $item='Tango';
    public static function method() {
        print self::$item."\r\n";
        print self::$other."\r\n";
    }
}
class cD extends cA{
    protected static $item='Foxtrot';
}
cB::setOther('cB');
cB::method();
cC::setOther('cC');
cC::method();
cD::setOther('cD');
cD::method();

?>
