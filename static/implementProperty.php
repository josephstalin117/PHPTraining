<?php

class a {
    
    public function get () {
        echo $this->connect();
    }
}
class b extends a {
    private static $a;

    public function connect() {
        return self::$a = 'b';
    }
}
class c extends a {
    private static $a;

    public function connect() {
        return self::$a = 'c';
    }
}
$b = new b ();
$c = new c ();

$b->get();
$c->get();
?>
