<?php
/* Displays user information and some useful messages */
session_start();
require 'db.php';
   
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    
    
?>
<html>
<head>
    <title>OPNBOX Profile</title>
     <link rel="stylesheet" href="profilestyle.css">
 
</head>
<body>
 <header>
    <div id = "header1"> <font size="9" color="white">OPNBOX</font>
</div>
<div class="topnav">
    <a href="logout.php" style="float:right">Logout</a>
  <a style="float:right">Hey <?php echo $name;?>!</a>
  <div class ="task">
      <a href="questioncreation.php">Create Quiz</a>
      <a href="db_questiondelete.php" style="float:center">Delete Quiz</a>
      <a href="db_questioneditselection.php" style="float:center">Modify Quiz</a>
      <a href="db_takequizteach.php" style="float:center">Teacher's Quiz</a>
      <a href="db_quiztest.php" style="float:center">Test Quiz</a>
      <a href="db_scoreretrieve.php" style="float:center">View Scores</a>
  </div>
  
</div>    
</header>   
<!-- Slide Show -->


<div class ="welcome">
        <h3><font size="7" color="white" align= "center"> Welcome <?php echo $name; ?></font></h3>
        </div>
<div class ="paragraph">
      <p><font size="5" color="white"> OPNBOX is super easy to use! Simply click a button below to get started!</font>
 </p>
   </div>
    
 
     <div class ="buttons">
     <a href="questioncreation.php"><button class="buttonlogin"/>CREATE</button></a>
     
     <a href="db_questioneditselection.php"><button class="buttonlogin"/>MODIFY</button></a>

     <a href="db_questiondelete.php"><button class="buttonlogin"/>DELETE</button></a>

     <a href="db_takequizteach.php"><button class="buttonlogin"/>TAKE A QUIZ</button></a>
   
     <a href="db_quiztest.php"><button class="buttonsignup"/>TEST YOUR QUIZ</button></a>

     <a href="db_scoreretrieve.php"><button class="buttonsignup"/>VIEW SCORES</button></a>
     </div>

<div class = "slides">
  
  <img class="mySlides" src="opn2.jpg"
  style="width:100%">
  <img class="mySlides" src="opn3.jpg"
  style="width:100%">
</div>
<footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer>
</body>
</html>

  <script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 10000);
}
</script>
    
         