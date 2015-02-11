<?php
    function saveImageInDataBase()
    {
        
    };
    require_once "config.php";
    require_once "const.php";
    require_once "textConst.php";
    $photoName = $_FILES["photoUpload"]["name"];
    $photoTitle = $_POST['photoTitle'];
    $photoDescription = $_POST['photoDescription'];
    $tplPhotoName = $_FILES["photoUpload"]["tmp_name"];
    if ($_FILES["photoUpload"]["size"] > MAX_FILE_SIZE)
    {
        echo (MAX_FILE_ECHO);
        exit;
    };
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

    $sql = "INSERT INTO photos (photoTitle, photoDescription, photoName) VALUES ('$photoTitle', '$photoDescription', '$photoName')";
    if (mysqli_query($db, $sql)) 
    {
        echo "New record created successfully";
    } 
    else 
    {
        echo "Error: " . $sql . "<br>" . mysqli_error($db);
    }
    mysqli_close($db);
?>