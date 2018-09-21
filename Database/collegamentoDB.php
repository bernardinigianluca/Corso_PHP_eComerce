<?php

$host = "localhost";
$user = "root";
$password = "";
$database = "login";
$con = mysqli_connect($host, $user, $password, $database);
if (!$con){
    die("Collegamento non riuscito, verifica i parametri.");
} else {
//    echo 'Collegamento riuscito bene. Complimenti!';
}


