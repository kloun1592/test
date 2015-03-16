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
            move_uploaded_file($tplPhotoName, PHOTO_LOACTION . $photoName);
            header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=1');
            $photoTitle = $_POST['photoTitle'];
            $photoDescription = $_POST['photoDescription'];
            savePhotoInDB($db, $photoTitle, $photoDescription, $photoName);
        } 
        else 
        {
            header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=2');
        };
    };
    function searchPhotoError()
    {
        $photoError = $_FILES["photoUpload"]["error"] ;
        switch ($photoError) 
        {
            case 3:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=3');
                break;
            case 4:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=4');
                break;
            case 6:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=6');
                break;
            case 7:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=7');
                break;
            case 8:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=8');
                break;
            default:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.php?status=end');
                break;              
        };
        exit;
    };
    function checkGetValue()
    {
        switch ($_GET['status']) 
        {
            case 0:
                echo '';
                break;
            case 1:
                echo '<h1 class="resultGood">' . FILE_UPLOAD_SUCCESS . '</h1>';
                break;
            case 2:
                echo '<h1 class="resultBad">' . FILE_UPLOAD_FAILED . '</h1>';
                break;
            case 3:
                echo '<h1 class="resultBad">' . ERROR_NUM3 . '</h1>';
                break;
            case 4:
                echo '<h1 class="resultBad">' . ERROR_NUM4 . '</h1>';
                break;
            case 6:
                echo '<h1 class="resultBad">' . ERROR_NUM6 . '</h1>';
                break;
            case 7:
                echo '<h1 class="resultBad">' . ERROR_NUM7 . '</h1>';
                break;
            case 8:
                echo '<h1 class="resultBad">' . ERROR_NUM8 . '</h1>';
                break;
            default:
                echo '<h1 class="resultBad">' . UNKNOW_ERROR . '</h1>'; 
        };
    };
