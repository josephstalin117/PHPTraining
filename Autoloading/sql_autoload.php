<?php
function test_autoload($class){
    require '/tmp/'.$class.'.php';
}
spl_autoload_register('test_autoload');
$foo=new Foo();

?>
