<?php
// create conection variables;
$dp_host = "localhost";
$dp_name = "quizzer";
$dp_user = "root";
$dp_pass = "";


// create mysqli object;

$mysqli = new mysqli($dp_host,$dp_user,$dp_pass,$dp_name);

// error handler;

if($mysqli->connect_error){
    printf("connection failed: %s\n", $mysqli->connect_error);
    exit();
}

