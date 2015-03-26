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
            $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die(NO_CONNECTION_TO_DB);
            mysqli_set_charset($db, ENDCOING) or die(ENCODING_NOT_SET);
            echo savePhotoInDB($db, $photoTitle, $photoDescription, $photoName);
        } 
        else 
        {
            callHeaderInUploadFormHandlerWithBadStatus2();
        };
    };
    function searchPhotoError()
    {
        $photoError = $_FILES["photoUpload"]["error"] ;
        switch ($photoError) 
        {
            case 3:
                callHeaderInUploadFormHandlerWithBadStatus3();
                break;
            case 4:
                callHeaderInUploadFormHandlerWithBadStatus4();
                break;
            case 6:
                callHeaderInUploadFormHandlerWithBadStatus6();
                break;
            case 7:
                callHeaderInUploadFormHandlerWithBadStatus7();
                break;
            case 8:
                callHeaderInUploadFormHandlerWithBadStatus8();
                break;
            default:
                callHeaderInUploadFormHandlerWithBadStatusDefault();
                break;              
        };
        exit;
    };