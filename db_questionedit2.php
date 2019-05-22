<?php
    
require 'db.php';
session_start();
                         $email = $_SESSION['email'];
                         $gameid = $_SESSION['gameid'];
                         $gamename = $_POST['gamename'];
                         
                         //question 1 data
                         $question1 = $_POST['question1'];
                         $q1answer1 = $_POST['q1answer1'];
                         $q1answer2 = $_POST['q1answer2'];
                         $q1answer3 = $_POST['q1answer3'];
                         $q1answer4 = $_POST['q1answer4'];
                        
                            //question 2 data
                         $question2 = $_POST['question2'];
                         $q2answer1 = $_POST['q2answer1'];
                         $q2answer2 = $_POST['q2answer2'];
                         $q2answer3 = $_POST['q2answer3'];
                         $q2answer4 = $_POST['q2answer4'];
                        
                           //question 3 data
                         $question3 = $_POST['question3'];
                         $q3answer1 = $_POST['q3answer1'];
                         $q3answer2 = $_POST['q3answer2'];
                         $q3answer3 = $_POST['q3answer3'];
                         $q3answer4 = $_POST['q3answer4'];
                        
                           //question 4 data
                         $question4 = $_POST['question4'];
                         $q4answer1 = $_POST['q4answer1'];
                         $q4answer2 = $_POST['q4answer2'];
                         $q4answer3 = $_POST['q4answer3'];
                         $q4answer4 = $_POST['q4answer4'];
                       
                           //question 5 data
                         $question5 = $_POST['question5'];
                         $q5answer1 = $_POST['q5answer1'];
                         $q5answer2 = $_POST['q5answer2'];
                         $q5answer3 = $_POST['q5answer3'];
                         $q5answer4 = $_POST['q5answer4'];
                        
                           //question 6 data
                         $question6 = $_POST['question6'];
                         $q6answer1 = $_POST['q6answer1'];
                         $q6answer2 = $_POST['q6answer2'];
                         $q6answer3 = $_POST['q6answer3'];
                         $q6answer4 = $_POST['q6answer4'];
                        
                           //question 7 data
                         $question7 = $_POST['question7'];
                         $q7answer1 = $_POST['q7answer1'];
                         $q7answer2 = $_POST['q7answer2'];
                         $q7answer3 = $_POST['q7answer3'];
                         $q7answer4 = $_POST['q7answer4'];
                        
                           //question 8 data
                         $question8 = $_POST['question8'];
                         $q8answer1 = $_POST['q8answer1'];
                         $q8answer2 = $_POST['q8answer2'];
                         $q8answer3 = $_POST['q8answer3'];
                         $q8answer4 = $_POST['q8answer4'];
                        
                           //question 9 data
                         $question9 = $_POST['question9'];
                         $q9answer1 = $_POST['q9answer1'];
                         $q9answer2 = $_POST['q9answer2'];
                         $q9answer3 = $_POST['q9answer3'];
                         $q9answer4 = $_POST['q9answer4'];
                        
                           //question 10 data
                         $question10 = $_POST['question10'];
                         $q10answer1 = $_POST['q10answer1'];
                         $q10answer2 = $_POST['q10answer2'];
                         $q10answer3 = $_POST['q10answer3'];
                         $q10answer4 = $_POST['q10answer4'];
                                 

                         
//Checks if question 1 answer 1 has been modified
if ( isset($_POST['q1bool1']) ) {
    $q1bool1 = 1;
   if($q1bool1 != $_SESSION['q1bool1']){
    
  $UPDATE = "UPDATE questions SET q1bool1 = '$q1bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q1bool1']) && isset($_POST['q1bool2']) || isset($_POST['q1bool3']) || isset($_POST['q1bool4'])){ 
   $q1bool1 = 0;
   if($q1bool1 != $_SESSION['q1bool1']){
    
  $UPDATE = "UPDATE questions SET q1bool1 = '$q1bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 1 answer 2 has been modified
if ( isset($_POST['q1bool2']) ) {
    $q1bool2 = 1;
   if($q1bool2 != $_SESSION['q1bool2']){
    
  $UPDATE = "UPDATE questions SET q1bool2 = '$q1bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q1bool2']) && isset($_POST['q1bool1']) || isset($_POST['q1bool3']) || isset($_POST['q1bool4']) ){ 
 
   $q1bool2 = 0;
   if($q1bool2 != $_SESSION['q1bool2']){
    
  $UPDATE = "UPDATE questions SET q1bool2 = '$q1bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question  answer 3 has been modified
if ( isset($_POST['q1bool3']) ) {
    $q1bool3 = 1;
   if($q1bool3 != $_SESSION['q1bool3']){
    
  $UPDATE = "UPDATE questions SET q1bool3 = '$q1bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q1bool3']) && isset($_POST['q1bool2']) || isset($_POST['q1bool1']) || isset($_POST['q1bool4']) ){ 
 
   $q1bool3 = 0;
   if($q1bool3 != $_SESSION['q1bool3']){
    
  $UPDATE = "UPDATE questions SET q1bool3 = '$q1bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 9 answer 4 has been modified
if ( isset($_POST['q1bool4']) ) {
    $q1bool4 = 1;
   if($q1bool4 != $_SESSION['q1bool4']){
    
  $UPDATE = "UPDATE questions SET q1bool4 = '$q1bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q1bool4']) && isset($_POST['q1bool2']) || isset($_POST['q1bool3']) || isset($_POST['q1bool1']) ){ 

   $q1bool4 = 0;
   if($q1bool4 != $_SESSION['q1bool4']){
    
  $UPDATE = "UPDATE questions SET q1bool4 = '$q1bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}                         
//Checks if question 2 answer 1 has been modified
if ( isset($_POST['q2bool1']) ) {
    $q2bool1 = 1;
   if($q2bool1 != $_SESSION['q2bool1']){
    
  $UPDATE = "UPDATE questions SET q2bool1 = '$q2bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q2bool1']) && isset($_POST['q2bool2']) || isset($_POST['q2bool3']) || isset($_POST['q2bool4'])){ 
   $q2bool1 = 0;
   if($q2bool1 != $_SESSION['q2bool1']){
    
  $UPDATE = "UPDATE questions SET q2bool1 = '$q2bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 2 answer 2 has been modified
if ( isset($_POST['q2bool2']) ) {
    $q2bool2 = 1;
   if($q2bool2 != $_SESSION['q2bool2']){
    
  $UPDATE = "UPDATE questions SET q2bool2 = '$q2bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q2bool2']) && isset($_POST['q2bool1']) || isset($_POST['q2bool3']) || isset($_POST['q2bool4']) ){ 
 
   $q2bool2 = 0;
   if($q2bool2 != $_SESSION['q2bool2']){
    
  $UPDATE = "UPDATE questions SET q2bool2 = '$q2bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 2 answer 3 has been modified
if ( isset($_POST['q2bool3']) ) {
    $q2bool3 = 1;
   if($q2bool3 != $_SESSION['q2bool3']){
    
  $UPDATE = "UPDATE questions SET q2bool3 = '$q2bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q2bool3']) && isset($_POST['q2bool2']) || isset($_POST['q2bool1']) || isset($_POST['q2bool4']) ){ 
 
   $q2bool3 = 0;
   if($q2bool3 != $_SESSION['q2bool3']){
    
  $UPDATE = "UPDATE questions SET q2bool3 = '$q2bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 9 answer 4 has been modified
if ( isset($_POST['q2bool4']) ) {
    $q2bool4 = 1;
   if($q2bool4 != $_SESSION['q2bool4']){
    
  $UPDATE = "UPDATE questions SET q2bool4 = '$q2bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q2bool4']) && isset($_POST['q2bool2']) || isset($_POST['q2bool3']) || isset($_POST['q2bool1']) ){ 

   $q2bool4 = 0;
   if($q2bool4 != $_SESSION['q2bool4']){
    
  $UPDATE = "UPDATE questions SET q2bool4 = '$q2bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}                         
//Checks if question 3 answer 1 has been modified
if ( isset($_POST['q3bool1']) ) {
    $q3bool1 = 1;
   if($q3bool1 != $_SESSION['q3bool1']){
    
  $UPDATE = "UPDATE questions SET q3bool1 = '$q3bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q3bool1']) && isset($_POST['q3bool2']) || isset($_POST['q3bool3']) || isset($_POST['q3bool4'])){ 
   $q3bool1 = 0;
   if($q3bool1 != $_SESSION['q3bool1']){
    
  $UPDATE = "UPDATE questions SET q3bool1 = '$q3bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 3 answer 2 has been modified
if ( isset($_POST['q3bool2']) ) {
    $q3bool2 = 1;
   if($q3bool2 != $_SESSION['q3bool2']){
    
  $UPDATE = "UPDATE questions SET q3bool2 = '$q3bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q3bool2']) && isset($_POST['q3bool1']) || isset($_POST['q3bool3']) || isset($_POST['q3bool4']) ){ 
 
   $q3bool2 = 0;
   if($q3bool2 != $_SESSION['q3bool2']){
    
  $UPDATE = "UPDATE questions SET q3bool2 = '$q3bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 3 answer 3 has been modified
if ( isset($_POST['q3bool3']) ) {
    $q3bool3 = 1;
   if($q3bool3 != $_SESSION['q3bool3']){
    
  $UPDATE = "UPDATE questions SET q3bool3 = '$q3bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q3bool3']) && isset($_POST['q3bool2']) || isset($_POST['q3bool1']) || isset($_POST['q3bool4']) ){ 
 
   $q3bool3 = 0;
   if($q3bool3 != $_SESSION['q3bool3']){
    
  $UPDATE = "UPDATE questions SET q3bool3 = '$q3bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 3 answer 4 has been modified
if ( isset($_POST['q3bool4']) ) {
    $q3bool4 = 1;
   if($q3bool4 != $_SESSION['q3bool4']){
    
  $UPDATE = "UPDATE questions SET q3bool4 = '$q3bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q3bool4']) && isset($_POST['q3bool2']) || isset($_POST['q3bool3']) || isset($_POST['q3bool1']) ){ 

   $q3bool4 = 0;
   if($q3bool4 != $_SESSION['q3bool4']){
    
  $UPDATE = "UPDATE questions SET q3bool4 = '$q3bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}                         
//Checks if question 4 answer 1 has been modified
if ( isset($_POST['q4bool1']) ) {
    $q4bool1 = 1;
   if($q4bool1 != $_SESSION['q4bool1']){
    
  $UPDATE = "UPDATE questions SET q4bool1 = '$q4bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q4bool1']) && isset($_POST['q4bool2']) || isset($_POST['q4bool3']) || isset($_POST['q4bool4'])){ 
   $q4bool1 = 0;
   if($q4bool1 != $_SESSION['q4bool1']){
    
  $UPDATE = "UPDATE questions SET q4bool1 = '$q4bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 4 answer 2 has been modified
if ( isset($_POST['q4bool2']) ) {
    $q4bool2 = 1;
   if($q4bool2 != $_SESSION['q4bool2']){
    
  $UPDATE = "UPDATE questions SET q4bool2 = '$q4bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q4bool2']) && isset($_POST['q4bool1']) || isset($_POST['q4bool3']) || isset($_POST['q4bool4']) ){ 
 
   $q4bool2 = 0;
   if($q4bool2 != $_SESSION['q4bool2']){
    
  $UPDATE = "UPDATE questions SET q4bool2 = '$q4bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 4 answer 3 has been modified
if ( isset($_POST['q4bool3']) ) {
    $q4bool3 = 1;
   if($q4bool3 != $_SESSION['q4bool3']){
    
  $UPDATE = "UPDATE questions SET q4bool3 = '$q4bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q4bool3']) && isset($_POST['q4bool2']) || isset($_POST['q4bool1']) || isset($_POST['q4bool4']) ){ 
 
   $q4bool3 = 0;
   if($q4bool3 != $_SESSION['q4bool3']){
    
  $UPDATE = "UPDATE questions SET q4bool3 = '$q4bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 4 answer 4 has been modified
if ( isset($_POST['q4bool4']) ) {
    $q4bool4 = 1;
   if($q4bool4 != $_SESSION['q4bool4']){
    
  $UPDATE = "UPDATE questions SET q4bool4 = '$q4bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q4bool4']) && isset($_POST['q4bool2']) || isset($_POST['q4bool3']) || isset($_POST['q4bool1']) ){ 

   $q4bool4 = 0;
   if($q4bool4 != $_SESSION['q4bool4']){
    
  $UPDATE = "UPDATE questions SET q4bool4 = '$q4bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
                         
//Checks if question 5 answer 1 has been modified
if ( isset($_POST['q5bool1']) ) {
    $q5bool1 = 1;
   if($q5bool1 != $_SESSION['q5bool1']){
    
  $UPDATE = "UPDATE questions SET q5bool1 = '$q5bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q5bool1']) && isset($_POST['q5bool2']) || isset($_POST['q5bool3']) || isset($_POST['q5bool4'])){ 
   $q5bool1 = 0;
   if($q5bool1 != $_SESSION['q5bool1']){
    
  $UPDATE = "UPDATE questions SET q5bool1 = '$q5bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 5 answer 2 has been modified
if ( isset($_POST['q5bool2']) ) {
    $q5bool2 = 1;
   if($q5bool2 != $_SESSION['q5bool2']){
    
  $UPDATE = "UPDATE questions SET q5bool2 = '$q5bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q5bool2']) && isset($_POST['q5bool1']) || isset($_POST['q5bool3']) || isset($_POST['q5bool4']) ){ 
 
   $q5bool2 = 0;
   if($q5bool2 != $_SESSION['q5bool2']){
    
  $UPDATE = "UPDATE questions SET q5bool2 = '$q5bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 5 answer 3 has been modified
if ( isset($_POST['q5bool3']) ) {
    $q5bool3 = 1;
   if($q5bool3 != $_SESSION['q5bool3']){
    
  $UPDATE = "UPDATE questions SET q5bool3 = '$q5bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q5bool3']) && isset($_POST['q5bool2']) || isset($_POST['q5bool1']) || isset($_POST['q5bool4']) ){ 
 
   $q5bool3 = 0;
   if($q5bool3 != $_SESSION['q5bool3']){
    
  $UPDATE = "UPDATE questions SET q5bool3 = '$q5bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 5 answer 4 has been modified
if ( isset($_POST['q5bool4']) ) {
    $q5bool4 = 1;
   if($q5bool4 != $_SESSION['q5bool4']){
    
  $UPDATE = "UPDATE questions SET q5bool4 = '$q5bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q5bool4']) && isset($_POST['q5bool2']) || isset($_POST['q5bool3']) || isset($_POST['q5bool1']) ){ 

   $q5bool4 = 0;
   if($q5bool4 != $_SESSION['q5bool4']){
    
  $UPDATE = "UPDATE questions SET q5bool4 = '$q5bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
                         
//Checks if question  answer 1 has been modified
if ( isset($_POST['q6bool1']) ) {
    $q6bool1 = 1;
   if($q6bool1 != $_SESSION['q6bool1']){
    
  $UPDATE = "UPDATE questions SET q6bool1 = '$q6bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q6bool1']) && isset($_POST['q6bool2']) || isset($_POST['q6bool3']) || isset($_POST['q6bool4'])){ 
   $q6bool1 = 0;
   if($q6bool1 != $_SESSION['q6bool1']){
    
  $UPDATE = "UPDATE questions SET q6bool1 = '$q6bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question  answer 2 has been modified
if ( isset($_POST['q6bool2']) ) {
    $q6bool2 = 1;
   if($q6bool2 != $_SESSION['q6bool2']){
    
  $UPDATE = "UPDATE questions SET q6bool2 = '$q6bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q6bool2']) && isset($_POST['q6bool1']) || isset($_POST['q6bool3']) || isset($_POST['q6bool4']) ){ 
 
   $q6bool2 = 0;
   if($q6bool2 != $_SESSION['q6bool2']){
    
  $UPDATE = "UPDATE questions SET q6bool2 = '$q6bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question  answer 3 has been modified
if ( isset($_POST['q6bool3']) ) {
    $q6bool3 = 1;
   if($q6bool3 != $_SESSION['q6bool3']){
    
  $UPDATE = "UPDATE questions SET q6bool3 = '$q6bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q6bool3']) && isset($_POST['q6bool2']) || isset($_POST['q6bool1']) || isset($_POST['q6bool4']) ){ 
 
   $q6bool3 = 0;
   if($q6bool3 != $_SESSION['q6bool3']){
    
  $UPDATE = "UPDATE questions SET q6bool3 = '$q6bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 9 answer 4 has been modified
if ( isset($_POST['q6bool4']) ) {
    $q6bool4 = 1;
   if($q6bool4 != $_SESSION['q6bool4']){
    
  $UPDATE = "UPDATE questions SET q6bool4 = '$q6bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q6bool4']) && isset($_POST['q6bool2']) || isset($_POST['q6bool3']) || isset($_POST['q6bool1']) ){ 

   $q6bool4 = 0;
   if($q6bool4 != $_SESSION['q6bool4']){
    
  $UPDATE = "UPDATE questions SET q6bool4 = '$q6bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}                         
                        
//Checks if question 7 answer 1 has been modified
if ( isset($_POST['q7bool1']) ) {
    $q7bool1 = 1;
   if($q7bool1 != $_SESSION['q7bool1']){
    
  $UPDATE = "UPDATE questions SET q7bool1 = '$q7bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q7bool1']) && isset($_POST['q7bool2']) || isset($_POST['q7bool3']) || isset($_POST['q7bool4'])){ 
   $q7bool1 = 0;
   if($q7bool1 != $_SESSION['q7bool1']){
    
  $UPDATE = "UPDATE questions SET q7bool1 = '$q7bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 7 answer 2 has been modified
if ( isset($_POST['q7bool2']) ) {
    $q7bool2 = 1;
   if($q7bool2 != $_SESSION['q7bool2']){
    
  $UPDATE = "UPDATE questions SET q7bool2 = '$q7bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q7bool2']) && isset($_POST['q7bool1']) || isset($_POST['q7bool3']) || isset($_POST['q7bool4']) ){ 
 
   $q7bool2 = 0;
   if($q7bool2 != $_SESSION['q7bool2']){
    
  $UPDATE = "UPDATE questions SET q7bool2 = '$q7bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 7 answer 3 has been modified
if ( isset($_POST['q7bool3']) ) {
    $q7bool3 = 1;
   if($q7bool3 != $_SESSION['q7bool3']){
    
  $UPDATE = "UPDATE questions SET q7bool3 = '$q7bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q7bool3']) && isset($_POST['q7bool2']) || isset($_POST['q7bool1']) || isset($_POST['q7bool4']) ){ 
 
   $q7bool3 = 0;
   if($q7bool3 != $_SESSION['q7bool3']){
    
  $UPDATE = "UPDATE questions SET q7bool3 = '$q7bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 7 answer 4 has been modified
if ( isset($_POST['q7bool4']) ) {
    $q7bool4 = 1;
   if($q7bool4 != $_SESSION['q7bool4']){
    
  $UPDATE = "UPDATE questions SET q7bool4 = '$q7bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q7bool4']) && isset($_POST['q7bool2']) || isset($_POST['q7bool3']) || isset($_POST['q7bool1']) ){ 

   $q7bool4 = 0;
   if($q7bool4 != $_SESSION['q7bool4']){
    
  $UPDATE = "UPDATE questions SET q7bool4 = '$q7bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
//Checks if question 8 answer 1 has been modified
if ( isset($_POST['q8bool1']) ) {
    $q8bool1 = 1;
   if($q8bool1 != $_SESSION['q8bool1']){
    
  $UPDATE = "UPDATE questions SET q8bool1 = '$q8bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q8bool1']) && isset($_POST['q8bool2']) || isset($_POST['q8bool3']) || isset($_POST['q8bool4'])){ 
   $q8bool1 = 0;
   if($q8bool1 != $_SESSION['q8bool1']){
    
  $UPDATE = "UPDATE questions SET q8bool1 = '$q8bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 8 answer 2 has been modified
if ( isset($_POST['q8bool2']) ) {
    $q8bool2 = 1;
   if($q8bool2 != $_SESSION['q8bool2']){
    
  $UPDATE = "UPDATE questions SET q8bool2 = '$q8bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q8bool2']) && isset($_POST['q8bool1']) || isset($_POST['q8bool3']) || isset($_POST['q8bool4']) ){ 
 
   $q8bool2 = 0;
   if($q8bool2 != $_SESSION['q8bool2']){
    
  $UPDATE = "UPDATE questions SET q8bool2 = '$q8bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 8 answer 3 has been modified
if ( isset($_POST['q8bool3']) ) {
    $q8bool3 = 1;
   if($q8bool3 != $_SESSION['q8bool3']){
    
  $UPDATE = "UPDATE questions SET q8bool3 = '$q8bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q8bool3']) && isset($_POST['q8bool2']) || isset($_POST['q8bool1']) || isset($_POST['q8bool4']) ){ 
 
   $q8bool3 = 0;
   if($q8bool3 != $_SESSION['q8bool3']){
    
  $UPDATE = "UPDATE questions SET q8bool3 = '$q8bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 8 answer 4 has been modified
if ( isset($_POST['q8bool4']) ) {
    $q8bool4 = 1;
   if($q8bool4 != $_SESSION['q8bool4']){
    
  $UPDATE = "UPDATE questions SET q8bool4 = '$q8bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q8bool4']) && isset($_POST['q8bool2']) || isset($_POST['q8bool3']) || isset($_POST['q8bool1']) ){ 

   $q8bool4 = 0;
   if($q8bool4 != $_SESSION['q8bool4']){
    
  $UPDATE = "UPDATE questions SET q8bool4 = '$q8bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
//Checks if question 9 answer 1 has been modified
if ( isset($_POST['q9bool1']) ) {
    $q9bool1 = 1;
   if($q9bool1 != $_SESSION['q9bool1']){
    
  $UPDATE = "UPDATE questions SET q9bool1 = '$q9bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q9bool1']) && isset($_POST['q9bool2']) || isset($_POST['q9bool3']) || isset($_POST['q9bool4'])){ 
   $q9bool1 = 0;
   if($q9bool1 != $_SESSION['q9bool1']){
    
  $UPDATE = "UPDATE questions SET q9bool1 = '$q9bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question  answer 2 has been modified
if ( isset($_POST['q9bool2']) ) {
    $q9bool2 = 1;
   if($q9bool2 != $_SESSION['q9bool2']){
    
  $UPDATE = "UPDATE questions SET q9bool2 = '$q9bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q9bool2']) && isset($_POST['q9bool1']) || isset($_POST['q9bool3']) || isset($_POST['q9bool4']) ){ 
 
   $q9bool2 = 0;
   if($q9bool2 != $_SESSION['q9bool2']){
    
  $UPDATE = "UPDATE questions SET q9bool2 = '$q9bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 9 answer 3 has been modified
if ( isset($_POST['q9bool3']) ) {
    $q9bool3 = 1;
   if($q9bool3 != $_SESSION['q9bool3']){
    
  $UPDATE = "UPDATE questions SET q9bool3 = '$q9bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q9bool3']) && isset($_POST['q9bool2']) || isset($_POST['q9bool1']) || isset($_POST['q9bool4']) ){ 
 
   $q9bool3 = 0;
   if($q9bool3 != $_SESSION['q9bool3']){
    
  $UPDATE = "UPDATE questions SET q9bool3 = '$q9bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 9 answer 4 has been modified
if ( isset($_POST['q9bool4']) ) {
    $q9bool4 = 1;
   if($q9bool4 != $_SESSION['q9bool4']){
    
  $UPDATE = "UPDATE questions SET q9bool4 = '$q9bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q9bool4']) && isset($_POST['q9bool2']) || isset($_POST['q9bool3']) || isset($_POST['q9bool1']) ){ 

   $q9bool4 = 0;
   if($q9bool4 != $_SESSION['q9bool4']){
    
  $UPDATE = "UPDATE questions SET q9bool4 = '$q9bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
//Checks if question 10  answer 1 has been modified
if ( isset($_POST['q10bool1']) ) {
    $q10bool1 = 1;
   if($q10bool1 != $_SESSION['q10bool1']){
    
  $UPDATE = "UPDATE questions SET q10bool1 = '$q10bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q10bool1']) && isset($_POST['q10bool2']) || isset($_POST['q10bool3']) || isset($_POST['q10bool4'])){ 
   $q10bool1 = 0;
   if($q10bool1 != $_SESSION['q10bool1']){
    
  $UPDATE = "UPDATE questions SET q10bool1 = '$q10bool1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}
}
//Checks if question 10  answer 2 has been modified
if ( isset($_POST['q10bool2']) ) {
    $q10bool2 = 1;
   if($q10bool2 != $_SESSION['q10bool2']){
    
  $UPDATE = "UPDATE questions SET q10bool2 = '$q10bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
elseif(!isset($_POST['q10bool2']) && isset($_POST['q10bool1']) || isset($_POST['q10bool3']) || isset($_POST['q10bool4']) ){ 
 
   $q10bool2 = 0;
   if($q10bool2 != $_SESSION['q10bool2']){
    
  $UPDATE = "UPDATE questions SET q10bool2 = '$q10bool2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 10 answer 3 has been modified
if ( isset($_POST['q10bool3']) ) {
    $q10bool3 = 1;
   if($q10bool3 != $_SESSION['q10bool3']){
    
  $UPDATE = "UPDATE questions SET q10bool3 = '$q10bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

} else if(!isset($_POST['q10bool3']) && isset($_POST['q10bool2']) || isset($_POST['q10bool1']) || isset($_POST['q10bool4']) ){ 
 
   $q10bool3 = 0;
   if($q10bool3 != $_SESSION['q10bool3']){
    
  $UPDATE = "UPDATE questions SET q10bool3 = '$q10bool3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

}
//Checks if question 10 answer 4 has been modified
if ( isset($_POST['q10bool4']) ) {
    $q10bool4 = 1;
   if($q10bool4 != $_SESSION['q10bool4']){
    
  $UPDATE = "UPDATE questions SET q10bool4 = '$q10bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

} else if(!isset($_POST['q10bool4']) && isset($_POST['q10bool2']) || isset($_POST['q10bool3']) || isset($_POST['q10bool1']) ){ 

   $q10bool4 = 0;
   if($q10bool4 != $_SESSION['q10bool4']){
    
  $UPDATE = "UPDATE questions SET q10bool4 = '$q10bool4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

}
if($gamename != $_SESSION['gamename'] && $gamename != NULL){
    
    $UPDATE = "UPDATE questions SET gamename = '$gamename' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
     
}




//Question 1 Edit Info 
if($question1 != $_SESSION['question1'] && $question1 != NULL){
    
    $UPDATE = "UPDATE questions SET question1 = '$question1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q1answer1 != $_SESSION['q1answer1'] && $q1answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q1answer1 = '$q1answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q1answer2 != $_SESSION['q1answer2'] && $q1answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q1answer2 = '$q1answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q1answer3 != $_SESSION['q1answer3'] && $q1answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q1answer3 = '$q1answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

if($q1answer4 != $_SESSION['q1answer4'] && $q1answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q1answer4 = '$q1answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}


//Question 2 Edit Info 
if($question2 != $_SESSION['question2'] && $question2 != NULL){
    
    $UPDATE = "UPDATE questions SET question2 = '$question2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
     
}

if($q2answer1 != $_SESSION['q2answer1'] && $q2answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q2answer1 = '$q2answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q2answer2 != $_SESSION['q2answer2'] && $q2answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q2answer2 = '$q2answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

if($q2answer3 != $_SESSION['q2answer3'] && $q2answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q2answer3 = '$q2answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q2answer4 != $_SESSION['q2answer4'] && $q2answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q2answer4 = '$q2answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

//Question 3 Edit Info 
if($question3 != $_SESSION['question3'] && $question3 != NULL){
    
    $UPDATE = "UPDATE questions SET question3 = '$question3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
     
}

if($q3answer1 != $_SESSION['q3answer1'] && $q3answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q3answer1 = '$q3answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

if($q3answer2 != $_SESSION['q3answer2'] && $q3answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q3answer2 = '$q3answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q3answer3 != $_SESSION['q3answer3'] && $q3answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q3answer3 = '$q3answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

if($q3answer4 != $_SESSION['q3answer4'] && $q3answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q3answer4 = '$q3answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}


//Question 4 Edit Info 
if($question4 != $_SESSION['question4'] && $question4 != NULL){
    
    $UPDATE = "UPDATE questions SET question4 = '$question4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q4answer1 != $_SESSION['q4answer1'] && $q4answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q4answer1 = '$q4answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

if($q4answer2 != $_SESSION['q4answer2'] && $q4answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q4answer2 = '$q4answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}
if($q4answer3 != $_SESSION['q4answer3'] && $q4answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q4answer3 = '$q4answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q4answer4 != $_SESSION['q4answer4'] && $q4answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q4answer4 = '$q4answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}


//Question 5 Edit Info 
if($question5 != $_SESSION['question5'] && $question5 != NULL){
    
    $UPDATE = "UPDATE questions SET question5 = '$question5' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
     
}

if($q5answer1 != $_SESSION['q5answer1'] && $q5answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q5answer1 = '$q5answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

if($q5answer2 != $_SESSION['q5answer2'] && $q5answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q5answer2 = '$q5answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q5answer3 != $_SESSION['q5answer3'] && $q5answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q5answer3 = '$q5answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q5answer4 != $_SESSION['q5answer4'] && $q5answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q5answer4 = '$q5answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

//Question 6 Edit Info 
if($question6 != $_SESSION['question6'] && $question6 != NULL){
    
    $UPDATE = "UPDATE questions SET question6 = '$question6' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q6answer1 != $_SESSION['q6answer1'] && $q6answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q6answer1 = '$q6answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q6answer2 != $_SESSION['q6answer2'] && $q6answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q6answer2 = '$q6answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q6answer3 != $_SESSION['q6answer3'] && $q6answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q6answer3 = '$q6answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q6answer4 != $_SESSION['q6answer4'] && $q6answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q6answer4 = '$q6answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

//Question 7 Edit Info 
if($question7 != $_SESSION['question7'] && $question7 != NULL){
    
    $UPDATE = "UPDATE questions SET question7 = '$question7' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}

if($q7answer1 != $_SESSION['q7answer1'] && $q7answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q3answer1 = '$q7answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q7answer2 != $_SESSION['q7answer2'] && $q7answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q7answer2 = '$q7answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q7answer3 != $_SESSION['q7answer3'] && $q7answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q7answer3 = '$q7answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q7answer4 != $_SESSION['q7answer4'] && $q7answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q7answer4 = '$q7answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}

//Question 8 Edit Info 
if($question8 != $_SESSION['question8'] && $question8 != NULL){
    
    $UPDATE = "UPDATE questions SET question8 = '$question8' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q8answer1 != $_SESSION['q8answer1'] && $q8answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q8answer1 = '$q8answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q8answer2 != $_SESSION['q8answer2'] && $q8answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q8answer2 = '$q8answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

if($q8answer3 != $_SESSION['q8answer3'] && $q8answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q8answer3 = '$q8answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
}

if($q8answer4 != $_SESSION['q8answer4'] && $q8answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q8answer4 = '$q8answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

//Question 9 Edit Info 
if($question9 != $_SESSION['question9'] && $question9 != NULL){
    
    $UPDATE = "UPDATE questions SET question9 = '$question9' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
     
}

if($q9answer1 != $_SESSION['q9answer1'] && $q9answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q9answer1 = '$q9answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
  
}

if($q9answer2 != $_SESSION['q9answer2'] && $q9answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q9answer2 = '$q9answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
 
}

if($q9answer3 != $_SESSION['q9answer3'] && $q9answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q9answer3 = '$q9answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
   
}

if($q9answer4 != $_SESSION['q9answer4'] && $q9answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q9answer4 = '$q9answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

//Question 10 Edit Info 
if($question10 != $_SESSION['question10'] && $question10 != NULL){
    
    $UPDATE = "UPDATE questions SET question10 = '$question10' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q10answer1 != $_SESSION['q10answer1'] && $q10answer1 != NULL){
    
    $UPDATE = "UPDATE questions SET q10answer1 = '$q10answer1' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q10answer2 != $_SESSION['q10answer2'] && $q10answer2 != NULL){
    
    $UPDATE = "UPDATE questions SET q10answer2 = '$q10answer2' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);

}

if($q10answer3 != $_SESSION['q10answer3'] && $q10answer3 != NULL){
    
    $UPDATE = "UPDATE questions SET q10answer3 = '$q10answer3' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}

if($q10answer4 != $_SESSION['q10answer4'] && $q10answer4 != NULL){
    
    $UPDATE = "UPDATE questions SET q10answer4 = '$q10answer4' WHERE questionemail = '$email' and gameid = '$gameid'";
    $conn->query($UPDATE);
    
}
header("location: db_return.php");
