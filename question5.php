<?php
require 'db.php';

session_start();
$name = $_SESSION['name'];
if ( isset($_POST['q5check1']) ) {
    $A5check1 = 1;
} else { 
    $A5check1 = 0;
}
if ( isset($_POST['q5check2']) ) {
    $A5check2 = 1;
} else { 
    $A5check2 = 0;
}
if ( isset($_POST['q5check3']) ) {
    $A5check3 = 1;
} else { 
    $A5check3 = 0;
}
if ( isset($_POST['q5check4']) ) {
    $A5check4 = 1;
} else { 
    $A5check4 = 0;
}

if($A5check1 == 1 && $_SESSION['q5bool1'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result5'] = "CORRECT";
    
}

elseif($A5check2 == 1 && $_SESSION['q5bool2'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result5'] = "CORRECT";
}
elseif($A5check3 == 1 && $_SESSION['q5bool3'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result5'] = "CORRECT";
}
elseif($A5check4 == 1 && $_SESSION['q5bool4'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result5'] = "CORRECT";
}
else{
    
     $_SESSION['result5'] = "FALSE";
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
 <form action="question6.php" method="POST">
   <table align = "center" width = "400">
   
   <tr>
    <td><font size="5" color="white">Question 6: <?php  echo $_SESSION['question6']
          ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">A - : <?php  echo $_SESSION['q6answer1']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">B - : <?php  echo $_SESSION['q6answer2']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">C - : <?php  echo $_SESSION['q6answer3']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">D - : <?php  echo $_SESSION['q6answer4']
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q6check1" value="q6check1"><font size="5" color="white">A</font><br></td>
   </tr>
  
   <tr>
    <td><input type="checkbox" name="q6check2" value="q6check2"><font size="5" color="white">B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q6check3" value="q6check3"><font size="5" color="white">C</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="q6check4" value="q6check4"><font size="5" color="white">D</font><br></td>
   </tr> 
   <tr align = "center">
    <td> <a href="question6.php"><button class="button button-block"/>Next Question</button></a></td>
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