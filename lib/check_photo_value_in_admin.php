<?php
    function getValue()
    {
        $value = $_POST['waitingPhotoInput'];
        return $value;
    };
    function addingPhotoAndShowSuccessAddingPhotoMsg($photoId, $db)
    {
        $sql = "UPDATE photos SET status = '1' WHERE id = '$photoId' ";
        if (mysqli_query($db, $sql)) 
        {
            echo SUCCESS_ADDING_PHOTO_MSG;
        } 
        else 
        {
            echo UNSUCCESS_DELETING_OR_EDITING_PHOTO_IN_DB_MSG . $sql . "<br/>" . mysqli_error($db);;
        };
    };
    function deletingPhotoAndshowSuccessDeletingPhotoMsg($photoId, $db)
    {
        $sql = "DELETE FROM photos WHERE id = '$photoId'";
        if (mysqli_query($db, $sql)) 
        {
            echo SUCCESS_DELETING_PHOTO_MSG;
        } 
        else 
        {
            echo UNSUCCESS_DELETING_OR_EDITING_PHOTO_IN_DB_MSG . $sql . "<br/>" . mysqli_error($db);;
        };
    };
    function isStatusDeletigOrAdding($value)
    {
        $photoId = $_POST['waitingPhotoId'];
        $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
        if ($value == LIKE_STATUS) 
        {
            addingPhotoAndShowSuccessAddingPhotoMsg($photoId, $db);
        } 
        else 
        {
            deletingPhotoAndshowSuccessDeletingPhotoMsg($photoId, $db);
        };
        mysqli_close($db);
    }
    function tryCheckValue()
    {
        $value = getValue();
        if ($value != null) 
        {
            isStatusDeletigOrAdding($value);
        }
        else
        {
            echo UNSUCCESS_DELETING_OR_EDITING_PHOTO_MSG;
        };
    };