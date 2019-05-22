<?php

require 'db.php';
session_start();

$name = $_SESSION['name'];
$studentname = $_POST['studentname'];
$gameid = $_SESSION['gameid'];
$teacheremail = $_SESSION['email'];


$result = $conn->query("SELECT * FROM score WHERE teacheremail='$teacheremail' AND gameemail='$studentname' AND gameid= '$gameid'") or die($mysqli->error());

         
         if ( $result->num_rows == 0 ){ // User doesn't exist
                echo "There are no scores associated with that email or game!";
                die();
        }
        
            else{  
                    $user = $result->fetch_assoc();
                    $username = $user['name'];
                    $score = $user['score'];
                    $question1 = $user['question1'];
                    $question2 = $user['question2'];
                    $question3 = $user['question3'];
                    $question4 = $user['question4'];
                    $question5 = $user['question5'];
                    $question6 = $user['question6'];
                    $question7 = $user['question7'];
                    $question8 = $user['question8'];
                    $question9 = $user['question9'];
                    $question10 = $user['question10'];   
            }           
            
            ?>
<html>
<head>
	
  <title>Question Edit</title>
<link rel="stylesheet" href="deletestyle.css">
</head>

<body>
    <header>
    <div id = "header1" align = "center"> <font size="9" color="white">OPNBOX</font>
</div>
<div class="topnav">
    <a href="logout.php" style="float:right">Logout</a>
  <a href="profile.php" style="float:right">Hey <?php echo $name;?>!</a>
  <div class ="task">
      <a href="questioncreation.php">Create Quiz</a>
      <a href="db_questiondelete.php" style="float:center">Delete Quiz</a>
      <a href="db_questioneditselection.php" style="float:center">Modify Quiz</a>
      <a href="db_takequizteach.php" style="float:center">Teacher's Quiz</a>
      <a href="db_quiztest.php" style="float:center">Test Quiz</a>
      <a href="db_scoreretrieve.php" style="float:center">View Scores</a>
  </div>
  
</div> 
        
        <div class ="welcome">
        <h3><font size="7" color="white"><?php echo $username;?>'s Exam Score</font></h3>
        </div>
        <div id ="register">
   <table align = "center" width = "400">
       
<tr align = "center">
    <td><font size="5" color="white">Total Score: <?php echo $score;?>/10</td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 1 Result: <?php echo $question1;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 2 Result: <?php echo $question2;?></font></td>
   </tr>   
<tr align = "center">
    <td><font size="5" color="white">Question 3 Result: <?php echo $question3;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 4 Result: <?php echo $question4;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 5 Result: <?php echo $question5;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 6 Result: <?php echo $question6;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 7 Result: <?php echo $question7;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 8 Result: <?php echo $question8;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 9 Result: <?php echo $question9;?></font></td>
   </tr>
<tr align = "center">
    <td><font size="5" color="white">Question 10 Result: <?php echo $question10;?></font></td>
   </tr>   
<tr align = "center">
    <td> <a href="profile.php"><button class="button button-block"/>Return to Profile</button></a><a href="db_studentfinder.php"><button class="button button-block"/>Return to Student Finder</button></a></td>
   </tr>   
   </table>
  </div>
    <footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer> 
</body>
</html>