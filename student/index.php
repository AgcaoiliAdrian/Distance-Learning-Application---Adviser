<?php
    session_start();
    $page="Home";
    include './auth.php';
    include '../includes/db_connection.php';
    $user_id = $_SESSION['id'];
    
$sql = "select * from users where id = $user_id; ";
$result = mysqli_query($con, $sql);


?>

<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="UTF-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="viewport" content="width=device-width, initial-scale=1.0" />
      <title>Student</title>

      <script src="./script/sidebar.js"></script>
      <script src="../tailwind/tailwind-cdn.js"></script>

      <link rel="stylesheet" href="./css/style.css" />
      <link rel="stylesheet" href="../css/all-styles.css" />
      <link rel="stylesheet" href="../css/dashboard.css" />
      <link rel="stylesheet" href="../css/navbar.css" />
      <link rel="stylesheet" href="./css/main.css" />
      <link
         rel="stylesheet"
         href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css"
      />
   </head>
   <body>
      <?php
            if (mysqli_num_rows($result) >
      0) { while($row = mysqli_fetch_assoc($result)) { if($row['status'] ==
      'info') { include './components/details-form.php'; } else
      if($row['status'] == 'application'){ include './components/app-form.php';
      } else { include './components/waiting.php'; } } } ?>

      <?php if(isset($_GET['message'])) : ?>
      <div
         class="flash-data"
         data-flashdata="<?php echo $_GET['message']; ?>"
      ></div>
      <?php endif; ?>

      <script src="../sweetalert2/jquery-3.6.0.min.js"></script>
      <script src="../sweetalert2/sweetalert2.all.min.js"></script>
      <script>
         const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire({
               position: 'center',
               icon: 'success',
               title: 'Application submitted!',
               text: 'Thank you for submitting your application. ',
               showConfirmButton: true,
            }).then(function () {
               window.location = './index.php';
            });
         }
      </script>
   </body>
</html>
