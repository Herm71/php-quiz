<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>

<body>

	<div id="page-wrap">

		<h1>UC Santa Cruz Alumni Quiz Results</h1>
		
        <?php
		include 'alumni-variables.php';
            $firstName = $_POST['first-name'];	
            $answer1 = $_POST['question-1-answers'];
            $answer2 = $_POST['question-2-answers'];
            $answer3 = $_POST['question-3-answers'];
            $answer4 = $_POST['question-4-answers'];
			$answer5 = $_POST['question-5-answers'];
			$answer6 = $_POST['question-6-answers'];
			$answer7 = $_POST['question-7-answers'];
			$answer8 = $_POST['question-8-answers'];
			$answer9 = $_POST['question-9-answers'];
			$answer10 = $_POST['question-10-answers'];
			$answer11 = $_POST['question-11-answers'];
			$answer12 = $_POST['question-12-answers'];
			$answer13 = $_POST['question-13-answers'];
        
            $totalCorrect = 0;
            
            if ($answer1 == "K") { $totalCorrect++; }
            if ($answer2 == "B") { $totalCorrect++; }
            if ($answer3 == "G") { $totalCorrect++; }
            if ($answer4 == "M") { $totalCorrect++; }
			if ($answer5 == "C") { $totalCorrect++; }
			if ($answer6 == "F") { $totalCorrect++; }
			if ($answer7 == "H") { $totalCorrect++; }
			if ($answer8 == "I") { $totalCorrect++; }
			if ($answer9 == "L") { $totalCorrect++; }
			if ($answer10 == "J") { $totalCorrect++; }
			if ($answer11 == "D") { $totalCorrect++; }
			if ($answer12 == "E") { $totalCorrect++; }
			if ($answer13 == "A") { $totalCorrect++; }
			// Correct Answers
			if($answer1 == "K" && $answer2 == "B" && $answer3 == "G" && $answer4 == "M" && $answer5 == "C" && $answer6 == "F" && $answer7 == "H" && $answer8 == "I" && $answer9 == "L" && $answer10 == "J" && $answer11 == "D" && $answer12 == "E" && $answer13 == "A")
				{
					echo "<p>Nice try, ".$firstName."</p>";
					echo "<div class='results'>
					<ol>
					
					<li><h3>".$alumni1."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni1Job."</p>
					</li>
					<li><h3>".$alumni2."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni2Job."</p>
					</li>
					<li><h3>".$alumni3."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni3Job."</p>
					</li>
					<li><h3>".$alumni4."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni4Job."</p>
					</li>
					<li><h3>".$alumni5."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni5Job."</p>
					</li>
					<li><h3>".$alumni6."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni6Job."</p>
					</li>
					<li><h3>".$alumni7."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni7Job."</p>
					</li>
					<li><h3>".$alumni8."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni8Job."</p>
					</li>
					<li><h3>".$alumni9."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni9Job."</p>
					</li>
					<li><h3>".$alumni10."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni10Job."</p>
					</li>
					<li><h3>".$alumni11."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni11Job."</p>
					</li>
					<li><h3>".$alumni12."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni12Job."</p>
					</li>
					<li><h3>".$alumni13."</h3>
					<img src='http://via.placeholder.com/100x150'><p>".$alumni13Job."</p>
					</li>
					</ol></div>";
							echo "<div id='results'>$totalCorrect / 13 correct</div>";
							$file = 'results.php';
							$json = json_encode($_POST);
							var_dump($json);
							file_put_contents($file,$json, FILE_APPEND | LOCK_EX);
				} else {
					echo "<p>You Lose! ".$firstName."</p>";
							echo "<div id='results'>$totalCorrect / 13 correct</div>";
							echo '<button type="reset" value="Try again" />Try Again</button>';
				}
      ?>
	
	</div>

</body>

</html>