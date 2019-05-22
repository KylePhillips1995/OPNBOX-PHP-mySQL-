<?php
require 'db.php';

session_start();
$name = $_SESSION['name'];
if ( isset($_POST['q9check1']) ) {
    $A9check1 = 1;
} else { 
    $A9check1 = 0;
}
if ( isset($_POST['q9check2']) ) {
    $A9check2 = 1;
} else { 
    $A9check2 = 0;
}
if ( isset($_POST['q9check3']) ) {
    $A9check3 = 1;
} else { 
    $A9check3 = 0;
}
if ( isset($_POST['q9check4']) ) {
    $A9check4 = 1;
} else { 
    $A9check4 = 0;
}

if($A9check1 == 1 && $_SESSION['q9bool1'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result9'] = "CORRECT";
    
}

elseif($A9check2 == 1 && $_SESSION['q9bool2'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result9'] = "CORRECT";
}
elseif($A9check3 == 1 && $_SESSION['q9bool3'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result9'] = "CORRECT";
}
elseif($A9check4 == 1 && $_SESSION['q9bool4'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result9'] = "CORRECT";
}
else{
    
     $_SESSION['result9'] = "FALSE";
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
 <form action="question10.php" method="POST">
   <table align = "center" width = "400">
  
   <tr>
    <td><font size="5" color="white">Question 10: <?php  echo $_SESSION['question10']
          ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">A - : <?php  echo $_SESSION['q10answer1']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">B - : <?php  echo $_SESSION['q10answer2']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">C - : <?php  echo $_SESSION['q10answer3']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">D - : <?php  echo $_SESSION['q10answer4']
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q10check1" value="q10check1"><font size="5" color="white">A</font><br></td>
   </tr>
  
   <tr>
       <td><input type="checkbox" name="q10check2" value="q10check2"><font size="5" color="white">B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q10check3" value="q10check3"><font size="5" color="white">C</font><br></td>
   </tr>
   <tr>
       <td><input type="checkbox" name="q10check4" value="q10check4"><font size="5" color="white">D</font><br></td>
   </tr> 
   <tr align = "center">
    <td> <a href="question10.php"><button class="button button-block"/>Next Question</button></a></td>
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