<?php

$host = "localhost"; 
$user="root"; 
$password="";
$database="login";

global $con;
$con = mysqli_connect($host, $user, $password, $database);

if (!$con){
    alertDB();
    die();
}

function alertDB(){
   echo "<script type='text/javascript'>";
   echo "alert('Impossibile connetersi al DB.');";
   echo "</script>";
   }
?>
