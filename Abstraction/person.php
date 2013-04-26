<?php
abstract class person{
    abstract protected function write_info();
    public $LastName;
    public $FristName;
    public $BirthDate;
    public function get_Age($today=NULL){
        
    }
}
final class employee extends person{
    public $EmployeeNumber;
    public $DateHired;
    public function write_info() {
        echo "writing ".$this->LastName."'s info to emloyee dbase table";
    }
}
final class student extends person{
    public $StudentNumber;
    public $CourseNum;
    public function write_info() {
        echo "writing ".$this->LastName."'s info to studnet dbase table";
    }
}
$personA=new employee;
$personB=new student;
$personA->FristName="Joe";
$personA->LastName="Sbody";
$personB->FristName="Ben";
$personB->LastName="Dover";
$personA->write_info();

?>
