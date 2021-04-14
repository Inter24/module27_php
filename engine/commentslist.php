<?php

    $table = 'comments'; //задаем имя таблицы в переменной
    $sql = "SELECT*FROM ".$table." WHERE photo_id = ".$value['id']."";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    for($commlist = []; $row=mysqli_fetch_assoc($result); $commlist[]=$row);
    
    foreach ($commlist as $value) {
        $table = 'users'; //задаем имя таблицы в переменной
        $sql = "SELECT user_login FROM ".$table." WHERE user_id = ".$value['user_id']."";
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        $row=mysqli_fetch_assoc($result);     
        $author_name = $row['user_login'];   
    }

    

?>