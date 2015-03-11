<?php
   	function callConstsAndDB()
   	{
   		require_once "connectDB.php";
   		require_once "constsAndVariables/numberConst.php";
   	    require_once "constsAndVariables/textConst.php";
   		require_once "constsAndVariables/errorConst.php";
   	};
    function checkPhoto()
    {
        function checkPhotoSize($photoSize)
        {
            if ($photoSize > MAX_FILE_SIZE)
            {
                echo (MAX_FILE_ECHO);
                exit;
            };
        };
    };
    function movePhoto($photoName, $tplPhotoName)
    {
        function movePhotoInDB($db, $photoTitle, $photoDescription, $photoName)
        {
            $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
            $sql = "INSERT INTO photos (photoTitle, photoDescription, photoName) VALUES ( '$photoTitle', '$photoDescription', '$photoName')";
            if (mysqli_query($db, $sql)) 
            {
                echo "";
            } 
            else 
            {
                echo "  Не получилось добавить фотографию в базу данных. Попробуйте загрузить фотографию позже. Error: " . $sql . "<br/>" . mysqli_error($db);
            }
            mysqli_close($db);
        };
        function movePhotoInFolder($photoName, $tplPhotoName)
        {
            header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
            $old_name = $photoName;
            $extension = "." . pathinfo($old_name, PATHINFO_EXTENSION);
            $new_name = md5(time() + $photoName);
            $photoName = $new_name . $extension;
            if (is_uploaded_file($tplPhotoName))
            {
                move_uploaded_file($tplPhotoName, PHOTO_LOACTION . $photoName);
                echo (FILE_UPLOAD_SUCCESS);
                $photoTitle = $_POST['photoTitle'];
                $photoDescription = $_POST['photoDescription'];
                movePhotoInDB($db, $photoTitle, $photoDescription, $photoName);
            } 
            else 
            {
                echo(FILE_UPLOAD_FAILED);
            }
        };
        movePhotoInFolder($photoName, $tplPhotoName);
    };
    function searchPhotoError($photoError)
    {
        callConstsAndDB();
    	switch ($photoError) 
        {
            case 3:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
                echo (ERROR_NUM3);
                break;
            case 4:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
                echo (ERROR_NUM4);
                break;
            case 6:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
                echo (ERROR_NUM6);
                break;
            case 7:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
                echo (ERROR_NUM7);
                break;
            case 8:
                header('Refresh: ' . REDIRECT_TIME . '; url=../index.html');
                echo (ERROR_NUM8);
                break;
        }
        exit;
    };
    function checkValue($value, $photoId, $db, $sql)
    {
        header('Refresh: ' . REDIRECT_TIME . '; url=uploadNotVerifedPhotos.php');
        $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
        if ($value == "1") 
        {
            $sql = "UPDATE photos SET status = '1' WHERE id = '$photoId' ";
            echo "Фотография успешно добавлена!";
        }
        elseif ($value == "0") 
        {
            $sql = "DELETE FROM photos WHERE id = '$photoId'";
            echo "Фотография успешно удалена!";
        }
        else
        {
            echo "something went wrong....";
        };
        if (mysqli_query($db, $sql)) 
        {
            echo "";
        } 
        else 
        {
            echo "Хотя....   Error: " . $sql . "<br/>" . mysqli_error($db);
        }
        mysqli_close($db);
    };