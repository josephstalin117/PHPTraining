<?php
require_once ("Mysqltest.php");
$mydb = new mysqlli ( "localhost", "root", "", "test" );
$mydb->query ( "select * from testmysqli" );
var_dump ( $mydb->recent );
?>