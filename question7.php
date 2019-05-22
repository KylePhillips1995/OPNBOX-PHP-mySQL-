<?php
require 'db.php';

session_start();
$name = $_SESSION['name'];
if ( isset($_POST['q7check1']) ) {
    $A7check1 = 1;
} else { 
    $A7check1 = 0;
}
if ( isset($_POST['q7check2']) ) {
    $A7check2 = 1;
} else { 
    $A7check2 = 0;
}
if ( isset($_POST['q7check3']) ) {
    $A7check3 = 1;
} else { 
    $A7check3 = 0;
}
if ( isset($_POST['q7check4']) ) {
    $A7check4 = 1;
} else { 
    $A7check4 = 0;
}

if($A7check1 == 1 && $_SESSION['q7bool1'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result7'] = "CORRECT";
    
}

elseif($A7check2 == 1 && $_SESSION['q7bool2'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result7'] = "CORRECT";
}
elseif($A7check3 == 1 && $_SESSION['q7bool3'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result7'] = "CORRECT";
}
elseif($A7check4 == 1 && $_SESSION['q7bool4'] == 1){
    
   $_SESSION['score']++;
    $_SESSION['result7'] = "CORRECT";
}
else{
    
     $_SESSION['result7'] = "FALSE";
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
 <form action="question8.php" method="POST">
   <table align = "center" width = "400">
   
   <tr>
    <td><font size="5" color="white">Question 8: <?php  echo $_SESSION['question8']
          ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">A - : <?php  echo $_SESSION['q8answer1']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">B - : <?php  echo $_SESSION['q8answer2']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">C - : <?php  echo $_SESSION['q8answer3']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">D - : <?php  echo $_SESSION['q8answer4']
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q8check1" value="q8check1"><font size="5" color="white">A</font><br></td>
   </tr>
  
   <tr>
    <td><input type="checkbox" name="q8check2" value="q8check2"><font size="5" color="white">B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q8check3" value="q8check3"><font size="5" color="white">C</font><br></td>
   </tr>
   <tr>
       <td><input type="checkbox" name="q8check4" value="q8check4"><font size="5" color="white">D</font><br></td>
   </tr> 
   <tr  align = "center">
    <td> <a href="question8.php"><button class="button button-block"/>Next Question</button></a></td>
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