<?php
    require_once '../php/check/checkFunctions.php';
    callConsts();
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    $value = $_POST['waitingPhotoInput'];
    $photoId = $_POST['waitingPhotoId'];
    header('Refresh: ' . REDIRECT_TIME . '; url=uploadNotVerifedPhotos.php');
    checkValue($value, $photoId, $db, $sql);