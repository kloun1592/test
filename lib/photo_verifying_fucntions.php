<?php
    function checkPhotoSize()
    {
        $photoSize = $_FILES["photoUpload"]["size"];
        if ($photoSize > MAX_FILE_SIZE)
        {
            $MaxFileSize = MAX_FILE_ECHO;
            return $MaxFileSize;
            exit;
        };
    };
    function isValidFileType()
    {
        $photoType = $_FILES["photoUpload"]["type"] ;
        switch ($photoType) 
        {
            case 'image/jpeg':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                break;
            case 'image/jpg':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                break;
            case 'image/bmp':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                break;
            case 'image/png':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                break;
            default:
                $result = 0;
                $badPhotoType = "тип фото не поддерживается";
                echo $badPhotoType;
                exit;
        };
        return $result;
    };