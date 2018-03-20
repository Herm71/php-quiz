<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
	
	<title>PHP Quiz</title>
	
	<link rel="stylesheet" type="text/css" href="css/style.css" />
</head>
<!-- <?php// define variables and set to empty values
// $firstNameErr = $lastNameErr = $emailErr = $phoneErr = "";
// $firstName = $lastName =$email = $phone = "";
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     if (empty($_POST["first-name"])) {
//       $firstNameErr = "First name is required";
//     } else {
//       $firstName = test_input($_POST["first-name"]);
//       // check if name only contains letters and whitespace
//       if (!preg_match("/^[a-zA-Z ]*$/",$firstName)) {
//         $firstNameErr = "Only letters and white space allowed"; 
//       }
//     }
    
//     if (empty($_POST["last-name"])) {
//         $lastNameErr = "Last name is required";
//       } else {
//         $lastName = test_input($_POST["last-name"]);
//         // check if name only contains letters and whitespace
//         if (!preg_match("/^[a-zA-Z ]*$/",$lastName)) {
//           $lastNameErr = "Only letters and white space allowed"; 
//         }
//       }
      
//     if (empty($_POST["email"])) {
//       $emailErr = "Email is required";
//     } else {
//       $email = test_input($_POST["email"]);
//       // check if e-mail address is well-formed
//       if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
//         $emailErr = "Invalid email format"; 
//       }
//     }
  
//   function test_input($data) {
//     $data = trim($data);
//     $data = stripslashes($data);
//     $data = htmlspecialchars($data);
//     return $data;
//   }

?> -->
<?php include 'variables.php';?>
<body>

	<div id="page-wrap">

		<h1>UC Santa Cruz Alumni Quiz!</h1>
		
		<form action="grade.php" method="post" id="quiz">
        <ul>
            <li>First name: <input id="first-name" type="text" name="first-name" value=""></li>
            <li>Last name: <input id="last-name" type="text" name="last-name" value=""></li>
            <li>Email: <input id="email" type="email" name="email" value=""></li>
            <li>Phone: <input id="phone" type="tel" name="phone" value=""></li>
        </ul>
		
            <ol>
            
                <li>
                
                <img src="images/alonso-200h.png">
                    <h3><?php echo $alumni1?></h3>
                    <select name="question-1-answers">
                <option value="">Select one</option>
                <option id="question-1-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-1-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-1-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-1-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?></option>
                <option id="question-1-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-1-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-1-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-1-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-1-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-1-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-1-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-1-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-1-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
            </select>                   
                </li>
                
                <li>
               
                <img src="images/barnes-200h.png">
                    <h3><?php echo $alumni2?></h3>
                    <select name="question-2-answers">
                <option value="">Select one</option>
                <option id="question-2-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-2-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-2-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-2-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-2-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-2-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-2-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-2-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-2-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-2-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-2-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-2-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-2-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
            </select>             
               
                </li>
                
                <li>
                
                <img src="images/beggs-200h.png">
                    <h3><?php echo $alumni3?></h3>
                    <select name="question-3-answers">
                <option value="">Select one</option>
                <option id="question-3-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-3-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-3-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-3-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-3-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-3-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-3-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-3-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-3-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-3-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-3-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-3-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-3-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
            </select>             
                
                </li>
                
                <li>
              
                <img src="images/grande-200h.png">
                    <h3><?php echo $alumni4?></h3>
                    <select name="question-4-answers">
                <option value="">Select one</option>
                <option id="question-4-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-4-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-4-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-4-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-4-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-4-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-4-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-4-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-4-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-4-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-4-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-4-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-4-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
            </select>             
                
                </li>
                
                <li>

                <img src="images/laird-200h.png">
                    <h3><?php echo $alumni5?></h3>
                    <select name="question-5-answers">
                <option value="">Select one</option>
                <option id="question-5-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-5-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-5-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-5-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-5-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-5-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-5-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-5-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-5-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-5-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-5-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-5-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-5-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
            </select>  
                
                </li>
            <li>

                <img src="images/mendoza-200h.png">
                    <h3><?php echo $alumni6?></h3>
                    <select name="question-6-answers">
                <option value="">Select one</option>
                <option id="question-6-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-6-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-6-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-6-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-6-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-6-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-6-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-6-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-6-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-6-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-6-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-6-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-6-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>

                <img src="images/nagano-200h.png">
                    <h3><?php echo $alumni7?></h3>
                    <select name="question-7-answers">
                <option value="">Select one</option>
                <option id="question-7-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-7-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-7-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-7-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-7-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-7-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-7-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-7-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-7-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-7-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-7-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-7-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-7-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>
           
            <img src="images/packard-200h.png">
                    <h3><?php echo $alumni8?></h3>
                    <select name="question-8-answers">
                <option value="">Select one</option>
                <option id="question-8-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-8-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-8-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-8-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-8-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-8-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-8-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-8-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-8-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-8-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-8-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-8-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-8-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>{"first-name":"Walter","last-name":"Mathau","email":"walmath@yourmom.com","phone":"555-1122","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Genghis","last-name":"Khan","email":"g@khan.com","phone":"555-2135","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Jason","last-name":"Hopkins","email":"jason@hopkins.com","phone":"5551212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Robert","last-name":"Zimmerman","email":"rzim@dylan.com","phone":"510-555-1212","question-1-answers":"K) Comics visionary","question-2-answers":"B) Award-winning film, television, and stage actor","question-3-answers":"G) Chairman of Lionsgate Television Group","question-4-answers":"M) Award-winning novelist and memoirist","question-5-answers":"C) California Secretary of Natural Resources","question-6-answers":"F) Two-time Pulitzer Prize-winning Associate Press reporter","question-7-answers":"H) Opera and symphony conductor","question-8-answers":"I) Monterey Bay Aquarium executive director","question-9-answers":"L) Marriage equality trailblazer","question-10-answers":"J) CEO of the nonprofit Conservation International","question-11-answers":"D) Scientist, astronaut, and award-winning educator","question-12-answers":"E) Tech entrepreneur","question-13-answers":"A) CEO of YouTube"}
                <img src="images/perry-200h.png">
                    <h3><?php echo $alumni9?></h3>
                    <select name="question-9-answers">
                <option value="">Select one</option>
                <option id="question-9-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-9-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-9-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-9-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-9-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-9-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-9-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-9-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-9-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-9-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-9-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-9-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-9-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>
            <img src="images/sanjayan-200h.png">
                    <h3><?php echo $alumni10?></h3>
                    <select name="question-10-answers">
                <option value="">Select one</option>
                <option id="question-10-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-10-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-10-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-10-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-10-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-10-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-10-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-10-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-10-{"first-name":"Walter","last-name":"Mathau","email":"walmath@yourmom.com","phone":"555-1122","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Bob","last-name":"Dylan","email":"bob@dylan.com","phone":"456-123-4567","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Genghis","last-name":"Khan","email":"g@khan.com","phone":"555-2135","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Rob","last-name":"Knight","email":"rk@yourmom.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Gary","last-name":"Indian","email":"gary@indian.com","phone":"555-1212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Jason","last-name":"Hopkins","email":"jason@hopkins.com","phone":"5551212","question-1-answers":"K","question-2-answers":"B","question-3-answers":"G","question-4-answers":"M","question-5-answers":"C","question-6-answers":"F","question-7-answers":"H","question-8-answers":"I","question-9-answers":"L","question-10-answers":"J","question-11-answers":"D","question-12-answers":"E","question-13-answers":"A"}{"first-name":"Robert","last-name":"Zimmerman","email":"rzim@dylan.com","phone":"510-555-1212","question-1-answers":"K) Comics visionary","question-2-answers":"B) Award-winning film, television, and stage actor","question-3-answers":"G) Chairman of Lionsgate Television Group","question-4-answers":"M) Award-winning novelist and memoirist","question-5-answers":"C) California Secretary of Natural Resources","question-6-answers":"F) Two-time Pulitzer Prize-winning Associate Press reporter","question-7-answers":"H) Opera and symphony conductor","question-8-answers":"I) Monterey Bay Aquarium executive director","question-9-answers":"L) Marriage equality trailblazer","question-10-answers":"J) CEO of the nonprofit Conservation International","question-11-answers":"D) Scientist, astronaut, and award-winning educator","question-12-answers":"E) Tech entrepreneur","question-13-answers":"A) CEO of YouTube"}answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-10-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-10-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-10-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-10-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>
       
            <img src="images/sullivan-200h.png">
                    <h3><?php echo $alumni11?></h3>
                    <select name="question-11-answers">
                <option value="">Select one</option>
                <option id="question-11-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-11-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-11-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-11-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-11-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-11-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-11-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-11-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-11-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-11-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-11-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-11-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-11-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>

                <img src="images/weil-200h.png">
                    <h3><?php echo $alumni12?></h3>
                    <select name="question-12-answers">
                <option value="">Select one</option>
                <option id="question-12-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-12-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-12-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-12-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?>r</option>
                <option id="question-12-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-12-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-12-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-12-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-12-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-12-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-12-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-12-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-12-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            <li>

                <img src="images/wojcicki-200h.png">
                    <h3><?php echo $alumni13?></h3>
                    <select name="question-13-answers">
                <option value="">Select one</option>
                <option id="question-13-answers-A" value="<?php echo htmlspecialchars($a);?>"><?php echo htmlspecialchars($a);?></option>
                <option id="question-13-answers-B" value="<?php echo htmlspecialchars($b);?>"><?php echo htmlspecialchars($b);?></option>
                <option id="question-13-answers-C" value="<?php echo htmlspecialchars($c);?>"><?php echo htmlspecialchars($c);?></option>
                <option id="question-13-answers-D" value="<?php echo htmlspecialchars($d);?>"><?php echo htmlspecialchars($d);?></option>
                <option id="question-13-answers-E" value="<?php echo htmlspecialchars($e);?>"><?php echo htmlspecialchars($e);?></option>
                <option id="question-13-answers-F" value="<?php echo htmlspecialchars($f);?>"><?php echo htmlspecialchars($f);?></option>
                <option id="question-13-answers-G" value="<?php echo htmlspecialchars($g);?>"><?php echo htmlspecialchars($g);?></option>
                <option id="question-13-answers-H" value="<?php echo htmlspecialchars($h);?>"><?php echo htmlspecialchars($h);?></option>
                <option id="question-13-answers-I" value="<?php echo htmlspecialchars($i);?>"><?php echo htmlspecialchars($i);?></option>
                <option id="question-13-answers-J" value="<?php echo htmlspecialchars($j);?>"><?php echo htmlspecialchars($j);?></option>
                <option id="question-13-answers-K" value="<?php echo htmlspecialchars($k);?>"><?php echo htmlspecialchars($k);?></option>
                <option id="question-13-answers-L" value="<?php echo htmlspecialchars($l);?>"><?php echo htmlspecialchars($l);?></option>
                <option id="question-13-answers-M" value="<?php echo htmlspecialchars($m);?>"><?php echo htmlspecialchars($m);?></option>
                    </select>                  
            </li>
            </ol>
            <div class="clear"></div>
            <button type="submit" value="Submit Quiz" />Submit Quiz</button>
            <input type="reset" value="Reset the form" />
		
		</form>
        
	</div>

</body>

</html>