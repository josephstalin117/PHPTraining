<?php
abstract class FOO{
    abstract static function dump();
}
class BAR extends FOO{
    static function dump() {
        var_dump("BAR");
    }
}
BAR::dump();
/*class FAULT extends FOO{
    function pr(){
        var_export("WTF");
     }
}*/
?>
