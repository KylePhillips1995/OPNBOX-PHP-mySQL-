<?php
require 'db.php';

session_start();
$name = $_SESSION['name'];
if ( isset($_POST['q10check1']) ) {
    $A10check1 = 1;
} else { 
    $A10check1 = 0;
}
if ( isset($_POST['q10check2']) ) {
    $A10check2 = 1;
} else { 
    $A10check2 = 0;
}
if ( isset($_POST['q10check3']) ) {
    $A10check3 = 1;
} else { 
    $A10check3 = 0;
}
if ( isset($_POST['q10check4']) ) {
    $A10check4 = 1;
} else { 
    $A10check4 = 0;
}

if($A10check1 == 1 && $_SESSION['q10bool1'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result10'] = "CORRECT";
    
}

elseif($A10check2 == 1 && $_SESSION['q10bool2'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result10'] = "CORRECT";
}
elseif($A10check3 == 1 && $_SESSION['q10bool3'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result10'] = "CORRECT";
}
elseif($A10check4 == 1 && $_SESSION['q10bool4'] == 1){
    
    $_SESSION['score']++;
    $_SESSION['result10'] = "CORRECT";
}
else{
    
     $_SESSION['result10'] = "FALSE";
}

?>

<html>
<head>
  <title>RESULTS:</title>
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
          ?> Results:</font></h3>
        </div>
        <div id ="register">
 
   <table  align = "center" width = "400">
       <tr align = "center">
    <td><font size="5" color="white">Your Score : <?php  echo $_SESSION['score']
          ?>/10</font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 1: <?php  echo $_SESSION['result1']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 2: <?php  echo $_SESSION['result2']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 3: <?php  echo $_SESSION['result3']
          ?></font></td>
   </tr>
    <tr align = "center">
    <td><font size="5" color="white">Question 4: <?php  echo $_SESSION['result4']
          ?></font></td>
   </tr>
    <tr align = "center">
    <td><font size="5" color="white">Question 5: <?php  echo $_SESSION['result5']
          ?></font></td>
   </tr>
    <tr align = "center">
    <td><font size="5" color="white">Question 6: <?php  echo $_SESSION['result6']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 7: <?php  echo $_SESSION['result7']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 8: <?php  echo $_SESSION['result8']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 9: <?php  echo $_SESSION['result9']
          ?></font></td>
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Question 10: <?php  echo $_SESSION['result10']
            ?></font></td>
   </tr>
   
 
  
   <tr align = "center">
    <td><a href="db_savescore.php"><button class="button button-block"/>Submit</button></a></td>
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