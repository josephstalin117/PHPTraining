<?php
class StaticSample{
    function &s_foo($value=null, $remove=null)
    {
        static $s_var;    
        
        if($remove){
            if(is_array($value)){
                if(is_array($s_var)){
                    foreach($value as $key => $data){
                        unset($s_var[$key]);
                    }
                }
            }else{
                $s_var = null;
                unset($s_var);
            }
            $value = null;
        }
        if($value){
            if(is_array($value)){
                if(is_array($s_var)){
                    foreach($value as $key => $data){
                        $s_var[$key] = $data;    //Overwrites values.
                    }
                }else{
                    $s_var = $value;
                }
            }else{
                $s_var = $value;
            }
        }
        
        return $s_var;
    }
}
echo "Working with non-array values.<br>";
echo "Before Setting: ".StaticSample::s_foo();
echo "<br>";
echo "While Setting: ".StaticSample::s_foo("VALUE HERE");
echo "<br>";
echo "After Setting: ".StaticSample::s_foo();
echo "<br>";
echo "While Removing: ".StaticSample::s_foo(null, 1);
echo "<br>";
echo "After Removing: ".StaticSample::s_foo();
echo "<hr>";
echo "Working with array values<br>";
$array = array(0=>"cat", 1=>"dog", 2=>"monkey");
echo "Set an array value: ";
print_r(StaticSample::s_foo($array));
echo "<br>";

?>
