<?php
class Bear{
    public $name;
    public $weight;
    public $age;
    public $Animal;
    public $colour;
    
    public function __construct() {
        $this->age=0;
        $this->weight=100;
    }// constructor
    public function eat($units){
        echo $this->name." is eating ".$units." units of food....";
        $this->weight+=$units;
    }
    public function run(){
        echo $this->name."is running......";
    }
    public function kill(){
        echo $this->Animal ." is killing prey";
        
    }
    public function sleep(){
        echo $this->weight;
    }
}
class PolarBear extends Bear{
    public function __construct() {
        parent::__construct();
        $this->colour="white";
        $this->weight=600;
    }
    public function swim(){
        echo $this->colour." is swiming...";
    }
}
$josephstalin=new Bear();
$josephstalin->name="Tom";
echo $josephstalin->age;
echo "<br>";
$josephstalin->sleep();
echo '<br>';
$josephstalin->eat("11");
echo '<br>';
$josephstalin->sleep();
echo "<br>";
$josephstalin->kill();
echo '<br>';
$hehe=new PolarBear();
$hehe->colour;
$hehe->swim();
echo "<br>";
$hehe->sleep();
?>
