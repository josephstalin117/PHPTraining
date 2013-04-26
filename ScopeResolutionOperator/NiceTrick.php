<?php
    class A{
        public function TestFunc(){
            return $this->test;
        }
    }
    class B{
        public $test;
        public function __construct() {
            $this->test="Nice trick";
        }
        public function GetTest(){
            return A::TestFunc();
        }
    }
    $b=new B;
    echo $b->GetTest();

?>
