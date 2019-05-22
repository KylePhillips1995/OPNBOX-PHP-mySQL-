<?php 
require 'db.php';
session_start();

                         $email = $_SESSION['email'];
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
                                 

if(empty($question1)) {
 
    echo "Must input atleast one question!";
}   
    
if(!empty($question1) && empty($q1answer1) || empty($q1answer2) || empty($q1answer3) || empty($q1answer4)) {
    
    echo "Must Input Answers to Question 1!";
    die();
}  
if(!empty($question2) && empty($q2answer1) || empty($q2answer2) || empty($q2answer3) || empty($q2answer4)) {
    
    echo "Must Input Answers to Question 2!";
    die();
} 
if(!empty($question3) && empty($q3answer1) || empty($q3answer2) || empty($q3answer3) || empty($q3answer4)) {
    
    echo "Must Input Answers to Question 3!";
    die();
} 
if(!empty($question4) && empty($q4answer1) || empty($q4answer2) || empty($q4answer3) || empty($q4answer4)) {
    
    echo "Must Input Answers to Question 4!";
    die();
}
if(!empty($question5) && empty($q5answer1) || empty($q5answer2) || empty($q5answer3) || empty($q5answer4)) {
    
    echo "Must Input Answers to Question 5!";
    die();
} 
if(!empty($question6) && empty($q6answer1) || empty($q6answer2) || empty($q6answer3) || empty($q6answer4)) {
    
    echo "Must Input Answers to Question 6!";
    die();
}
if(!empty($question7) && empty($q7answer1) || empty($q7answer2) || empty($q7answer3) || empty($q7answer4)) {
    
    echo "Must Input Answers to Question 7!";
    die();
} 
if(!empty($question8) && empty($q8answer1) || empty($q8answer2) || empty($q8answer3) || empty($q8answer4)) {
    
    echo "Must Input Answers to Question 8!";
    die();
} 
if(!empty($question9) && empty($q9answer1) || empty($q9answer2) || empty($q9answer3) || empty($q9answer4)) {
    
    echo "Must Input Answers to Question 9!";
    die();
} 
if(!empty($question10) && empty($q10answer1) || empty($q10answer2) || empty($q10answer3) || empty($q10answer4)) {
    
    echo "Must Input Answers to Question 10!";
    die();
}

//Checks to find Question 1 Answer
if ( isset($_POST['q1bool1']) ) {
    $q1bool1 = 1;
} else { 
    $q1bool1 = 0;
}
if ( isset($_POST['q1bool2']) ) {
    $q1bool2 = 1;
} else { 
    $q1bool2 = 0;
}
if ( isset($_POST['q1bool3']) ) {
    $q1bool3 = 1;
} else { 
    $q1bool3 = 0;
}
if ( isset($_POST['q1bool4']) ) {
    $q1bool4 = 1;
} else { 
    $q1bool4 = 0;
}
//Checks to find Question 2 Answer
if ( isset($_POST['q2bool1']) ) {
    $q2bool1 = 1;
} else { 
    $q2bool1 = 0;
}
if ( isset($_POST['q2bool2']) ) {
    $q2bool2 = 1;
} else { 
    $q2bool2 = 0;
}
if ( isset($_POST['$q2bool3']) ) {
    $q2bool3 = 1;
} else { 
    $q2bool3 = 0;
}
if ( isset($_POST['q2bool4']) ) {
    $q2bool4 = 1;
} else { 
    $q2bool4 = 0;
}
//Checks to find Question 3 Answer
if ( isset($_POST['q3bool1']) ) {
    $q3bool1 = 1;
} else { 
    $q3bool1 = 0;
}
if ( isset($_POST['q3bool2']) ) {
    $q3bool2 = 1;
} else { 
    $q3bool2 = 0;
}
if ( isset($_POST['q3bool3']) ) {
    $q3bool3 = 1;
} else { 
    $q3bool3 = 0;
}
if ( isset($_POST['q3bool4']) ) {
    $q3bool4 = 1;
} else { 
    $q3bool4 = 0;
}
//Checks to find Question 4 Answer
if ( isset($_POST['q4bool1']) ) {
    $q4bool1 = 1;
} else { 
    $q4bool1 = 0;
}
if ( isset($_POST['q4bool2']) ) {
    $q4bool2 = 1;
} else { 
    $q4bool2 = 0;
}
if ( isset($_POST['q4bool3']) ) {
    $q4bool3 = 1;
} else { 
    $q4bool3 = 0;
}
if ( isset($_POST['q4bool4']) ) {
    $q4bool4 = 1;
} else { 
    $q4bool4 = 0;
}
//Checks to find Question 5 Answer
if ( isset($_POST['q5bool1']) ) {
    $q5bool1 = 1;
} else { 
    $q5bool1 = 0;
}
if ( isset($_POST['q5bool2']) ) {
    $q5bool2 = 1;
} else { 
    $q5bool2 = 0;
}
if ( isset($_POST['q5bool3']) ) {
    $q5bool3 = 1;
} else { 
    $q5bool3 = 0;
}
if ( isset($_POST['q5bool4']) ) {
    $q5bool4 = 1;
} else { 
    $q5bool4 = 0;
}
//Checks to find Question 6 Answer
if ( isset($_POST['q6bool1']) ) {
    $q6bool1 = 1;
} else { 
    $q6bool1 = 0;
}
if ( isset($_POST['q6bool2']) ) {
    $q6bool2 = 1;
} else { 
    $q6bool2 = 0;
}
if ( isset($_POST['q6bool3']) ) {
    $q6bool3 = 1;
} else { 
    $q6bool3 = 0;
}
if ( isset($_POST['q6bool4']) ) {
    $q6bool4 = 1;
} else { 
    $q6bool4 = 0;
}
//Checks to find Question 7 Answer
if ( isset($_POST['q7bool1']) ) {
    $q7bool1 = 1;
} else { 
    $q7bool1 = 0;
}
if ( isset($_POST['q7bool2']) ) {
    $q7bool2 = 1;
} else { 
    $q7bool2 = 0;
}
if ( isset($_POST['q7bool3']) ) {
    $q7bool3 = 1;
} else { 
    $q7bool3 = 0;
}
if ( isset($_POST['q7bool4']) ) {
    $q7bool4 = 1;
} else { 
    $q7bool4 = 0;
}
//Checks to find Question 8 Answer
if ( isset($_POST['q8bool1']) ) {
    $q8bool1 = 1;
} else { 
    $q8bool1 = 0;
}
if ( isset($_POST['q8bool2']) ) {
    $q8bool2 = 1;
} else { 
    $q8bool2 = 0;
}
if ( isset($_POST['q8bool3']) ) {
    $q8bool3 = 1;
} else { 
    $q8bool3 = 0;
}
if ( isset($_POST['q8bool4']) ) {
    $q8bool4 = 1;
} else { 
    $q8bool4 = 0;
}
//Checks to find Question 9 Answer
if ( isset($_POST['q9bool1']) ) {
    $q9bool1 = 1;
} else { 
    $q9bool1 = 0;
}
if ( isset($_POST['q9bool2']) ) {
    $q9bool2 = 1;
} else { 
    $q9bool2 = 0;
}
if ( isset($_POST['q9bool3']) ) {
    $q9bool3 = 1;
} else { 
    $q9bool3 = 0;
}
if ( isset($_POST['q9bool4']) ) {
    $q9bool4 = 1;
} else { 
    $q9bool4 = 0;
}
//Checks to find Question 10 Answer
if ( isset($_POST['q10bool1']) ) {
    $q10bool1 = 1;
} else { 
    $q10bool1 = 0;
}
if ( isset($_POST['q10bool2']) ) {
    $q10bool2 = 1;
} else { 
    $q10bool2 = 0;
}
if ( isset($_POST['q10bool3']) ) {
    $q10bool3 = 1;
} else { 
    $q10bool3 = 0;
}
if ( isset($_POST['q10bool4']) ) {
    $q10bool4 = 1;
} else { 
    $q10bool4 = 0;
}


if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 
    
    else {
        //$email = $_SESSION['email'];
     
        $result = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= '0'");
        $result1 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= '1'");
        $result2 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= '2'");
        $result3 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= '3'");
        $result4 = $conn->query("SELECT * FROM questions WHERE questionemail='$email' and gameid= '4'");

        if ($result->num_rows == 0 ){ // Game 0 doesn't exist
                 
                 $gameid = 0;    
                 $INSERT = "INSERT INTO questions(questionemail, gamename, gameid, question1, q1answer1, q1answer2, q1answer3, q1answer4, q1bool1, q1bool2, q1bool3, q1bool4,"
                . " question2, q2answer1, q2answer2, q2answer3, q2answer4, q2bool1, q2bool2, q2bool3, q2bool4,"
                . " question3, q3answer1, q3answer2, q3answer3, q3answer4, q3bool1, q3bool2, q3bool3, q3bool4,"
                . " question4, q4answer1, q4answer2, q4answer3, q4answer4, q4bool1, q4bool2, q4bool3, q4bool4,"
                . " question5, q5answer1, q5answer2, q5answer3, q5answer4, q5bool1, q5bool2, q5bool3, q5bool4,"
                . " question6, q6answer1, q6answer2, q6answer3, q6answer4, q6bool1, q6bool2, q6bool3, q6bool4,"
                . " question7, q7answer1, q7answer2, q7answer3, q7answer4, q7bool1, q7bool2, q7bool3, q7bool4,"
                . " question8, q8answer1, q8answer2, q8answer3, q8answer4, q8bool1, q8bool2, q8bool3, q8bool4,"
                . " question9, q9answer1, q9answer2, q9answer3, q9answer4, q9bool1, q9bool2, q9bool3, q9bool4,"
                . " question10, q10answer1, q10answer2, q10answer3, q10answer4, q10bool1, q10bool2, q10bool3, q10bool4)"
                . " values ('$email','$gamename','$gameid','$question1','$q1answer1','$q1answer2','$q1answer3','$q1answer4','$q1bool1','$q1bool2','$q1bool3','$q1bool4',
                    '$question2','$q2answer1','$q2answer2','$q2answer3','$q2answer4','$q2bool1', '$q2bool2', '$q2bool3', '$q2bool4',
                    '$question3','$q3answer1','$q3answer2','$q3answer3','$q3answer4','$q3bool1', '$q3bool2', '$q3bool3', '$q3bool4',
                    '$question4','$q4answer1','$q4answer2','$q4answer3','$q4answer4','$q4bool1', '$q4bool2', '$q4bool3', '$q4bool4',
                    '$question5','$q5answer1','$q5answer2','$q5answer3','$q5answer4','$q5bool1', '$q5bool2', '$q5bool3', '$q5bool4',
                    '$question6','$q6answer1','$q6answer2','$q6answer3','$q6answer4','$q6bool1', '$q6bool2', '$q6bool3', '$q6bool4',
                    '$question7','$q7answer1','$q7answer2','$q7answer3','$q7answer4','$q7bool1', '$q7bool2', '$q7bool3', '$q7bool4',
                    '$question8','$q8answer1','$q8answer2','$q8answer3','$q8answer4','$q8bool1', '$q8bool2', '$q8bool3', '$q8bool4',
                    '$question9','$q9answer1','$q9answer2','$q9answer3','$q9answer4','$q9bool1', '$q9bool2', '$q9bool3', '$q9bool4',
                    '$question10','$q10answer1','$q10answer2','$q10answer3','$q10answer4','$q10bool1', '$q10bool2', '$q10bool3', '$q10bool4')";

        
                            if ($conn->query($INSERT)){
                              header("location: db_return.php"); 
                             
                             }
     
                               else{
                                 echo "Error: ". $INSERT ."
                                   ". $conn->error;
                                             }
        } 
            elseif ( $result1->num_rows == 0 ){ // Game 1 doesn't exist
                 $gameid = 1;
                 $INSERT = "INSERT INTO questions (questionemail, gamename, gameid, question1, q1answer1, q1answer2,q1answer3, q1answer4, q1bool1, q1bool2, q1bool3, q1bool4,"
                . " question2, q2answer1, q2answer2, q2answer3, q2answer4, q2bool1, q2bool2, q2bool3, q2bool4,"
                . " question3, q3answer1, q3answer2, q3answer3, q3answer4, q3bool1, q3bool2, q3bool3, q3bool4,"
                . " question4, q4answer1, q4answer2, q4answer3, q4answer4, q4bool1, q4bool2, q4bool3, q4bool4,"
                . " question5, q5answer1, q5answer2, q5answer3, q5answer4, q5bool1, q5bool2, q5bool3, q5bool4,"
                . " question6, q6answer1, q6answer2, q6answer3, q6answer4, q6bool1, q6bool2, q6bool3, q6bool4,"
                . " question7, q7answer1, q7answer2, q7answer3, q7answer4, q7bool1, q7bool2, q7bool3, q7bool4,"
                . " question8, q8answer1, q8answer2, q8answer3, q8answer4, q8bool1, q8bool2, q8bool3, q8bool4,"
                . " question9, q9answer1, q9answer2, q9answer3, q9answer4, q9bool1, q9bool2, q9bool3, q9bool4,"
                . " question10, q10answer1, q10answer2, q10answer3, q10answer4, q10bool1, q10bool2, q10bool3, q10bool4)"
                . " values ('$email','$gamename','$gameid','$question1','$q1answer1','$q1answer2','$q1answer3','$q1answer4','$q1bool1','$q1bool2','$q1bool3','$q1bool4',
                    '$question2','$q2answer1','$q2answer2','$q2answer3','$q2answer4','$q2bool1', '$q2bool2', '$q2bool3', '$q2bool4',
                    '$question3','$q3answer1','$q3answer2','$q3answer3','$q3answer4','$q3bool1', '$q3bool2', '$q3bool3', '$q3bool4',
                    '$question4','$q4answer1','$q4answer2','$q4answer3','$q4answer4','$q4bool1', '$q4bool2', '$q4bool3', '$q4bool4',
                    '$question5','$q5answer1','$q5answer2','$q5answer3','$q5answer4','$q5bool1', '$q5bool2', '$q5bool3', '$q5bool4',
                    '$question6','$q6answer1','$q6answer2','$q6answer3','$q6answer4','$q6bool1', '$q6bool2', '$q6bool3', '$q6bool4',
                    '$question7','$q7answer1','$q7answer2','$q7answer3','$q7answer4','$q7bool1', '$q7bool2', '$q7bool3', '$q7bool4',
                    '$question8','$q8answer1','$q8answer2','$q8answer3','$q8answer4','$q8bool1', '$q8bool2', '$q8bool3', '$q8bool4',
                    '$question9','$q9answer1','$q9answer2','$q9answer3','$q9answer4','$q9bool1', '$q9bool2', '$q9bool3', '$q9bool4',
                    '$question10','$q10answer1','$q10answer2','$q10answer3','$q10answer4','$q10bool1', '$q10bool2', '$q10bool3', '$q10bool4')";

        
                            if ($conn->query($INSERT)){
                              header("location: db_return.php"); 
                             
                             }
     
                               else{
                                 echo "Error: ". $INSERT ."
                                   ". $conn->error;
                                             }
        } 
        elseif($result2->num_rows == 0){ //game 2 does not exist
            $gameid = 2;
            $INSERT = "INSERT INTO questions (questionemail, gamename, gameid, question1, q1answer1, q1answer2,q1answer3, q1answer4, q1bool1, q1bool2, q1bool3, q1bool4,"
                . " question2, q2answer1, q2answer2, q2answer3, q2answer4, q2bool1, q2bool2, q2bool3, q2bool4,"
                . " question3, q3answer1, q3answer2, q3answer3, q3answer4, q3bool1, q3bool2, q3bool3, q3bool4,"
                . " question4, q4answer1, q4answer2, q4answer3, q4answer4, q4bool1, q4bool2, q4bool3, q4bool4,"
                . " question5, q5answer1, q5answer2, q5answer3, q5answer4, q5bool1, q5bool2, q5bool3, q5bool4,"
                . " question6, q6answer1, q6answer2, q6answer3, q6answer4, q6bool1, q6bool2, q6bool3, q6bool4,"
                . " question7, q7answer1, q7answer2, q7answer3, q7answer4, q7bool1, q7bool2, q7bool3, q7bool4,"
                . " question8, q8answer1, q8answer2, q8answer3, q8answer4, q8bool1, q8bool2, q8bool3, q8bool4,"
                . " question9, q9answer1, q9answer2, q9answer3, q9answer4, q9bool1, q9bool2, q9bool3, q9bool4,"
                . " question10, q10answer1, q10answer2, q10answer3, q10answer4, q10bool1, q10bool2, q10bool3, q10bool4)"
                . " values ('$email','$gamename','$gameid','$question1','$q1answer1','$q1answer2','$q1answer3','$q1answer4','$q1bool1','$q1bool2','$q1bool3','$q1bool4',
                    '$question2','$q2answer1','$q2answer2','$q2answer3','$q2answer4','$q2bool1', '$q2bool2', '$q2bool3', '$q2bool4',
                    '$question3','$q3answer1','$q3answer2','$q3answer3','$q3answer4','$q3bool1', '$q3bool2', '$q3bool3', '$q3bool4',
                    '$question4','$q4answer1','$q4answer2','$q4answer3','$q4answer4','$q4bool1', '$q4bool2', '$q4bool3', '$q4bool4',
                    '$question5','$q5answer1','$q5answer2','$q5answer3','$q5answer4','$q5bool1', '$q5bool2', '$q5bool3', '$q5bool4',
                    '$question6','$q6answer1','$q6answer2','$q6answer3','$q6answer4','$q6bool1', '$q6bool2', '$q6bool3', '$q6bool4',
                    '$question7','$q7answer1','$q7answer2','$q7answer3','$q7answer4','$q7bool1', '$q7bool2', '$q7bool3', '$q7bool4',
                    '$question8','$q8answer1','$q8answer2','$q8answer3','$q8answer4','$q8bool1', '$q8bool2', '$q8bool3', '$q8bool4',
                    '$question9','$q9answer1','$q9answer2','$q9answer3','$q9answer4','$q9bool1', '$q9bool2', '$q9bool3', '$q9bool4',
                    '$question10','$q10answer1','$q10answer2','$q10answer3','$q10answer4','$q10bool1', '$q10bool2', '$q10bool3', '$q10bool4')";

        
                            if ($conn->query($INSERT)){
                                 header("location: db_return.php"); 
                             
                             }
     
                               else{
                                 echo "Error: ". $INSERT ."
                                   ". $conn->error;
                                             }
            
        }
        elseif($result3->num_rows == 0){ //game 3 does not exist
            $gameid = 3;
            $INSERT = "INSERT INTO questions (questionemail, gamename, gameid, question1, q1answer1, q1answer2,q1answer3, q1answer4, q1bool1, q1bool2, q1bool3, q1bool4,"
                . " question2, q2answer1, q2answer2, q2answer3, q2answer4, q2bool1, q2bool2, q2bool3, q2bool4,"
                . " question3, q3answer1, q3answer2, q3answer3, q3answer4, q3bool1, q3bool2, q3bool3, q3bool4,"
                . " question4, q4answer1, q4answer2, q4answer3, q4answer4, q4bool1, q4bool2, q4bool3, q4bool4,"
                . " question5, q5answer1, q5answer2, q5answer3, q5answer4, q5bool1, q5bool2, q5bool3, q5bool4,"
                . " question6, q6answer1, q6answer2, q6answer3, q6answer4, q6bool1, q6bool2, q6bool3, q6bool4,"
                . " question7, q7answer1, q7answer2, q7answer3, q7answer4, q7bool1, q7bool2, q7bool3, q7bool4,"
                . " question8, q8answer1, q8answer2, q8answer3, q8answer4, q8bool1, q8bool2, q8bool3, q8bool4,"
                . " question9, q9answer1, q9answer2, q9answer3, q9answer4, q9bool1, q9bool2, q9bool3, q9bool4,"
                . " question10, q10answer1, q10answer2, q10answer3, q10answer4, q10bool1, q10bool2, q10bool3, q10bool4)"
                . " values ('$email','$gamename','$gameid','$question1','$q1answer1','$q1answer2','$q1answer3','$q1answer4','$q1bool1','$q1bool2','$q1bool3','$q1bool4',
                    '$question2','$q2answer1','$q2answer2','$q2answer3','$q2answer4','$q2bool1', '$q2bool2', '$q2bool3', '$q2bool4',
                    '$question3','$q3answer1','$q3answer2','$q3answer3','$q3answer4','$q3bool1', '$q3bool2', '$q3bool3', '$q3bool4',
                    '$question4','$q4answer1','$q4answer2','$q4answer3','$q4answer4','$q4bool1', '$q4bool2', '$q4bool3', '$q4bool4',
                    '$question5','$q5answer1','$q5answer2','$q5answer3','$q5answer4','$q5bool1', '$q5bool2', '$q5bool3', '$q5bool4',
                    '$question6','$q6answer1','$q6answer2','$q6answer3','$q6answer4','$q6bool1', '$q6bool2', '$q6bool3', '$q6bool4',
                    '$question7','$q7answer1','$q7answer2','$q7answer3','$q7answer4','$q7bool1', '$q7bool2', '$q7bool3', '$q7bool4',
                    '$question8','$q8answer1','$q8answer2','$q8answer3','$q8answer4','$q8bool1', '$q8bool2', '$q8bool3', '$q8bool4',
                    '$question9','$q9answer1','$q9answer2','$q9answer3','$q9answer4','$q9bool1', '$q9bool2', '$q9bool3', '$q9bool4',
                    '$question10','$q10answer1','$q10answer2','$q10answer3','$q10answer4','$q10bool1', '$q10bool2', '$q10bool3', '$q10bool4')";

        
                            if ($conn->query($INSERT)){
                             header("location: db_return.html");   
                             
                             }
     
                               else{
                                 echo "Error: ". $INSERT ."
                                   ". $conn->error;
                                             }
            
        }
        elseif($result4->num_rows == 0){ //game 4 does not exist
            $gameid = 4;
            $INSERT = "INSERT INTO questions (questionemail, gamename, gameid, question1, q1answer1, q1answer2,q1answer3, q1answer4, q1bool1, q1bool2, q1bool3, q1bool4,"
                . " question2, q2answer1, q2answer2, q2answer3, q2answer4, q2bool1, q2bool2, q2bool3, q2bool4,"
                . " question3, q3answer1, q3answer2, q3answer3, q3answer4, q3bool1, q3bool2, q3bool3, q3bool4,"
                . " question4, q4answer1, q4answer2, q4answer3, q4answer4, q4bool1, q4bool2, q4bool3, q4bool4,"
                . " question5, q5answer1, q5answer2, q5answer3, q5answer4, q5bool1, q5bool2, q5bool3, q5bool4,"
                . " question6, q6answer1, q6answer2, q6answer3, q6answer4, q6bool1, q6bool2, q6bool3, q6bool4,"
                . " question7, q7answer1, q7answer2, q7answer3, q7answer4, q7bool1, q7bool2, q7bool3, q7bool4,"
                . " question8, q8answer1, q8answer2, q8answer3, q8answer4, q8bool1, q8bool2, q8bool3, q8bool4,"
                . " question9, q9answer1, q9answer2, q9answer3, q9answer4, q9bool1, q9bool2, q9bool3, q9bool4,"
                . " question10, q10answer1, q10answer2, q10answer3, q10answer4, q10bool1, q10bool2, q10bool3, q10bool4)"
                . " values ('$email','$gamename','$gameid','$question1','$q1answer1','$q1answer2','$q1answer3','$q1answer4','$q1bool1','$q1bool2','$q1bool3','$q1bool4',
                    '$question2','$q2answer1','$q2answer2','$q2answer3','$q2answer4','$q2bool1', '$q2bool2', '$q2bool3', '$q2bool4',
                    '$question3','$q3answer1','$q3answer2','$q3answer3','$q3answer4','$q3bool1', '$q3bool2', '$q3bool3', '$q3bool4',
                    '$question4','$q4answer1','$q4answer2','$q4answer3','$q4answer4','$q4bool1', '$q4bool2', '$q4bool3', '$q4bool4',
                    '$question5','$q5answer1','$q5answer2','$q5answer3','$q5answer4','$q5bool1', '$q5bool2', '$q5bool3', '$q5bool4',
                    '$question6','$q6answer1','$q6answer2','$q6answer3','$q6answer4','$q6bool1', '$q6bool2', '$q6bool3', '$q6bool4',
                    '$question7','$q7answer1','$q7answer2','$q7answer3','$q7answer4','$q7bool1', '$q7bool2', '$q7bool3', '$q7bool4',
                    '$question8','$q8answer1','$q8answer2','$q8answer3','$q8answer4','$q8bool1', '$q8bool2', '$q8bool3', '$q8bool4',
                    '$question9','$q9answer1','$q9answer2','$q9answer3','$q9answer4','$q9bool1', '$q9bool2', '$q9bool3', '$q9bool4',
                    '$question10','$q10answer1','$q10answer2','$q10answer3','$q10answer4','$q10bool1', '$q10bool2', '$q10bool3', '$q10bool4')";

        
                            if ($conn->query($INSERT)){
                            header("location: db_return.php");     
                             
                             }
     
                               else{
                                 echo "Error: ". $INSERT ."
                                   ". $conn->error;
                                             }
            
        }
        
        else{
            echo "All Game Slots are Filled! Delete One!";
            
        }
        
        
        
                                                }
                                                  $conn->close();
   
?>













    
    





