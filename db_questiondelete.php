<?php
//Deletes a game of questions in question database.
session_start();
require 'db.php';
   
    $name = $_SESSION['name'];
    $email = $_SESSION['email'];
    
    $result1 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= 0") or die($mysqli->error());
    $result2 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= 1") or die($mysqli->error());
    $result3 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= 2") or die($mysqli->error());
    $result4 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= 3") or die($mysqli->error());
    $result5 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= 4") or die($mysqli->error());

// Checks for games and names for display
            if ( $result1->num_rows == 0 ) {
    
                       $gamename1 = "There is no Data!";
    }
    
                else {
                        $user1 = $result1->fetch_assoc();
                        $gamename1 = $user1['gamename'];
                        $_SESSION['g1gameid'] = $user1['gameid'];
     
                }
                if ( $result2->num_rows == 0 ) {
    
                       $gamename2 = "There is no Data!";
    }
    
                else {
                        $user2 = $result2->fetch_assoc();
                        $gamename2 = $user2['gamename'];
                        $_SESSION['g2gameid'] = $user2['gameid'];
     
                }
                if ( $result3->num_rows == 0 ) {
    
                       $gamename3 = "There is no Data!";
    }
    
                else {
                        $user3 = $result3->fetch_assoc();
                        $gamename3 = $user3['gamename'];
                        $_SESSION['g3gameid'] = $user3['gameid'];
     
                }
                if ( $result4->num_rows == 0 ) {
    
                       $gamename4 = "There is no Data!";
    }
    
                else {
                        $user4 = $result4->fetch_assoc();
                        $gamename4 = $user4['gamename'];
                        $_SESSION['g4gameid'] = $user4['gameid'];
     
                }
                if ( $result5->num_rows == 0 ) {
    
                       $gamename5 = "There is no Data!";
    }
    
                else {
                        $user5 = $result5->fetch_assoc();
                        $gamename5 = $user5['gamename'];
                        $_SESSION['g5gameid'] = $user5['gameid'];
     
                }
                
    
    ?>
<html>
<head>
  <title>DELETE A GAME FROM THE DATABASE:</title>
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
        <h3><font size="7" color="white"> Game Deletion: </font></h3>
        </div>
        <div id ="register">
 <form action="db_questiondelete2.php" method="POST">
   <table align = "center" width = "400">
   <tr>
    <td><font size="5" color="white">Game - 1: <?php  echo $gamename1
          ?></font></td>
    
   </tr>
   <tr>
    <td><font size="5" color="white">Game - 2: <?php  echo $gamename2
          ?></font></td>
   </tr>
   <tr>
    <td><font size="5" color="white">Game - 3: <?php  echo $gamename3
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">Game - 4: <?php  echo $gamename4
          ?></font></td>
   </tr>
    <tr>
    <td><font size="5" color="white">Game - 5: <?php  echo $gamename5
          ?></font></td>
   </tr>
   <tr>
   <td><input type="checkbox" name="game1delete" value="game1delete"><font size="5" color="white">Game - 1</font><br></td>
   </tr>
  
   <tr>
    <td><input type="checkbox" name="game2delete" value="game2delete"><font size="5" color="white">Game - 2</font><br></td>
   <tr>
    <td><input type="checkbox" name="game3delete" value="game3delete"><font size="5" color="white">Game - 3</font><br></td>
   </tr>
   <tr>
    <td><input type="checkbox" name="game4delete" value="game4delete"><font size="5" color="white">Game - 4</font><br></td>
   </tr> 
   <tr>
    <td><input type="checkbox" name="game5delete" value="game5delete"><font size="5" color="white">Game - 5</font><br></td>
   </tr> 
   <tr align = "center">
    <td> <a href="db_questiondelete2.php"><button class="button button-block"/>DELETE</button></a></td>
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
    
    