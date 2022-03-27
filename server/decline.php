<?php
session_start();
include '../includes/db_connection.php';

require '../phpmailer/PHPMailer.php';
require '../phpmailer/SMTP.php';
require '../phpmailer/Exception.php';
    
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

$user_id = $_GET["id"];


$sql = "update application SET status = 'declined' WHERE user_id = $user_id;";
$result = mysqli_query($con, $sql);

    if ($result) {

          $get_email = mysqli_query($con, "select email from users where id = $user_id;");
          $email = $get_email->fetch_row();
          

          //Create instance of PHPMailer
	        $mail = new PHPMailer();
         
          //Set mailer to use smtp
          $mail->isSMTP();
        
          //$mail->SMTPDebug = 3;

          //Define smtp host
          $mail->Host = "smtp.gmail.com";
    
          //Enable smtp authentication
          $mail->SMTPAuth = true;
     
          //Set smtp encryption type (ssl/tls)
          $mail->SMTPSecure = "tls";
    
          //Port to connect smtp
          $mail->Port = "587";


          //Set email     
          $mail->Username = "distance.learning.wmsu@gmail.com";
          
          //Set gmail password
          $mail->Password = "dlearningwmsu";
    
          $mail->setFrom('distance.learning.wmsu@gmail.com');
          $mail->FromName = "Distance Learning WMSU";

          //Enable HTML              
          $mail->isHTML(true);
            
          $mail->Subject = "Application declined! Your application has been declined.";
                        
          //Email bsody
          $mail->Body = "<h4>Application declined.</h4>
                         <p></p>";
    
          //Add recipient
          $mail->addAddress("$email[0]");

          //Address to which recipient will reply
          $mail->addReplyTo("distance.learning.wmsu@gmail.com", "Reply");

          //Provide file path and name of the attachments
          // $mail->addAttachment("file.txt", "File.txt");        
          // $mail->addAttachment("images/profile.png"); //Filename is optional
            
                       
          if($mail->send()){
              header("location: ../admin/view-answers.php?id=$user_id&message=success");
          }
  
 
    } else {
      echo "Error updating record: " . mysqli_error($con);
    }

?>