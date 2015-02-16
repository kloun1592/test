<?php
    if ($_FILES["photoUpload"]["error"] != 4)
    {
        //require_once 'check/checkPhotoType.php';
        require_once 'check/checkPhotoSize.php';
        require_once "move/movePhoto.php";
        require_once 'move/movePhotoInDB.php';
    }
    else
    {
        echo (EMPTY_FILE);
        exit;
    };