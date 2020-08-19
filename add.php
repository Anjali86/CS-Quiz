<?php session_start(); ?>
<?php include 'connect.php';?>
<?php
	if(isset($_POST['submit'])){
		//Get post variables
		$question_number = $_POST['question_number'];
		$question_text = $_POST['Question'];
		$correct_choice = $_POST['Correct'];
		$ques_type=$_POST['quiz_type'];
		$code=$_POST['code'];

		//Choices array
		$choices = array();
		$choices[1] = $_POST['Choice1'];
		$choices[2] = $_POST['Choice2'];
		$choices[3] = $_POST['Choice3'];
		$choices[4] = $_POST['Choice4'];
		
		if($ques_type=='PHP'){

			$query = "INSERT INTO php_questions(Question_no,Question,type)
					VALUES('$question_number','$question_text','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text,ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `php_questions`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}
		//Question query

		if($ques_type=='HTML'){

			$query = "INSERT INTO html_questions(Question_no,Question,type)
					VALUES('$question_number','$question_text','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text,ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `html_questions`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}
		if($ques_type=='CSS'){

			$query = "INSERT INTO css_questions(Question_no,Question,type)
					VALUES('$question_number','$question_text','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text,ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `css_questions`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}

		if($ques_type=='JAVASCRIPT'){

			$query = "INSERT INTO javascript(Question_no,Question,type)
					VALUES('$question_number','$question_text','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text, ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `javascript`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}

		// end javascript code

		// start Python code
		if($ques_type=='PYTHON'){

			$query = "INSERT INTO python(Question_no,Question,type)
					VALUES('$question_number','$question_text','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text, ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `python`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}

		// end pyhton code

		if($ques_type=='C'){

			$query = "INSERT INTO C(Question_no,Question,Code,type)
					VALUES('$question_number','$question_text','$code','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text, ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `c`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}

		if($ques_type=='APPTITUDE'){

			$query = "INSERT INTO apptitude(Question_no,Question,Code,type)
					VALUES('$question_number','$question_text','$code','$ques_type')";
					
		//Run query
		$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
		
		//Validate insert
		if($insert_row){
			foreach($choices as $choice => $value){
				if($value != ''){
					if($correct_choice == $choice){
						$is_correct = 1;
					} else {
						$is_correct = 0;
					}
					//Choice query
					$query = "INSERT INTO answers (question_number, correct, text, ANSWER_TYPE)
							VALUES ('$question_number','$is_correct','$value','$ques_type')";
							
					//Run query
					$insert_row = $mysqli->query($query) or die($mysqli->error.__LINE__);
					
					//Validate insert
					if($insert_row){
						continue;
					} else {
						die('Error : ('.$mysqli->errno . ') '. $mysqli->error);
					}
				}
			}
			$msg = 'Question has been added';
		}
	
	
	/*
 	* Get total questions
	*/
	$query = "SELECT * FROM `apptitude`";
	//Get The Results
	$questions = $mysqli->query($query) or die($mysqli->error.__LINE__);
	$total = $questions->num_rows;
	$next = $total+1;

		}

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
    <link rel="stylesheet"  href="css/add.css">
    
</head>
<body>
<header>
<div class="container-fluid heading">
    <div class="row">
        <div class="col-lg-12">
<h1>Add Quiz Questions</h1>
<p style="color:#f06f14;padding-left:.2rem;"><?php
				if(isset($msg)){
					echo '<p>'.$msg.'</p>';
				}
			?></p>
</div>
</div>
</div>
</header>  

<main>
<div class="container-fluid">
<div class="row">
<div class="col-lg-12">
<div class="container form">
<form method="post"  action="add.php">
<div class="form-group">
<label for="quiz_type" class="quiz_type_label"> Quiz Type </label>
<select name="quiz_type" class="form-control select"  id="quiz_type">
<option value="PHP">PHP</option>
<option value="CSS">CSS</option>
<option value="HTML">HTML</option>
<option value="JAVASCRIPT">Javascript</option>
<option value="PYTHON">Python</option>
<option value="C">C</option>
<option value="JAVA">Java</option>
<option value="English">English</option>
<option value="APPTITUDE">Apptitude</option>
<option value="reasonin">reasoning</option>
<option value="G.k">General Knowledge</option>
			</select>
			</div>
			<div class="form-group">	
<label for="question_number"> Question Number </label>
<input type="number" class="form-control input" name="question_number" id="question_number" value="<?php echo $next; ?>" /><br/>
			</div>
			<div class="form-group">
<label for="Question">Question </label>
<input type="text" class="form-control input" name="Question" id="Question"/><br/>
			</div>
			<div class="form-group">
<label for="code">Code </label>
<input type="text" class="form-control input" name="code" id="code"/><br/>
			</div>
			<div class="form-group">
<label for="Choice1">Choice1</label>
<input type="text" class="form-control input" name="Choice1" id="Choice1"/><br/>
			</div>
			<div class="form-group">
<label for="Choice2">Choice2 </label>
<input type="text" class="form-control input" name="Choice2" id="Choice2"/><br/>
			</div>
			<div class="form-group">
<label for="Choice3">Choice3 </label>
<input type="text" class="form-control input" name="Choice3" id="Choice3"/><br/>
			</div>
			<div class="form-group">
<label for="Choice4">Choice4 </label>
<input type="text" class="form-control input" name="Choice4" id="Choice4"/><br/> </div>
<div class="form-group">

<label for="Correct">Correct Answer </label>
<input type="number" class="form-control input" name="Correct" id="Correct"/><br/>
			</div>
<button type="submit" name="submit" class="btn button"> Add Question </button>
</form>
</div>
</div>
</div>
</div>
</main>
</body>
</html>