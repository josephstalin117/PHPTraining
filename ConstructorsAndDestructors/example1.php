<?php
class ExampleClass{
    public $myStaticVar;
    public $myDynamicVar;
    public function __construct($myStaticVarValue) {
        $this->myStaticVar=$myStaticVarValue;
        $this->myDynamicVar=  $this->setSomeValue();
    }
    public function setSomeValue(){
        return $this->myStaticVar;
    }
}
$object=new ExampleClass('static Variable Value');
print $object->myDynamicVar;
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
