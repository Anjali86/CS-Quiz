<?php include 'connect.php';?>
<?php if(isset($_COOKIE["user"])) {
    $name=$_COOKIE["user"];
} else{
    $name=" ";
}?>
<?php 

$number = (int) $_GET['n'];
?>
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
    <link rel="stylesheet"  href="css/quizzer_style.css">
</head>
<body>
    <header>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12 column">
        <h1>  <?php if($number==1){
              echo "PHP Quizzer"."&nbsp;"."<img src='LogoMakr_5WXmY5.PNG' width='70'>";  }
              if($number==2){
                  echo "HTML Quizzer"."&nbsp;"."<img src='LogoMakr_6doIyS.PNG' width='70'>";
              }
              if($number==3){
                echo "CSS Quizzer"."&nbsp;"."<img src='LogoMakr_1gd991.PNG' width='70'>";
            }
            if($number==4){
                echo "Javascript Quizzer"."&nbsp;"."<img src='LogoMakr_9ZY3zw.PNG' width='70'>";
            }
            if($number==5){
                echo "Python Quizzer"."&nbsp;"."<img src='LogoMakr_4XYv79.PNG' width='70'>";
            }
            if($number==6){
                echo "C Quizzer"."&nbsp;"."<img src='LogoMakr_6f5OJa.PNG' width='70'>";
            }
            if($number==7){
                echo "Java Quizzer"."&nbsp;"."<img src='LogoMakr_5Dextf.PNG' width='70'>";
            }
            if($number==8){
                echo "Apptitude Quizzer"."&nbsp;"."<img src='LogoMakr_4ivZCf.PNG' width='70'>";
            }
            if($number==9){
                echo "English Quizzer"."&nbsp;"."<img src='LogoMakr_8E5cGg.PNG' width='70'>";
            }
            if($number==10){
                echo "Reasoning Quizzer"."&nbsp;"."<img src='LogoMakr_2bGWNN.PNG' width='70'>";
            }
            if($number==11){
                echo "General Knowledge Quizzer"."&nbsp;"."<img src='LogoMakr_8E5cGg.PNG' width='70'>";
            }
          
                ?> 
 </h1>
</div>
</div>
</div>
    </header>
    <main>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 head">
    <h2 ><?php if($number==1){
              echo "Test your PHP Knowledge ";  }
              if($number==2){
                  echo "Test your HTML Knowledge";
              }
              if($number==3){
                echo "Test your CSS Knowledge ";
            }
            if($number==4){
                echo "Test your Javascript Knowledge";
            }
            if($number==5){
                echo "Test your Python Knowledge ";
            }
            if($number==6){
                echo "Test your C Knowledge";
            }
            if($number==7){
                echo "Test your Java Knowledge";
            }
    
            if($number==8){
                echo "Test your Apptitude Knowledge ";
            }
            if($number==9){
                echo "Test your English Knowledge";
            }
            if($number==10){
                echo "Test your Reasoning Knowledge";
            }
            if($number==11){
                echo "Test your General Knowledge";
            }
                ?>
        
    
    
    
    
    
     </h2>
    <div class="para"><p>Hey, <?php echo $name; ?>
     Are You Ready to test Your <span>
    <?php if($number==1){
              echo " PHP Knowledge";  }
              if($number==2){
                  echo "HTML Knowledge";
              }
              if($number==3){
                echo "CSS Proficiency";
            }
            if($number==4){
                echo "Javascript Knowledge";
            }
            if($number==5){
                echo "Python Knowledge";
            }
            if($number==6){
                echo "C  Knowledge";
            }
            if($number==7){
                echo "Java Knowledge";
            }
            if($number==8){
                echo "Apptitude Knowledge";
            }
            if($number==9){
                echo "English Knowledge";
            }
            if($number==10){
                echo "Reasoning Knowledge";
            }
            if($number==11){
                echo "General Knowledge";
            }
          
                ?>
    
    
        </span>. If Yes, click the button below to start your Quiz.</p>
    <p class="best"> All The Best <i class="far fa-thumbs-up"></i></p>
    <?php   if($number==1){
              echo " <a href='questions.php?n=1&type=php' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>
   <?php   if($number==2){
              echo " <a href='questions.php?n=1&type=html' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>
              <?php   if($number==3){
              echo " <a href='questions.php?n=1&type=css' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>
<?php   if($number==4){
              echo " <a href='questions.php?n=1&type=javascript' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>

<?php   if($number==5){
              echo " <a href='questions.php?n=1&type=python' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>
              <?php   if($number==6){
              echo " <a href='questions.php?n=1&type=c' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>
    <?php   if($number==8){
              echo " <a href='questions.php?n=1&type=apptitude' class='button'>Start Quizz <i class='fa fa-angle-double-right btn-right'> </i></a> ";  } ?>


</div>
</div>
</div>

    </div>
    </main>
<footer>
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
    <p>&copy; Copyright 2020 All rights reserved |  This <br/> Quiz is Made with 
    <i class="fas fa-heart "></i> By <span><a href="">Anjali Mishra</a></span></p>
</div>
</div>
</div>
    </footer>  
</body>
</html>