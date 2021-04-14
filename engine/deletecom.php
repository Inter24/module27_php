<?php

include '../config/config.php';

$table = 'comments'; //задаем имя таблицы в переменной
$sql = "DELETE FROM ".$table." WHERE id=".$_GET['commid']."";
//print_r($sql);
    
$result = mysqli_query($link, $sql) or die(mysqli_error($link));
header("Location: ../public_html/index.php"); exit();


?>