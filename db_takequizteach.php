<?php
   
require 'db.php';
session_start();
$name = $_SESSION['name'];

?>



<html>
<head>
  <title>Quiz Finder</title>
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
        <h3><font size="7" color="white"> Search For Game</font></h3>
        </div>
        <div id ="register">
 <form action="db_takequiz.php" method="POST">
  <table align = "center" width = "400">
   <tr>
       <td><font size="5" color="white">Teacher Email:</font></td>
    <td><input type="text" name="teachername" required></td>
   </tr> 
  
   <tr align = "center">
    <td></td><td><input type="submit" value="Submit"></td>
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