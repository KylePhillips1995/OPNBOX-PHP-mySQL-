<?php

require 'db.php';
session_start();
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = date("Y-m-d");

$_SESSION['email'] = $email;
$_SESSION['name'] = $name;
$_SESSION['password'] = $password;

if (!empty($name) || !empty($email) || !empty($password)) {

        $result = $conn->query("SELECT * FROM register WHERE email='$email'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
            if ( $result->num_rows > 0 ) {
    
    echo "That Email is Already in Use!";
    header("location: form2.html");
    }
    
                else {                 
                    $INSERT = "INSERT INTO register (name, email, password, login_status, last_login) values ('$name','$email','$password', 1, '$date')";
     
     if ($conn->query($INSERT)){
        
        $_SESSION['email'] = $email;
        $_SESSION['name'] = $name;
        $_SESSION['login_status'] = $user['login_status'];
         header("location: profile.php");
     }
     
     else{
         echo "Error: ". $INSERT ."
         ". $conn->error;
     }
                }
     $conn->close();
    }


else{
    echo "Fields should not be empty";
    die();
}
?>

