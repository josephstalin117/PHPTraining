<?php
class foo{
    public function something(){
        echo __CLASS__;
        var_dump($this);
    }
}
class foo_bar extends foo{
    public function something() {
        echo __CLASS__;
        var_dump($this);
        }
}
class foo_bar_baz extends foo_bar{
    public function something() {
        echo __CLASS__;
        var_dump($this);
        }
    public function call(){
        echo self::something();
        echo parent::something();
        echo foo::something();
    }
}
error_reporting(-1);

$obj=new foo_bar_baz();
$obj->call();

?>
