<?php
    require_once 'photoVariables.php';
    $old_name = $photoName;
    $extension = "." . pathinfo($old_name, PATHINFO_EXTENSION);
    if ($extension != ".jpg" or ".png" or ".bmp")
    {
    	echo(UNKNOWN_TYPE_OF_PHOTO);
        exit;
    };