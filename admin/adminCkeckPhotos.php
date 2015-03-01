<?php
    require_once '../php/connectDB.php';
    $link = mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME);
    $value = $_POST['waitingPhotoInput'];
    $photoId = $_POST['waitingPhotoId'];
    var_dump($value);
    var_dump($photoId);
    if ($value == "1") 
    {
        $sql = "UPDATE photos SET status = '1' WHERE id = '$photoId' ";
    }
    elseif ($value == "0") 
    {
        $sql = 'UPDATE photos SET status = "0" ';
    }
    else
    {
        echo "something went wrong....";
    };

    if (mysqli_query($db, $sql)) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br/>" . mysqli_error($db);
    }
    mysqli_close($db);

