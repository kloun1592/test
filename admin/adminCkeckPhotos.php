<?php
    require_once '../php/fucntions.php';
    callConstsAndDB();
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    $value = $_POST['waitingPhotoInput'];
    $photoId = $_POST['waitingPhotoId'];
    checkValue($value, $photoId, $db, $sql);