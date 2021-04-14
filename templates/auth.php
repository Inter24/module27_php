<?php 

//print_r($_COOKIE);

if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) {

    echo ('Вы вошли как '.$userdata['user_login'].' | <a href="logout.php">Выход</a><br><br>');

} else {

    include '../templates/authblock.php';

}

?>

