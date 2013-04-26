<?php
    class MySingleton{
        private static $instance=null;
        private function __construct() {
            $this->name='Freddy';
        }
        public static function getInsstance(){
            if(self::$instance==NULL){
                print"Object created!<br>";
                self::$instance=new self;
            }
            return self::$instance;
        }
        public function sayHello(){
            print "Hello my name is {$this->name}!<br>";
        }
        public function setName($name){
            $this->name=$name;
        }
    }
    $objA=  MySingleton::getInsstance();
    $objA->sayHello();
    $objA->setName("Alex");
    $objA->sayHello();
    $objB=  MySingleton::getInsstance();
    $objB->sayHello();
    $objB->setName("Bod");
    $objB->sayHello();

?>
