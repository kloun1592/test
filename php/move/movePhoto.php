<?php
        require_once 'photoVariables.php';
        require_once "connectDB.php";
        require_once "consts/const.php";
        require_once "consts/textConst.php";
        $old_name = $photoName;
        $extension = "." . pathinfo($old_name, PATHINFO_EXTENSION);
        $new_name = md5(time() + $photoName);
        $photoName = $new_name . $extension;

        if (is_uploaded_file($tplPhotoName))
        {
            move_uploaded_file($tplPhotoName, PHOTO_LOACTION . $photoName);
            echo (FILE_UPLOAD_SUCCESS);
        } 
        else 
        {
            echo(FILE_UPLOAD_FAILED);
        };