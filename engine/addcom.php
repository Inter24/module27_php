<?php

//var_dump($_POST);
 
if (!empty($_POST)) {
 
        $table = 'comments'; //задаем имя таблицы в переменной
        $sql = "INSERT INTO ".$table." (photo_id, user_id, date, comment) VALUES ('".$_POST['photoid']."', '".$_POST['author']."','".date("d.m.y:H:i")."','".$_POST['comment']."') ";
       // print_r($sql);
            
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        header("Location: ../public_html/index.php"); exit();

}

?>