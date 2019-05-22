<?php

require 'db.php';
session_start();

$name = $_SESSION['name'];
$gameid = $_SESSION['gameid'];
$email = $_SESSION['email'];
$score = $_SESSION['score'];
$teacheremail = $_SESSION['teacheremail'];
$question1 = $_SESSION['result1'];
$question2 = $_SESSION['result2'];
$question3 = $_SESSION['result3'];
$question4 = $_SESSION['result4'];
$question5 = $_SESSION['result5'];
$question6 = $_SESSION['result6'];
$question7 = $_SESSION['result7'];
$question8 = $_SESSION['result8'];
$question9 = $_SESSION['result9'];
$question10 = $_SESSION['result10'];
    
    if($teacheremail != NULL){
    $INSERT = "INSERT INTO score(name, gameid, gameemail, teacheremail, score, question1, question2, question3," 
        . "question4, question5, question6, question7 , question8, question9, question10) values ("
        . "'$name', '$gameid', '$email', '$teacheremail', '$score', '$question1', '$question2','$question3','$question4',
            '$question5','$question6','$question7','$question8','$question9','$question10')";
   
    $conn->query($INSERT);
 
    header("location: profile.php");
    }
    else{
         $INSERT = "INSERT INTO score(name, gameid, gameemail, teacheremail, score, question1, question2, question3," 
        . "question4, question5, question6, question7 , question8, question9, question10) values ("
        . "'$name', '$gameid', '$email', '$email', '$score', '$question1', '$question2','$question3','$question4',
            '$question5','$question6','$question7','$question8','$question9','$question10')";
   
    $conn->query($INSERT);
 
    header("location: profile.php");
        
        
    }
    
?>

<html>
<head>
 
</head>
<body>
 
   <table>
    <tr>
    <td>Your Results Have Been Submitted['result10']
          ?></td>
   </tr>
   
   <tr>
    <td> <a href="profile.php"><button class="button button-block"/>Return to Profile</button></a><a href="logout.php"><button class="button button-block"/>Logout</button></a></td>
   </tr>
  </table> 
 
</body>
</html>


