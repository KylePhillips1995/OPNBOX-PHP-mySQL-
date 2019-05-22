<?php

session_start();
require 'db.php';

$name = $_SESSION['name'];
$email = $_SESSION['email'];
if ( isset($_POST['game1delete']) ) {
    $game1deleted = $_SESSION['g1gameid'];
    $DELETE = ("DELETE FROM questions WHERE questionemail = '$email' && gameid = '$game1deleted'");
    $DELETE2 = ("DELETE FROM score WHERE teacheremail = '$email' && gameid = '$game1deleted'");
    $conn->query($DELETE);
    $conn->query($DELETE2);
  
} 

if ( isset($_POST['game2delete']) ) {
    $game2deleted = $_SESSION['g2gameid'];
    $DELETE = ("DELETE FROM questions WHERE questionemail = '$email' && gameid = '$game2deleted'");
    $DELETE2 = ("DELETE FROM score WHERE teacheremail = '$email' && gameid = '$game2deleted'");
    $conn->query($DELETE);
    $conn->query($DELETE2);
    
} 
if ( isset($_POST['game3delete']) ) {
    $game3deleted = $_SESSION['g3gameid'];
    $DELETE = ("DELETE FROM questions WHERE questionemail = '$email' && gameid = '$game3deleted'");
    $DELETE2 = ("DELETE FROM score WHERE teacheremail = '$email' && gameid = '$game3deleted'");
    $conn->query($DELETE);
    $conn->query($DELETE2);
  
} 
if ( isset($_POST['game4delete']) ) {
    $game4deleted = $_SESSION['g4gameid'];
    $DELETE = ("DELETE FROM questions WHERE questionemail = '$email' && gameid = '$game4deleted'");
    $DELETE2 = ("DELETE FROM score WHERE teacheremail = '$email' && gameid = '$game4deleted'");
    $conn->query($DELETE);
    $conn->query($DELETE2);

}
if ( isset($_POST['game5delete']) ) {
    $game5deleted = $_SESSION['g5gameid'];
    $DELETE = ("DELETE FROM questions WHERE questionemail = '$email' && gameid = '$game5deleted'");
    $DELETE2 = ("DELETE FROM score WHERE teacheremail = '$email' && gameid = '$game5deleted'");
    $conn->query($DELETE);
    $conn->query($DELETE2);
   
} 


    ?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>DELETED</title>
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
        <h3><font size="7" color="white"> Game Deleted! </font></h3>
        </div>
        
    
          
           <a href="profile.php"><button class="buttonprofile"/>Return to Profile</button></a>
           <a href="logout.php"><button class="buttonlogout"/>Logout</button></a>

      <footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer>
</body>
</html>