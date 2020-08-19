<?php session_start(); ?>
<?php include 'connect.php';?>
<?php

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $cookie_name = "user";
    $cookie_value = "$name";
    setcookie($cookie_name, $cookie_value);
     $insert="INSERT INTO login(Name)VALUE('$name')";
   
     $result = $mysqli->query($insert) or die($mysqli->error.__LINE__);
     if($result){
       
       header("location: quiz_list.php");
     }
    //  else{
    //     die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
    //  }
}