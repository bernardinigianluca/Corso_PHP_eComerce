<?php

$host = "localhost"; 
$user="root"; 
$password="";
$database="login";

$con = mysqli_connect($host, $user, $password, $database);

if (!$con){
    die("Impossibile connettersi al DB");
}

?>
