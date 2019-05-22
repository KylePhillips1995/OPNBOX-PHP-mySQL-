<?php

require 'db.php';
session_start();
         $name = $_SESSION['name'];
         $questionemail = $_SESSION['email'];
       
    if ( isset($_POST['game1edit']) ) {
                $_SESSION['gameid'] = 0;
                $gameid = 0;
    }
    elseif ( isset($_POST['game2edit']) ) {
                $_SESSION['gameid'] = 1;
                $gameid = 1;
    }
    elseif ( isset($_POST['game3edit']) ) {
                $_SESSION['gameid'] = 2;
                $gameid = 2;
    }
    elseif ( isset($_POST['game4edit']) ) {
                $_SESSION['gameid'] = 3;
                $gameid = 3;
    }
    elseif ( isset($_POST['game5edit']) ) {
                $_SESSION['gameid'] = 4;
                $gameid = 4;
    }
    
    
         $result = $conn->query("SELECT * FROM questions WHERE questionemail='$questionemail' and gameid='$gameid'") or die($mysqli->error());
         
         if ( $result->num_rows == 0 ){ // User doesn't exist
                echo "There are no questions associated with that email or game!";
                die();
        }
        
            else{
                //retrieves datafrom database for associated email
                        $user = $result->fetch_assoc();
                         
                        $_SESSION['gamename'] = $user['gamename'];
                        
                         //question 1 data
                         $_SESSION['question1'] = $user['question1'];
                         $_SESSION['q1answer1'] = $user['q1answer1'];
                         $_SESSION['q1answer2'] = $user['q1answer2'];
                         $_SESSION['q1answer3'] = $user['q1answer3'];
                         $_SESSION['q1answer4'] = $user['q1answer4'];
                         $_SESSION['q1bool1'] = $user['q1bool1'];
                         $_SESSION['q1bool2'] = $user['q1bool2'];
                         $_SESSION['q1bool3'] = $user['q1bool3'];
                         $_SESSION['q1bool4'] = $user['q1bool4'];
                         
                            //question 2 data
                         $_SESSION['question2'] = $user['question2'];
                         $_SESSION['q2answer1'] = $user['q2answer1'];
                         $_SESSION['q2answer2'] = $user['q2answer2'];
                         $_SESSION['q2answer3'] = $user['q2answer3'];
                         $_SESSION['q2answer4'] = $user['q2answer4'];
                         $_SESSION['q2bool1'] = $user['q2bool1'];
                         $_SESSION['q2bool2'] = $user['q2bool2'];
                         $_SESSION['q2bool3'] = $user['q2bool3'];
                         $_SESSION['q2bool4'] = $user['q2bool4'];
                         
                           //question 3 data
                         $_SESSION['question3'] = $user['question3'];
                         $_SESSION['q3answer1'] = $user['q3answer1'];
                         $_SESSION['q3answer2'] = $user['q3answer2'];
                         $_SESSION['q3answer3'] = $user['q3answer3'];
                         $_SESSION['q3answer4'] = $user['q3answer4'];
                         $_SESSION['q3bool1'] = $user['q3bool1'];
                         $_SESSION['q3bool2'] = $user['q3bool2'];
                         $_SESSION['q3bool3'] = $user['q3bool3'];
                         $_SESSION['q3bool4'] = $user['q3bool4'];
                         
                           //question 4 data
                         $_SESSION['question4'] = $user['question4'];
                         $_SESSION['q4answer1'] = $user['q4answer1'];
                         $_SESSION['q4answer2'] = $user['q4answer2'];
                         $_SESSION['q4answer3'] = $user['q4answer3'];
                         $_SESSION['q4answer4'] = $user['q4answer4'];
                         $_SESSION['q4bool1'] = $user['q4bool1'];
                         $_SESSION['q4bool2'] = $user['q4bool2'];
                         $_SESSION['q4bool3'] = $user['q4bool3'];
                         $_SESSION['q4bool4'] = $user['q4bool4'];
                         
                           //question 5 data
                         $_SESSION['question5'] = $user['question5'];
                         $_SESSION['q5answer1'] = $user['q5answer1'];
                         $_SESSION['q5answer2'] = $user['q5answer2'];
                         $_SESSION['q5answer3'] = $user['q5answer3'];
                         $_SESSION['q5answer4'] = $user['q5answer4'];
                         $_SESSION['q5bool1'] = $user['q5bool1'];
                         $_SESSION['q5bool2'] = $user['q5bool2'];
                         $_SESSION['q5bool3'] = $user['q5bool3'];
                         $_SESSION['q5bool4'] = $user['q5bool4'];
                         
                           //question 6 data
                         $_SESSION['question6'] = $user['question6'];
                         $_SESSION['q6answer1'] = $user['q6answer1'];
                         $_SESSION['q6answer2'] = $user['q6answer2'];
                         $_SESSION['q6answer3'] = $user['q6answer3'];
                         $_SESSION['q6answer4'] = $user['q6answer4'];
                         $_SESSION['q6bool1'] = $user['q6bool1'];
                         $_SESSION['q6bool2'] = $user['q6bool2'];
                         $_SESSION['q6bool3'] = $user['q6bool3'];
                         $_SESSION['q6bool4'] = $user['q6bool4'];
                         
                           //question 7 data
                         $_SESSION['question7'] = $user['question7'];
                         $_SESSION['q7answer1'] = $user['q7answer1'];
                         $_SESSION['q7answer2'] = $user['q7answer2'];
                         $_SESSION['q7answer3'] = $user['q7answer3'];
                         $_SESSION['q7answer4'] = $user['q7answer4'];
                         $_SESSION['q7bool1'] = $user['q7bool1'];
                         $_SESSION['q7bool2'] = $user['q7bool2'];
                         $_SESSION['q7bool3'] = $user['q7bool3'];
                         $_SESSION['q7bool4'] = $user['q7bool4'];
                         
                           //question 8 data
                         $_SESSION['question8'] = $user['question8'];
                         $_SESSION['q8answer1'] = $user['q8answer1'];
                         $_SESSION['q8answer2'] = $user['q8answer2'];
                         $_SESSION['q8answer3'] = $user['q8answer3'];
                         $_SESSION['q8answer4'] = $user['q8answer4'];
                         $_SESSION['q8bool1'] = $user['q8bool1'];
                         $_SESSION['q8bool2'] = $user['q8bool2'];
                         $_SESSION['q8bool3'] = $user['q8bool3'];
                         $_SESSION['q8bool4'] = $user['q8bool4'];
                         
                           //question 9 data
                         $_SESSION['question9'] = $user['question9'];
                         $_SESSION['q9answer1'] = $user['q9answer1'];
                         $_SESSION['q9answer2'] = $user['q9answer2'];
                         $_SESSION['q9answer3'] = $user['q9answer3'];
                         $_SESSION['q9answer4'] = $user['q9answer4'];
                         $_SESSION['q9bool1'] = $user['q9bool1'];
                         $_SESSION['q9bool2'] = $user['q9bool2'];
                         $_SESSION['q9bool3'] = $user['q9bool3'];
                         $_SESSION['q9bool4'] = $user['q9bool4'];
                         
                           //question 10 data
                         $_SESSION['question10'] = $user['question10'];
                         $_SESSION['q10answer1'] = $user['q10answer1'];
                         $_SESSION['q10answer2'] = $user['q10answer2'];
                         $_SESSION['q10answer3'] = $user['q10answer3'];
                         $_SESSION['q10answer4'] = $user['q10answer4'];
                         $_SESSION['q10bool1'] = $user['q10bool1'];
                         $_SESSION['q10bool2'] = $user['q10bool2'];
                         $_SESSION['q10bool3'] = $user['q10bool3'];
                         $_SESSION['q10bool4'] = $user['q10bool4'];
                         
                         
                         
            }
                         
            
?>

<!DOCTYPE HTML>
<html>
<head>
	
  <title>Question Edit</title>
<link rel="stylesheet" href="questioneditstyle.css">
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
        <h3><font size="7" color="white"> Game Modification: </font></h3>
        </div>
        <div id ="register">
 <form action="db_questionedit2.php" method="POST">
  
   <table align = "center" width = "400">
        <tr>
    <td><font size="5" color="white">Game Name: <?echo $gamename?></font></td>
    <td><input type="text" name="gamename"></td>
   </tr>
     
    
   <p></p>
       <p></p>
       <td><font size="5" color="white">Question 1</font></td><td><font size="5" color="white">New Data For Question 1</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question1'];?></font></td>
    <td><input type="text" name="question1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :  <?php echo $_SESSION['q1answer1'];?></font></td>
    <td><input type="text" name="q1answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :  <?php echo $_SESSION['q1answer2'];?></font></td>
    <td><input type="text" name="q1answer2" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :  <?php echo $_SESSION['q1answer3'];?></font></td>
    <td><input type="text" name="q1answer3" ></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :  <?php echo $_SESSION['q1answer4'];?></font></td>
    <td><input type="text" name="q1answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q1bool1" value="q1bool1"><font size="5" color="white"> Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q1bool2" value="q1bool2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q1bool3" value="q1bool3" ><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q1bool4" value="q1bool4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
  
   <p></p>
       <p></p>
       <td><font size="5" color="white">Question 2</font></td><td><font size="5" color="white">New Data For Question 2</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question2'];?></font></td>
    <td><input type="text" name="question2" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q2answer1'];?></font></td>
    <td><input type="text" name="q2answer1" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q2answer2'];?></font></td>
    <td><input type="text" name="q2answer2" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q2answer3'];?></font></td>
    <td><input type="text" name="q2answer3" ></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q2answer4'];?></font></td>
    <td><input type="text" name="q2answer4" ></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q2bool1" value="q2bool1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q2bool2" value="q2bool2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q2bool3" value="q2bool3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q2bool4" value="q2bool4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
   
      <p></p>
       <p></p>
       <td><font size="5" color="white">Question 3</td><td><font size="5" color="white">New Data For Question 3</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question3'];?></font></td>
    <td><input type="text" name="question3" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q3answer1'];?></font></td>
    <td><input type="text" name="q3answer1" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q3answer2'];?></font></td>
    <td><input type="text" name="q3answer2" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q3answer3'];?></font></td>
    <td><input type="text" name="q3answer3" ></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q3answer4'];?></font></td>
    <td><input type="text" name="q3answer4" ></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q3bool1" value="q3answer1"><font size="5" color="white"> Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q3bool2" value="q3answer2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q3bool3" value="q3answer3"> <font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q3bool4" value="q3answer4"> <font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 4</font></td><td><font size="5" color="white">New Data For Question 4</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question4'];?></font></td>
    <td><input type="text" name="question4"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q4answer1'];?></font></td>
    <td><input type="text" name="q4answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q4answer2'];?></font></td>
    <td><input type="text" name="q4answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q4answer3'];?></font></td>
    <td><input type="text" name="q4answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q4answer4'];?></font></td>
    <td><input type="text" name="q4answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q4bool1" value="q4answer1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q4bool2" value="q4answer2"> <font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q4bool3" value="q4answer3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q4bool4" value="q4answer4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 5</font></td><td><font size="5" color="white">New Data For Question 5</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question :<?php echo $_SESSION['question5'];?></font></td>
    <td><input type="text" name="question5"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q5answer1'];?></font></td>
    <td><input type="text" name="q5answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q5answer2'];?></font></td>
    <td><input type="text" name="q5answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q5answer3'];?></font></td>
    <td><input type="text" name="q5answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q5answer4'];?></font></td>
    <td><input type="text" name="q5answer4" ></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q5bool1" align ="center" value="q5answer1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q5bool2" value="q5answer2"> <font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q5bool3" value="q5answer3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q5bool4" value="q5answer4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 6</font></td><td><font size="5" color="white">New Data For Question 6</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question :<?php echo $_SESSION['question6'];?></font></td>
    <td><input type="text" name="question6"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q6answer1'];?></font></td>
    <td><input type="text" name="q6answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q6answer2'];?></font></td>
    <td><input type="text" name="q6answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q6answer3'];?></font></td>
    <td><input type="text" name="q6answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q6answer4'];?></font></td>
    <td><input type="text" name="q6answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q6bool1" value="q6answer1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q6bool2" value="q6answer2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q6bool3" value="q6answer3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q6bool4" value="q6answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 7</font></td><td><font size="5" color="white">New Data For Question 7</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question7'];?></font></td>
    <td><input type="text" name="question7"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q7answer1'];?></font></td>
    <td><input type="text" name="q7answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q7answer2'];?></font></td>
    <td><input type="text" name="q7answer2" ></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q7answer3'];?></font></td>
    <td><input type="text" name="q7answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D   :<?php echo $_SESSION['q7answer4'];?></font></td>
    <td><input type="text" name="q7answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q7bool1" value="q7answer1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q7bool2" value="q7answer2"> <font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q7bool3" value="q7answer3"> <font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q7bool4" value="q7answer4"> <font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 8</font></td><td><font size="5" color="white">New Data For Question 8</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question8'];?></font></td>
    <td><input type="text" name="question8"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q8answer1'];?></font></td>
    <td><input type="text" name="q8answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q8answer2'];?></font></td>
    <td><input type="text" name="q8answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q8answer3'];?></font></td>
    <td><input type="text" name="q8answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q8answer4'];?></font></td>
    <td><input type="text" name="q8answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q8testbool1" value="q8testanswer1"> <font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q8bool2" value="q8answer2"> <font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q8bool3" value="q8answer3"> <font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q8bool4" value="q8answer4"> <font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 9</td><td><font size="5" color="white">New Data For Question 9</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question9'];?></font></td>
    <td><input type="text" name="question9"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q9answer1'];?></font></td>
    <td><input type="text" name="q9answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q9answer2'];?></font></td>
    <td><input type="text" name="q9answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q9answer3'];?></font></td>
    <td><input type="text" name="q9answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q9answer4'];?></font></td>
    <td><input type="text" name="q9answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q9bool1" value="q9answer1"><font size="5" color="white"> Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q9bool2" value="q9answer2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q9bool3" value="q9answer3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q9bool4" value="q9answer4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
   
     <p></p>
       <p></p>
       <td><font size="5" color="white">Question 10</font></td><td><font size="5" color="white">New Data For Question 10</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Previous Question: <?php echo $_SESSION['question10'];?></font></td>
    <td><input type="text" name="question10"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer A :<?php echo $_SESSION['q10answer1'];?></font></td>
    <td><input type="text" name="q10answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer B :<?php echo $_SESSION['q10answer2'];?></font></td>
    <td><input type="text" name="q10answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Previous Answer C :<?php echo $_SESSION['q10answer3'];?></font></td>
    <td><input type="text" name="q10answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Previous Answer D :<?php echo $_SESSION['q10answer4'];?></font></td>
    <td><input type="text" name="q10answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q10bool1" value="q10answer1"><font size="5" color="white"> Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q10bool2" value="q10answer2"><font size="5" color="white"> Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q10bool3" value="q10answer3"><font size="5" color="white"> Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q10bool4" value="q10answer4"><font size="5" color="white"> Answer - D</font><br></td>
   </tr> 
   <p></p>
   <tr align = "center">
  <td> <a href="db_questionedit2.php"><button class="button button-block"/>Update Database</button></a></td>
   </tr>
  </table>
    
 </form>
        </div>   
        <footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer>
</body>
</html>
