<?php
    if ($_FILES["photoUpload"]["type"] != "image/jpeg" or "image/png" or "image/bmp")
    {
    	echo(UNKNOWN_TYPE_OF_PHOTO);
        exit;
    };