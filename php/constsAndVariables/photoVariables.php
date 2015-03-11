<?php
    $photoName = $_FILES["photoUpload"]["name"];
    $photoTitle = $_POST['photoTitle'];
    $photoDescription = $_POST['photoDescription'];
    $tplPhotoName = $_FILES["photoUpload"]["tmp_name"];
    $photoSize = $_FILES["photoUpload"]["size"];
    $photoError = $_FILES["photoUpload"]["error"] ;