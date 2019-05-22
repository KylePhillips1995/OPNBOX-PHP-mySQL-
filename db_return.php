<?php
require 'db.php';
session_start();

$name = $_SESSION['name'];
?>

<html>
<head>
  <title>RETURN:</title>
  <link rel="stylesheet" href="returnstyle.css">
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
        <h3><font size="7" color="white"> Success!</font></h3>
        </div>
   
   <a href="profile.php"><button class="buttonprofile"/>Return to Profile</button></a>
   <a href="logout.php"><button class="buttonlogout"/>Logout</button></a>
   
</body>
</html>