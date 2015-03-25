<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8">
  <title>Загрузка фото</title>
  <link rel="stylesheet" href="web/main.css">
</head>
<body>
  <div class="upload">
    <?php
      require_once 'const/text_const.php';
      require_once 'const/error_const.php';
      require_once 'lib/photo_upload_fucntions.php';
      require_once 'const/switch_const.php'; 
      echo tryShowUploadingStatus();
    ?>
    <h1 class="title">Поделиться фото</h1>
    <form action="engine/upload_form_hadler.php" method="POST" enctype=multipart/form-data>
        <input type="text" class="photoTitle" name="photoTitle" placeholder="Название фото"/>
        <br/>
        <textarea class="photoDescription" name="photoDescription" placeholder="Описание фото" rows="10" cols="44" maxlength="140"></textarea>
        <br/>
        <input type="file" class="photoUpload" name="photoUpload" accept="image/jpeg, image/png, image/jpg, image/bmp"/>
        <br/>
        <input type="submit" class="sumbitBotton" value="Отправить"/> 
    </form>
  </div>
</body>
</html>