<?php 

$stat = "users";
$page = "settings";
include './auth.php';

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin | Enrollment</title>

    <?php include '../includes/links.php'; ?>

    <link rel="stylesheet" href="../css/all-styles.css" />
    <link rel="stylesheet" href="../css/dashboard.css" />
    <link rel="stylesheet" href="../css/navbar.css" />
    <link rel="stylesheet" href="../css/settings.css" />

    <script src="../tailwind/tailwind-cdn.js"></script>
  </head>
  <body class="bg-gray-100 h-screen">
    <?php include './components/navbar.php'; ?>
    <div class="container mx-auto mt-10">
      <div class="flex items-center mb-13">
        <div class="text-3xl text-gray-700 font-semibold flex items-center">
          SETTINGS
          <ul class="uk-breadcrumb">
            <li><a href=""></a></li>
            <li><span class="font-light">Manage account</span></li>
          </ul>
        </div>
      </div>

      <div class="mt-16 grid">
        <div class="uk-child-width-expand@s" uk-grid>
          <div class="uk-width-1-4@m">
            <!-- SIDEBAR HERE -->
            <?php include './components/sidebar-settings.php';?>
          </div>
          <div class="uk-width-expand p-8 bg-white ml-5">
            <!-- CONTENT HERE -->
            Users
          </div>
        </div>
      </div>
    </div>
  </body>
</html>
