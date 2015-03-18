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
        $result = 0;
        switch ($photoType) 
        {
            case 'image/jpeg':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                return $result;
                break;
            case 'image/jpg':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                return $result;
                break;
            case 'image/bmp':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                return $result;
                break;
            case 'image/png':
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php');
                $result = 1;
                return $result;
                break;
            default:
                $result = 0;
                return $result;
                $badPhotoType = "тип фото не поддерживается";
                echo $badPhotoType;
                exit;
        };
    };