<?php 
  session_start();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width= , initial-scale=1.0" />
    <title>Document</title>
    <script src="./tailwind/tailwind-cdn.js"></script>
    <link rel="stylesheet" href="./css/all-styles.css" />
     <link rel="icon" type="image/png" href="./favicon.ico"/>
  </head>
  <body>
    <div class="container m-auto my-16 flex justify-center">
      <div class="p-16 shadow rounded-lg w-1/3">
        <div class="text-2xl font-semibold uppercase text-center mb-10">
          OTP Login
          
        </div>
         <small>USER ID:  <?php echo $_SESSION['temp_id']; ?></small><br/>
        <form action="./server/validate_otp.php" method="POST">
          <input
            type="number"
            name="otp"
            class="p-3 rounded w-full bg-gray-200 border border-gray-30"
            placeholder="Input code"
            required          />
          <br />
          <button type="submit" class="bg-blue-700 w-full py-3 text-white mt-6">
            Validate
          </button>
        </form>
      </div>
    </div>

     <?php if(isset($_GET['message'])) : ?>
      <div
         class="flash-data"
         data-flashdata="<?php echo $_GET['message']; ?>"
      ></div>
      <?php endif; ?>

      <script src="./sweetalert2/jquery-3.6.0.min.js"></script>
      <script src="./sweetalert2/sweetalert2.all.min.js"></script>
      <script>
         const flashdata = $('.flash-data').data('flashdata');

         if (flashdata) {
            Swal.fire(
               'Invalid OTP!',
               'An OTP was sent to your email.',
               'error'
            ).then(function () {
               window.location = './otp.php';
            });
         }
      </script>
  </body>
</html>
