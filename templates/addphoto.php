
<?php 
 if (isset($_COOKIE['id']) and isset($_COOKIE['hash'])) { 
?>

    <h1>Добавление фото</h1>

    <form method='post' action="index.php" enctype="multipart/form-data">
    <input type="hidden" name="MAX_FILE_SIZE" value="5000000">
    <input type='file' name='files[]' class='file-drop' id='file-drop' multiple required><br> 
    <small class="form-text text-muted">
        Максимальный размер файла: <?php echo UPLOAD_MAX_SIZE / 1000000; ?>Мб.<br>
        Допустимые форматы: <?php echo implode(', ', ALLOWED_TYPES) ?>.<br>
    </small>
    <input type='submit' value='Загрузить' >
    </form>
    
    <div class='message-div message-div_hidden' id='message-div'></div>

    <?php if (!empty($errors)): ?>
        <div class="alert alert-danger">
            <ul>
                <?php foreach ($errors as $error): ?>
                    <li><?php echo $error; ?></li>
                <?php endforeach; ?>
            </ul>
        </div>
    <?php endif; ?>
 
    <?php if (!empty($_FILES) && empty($errors)): ?>
        <div class="alert alert-success">Файлы успешно загружены</div>
    <?php endif; ?>

<?php
 } 
?>