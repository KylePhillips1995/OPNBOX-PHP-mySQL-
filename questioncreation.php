<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require 'db.php';
session_start();

$name = $_SESSION['name'];
?>
<!DOCTYPE HTML>
<html>
<head>
	
  <title>Question Creation</title>
<link rel="stylesheet" href="questioncreation.css">
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
        <h3><font size="7" color="white"> Game Creation: </font></h3>
        </div>
        <div id ="register">
 <form action="db_questioninput.php" method="POST">
  
   <table  align = "center" width = "400">
        <tr>
    <td><font size="5" color="white">Game Name:</font></td>
    <td><input type="text" name="gamename" required></td>
   </tr>
      
    
   <p></p>
       <p></p>
       <td><font size="5" color="white">Question 1:</font></td>
       <p></p>
       <p></p>
        
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question1" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q1answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q1answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q1answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q1answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q1bool1" value="q1answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q1bool2" value="q1answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q1bool3" value="q1answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q1bool4" value="q1answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
   
       <p></p>
       <td><font size="5" color="white">Question 2 :</font></td>
       <p></p>
       <p></p>
       
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question2" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q2answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q2answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q2answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q2answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q2bool1" value="q2answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q2bool2" value="q2answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q2bool3" value="q2answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q2bool4" value="q2answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
   <p></p>
       <p></p>
       <td><font size="5" color="white">Question 3:</font></td>
       <p></p>
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question3" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q3answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q3answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q3answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q3answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below:</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q3bool1" value="q3answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q3bool2" value="q3answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q3bool3" value="q3answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q3bool4" value="q3answer4"><font size="5" color="white">Answer - D</font><br></td>
   <p></p>
   <p></p>
   </tr> 
   
      
    
       <td><font size="5" color="white">Question 4:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question: </font></td>
    <td><input type="text" name="question4"></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q4answer1"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q4answer2"></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q4answer3"></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q4answer4"></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q4bool1" value="q4answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q4bool2" value="q4answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q4bool3" value="q4answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q4bool4" value="q4answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p>
    <td><font size="5" color="white">Question 5:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question5" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q5answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q5answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q5answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q5answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q5bool1" value="q5answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q5bool2" value="q5answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q5bool3" value="q5answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q5bool4" value="q5answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p>
    <td><font size="5" color="white">Question 6:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question6" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q6answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q6answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q6answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q6answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q6bool1" value="q6answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q6bool2" value="q6answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q6bool3" value="q6answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
       <td><input type="checkbox" name="q6bool4" value="q6answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p>
    <td><font size="5" color="white">Question 7:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question7" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q7answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q7answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q7answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q7answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q7bool1" value="q7answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q7bool2" value="q7answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q7bool3" value="q7answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q7bool4" value="q7answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p><td><font size="5" color="white">Question 8:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question8" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q8answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q8answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q8answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q8answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q8bool1" value="q8answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q8bool2" value="q8answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q8bool3" value="q8answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q8bool4" value="q8answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p><td><font size="5" color="white">Question 9:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question:</font></td>
    <td><input type="text" name="question9" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q9answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q9answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q9answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q9answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q9bool1" value="q9answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q9bool2" value="q9answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q9bool3" value="q9answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q9bool4" value="q9answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p><td><font size="5" color="white">Question 10:</font></td>
       
       <p></p>
         
             
   <tr>
    <td><font size="5" color="white">Question: </font></td>
    <td><input type="text" name="question10" required></td>
   </tr>
   <tr>
       <p></p>
      
    <td><font size="5" color="white">Answer A:</font></td>
    <td><input type="text" name="q10answer1" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer B:</font></td>
    <td><input type="text" name="q10answer2" required></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Answer C:</font></td>
    <td><input type="text" name="q10answer3" required></td>
   </tr> 
   <tr>
    <td><font size="5" color="white">Answer D:</font></td>
    <td><input type="text" name="q10answer4" required></td>
   </tr> 
   <tr>
   <tr>    
   <td><font size="5" color="white">Select The Correct Answer Below :</font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q10bool1" value="q10answer1"><font size="5" color="white">Answer - A</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q10bool2" value="q10answer2"><font size="5" color="white">Answer - B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q10bool3" value="q10answer3"><font size="5" color="white">Answer - C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q10bool4" value="q10answer4"><font size="5" color="white">Answer - D</font><br></td>
   </tr> 
    <p></p>
   <tr align = "center">
       <td><input type="submit" value="Submit"></td>
   </tr>
  </table>
     <p></p>
 </form>
        </div>
        <footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer>
</body>
</html>
