<?php
	function savePhotoInDB($db, $photoTitle, $photoDescription, $photoName)
    {
        $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die(NO_CONNECTION_TO_DB);
        $sql = "INSERT INTO photos (photoTitle, photoDescription, photoName) VALUES ( '$photoTitle', '$photoDescription', '$photoName')";
        if (mysqli_query($db, $sql) == FALSE) 
        {
            $errorMsg = UNSUCCESS_SAVING_PHOTO_IN_DB . $sql . '<br/>' . mysqli_error($db);
        };
        mysqli_close($db);
        return $errorMsg;
    };