<?php
    require_once 'photoVariables.php';
    $sql = "INSERT INTO photos (photoTitle, photoDescription, photoName) VALUES ( '$photoTitle', '$photoDescription', '$photoName')";
    if (mysqli_query($db, $sql)) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br/>" . mysqli_error($db);
    }
    mysqli_close($db);