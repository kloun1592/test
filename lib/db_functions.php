<?php
	function savePhotoInDB($db, $photoTitle, $photoDescription, $photoName)
    {
        $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
        $sql = "INSERT INTO photos (photoTitle, photoDescription, photoName) VALUES ( '$photoTitle', '$photoDescription', '$photoName')";
        if (mysqli_query($db, $sql)) 
        {
            $result = '';
        } 
        else 
        {
            $result = '  Не получилось добавить фотографию в базу данных. Попробуйте загрузить фотографию позже. Ошибка: ' . $sql . '<br/>' . mysqli_error($db);
        };
        return $result;
        mysqli_close($db);
    };
    function checkPhotoValueInAdmin()
    {
        $value = $_POST['waitingPhotoInput'];
        $photoId = $_POST['waitingPhotoId'];
        $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
        if ($value == "1") 
        {
            $sql = "UPDATE photos SET status = '1' WHERE id = '$photoId' ";
            $result = "Фотография успешно добавлена!";
        }
        elseif ($value == "0") 
        {
            $sql = "DELETE FROM photos WHERE id = '$photoId'";
            $result = "Фотография успешно удалена!";
        }
        else
        {
            $result = "something went wrong....";
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
        return $result;
    };