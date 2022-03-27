<?php
   include ("../includes/db_connection.php");
   session_start();
   
   if(isset($_POST['email'])){
       $email = $_POST['email'];
       $password = $_POST['password'];
     

       $sql = mysqli_query($con, "select * from users where email = '$email' AND  password = '$password' limit 1");
      

        if(mysqli_num_rows($sql) > 0){
            while($row = mysqli_fetch_assoc($sql)){
            
                $email = $row["email"];

                if($row["role"] == "admin"){
                 
                    $_SESSION['role'] = $row["role"];
                    header("location: ../admin/");
                } else if ($row["role"] == "student"){
                    
                    if($row['verified'] == 1){

                        $_SESSION['email'] = $row["email"];
                        $_SESSION['id'] = $row["id"];
                        $_SESSION['first_name'] = $row["first_name"];
                        $_SESSION['last_name'] = $row["last_name"];
                         $_SESSION['role'] = $row["role"];

                        mysqli_query($con, "delete from otp where expired = 1;");
                        header("location: ../student/");

                    }else {

                        $_SESSION['temp_id'] = $row["id"];
                        header("location: ../otp.php");

                    }
                    
                    
                }else{
                   $_SESSION['role'] = $row["role"];
                    header("location: ../adviser/");
                }
            }
        } else {
              header("location: ../index.php?message=error");
        }
    }   

?>

