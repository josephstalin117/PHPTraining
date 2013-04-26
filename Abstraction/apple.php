<?php
abstract class Fruit { 
    private $color; 
    
    abstract public function eat(); 
    
    public function setColor($c) { 
        $this->color = $c; 
    } 
}
class Apple extends Fruit{
    public function eat(){
        echo "chew until core";
    }
}
class Orange extends Fruit{
    public function eat() {
    }
}
$apple=new Apple();
$apple->eat();




?>
