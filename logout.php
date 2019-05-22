<?php
session_start();
require 'db.php';
$name = $_SESSION['name'];
$email = $_SESSION['email'];
$loginStatus = 0;                                       
    
                   /* Log out process, unsets and destroys session variables */
                   $UPDATE = ("UPDATE register SET login_status = '$loginStatus' WHERE email = '$email'");
                                   if ($conn->query($UPDATE)){
                                          session_unset();
                                          session_destroy(); 
                                          
                                                    }
     
                                                    else{
                                                        echo "Error: ". $UPDATE ."
                                                                ". $conn->error;
                                                        
                                                                              }
                                                               
                                                 ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <title>Logout</title>
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
      
  </div>
  
</div> 
        
        <div class ="welcome">
        <h3><font size="7" color="white">Thanks for stopping by!</font></h3>
        </div>
        <div id ="register">
   
    <table align = "center" width = "400">
     
          
    <tr align = "center"><td><a href="index.html"><button class="button button-block"/>Home</button></a></td></tr>
          

</table>
    </div>
    <footer>
<div class="footer">
  <h2><font color="white">TKR Technologies, 2019.</font></h2>
</div>
</footer> 
</body>
</html>
