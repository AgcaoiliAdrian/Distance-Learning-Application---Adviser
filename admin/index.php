<?php $page = "dashboard"; 

require '../includes/db_connection.php';

include './auth.php';

// PENDING
$get_pending = mysqli_query($con, "select COUNT(*) FROM application where status = 'pending';");
 $no_of_pending = $get_pending->fetch_row();

 // PENDING
$all = mysqli_query($con, "select COUNT(*) FROM application;");
 $all_app = $all->fetch_row();


?>

<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Admin | Dashboard</title>
      <?php include '../includes/links.php'; ?>

      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />
       <link rel="icon" type="image/png" href="../favicon.ico"/>

      <!-- Charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

      <script src="../tailwind/tailwind-cdn.js"></script>
   </head>
   <body class="bg-gray-100 h-full">
      <div class="sticky"> <?php include './components/navbar.php'; ?></div>
     
      <div class="container mx-auto mt-10">
         <div class="flex items-center">
            <div class="text-3xl text-gray-800 font-semibold">
               ADMIN DASHBOARD
            </div>

            <div class="ml-auto">
               <a href="./enrollment.php">
                  <button
                     class="bg-gray-800 px-5 py-2 text-lg text-white rounded hover:bg-sky-800"
                  >
                     View applicants &nbsp;
                     <i class="fa fa-chevron-right"></i></button
               ></a>
            </div>
         </div>

         <div class="mt-8">
            <div class="uk-child-width-expand@l" uk-grid>
               <!-- One -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                        Pending applicants
                        <div class="text-5xl font-medium text-black pt-2">
                          <?php echo $no_of_pending[0];?>
                        </div>
                     </div>

                     <div
                        class="float-right bg-pink-600 text-white p-6 rounded"
                     >
                        <i class="fa fa-clock-o text-4xl"></i>
                     </div>
                  </div>
               </div>
               <!-- Two -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                         Total no of Applicants
                        <div class="text-5xl font-medium text-black pt-2">
                           <?php echo $all_app[0];?>
                        </div>
                     </div>

                     <div class="float-right bg-sky-500 text-white p-6 rounded">
                        <i class="fa fa-users text-4xl"></i>
                     </div>
                  </div>
               </div>
               <!-- Three -->
               <div>
                  <div class="uk-card shadow-sm bg-white uk-card-body rounded">
                     <div class="text-lg float-left pb-0 mt-1">
                        Graduates
                        <div class="text-5xl font-medium text-black pt-2">
                           0
                        </div>
                     </div>

                     <div
                        class="float-right bg-orange-400 text-white p-6 rounded"
                     >
                        <i class="fa fa-graduation-cap text-4xl"></i>
                     </div>
                  </div>
               </div>
            </div>
         </div>

         <!-- GRAPHS -->
         <div class="mt-6 flex">
            <div class="uk-card rounded uk-card-default uk-width-1-2@m">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom text-lg">
                           No. of Applicants Per Program
                        </p>
                     </div>
                  </div>
               </div>
               <div class="uk-card-body rounded">
                  <canvas id="barStudents" style="width: 100%"></canvas>
               </div>
               <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text"
                     >View enrollees ></a
                  >
               </div>
            </div>

            <!-- right -->
            <div class="uk-card rounded uk-card-default uk-width-1-2@m ml-10">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom text-lg">
                           Male and Female Students
                        </p>
                     </div>
                  </div>
               </div>
               <div class="uk-card-body rounded flex justify-center">
                  <canvas id="pieStatus" style="width: 100%"></canvas>
               </div>
               <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text"
                     >View Students ></a
                  >
               </div>
            </div>
         </div>
      </div>

      <!-- Chart -->
      <script src="../js/chart.js"></script>
   </body>
</html>
