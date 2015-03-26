<?php
    require_once '../lib/photo_verifying_fucntions.php';
    require_once '../lib/photo_upload_fucntions.php';
    require_once '../lib/db_functions.php';
    require_once '../lib/extra_fucntions.php';
    require_once '../const/text_const.php';
    require_once '../const/number_const.php';
    require_once '../const/db_connection_const.php';
    $photoError = $_FILES["photoUpload"]["error"] ;
    if ($photoError != 1 and $photoError < 1)
    {
        CallHeaderInUploadFormHandlerWithSuccessStatus();
        echo checkPhotoSize();
        //isValidFileType($photoType);
        savePhotoInFolder();
    }
    else
    {
        searchPhotoError();
    };