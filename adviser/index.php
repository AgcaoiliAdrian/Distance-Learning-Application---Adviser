<?php $page = "dashboard"; 

require '../includes/db_connection.php';
include './auth.php';

//Count Male//
$get_gender_male = mysqli_query($con, "select COUNT(*) FROM user_details where gender = 'Male';");
$no_of_male = $get_gender_male->fetch_row();

//Count Female//
$get_gender_female = mysqli_query($con, "select COUNT(*) FROM user_details where gender = 'Female';");
$no_of_female = $get_gender_female->fetch_row();

//Count Declined//
$get_declined = mysqli_query($con, "select COUNT(*) FROM application where status = 'pending';");
$no_of_declined = $get_declined->fetch_row();

//Count Approved//
$get_approved = mysqli_query($con, "select COUNT(*) FROM application where status = 'approved';");
$no_of_approved = $get_approved->fetch_row();

$sql="SELECT * FROM application";
if ($result=mysqli_query($con,$sql)) {
     $rowcount=mysqli_num_rows($result);
 }
?>
<!DOCTYPE html>
<html>
   <head>
      <meta name="viewport" content="width=device-width, initial-scale=1" />

      <title>Adviser| Dashboard</title>
      <?php include '../includes/links.php'; ?>

      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />

      <!-- Charts -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.5.0/Chart.min.js"></script>

      <script src="../tailwind/tailwind-cdn.js"></script>

   </head>
   <body class="bg-gray-100 h-full">
      <div class="sticky"> <?php include './components/navbar.php'; ?></div>
     
      <div class="container mx-auto mt-10">
         <div class="flex items-center">
            <div class="text-3xl text-gray-800 font-semibold">
               ADVISER DASHBOARD
            </div>

            <div class="ml-auto">
               <a href="./applicants.php">
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
                        Applicants
                        <div class="text-5xl font-medium text-black pt-2">
                           <?php echo ($rowcount); ?>
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
                         Students Enrolled
                        <div class="text-5xl font-medium text-black pt-2">
                           1
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
      <div>
         <div class="mt-6 flex">
            <div class="uk-card rounded uk-card-default uk-width-1-2@m">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom">
                           Approved and Declined Applications
                        </p>
                     </div>
                  </div>
               </div>
               <div class="uk-card-body rounded">
                  <canvas id="barStudent" style="width: 100%"></canvas>
               </div>
               <div class="uk-card-footer">
                  <a href="#" class="uk-button uk-button-text"
                     >View Students ></a
                  >
               </div>
            </div>

            <!-- right -->
            <div class="uk-card rounded uk-card-default uk-width-1-2@m ml-10">
               <div class="uk-card-header">
                  <div class="uk-grid-small uk-flex-middle" uk-grid>
                     <div class="uk-width-expand">
                        <p class="uk-card-title uk-margin-remove-bottom">
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
</div>

<!-- Chart -->
<script>
//Bar Graph//
const ctx_2 = document.getElementById('barStudent').getContext('2d');
const myChart_2 = new Chart(ctx_2, {
    type: 'bar',
    data: {
        labels: ['Applications'],
        datasets: [{
            label: 'Approved',
            data: <?php echo json_encode($no_of_approved)?>,
            backgroundColor: ['#04009A'],
        },{
            label: 'Declined',
            data: <?php echo json_encode($no_of_declined)?>,
            backgroundColor: ['#FF0000' ],
        }
      ],
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

//Pie Chart//
const ctx = document.getElementById('pieStatus').getContext('2d');
var xval = <?php echo json_encode($no_of_male);?>;
var yval = <?php echo json_encode($no_of_male);?>;
const myChart = new Chart(ctx, {
    type: 'pie',
    data: {
        labels: ['Male', 'Female'],
        datasets: [{
            label: 'Male',
            data: [xval, yval],
            backgroundColor: ['#ff8400', '#5a761d'],
        }
      ],
    },
    options: {
      legend: { display: true },
    }
});
</script>
   </body>
</html>