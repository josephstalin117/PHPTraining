<?php
   class Foo{
      function __construct($arg){
         echo $arg;
      }

      function Foo($arg){
         if(version_compare(PHP_VERSION,"5.0.0","<")){
            $this->__construct($arg);
            register_shutdown_function(array($this,"__destruct"));          
         }
      }

      function __destruct(){
         echo "Ack! I'm being destroyed!";
      }
   }
   $hehe=new Foo('hehe');
   $hehe->Foo();
   
   
?> 

