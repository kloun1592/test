<?php
    require_once "constsAndVariables/photoVariables.php";
    require_once 'fucntions.php';
    if ($photoError != 1 and $photoError < 1)
    {
        header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
        callConstsAndDB();
        checkPhoto();
        //require_once 'check/checkPhotoType.php'; Надо с этим разобраться
        //require_once 'check/checkDataLanguage.php'; Возможная проверка
        movePhoto($photoName, $tplPhotoName);
    }
    else
    {
        searchPhotoError($photoError);       
    };
