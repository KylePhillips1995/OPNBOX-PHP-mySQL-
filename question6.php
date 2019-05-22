<?php
require 'db.php';

session_start();
$name = $_SESSION['name'];
if ( isset($_POST['q6check1']) ) {
    $A6check1 = 1;
} else { 
    $A6check1 = 0;
}
if ( isset($_POST['q6check2']) ) {
    $A6check2 = 1;
} else { 
    $A6check2 = 0;
}
if ( isset($_POST['q6check3']) ) {
    $A6check3 = 1;
} else { 
    $A6check3 = 0;
}
if ( isset($_POST['q6check4']) ) {
    $A6check4 = 1;
} else { 
    $A6check4 = 0;
}

if($A6check1 == 1 && $_SESSION['q6bool1'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result6'] = "CORRECT";
    
}

elseif($A6check2 == 1 && $_SESSION['q6bool2'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result6'] = "CORRECT";
}
elseif($A6check3 == 1 && $_SESSION['q6bool3'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result6'] = "CORRECT";
}
elseif($A6check4 == 1 && $_SESSION['q6bool4'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result6'] = "CORRECT";
}
else{
    
     $_SESSION['result6'] = "FALSE";
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
 <form action="question7.php" method="POST">
   <table align = "center" width = "400">
  
   <tr>
    <td><font size="5" color="white">Question 7: <?php  echo $_SESSION['question7']
          ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">A - : <?php  echo $_SESSION['q7answer1']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">B - : <?php  echo $_SESSION['q7answer2']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">C - : <?php  echo $_SESSION['q7answer3']
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">D - : <?php  echo $_SESSION['q7answer4']
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="q7check1" value="q7check1"><font size="5" color="white">A</font><br></td>
   </tr>
  
   <tr>
    <td><input type="checkbox" name="q7check2" value="q7check2"><font size="5" color="white">B</font><br></td>
   <tr>
    <td><input type="checkbox" name="q7check3" value="q7check3"><font size="5" color="white">C</font><br></td>
   </tr>
   <tr>
       <td><input type="checkbox" name="q7check4" value="q7check4"><font size="5" color="white">D</font><br></td>
   </tr> 
   <tr align = "center">
    <td> <a href="question7.php"><button class="button button-block"/>Next Question</button></a></td>
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