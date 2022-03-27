<?php

    
$page = "profile";

session_start();
include './auth.php';
include '../includes/db_connection.php';

$user_id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>User</title>
      <link rel="stylesheet" href="./css/style.css" />
      <script src="./script/sidebar.js"></script>
      <link
         rel="stylesheet"
         href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
      />
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
      />
      <script src="./script/sidebar.js"></script>
      <script src="../tailwind/tailwind-cdn.js"></script>

      <link rel="stylesheet" href="./css/style.css" />
      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />
      <link rel="stylesheet" href="./css/main.css" />
   </head>
   <body>
      <?php include './components/sidebar.php'; ?>
      <!-- Box -->

      <div class="bg-white block sm:mt-20">
         <div class="max-w-2xl mx-auto shadow-lg font-sans">
            <!--Profile Picture-->
            <div class="w-full">
               <div class="w-full bg-dark-blue h-28 rounded-t-lg">
                  <h3
                     class="text-2xl font-bold text-right text-white mr-9 pt-9"
                  >
                     Profile
                  </h3>
               </div>
               <div class="absolute -mt-24 ml-5">
                  <img
                     src="https://randomuser.me/api/portraits/women/71.jpg"
                     alt=""
                     class="bg-gray-500 border h-40 w-40 rounded-lg shadow-lg border-b"
                  />
               </div>
            </div>

            <!--User Details-->

            <?php 
        
        $sql = "select * from user_details where user_id = $user_id";
        
        $result = mysqli_query($con, $sql);

        while($row = mysqli_fetch_assoc($result)) {
       
        
        ?>
            <button
               class="w-auto mr-8 mt-6 px-2 py-1 rounded hover:bg-gray-200 border border-gray-200 float-right"
            >
               <i class="fa fa-pencil text-gray-500 text-lg"></i>
            </button>
            <div class="bg-primary rounded-b-lg p-7 pt-20 flex flex-col">
               <div class="text-sm mt-2 text-gray-800 pt-2">
                  <div
                     class="flex flex-row ml-auto my-3 space-x-3 items-center text-lg"
                  >
                     <span class="font-bold">Name:</span>
                     <!-- <div class="w-20"></div> -->
                     <span class="font-normal"
                        ><?php echo $row['first_name'] ." ".  $row['last_name'];?></span
                     >
                  </div>
                  <div
                     class="flex flex-row ml-auto mb-3 space-x-3 items-center text-lg mt-2"
                  >
                     <span class="font-bold">Gender:</span>
                     <!-- <div class="w-14"></div> -->
                     <span class=""><?php echo $row['gender'];?></span>
                  </div>
                  <div
                     class="flex flex-row ml-auto mb-3 space-x-3 items-center text-lg mt-2"
                  >
                     <span class="font-bold">Contact No:</span>
                     <!-- <div class="w-8"></div> -->
                     <span class=""><?php echo $row['mobile'];?></span>
                  </div>
                  <div
                     class="flex flex-row ml-auto mb-3 space-x-3 items-center text-lg mt-2"
                  >
                     <span class="font-bold">Email:</span>
                     <!-- <div class="w-20"></div> -->
                     <span class=""><?php echo $row['email'];?></span>
                  </div>
                  <div
                     class="flex flex-row ml-auto mb-3 space-x-3 items-center text-lg mt-2"
                  >
                     <span class="font-bold">Address:</span>
                     <!-- <div class="w-14"></div> -->
                     <span class=""
                        ><?php echo $row['barangay'] . ", ". $row['city'] .", ". $row['country'];?></span
                     >
                  </div>

                  <div
                     class="flex flex-row ml-auto mb-3 space-x-3 items-center text-lg mt-2"
                  >
                     <span class="font-bold">Birthdate:</span>
                     <!-- <div class="w-14"></div> -->
                     <span class=""><?php echo $row['birthdate'];?></span>
                  </div>

                  

                  <!-- <div class="bg-gray-200 h-1 w-m-2xl mt-7 rounded-full"></div> -->
               </div>

               <div class="text-sm mt-10 text-gray-800">
                  <div
                     class="  mb-3 space-x-1 items-center text-lg"
                  >
                  
                     <span class="font-bold "
                        >College/ University Attended:</span
                     >
<br />
                     <span class="font-normal"
                        ><?php echo $row['university'];?></span
                     >
                  </div>
                  <div
                     class=" mb-3 space-x-1 items-center text-lg mt-4"
                  >
                     <span class="font-bold">Degree finished:</span>
    <br/> 
                     <span class="font-normal"
                        ><?php echo $row['degree'];?></span
                     >
                  </div>
               </div>
            </div>

            <?php 
        }
        ?>
         </div>
      </div>
   </body>
</html>
