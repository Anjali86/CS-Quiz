<?php session_start(); ?>
<?php include 'connect.php';?>
<?php include 'total.php';?>
<?php 

$number = (int) $_GET['n'];
$type= $_GET['type'];
$duration= $_GET['duration'];
$_SESSION["duration"]=$duration;

// Select particular question
if($type=='php'){
$query = "SELECT *FROM php_questions WHERE Question_no=$number AND type='PHP'";
//Get result
$result = $mysqli->query($query) or die($mysqli->error.__LINE__);

$question = $result->fetch_assoc();

$query = "SELECT * FROM answers
				WHERE Question_number=$number AND ANSWER_TYPE='PHP' ";
	//Get results
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $query = "SELECT * FROM php_questions";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
}

if($type=='html'){
    $query = "SELECT *FROM html_questions WHERE Question_no=$number AND type='HTML'";
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();

    $query = "SELECT * FROM answers
                WHERE Question_number=$number AND ANSWER_TYPE='HTML' ";
                
	//Get results
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $query = "SELECT * FROM html_questions";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
}
if($type=='css'){
    $query = "SELECT *FROM css_questions WHERE Question_no=$number AND type='CSS'";
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();

    $query = "SELECT * FROM answers
                WHERE Question_number=$number AND ANSWER_TYPE='CSS' ";
                
	//Get results
    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
    $query = "SELECT * FROM css_questions";
	//Get result
	$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $results->num_rows;
}
if($type=='javascript'){
    $query = "SELECT *FROM javascript WHERE Question_no=$number AND type='javascript'";
    //Get result
    $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
    
    $question = $result->fetch_assoc();
    
    $query = "SELECT * FROM answers
                    WHERE Question_number=$number AND ANSWER_TYPE='javascript' ";
        //Get results
        $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
        $query = "SELECT * FROM javascript";
        //Get result
        $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
        $total = $results->num_rows;
    }
    if($type=='python'){
        $query = "SELECT *FROM python WHERE Question_no=$number AND type='python'";
        //Get result
        $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
        
        $question = $result->fetch_assoc();
        
        $query = "SELECT * FROM answers
                        WHERE Question_number=$number AND ANSWER_TYPE='python' ";
            //Get results
            $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
            
            $query = "SELECT * FROM python";
            //Get result
            $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
            $total = $results->num_rows;
        }

        if($type=='c'){
            $query = "SELECT *FROM c WHERE Question_no=$number AND type='c'";
            //Get result
            $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            
            $query = "SELECT * FROM answers
                            WHERE Question_number=$number AND ANSWER_TYPE='c' ";
                //Get results
                $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
                
                $query = "SELECT * FROM c";
                //Get result
                $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
                $total = $results->num_rows;
            }
            if($type=='apptitude'){
                $query = "SELECT *FROM apptitude WHERE Question_no=$number AND type='apptitude'";
                //Get result
                $result = $mysqli->query($query) or die($mysqli->error.__LINE__);
                
                $question = $result->fetch_assoc();
                
                $query = "SELECT * FROM answers
                                WHERE Question_number=$number AND ANSWER_TYPE='apptitude' ";
                    //Get results
                    $choices = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    
                    $query = "SELECT * FROM apptitude";
                    //Get result
                    $results = $mysqli->query($query) or die($mysqli->error.__LINE__);
                    $total = $results->num_rows;
                }

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
    <link rel="stylesheet"  href="css/question.css">
   
</head>
<body>
    <header>
        <div class="container-fluid">
            <div class="row">
       <div class="col-lg-12 column"> 
    
           <h1>    <?php 
           if($type=='php'){
               echo "PHP Quizzer";
           }
           elseif($type=='html'){
               echo "HTML Quizzer";
           }
           elseif($type=='css'){
                echo "CSS Quizzer";
           }
           elseif($type=='javascript'){
            echo "Javascript Quizzer";
       }
       elseif($type=='python'){
        echo "Python Quizzer";
   }
   elseif($type=='c'){
    echo "C  Quizzer";
}
elseif($type=='apptitude'){
    echo "Apptitude  Quizzer";
}
           
           ?>
 </h1>
 
 
<script src="countdown.js"> 

           </script>
          
           <h5 class="timmer" id="timmer">

 
        </h5>
       <form method="post" action="submit.php" id="form2">
        <button type="submit" class="btn  button_submit" name="submit">Submit</button>
        <!-- <input type="hidden" name="number" value="<?php echo $number; ?>" /> -->
</form> 
        </div>
    </div>
    </div>
            </header>
<main>
    <div class="container-fluid">
        <div class="row heading">
            <div class="col-lg-12">
                <div class="count"> <p>Question <?php echo $question['Question_no'];?> of <?php echo $total; ?> </p></div>
            </div>
            <div class="col-lg-12">
                <div class="question"> <h5><span > Ques.<?php echo $question['Question_no'];?> </span><?php echo $question['Question'];?>
               </h5></div>
              
              <?php 
               if($question['Code']=="")
               {
                echo "<p style='background-color: #ffffff;'> </p>";}
                else{
                    echo" <p style='margin-left: 9rem;max-width:40rem;font-size:1.2rem;'>
                    $question[Code]</p> ";
                }

               ?> 
               
                <div class="answer">
                <form method="post" action="process.php" name="form" id="form1">
                    <ul class="choices">
                    
                            
            <?php while($row = $choices->fetch_assoc()): ?>
            <li> <input name="choice" class="choice" type="radio" value="<?php echo $row['id']; ?>" /> <?php echo htmlspecialchars($row['text']);?> </li>         
            <?php endwhile; ?>
           
                 <!-- End Choice  -->
        </ul>
        
        <button  id="myBtn" type="submit" class="btn button"  name="submit">Next</button>
        <input type="hidden" name="number" value="<?php echo $number; ?>" />
        <input type="hidden" name="duration" value="<?php echo $_SESSION["duration"];?>" />
        <input type="hidden" name="type" value="<?php if($type=='php'){ echo 'php';} 
        elseif($type=='html'){
            echo 'html';
        }
        elseif($type=='css'){
            echo 'css';
        }
        elseif($type=='javascript'){
            echo 'javascript';
        }
        elseif($type=='python'){
            echo 'python';
        }
        elseif($type=='c'){
            echo 'c';
        }
        elseif($type=='apptitude'){
            echo 'apptitude';
        }
        ?>" /> 
        </form>
    </div>
            </div>
        </div>
    </div>
</main>
    </body>
</html>
