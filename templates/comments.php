<?php

    include '../engine/commentslist.php';

    foreach ($commlist as $value) {
        echo($value['date'].' / '.$author_name.'<br>');
        echo($value['comment'].'<br>');
        if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) { 
            if ($value['user_id'] == $userdata['user_id']) {
                $delcom = '../engine/deletecom.php?commid='.$value['id'];
                echo ("<a href='{$delcom}'>Удалить комментарий</a>");
            } 
        }
        echo('<br><br>');
    }

?>