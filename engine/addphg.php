<?php

$errors = [];

//var_dump($_FILES);
 
if (!empty($_FILES)) {
 
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
 
        $fileName = $_FILES['files']['name'][$i];
 
        if ($_FILES['files']['size'][$i] > UPLOAD_MAX_SIZE) {
            $errors[] = 'Недопустимый размер файла ' . $fileName;
            continue;
        }
 
        if (!in_array($_FILES['files']['type'][$i], ALLOWED_TYPES)) {
            $errors[] = 'Недопустимый формат файла ' . $fileName;
            continue;
        }
 
        $filePath = UPLOAD_DIR . '/' . basename($fileName);
 
        if (!move_uploaded_file($_FILES['files']['tmp_name'][$i], $filePath)) {
            $errors[] = 'Ошибка загрузки файла ' . $fileName;
            continue;             
        }

        $table = 'gallery'; //задаем имя таблицы в переменной
        $sql = "INSERT INTO ".$table." (photo, user_id) VALUES ('".$fileName."', '".$userdata['user_id']."') ";
        //print_r($sql);
            
        $result = mysqli_query($link, $sql) or die(mysqli_error($link));
        header("Location: index.php"); exit();

    }
}

?>