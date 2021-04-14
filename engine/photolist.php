<?php

    $table = 'gallery'; //задаем имя таблицы в переменной
    $sql = "SELECT*FROM ".$table." WHERE id > 0";

    $result = mysqli_query($link, $sql) or die(mysqli_error($link));

    for($photolist = []; $row=mysqli_fetch_assoc($result); $photolist[]=$row);


?>