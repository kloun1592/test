<?php
    if ($_FILES["photoUpload"]["size"] > MAX_FILE_SIZE)
    {
        echo (MAX_FILE_ECHO);
        exit;
    };