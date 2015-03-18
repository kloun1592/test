<?php
    require_once 'const/db_connection_const.php';
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$link) 
    {
        die('Ошибка соединения (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
    };
    $sql = "SELECT * FROM photos WHERE status = '0' ";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <title>Профиль админа</title>
  <link rel="stylesheet" href="web/main.css"/>
</head>
<body>     
  <h1 class="waitingModeration">Ожидает модерации</h1>
  <? while($myrow = mysqli_fetch_array($result)): ?>
      <div class="waitingPhotoBlock">
        <form action="engine/admin_handler.php" method="POST">
          <img class="waitingPhotoImg" src="../web/upload/<?= $myrow['photoName'];?>">
          <span class="waitingPhotoSpan" name="waitingPhotoName"><?= $myrow['photoTitle'];?></span>
          <input class="waitingPhotoLike" name="waitingPhotoInput" id="waitingPhotoLike" type="radio" value="1" />
          <label class="waitingPhotoLikeLabel" for="waitingPhotoLike">like</label>
          <input class="waitingPhotoDislike" name="waitingPhotoInput" id="waitingPhotoDislike" type="radio" value="0" />
          <label class="waitingPhotoDislikeLabel" for="waitingPhotoDislike">Dislike</label>
          <input class="waitingPhotoId" name="waitingPhotoId" type="text" maxlength="5" value="<?= $myrow['id'];?>"/>
          <input class="waitingPhotoSubmit" type="submit"/>
        </form>
      </div>
  <? endwhile; ?>
</body>
</html>