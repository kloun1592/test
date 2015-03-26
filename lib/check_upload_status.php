<?php
    function getUploadingStatus()
    {
        $status = $_GET['status'];
        return $status;
    };
    function getStatusMessageFromStatusCode()
    {
        $status = getUploadingStatus();
        $msgArray = array( 0 => FILE_UPLOAD_SUCCESS, 
                           1 => FILE_UPLOAD_SUCCESS,  
                           2 => FILE_UPLOAD_FAILED,
                           3 => ERROR,
                           4 => PHOTO_NOT_UPLOADED,
                           6 => ERROR,
                           7 => ERROR,
                           8 => ERROR );
        if (array_key_exists($status, $msgArray)) 
        {
            $message = $msgArray[$status];
        }
        else
        {
            $message = UNKNOW_ERROR;
        };
        return $message;
    };
    function showSuccessMessage($message)
    {
        echo '<h1 class="resultGood">' . $message . '</h1>';
    };
    function showErrorMessage($message)
    {
        echo '<h1 class="resultBad">' . $message . '</h1>';    
    };
    function isSuccessStatus($status)
    {
        $message = getStatusMessageFromStatusCode();
        if ($status == 1 || $status == 0) 
        {
            showSuccessMessage($message);
        }
        else
        {
            showErrorMessage($message);
        };
    };
    function tryShowUploadingStatus()
    {
        $status = getUploadingStatus();
        if ($status != null) 
        {
            isSuccessStatus($status);
        };
    };