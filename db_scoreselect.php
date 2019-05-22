<?php

require 'db.php';
session_start();

$name = $_SESSION['name'];
 if ( isset($_POST['game1score']) ) {
                $_SESSION['gameid'] = 0;
                //$gameid = 0;
    }
    elseif ( isset($_POST['game2score']) ) {
                $_SESSION['gameid'] = 1;
                //$gameid = 1;
    }
    elseif ( isset($_POST['game3score']) ) {
                $_SESSION['gameid'] = 2;
                //$gameid = 2;
    }
    elseif ( isset($_POST['game4score']) ) {
                $_SESSION['gameid'] = 3;
                //$gameid = 3;
    }
    elseif ( isset($_POST['game5score']) ) {
                $_SESSION['gameid'] = 4;
                //$gameid = 4;
    }
    
    ?>

<html>
<head>
  <title>Score Select</title>
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
        <h3><font size="7" color="white">Select Type of View:</font></h3>
        </div>
        <div id ="register">
  <table align = "center" width = "400">
   <tr align = "center">
    <td> <font size="5" color="white">Select Score Retrieval:</font></td>
    <tr align = "center">
     <td> <a href="db_studentfinder.php"><button class="button button-block"/>Find Student</button></a></td>
   </tr> 
   <tr align = "center">
    <td> <a href="db_scoreretrieve2.php"><button class="button button-block"/>Find Exam Totals</button></a></td>
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