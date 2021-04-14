<?php 
 if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) { 
?>

  <h3>Добавить комментарий</h3>

    <form method='post' action="index.php">
    <input type='hidden' name='photoid' required value="<?php echo($value['id']);?>">   
    <input type='hidden' name='author' required value="<?php echo($userdata['user_id']);?>"> 
    <input type='text' name='comment' required placeholder="Комментарий"><br><br> 
    <input type='submit' value='Добавить' >
    </form>   
  

<?php
 } 
?>