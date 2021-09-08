<?php 

$server="sql309.epizy.comx";
$username="	epiz_29661121";
$password="uuGYkkjFHL";
$db="epiz_29661121_mybank";

$conn=mysqli_connect($server,$username,$password,$db);

if($conn){
  //Connection successfully established
}

else
    die("connection to this database failed due to " .mysqli_connect_error()); //connection not establised
    
?>
