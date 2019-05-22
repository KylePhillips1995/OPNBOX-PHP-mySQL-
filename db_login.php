<?php

require 'db.php';
session_start();

$email = $_POST['email'];
$password = $_POST['password'];
if (!empty($email) || !empty($password)) {

//if (mysqli_connect_error()) {
  //   die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    //} 
    
    //else {
       $result = $conn->query("SELECT * FROM register WHERE email='$email' and password='$password'");

            if ( $result->num_rows == 0 ){ // User doesn't exist
                echo "User with that info does not exist";
                header("location: login2.html");
                die();
        }
        
                else {
                         
                         $loginStatus = 1;
                         $lastLogin = date("Y-m-d");
                         $UPDATE = ("UPDATE register SET login_status = '$loginStatus', last_login = '$lastLogin' WHERE email = '$email'");
          
      
      
       if ($conn->query($UPDATE)){
                         $user = $result->fetch_assoc();
                         $_SESSION['email'] = $user['email'];
                         $_SESSION['name'] = $user['name'];
                         $_SESSION['login_status'] = $user['login_status'];
                         $_SESSION['last_login'] = $user['last_login'];
                         header("location: profile.php");     
     }
     
     else{
       
echo "Error: ". $UPDATE ."
         ". $conn->error;
     }
                         
                                    
            
       $conn->close();        
}
}     
    

else{
    echo "Fields should not be empty";
    die();
}


