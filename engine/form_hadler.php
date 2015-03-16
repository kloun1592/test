<?php
    require_once 'photo_verifying_handler.php';
    require_once 'photo_upload_handler.php';
    require_once '../database/dbFunctions.php';
    require_once '../const/textConst.php';
    require_once '../const/numberConst.php';
    require_once '../const/errorConst.php';
    require_once '../database/dbConnectionConst.php';
    $photoError = $_FILES["photoUpload"]["error"] ;
    if ($photoError != 1 and $photoError < 1)
    {
        checkPhotoSize();
        //isValidFileType($photoType);
        savePhotoInFolder();
    }
    else
    {
        searchPhotoError();
    };