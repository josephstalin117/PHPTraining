<?php

class Classy{
    const STAT='S'; //no dollar sign for constants
    static $stat='Static';
    public $pub1='Public';
    private $priv='Private';
    protected $prot='Protected';
    
    function __construct() {
        
    }
    
    public function showMe(){
        print '<br> self::STAT:' . self::STAT;
        print '<br> self::$stat:' . self::$stat;
        //print '<br> $this->stat' . $this->stat;
        print '<br> $this->pub1' . $this->pub1; 
    }
    
}
print Classy::$stat;
$me=new Classy;
$me->showMe();
?>
