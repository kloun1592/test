<?php
    require_once '../php/connectDB.php';
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$link) 
    {
        die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
    };
    /*Делаем запрос к БД*/
    $sql = "SELECT * FROM photos";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <title>Профиль админа</title>
  <link rel="stylesheet" href="../css/main.css"/>
</head>
<body>     
  <h1 class="waitingModeration">Ожидает модерации</h1>
  <?php while($myrow = mysqli_fetch_array($result)): ?>
      <div class="waitingPhotoBlock">
        <form action="adminCkeckPhotos.php" method="POST">
          <img class="waitingPhotoImg" src="../upload/<?= $myrow['photoName'];?>">
          <span class="waitingPhotoSpan" name="waitingPhotoName"><?= $myrow['photoTitle'];?></span>
          <input class="waitingPhotoLike" name="waitingPhotoInput" id="waitingPhotoLike" type="radio" value="1" />
          <label class="waitingPhotoLikeLabel" for="waitingPhotoLike">like</label>
          <input class="waitingPhotoDislike" name="waitingPhotoInput" id="waitingPhotoDislike" type="radio" value="0" />
          <label class="waitingPhotoDislikeLabel" for="waitingPhotoDislike">Dislike</label>
          <input class="waitingPhotoId" name="waitingPhotoId" type="text" maxlength="5" value="<?= $myrow['id'];?>"/>
          <input class="waitingPhotoSubmit" type="submit"/>
        </form>
      </div>
  <?php endwhile; ?>
</body>
</html>
