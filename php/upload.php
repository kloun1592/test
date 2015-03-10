<?php
    require_once "photoVariables.php";
    require_once 'check/checkFunctions.php';
    if ($photoError != 1 and $photoError < 1)
    {
        header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
        callConsts();
        checkPhotoSize($photoSize);
        //require_once 'check/checkPhotoType.php'; Надо с этим разобраться
        //require_once 'check/checkDataLanguage.php'; Возможная проверка
        movePhoto($photoName, $tplPhotoName);
    }
    else
    {
        searchPhotoError($photoError);       
    };
