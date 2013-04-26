<?php

abstract class AbstractFactory{
    public abstract function CreateProductA();
    public abstract function CreateProductB();
}
class ConcreteFactory1 extends AbstractFactory{
    public function CreateProductA() {
        return new ProductA1();
    }
    public function CreateProductB() {
        return new ProductB1();
    }
}
class ConcreteFactory2 extends AbstractFactory{
    public function CreateProductA() {
        return new ProductA2();
    }
    public function CreateProductB() {
        return new ProductB2();
    }
}
abstract class AbstractProductA{
    
}
abstract class AbstractProductB{
    public abstract function Interact($a);
}
class ProductA1 extends AbstractProductA{}
class ProductB1 extends AbstractProductB{
    public function Interact($a) {
        echo __CLASS__."interacts with ".__METHOD__."\n";
        var_dump($a);
    }
}
class Client{
    private $AbstractProductA;
    private $AbstractProductB;
    
    
    //constructor
    public function __construct($factory) {
        $this->AbstractProductB=$factory->CreateProductB();
        $this->AbstractProductA=$factory->CreateProductA();
    }
    public function Run(){
        $this->AbstractProductB->Interact($this->AbstractProductA);
    }
}
$factorty1=new ConcreteFactory1();
$c1=new Client($factorty1);
$c1->Run();
$factorty2=new ConcreteFactory2();
$c2=new Client($factorty2);
$c2->Run();


?>
