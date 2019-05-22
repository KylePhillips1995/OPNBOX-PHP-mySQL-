<?php
require 'db.php';
session_start();

         $name = $_SESSION['name'];
         $questionemail = $_SESSION['teacheremail'];
          $score = 0;
          $_SESSION['score'] = $score;
         
       
    if ( isset($_POST['game1select']) ) {
                $_SESSION['gameid'] = 0;
                $gameid = 0;
    }
    elseif ( isset($_POST['game2select']) ) {
                $_SESSION['gameid'] = 1;
                $gameid = 1;
    }
    elseif ( isset($_POST['game3select']) ) {
                $_SESSION['gameid'] = 2;
                $gameid = 2;
    }
    elseif ( isset($_POST['game4select']) ) {
                $_SESSION['gameid'] = 3;
                $gameid = 3;
    }
    elseif ( isset($_POST['game5select']) ) {
                $_SESSION['gameid'] = 4;
                $gameid = 4;
    }
    
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    else {
        
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
                         
            }
            
            ?>

<html>
<head>
  <title>Game Screen:</title>
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
        <h3><font size="7" color="white">Quiz: <?php  echo $_SESSION['gamename']
          ?></font></h3>
        </div>
        <div id ="register">
 <form action="question1.php" method="POST">
   <table align = "center" width = "400">
  
   <tr>
    <td><font size="5" color="white">Question 1 : <?php  echo $_SESSION['question1']
            ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">A - : <?php  echo $_SESSION['q1answer1']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">B - : <?php  echo $_SESSION['q1answer2']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">C - : <?php  echo $_SESSION['q1answer3']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">D - : <?php  echo $_SESSION['q1answer4']
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q1check1" value="q1check1"><font size="5" color="white">A</font><br></td>
   </tr>
  
   <tr>
    <td><input type="checkbox" name="q1check2" value="q1check2"><font size="5" color="white">B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q1check3" value="q1check3"><font size="5" color="white">C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q1check4" value="q1check4"><font size="5" color="white">D</font><br></td>
   </tr> 
   <tr align = "center">
     
    <td><a href="question1.php"><button class="button button-block"/>Next Question</button></a></td>
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
      
    
        
    