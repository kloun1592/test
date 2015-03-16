<?php
    require_once 'database/dbConnectionConst.php';
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    if (!$link)
    {
        die('Connect Error (' . mysqli_connect_errno() . ') '
        . mysqli_connect_error());
    };
    $sql = "SELECT * FROM photos WHERE status = '1' ";
    $result = mysqli_query($link, $sql);
?>
<!DOCTYPE html>
<html lang="ru">
<head>
  <meta charset="UTF-8"/>
  <title>Галерея</title>
  <link rel="stylesheet" href="web/main.css"/>
</head>
<body>     
  <h1 class="waitingModeration">Галерея Йошкар-Олы</h1>
  <? while($myrow = mysqli_fetch_array($result)): ?>
      <div class="waitingPhotoBlock">
          <img class="waitingPhotoImg" src="web/upload/<?= $myrow['photoName'];?>">
          <span class="waitingPhotoSpan"><?= $myrow['photoTitle']; ?></span>
          <span class="waitingPhotoDescription">Описание: <?= $myrow['photoDescription']; ?></span>
      </div>
  <? endwhile; ?>
</body>
</html>