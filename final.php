<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Josefin+Sans:ital,wght@0,100;0,200;0,300;0,400;0,600;1,100;1,200;1,300;1,400&family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800&display=swap" 
    rel="stylesheet"> 
    <title>PHP Quizzer</title>
    <link rel="stylesheet"  href="css/final.css">
</head>
<body>
    <header>
<div class="container-fluid heading">
    <div class="row">
        <div class="col-lg-12">
<h1>Skill Test Result</h1>
</div>
</div>
</div>
<div class="container-fluid ">
    <div class="row">
        <div class="col-lg-12">
            <div class="container result">
<h1>Your test Score is</h1>
<br/>

 <h1 class="mark1"><span> 
 <?php if(isset($_SESSION['score'])) 
 {if($_SESSION['score']==0){
    echo htmlspecialchars("0%");
}
if($_SESSION['score']==1){
    echo htmlspecialchars("5%");
}
     if($_SESSION['score']<=3 && $_SESSION['score']>1){
        echo htmlspecialchars("10%");
    }
     
     if($_SESSION['score']<=5 && $_SESSION['score']>3){
        echo htmlspecialchars("20%");
     }
     if($_SESSION['score']<=7 && $_SESSION['score']>5){
        echo  htmlspecialchars("30%");
     }
     if($_SESSION['score']<=9 && $_SESSION['score']>7 ){
        echo htmlspecialchars("40%");
     }
     if($_SESSION['score']<=11 && $_SESSION['score']>9){
        echo htmlspecialchars("65%");
     }
     if($_SESSION['score']<=13 && $_SESSION['score']>11){
        echo htmlspecialchars("75%");
     }
     if($_SESSION['score']<=15 && $_SESSION['score']>13){
        echo htmlspecialchars("85%");
     }
     if($_SESSION['score']<=17 && $_SESSION['score']>15){
        htmlspecialchars("90%");
     }
     if($_SESSION['score']<=19 && $_SESSION['score']>17){
        echo htmlspecialchars("95%");
     }
     if($_SESSION['score']==20 && $_SESSION['score']>19){
        htmlspecialchars("100%");
     }
     }else{
        echo htmlspecialchars("0%");}

       ?> </h1>
 <div class="Remarks">Remarks </div>
 
 <p> <?php  if(isset($_SESSION['score'])){
 if( $_SESSION['score'] <=8){ echo
     "Uh oh! You couldn't score well. Don't worry, practice at your place to improve your skills and try again later.";}
     else{
         echo "<b>Congratulations</b>! you have passed the test";
     }}else{
        echo
        "Uh oh! You couldn't score well. Don't worry, practice at your place to improve your skills and try again later.";
     }
    
     ?> 
     
 </p>
 <div class="form">
     <button class="btn button" name="submit" type="submit" ><a href="quiz_list.php" style="text-decoration:none;color:#fff;"> Back To Dashboard </a></button>
</div>
</div>
</div>
</div>
</div>
</header>
<footer>
<div class="container-fluid footer">

    <p>&copy; Copyright 2020 All rights reserved |  This <br/> Quiz is Made with 
    <i class="fas fa-heart "></i> By <span><a href="">Anjali Mishra</a></span>

</div>
</footer>
</body>
</html>
<?php session_destroy(); ?>