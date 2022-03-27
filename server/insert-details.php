<?php 
session_start();
include '../includes/db_connection.php';

    $user_id = $_SESSION['id'];

    $birthdate = date($_POST['birthdate']);
    $gender = $_POST['gender'];
    $civil = $_POST['civil'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $tel = $_POST['tel'];
    $barangay = $_POST['barangay'];
    $city = $_POST['city'];
    $country = $_POST['country'];
    $university = $_POST['university'];
    $degree = $_POST['degree'];

    $sql = mysqli_query($con, 
    "update user_details set birthdate = '$birthdate', gender = '$gender', civil_stat = '$civil', email = '$email', mobile = '$mobile', tel = '$tel', barangay = '$barangay', city = '$city', country = '$country', university = '$university', degree = '$degree' where user_id = $user_id;");


    if($sql){
        $query = mysqli_query($con, "update users set status = 'application' where id = $user_id;");
        if($query){
             echo '<script>alert("Success")</script>';
            header("location:../student/index.php");
        }
       
    }else{
        echo "Failed: " . mysqli_connect_error();
    }


    

    
?>