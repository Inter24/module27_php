<?php
        error_reporting(E_ALL);
        ini_set('display_errors', 1);

        include '../config/config.php';
        include '../engine/authorization.php';
        include '../engine/photolist.php';
        include '../engine/addphg.php';
        include '../engine/addcom.php';
?>

<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" type="text/css" media="all" href="css/main.css" />
        <title>Gallery</title>
      </head>
      <body>
        <?php
          include '../templates/auth.php';
          include '../templates/addphoto.php';          
          include '../templates/mainpage.php';
        ?>
      </body>
    </html>