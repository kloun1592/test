<?php
    function savePhotoInFolder()
    {
        $photoName = $_FILES["photoUpload"]["name"];
        $tplPhotoName = $_FILES["photoUpload"]["tmp_name"];
        $old_name = $photoName;
        $extension = "." . pathinfo($old_name, PATHINFO_EXTENSION);
        $new_name = md5(time() + $photoName);
        $photoName = $new_name . $extension;
        if (is_uploaded_file($tplPhotoName))
        {
            move_uploaded_file($tplPhotoName, UPLOAD_LOACTION . $photoName);
            $photoTitle = $_POST['photoTitle'];
            $photoDescription = $_POST['photoDescription'];
            $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
            mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");
            savePhotoInDB($db, $photoTitle, $photoDescription, $photoName);
        } 
        else 
        {
            CallHeaderInUploadFormHandlerWithBadStatus2();
        };
    };
    function searchPhotoError()
    {
        $photoError = $_FILES["photoUpload"]["error"] ;
        switch ($photoError) 
        {
            case SEARCH_PHOTO_ERROR_CASE_NUM_3:
                CallHeaderInUploadFormHandlerWithBadStatus3();
                break;
            case SEARCH_PHOTO_ERROR_CASE_NUM_4:
                CallHeaderInUploadFormHandlerWithBadStatus4();
                break;
            case SEARCH_PHOTO_ERROR_CASE_NUM_6:
                CallHeaderInUploadFormHandlerWithBadStatus6();
                break;
            case SEARCH_PHOTO_ERROR_CASE_NUM_7:
                CallHeaderInUploadFormHandlerWithBadStatus7();
                break;
            case SEARCH_PHOTO_ERROR_CASE_NUM_8:
                CallHeaderInUploadFormHandlerWithBadStatus8();
                break;
            default:
                CallHeaderInUploadFormHandlerWithBadStatusDefault();
                break;              
        };
        exit;
    };
    function checkValueInGetArray()
    {
        $h1GoodResultBegin = '<h1 class="resultGood">';
        $h1End = '</h1>';
        $h1BadResultBegin = '<h1 class="resultBad">';
        switch ($_GET['status']) 
        {
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_0:
                $goodResult = '';
                return $goodResult;
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_1:
                $goodResult = $h1GoodResultBegin . FILE_UPLOAD_SUCCESS . $h1End;
                return $goodResult;
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_2:
                echo '<h1 class="resultBad">' . FILE_UPLOAD_FAILED . '</h1>';
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_3:
                echo '<h1 class="resultBad">' . ERROR_NUM3 . '</h1>';
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_4:
                echo '<h1 class="resultBad">' . ERROR_NUM4 . '</h1>';
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_6:
                echo '<h1 class="resultBad">' . ERROR_NUM6 . '</h1>';
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_7:
                echo '<h1 class="resultBad">' . ERROR_NUM7 . '</h1>';
                break;
            case CHECK_VALUE_IN_GET_ARRAY_CASE_NUM_8:
                echo '<h1 class="resultBad">' . ERROR_NUM8 . '</h1>';
                break;
            default:
                echo '<h1 class="resultBad">' . UNKNOW_ERROR . '</h1>'; 
        };
    };
