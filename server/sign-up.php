<?php
  
     include '../includes/db_connection.php';

     use PHPMailer\PHPMailer\PHPMailer;
     use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

     $user_id = rand(1000000,9999999);
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $password = $_POST['password'];

     $generate_otp = rand(10000,99999);
    
    

    $insert_user = mysqli_query($con, 
    "insert into users(id, email, password, role) 
    values($user_id, '$email', '$password', 'student');");
    

    $insert_details = mysqli_query($con, 
    "insert into user_details(user_id, first_name, last_name) 
    values($user_id, '$first_name', '$last_name');");

    if($insert_user && $insert_details) {
         include './send_otp.php';
    } else {
         echo 'failed';
    }


    

    
?>