<?php include 'connect.php';?>
<?php  include 'total.php';  ?>
<?php session_start(); ?>
<?php
    
	//Check to see if score is set_error_handler
	if(!isset($_SESSION['score'])){
		$_SESSION['score'] = 0;
	}
	
	if($_POST){
		
		$number = $_POST['number'];
		$quiz_type = $_POST['type'];
		$selected_choice = $_POST['choice'];
		$next = $number+1;
		$_SESSION['choice']=$selected_choice;
		
		
	
		/*
		*	Get total questions
		*/
		// echo $quiz_type;
		// die();
		if($quiz_type=='php'){
		
			$query = "SELECT * FROM php_questions WHERE type='PHP'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;	
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='PHP' ";
						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];			
			//Compare
			
			//Check if last question
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php?");
				exit();
			} else {
				header("Location: questions.php?type=php& n=".$next);
			}
		}
		
		
		

		if($quiz_type=='html'){
			$query = "SELECT * FROM html_questions WHERE type='HTML'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='HTML' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=html& n=".$next);
			}
		}
		

		if($quiz_type=='css'){
			$query = "SELECT * FROM css_questions WHERE type='CSS'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='CSS' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=css& n=".$next);
			}
		}
		// php check condition end

		if($quiz_type=='javascript'){
			$query = "SELECT * FROM javascript WHERE type='javascript'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='javascript' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=javascript& n=".$next);
			}
		}
		if($quiz_type=='python'){
			$query = "SELECT * FROM python WHERE type='python'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='python' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=python& n=".$next);
			}
		}


		if($quiz_type=='c'){
			$query = "SELECT * FROM c WHERE type='c'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='C' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=c& n=".$next);
			}
		}
		if($quiz_type=='apptitude'){
			$query = "SELECT * FROM apptitude WHERE type='apptitude'";
			//Get result
			$results = $mysqli->query($query) or die($mysqli->error.__LINE__);
			$total = $results->num_rows;			
			/*
			*	Get correct choice
			*/			
			$query = "SELECT * FROM answers
						WHERE question_number = $number AND correct = 1 AND ANSWER_TYPE='apptitude' ";						
			//Get result
			$result = $mysqli->query($query) or die($mysqli->error.__LINE__);			
			//Get row
			$row = $result->fetch_assoc();			
			//Set correct choice
			$correct_choice = $row['id'];
						//Compare
			if($correct_choice == $selected_choice){
				//Answer is correct
				$_SESSION['score']++;
			}
			if($number == $total){
				header("Location: final.php");
				exit();
			} else {
				header("Location: questions.php?type=apptitude& n=".$next);
			}
		}
	
	}

        
        
        
     
