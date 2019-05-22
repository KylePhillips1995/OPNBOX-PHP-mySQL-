<?php

require 'db.php';
session_start();
         $name = $_SESSION['name'];
         $questionemail = $_SESSION['email'];
         $gameid = $_SESSION['gameid'];
    
    $result = $conn->query("SELECT * FROM score WHERE teacheremail ='$questionemail' and gameid='$gameid'");
         
         if ( $result->num_rows == 0 ){ // User doesn't exist
                echo "There are no questions associated with that email or game!";
                die();
        }
        
            else{  

                while($row = mysqli_fetch_array($result))
                  {
                   $playeremail[] = $row['gameemail'];
                   $scores[] = $row['score'];
                   $question1[] = $row['question1'];
                   $question2[] = $row['question2'];
                   $question3[] = $row['question3'];
                   $question4[] = $row['question4'];
                   $question5[] = $row['question5'];
                   $question6[] = $row['question6'];
                   $question7[] = $row['question7'];
                   $question8[] = $row['question8'];
                   $question9[] = $row['question9'];
                   $question10[] = $row['question10'];
                 }
                    $arr = $scores;              
                    }           
            //}
            
            ?>
            <html>
<head>
  <title>SCORE PREVIEW</title>
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
        <h3><font size="7" color="white">Class Results:</font></h3>
        </div>
        <div id ="register">
   <table  align = "center" width = "400">
      
       <tr align = "center">
    <td><font size="5" color="white">Achieved Class Scores Out of 10 Points: <?php echo implode(", "
                            . "", (array)$arr) ; ?></font></td>
    
   </tr>
   <tr align = "center">
    <td><font size="5" color="white">Class Average: <?php echo $average = array_sum($arr) / count($arr); ?></font></td>
    
   </tr>
   
  
   <tr align = "center">
    <td> <a href="profile.php"><button class="button button-block"/>Return to Profile</button></a><a href="logout.php"><button class="button button-block"/>Logout</button></a></td>
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