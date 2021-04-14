
<?php
echo ("<h1>Галлерея</h1>");
echo ("<div class='gallery_list'>");
foreach ($photolist as $value) {
    echo ("<div class='gallery_item'>");
    echo ("<img src=". UPLOAD_DIR . '/' . $value['photo']."><br>");


    if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) { 

        if ($value['user_id'] == $userdata['user_id']) {
            $delhref = '../engine/deletephoto.php?photoid='.$value['id'];
            echo ("<a href='{$delhref}'>Удалить фото</a>");
        }    

        include '../templates/addcomment.php';
        echo ("<br>");
    }
    
    include '../templates/comments.php';

    echo ("</div>");
}
echo ("</div>");
?>