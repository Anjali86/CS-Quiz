<?php include 'connect.php';?>
<?php session_start(); ?>
<?php
if(isset($_POST['submit'])){	
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
		header("Location: final.php");
	} 
	else{
		header("Location: final.php");
	}
	
}
	
		
			

		
	
