<?php include 'connect.php';?>

<?php
$query="SELECT *FROM php_questions";
$result=$mysqli->query($query)or die($mysqli->error.__LINE__);
$total=$result->num_rows;

$query="SELECT *FROM html_questions";
$result=$mysqli->query($query)or die($mysqli->error.__LINE__);
$total=$result->num_rows;

?>