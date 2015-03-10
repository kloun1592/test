<?php
	$photoType = $_FILES["photoUpload"]["type"];
	var_dump($photoType);
	if ($photoType != "image/jpeg" or $photoType != "image/png" or $photoType != "image/bmp" or $photoType != "image/jpg")
	{
		echo(UNKNOWN_TYPE_OF_PHOTO);
        exit;
	};
 /*   require_once 'photoVariables.php';
    $old_name = $photoName;
    $extension = "." . pathinfo($old_name, PATHINFO_EXTENSION);
    if ($extension != ".jpg" or ".png" or ".bmp")
    {
    	echo(UNKNOWN_TYPE_OF_PHOTO);
        exit;
    };
    */