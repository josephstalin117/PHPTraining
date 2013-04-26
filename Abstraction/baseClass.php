<?php

class Foo {
    public function sneeze() { echo 'achoooo'; }
}

abstract class Bar extends Foo {
    public abstract function hiccup();
}

class Baz extends Bar {
    public function hiccup() { echo 'hiccup!'; }
}

$baz = new Baz();
$baz->sneeze();
$baz->hiccup();
?>

