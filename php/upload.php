<?php
    if ($_FILES["photoUpload"]["size"] > 1024*3*1024)
    {
      echo ("Размер файла превышает три мегабайта");
      exit;
    };
    $old_name = $_FILES["photoUpload"]["name"];
    $extension = pathinfo($old_name, PATHINFO_EXTENSION);
    $time = time();
    $new_name = md5($time + $_FILES["photoUpload"]["name"]);
    $_FILES["photoUpload"]["name"] = $new_name;
    if (is_uploaded_file($_FILES["photoUpload"]["tmp_name"]))
    {
      move_uploaded_file($_FILES["photoUpload"]["tmp_name"], "upload/".$_FILES["photoUpload"]["name"]);
      echo ("Файл загружен");
    } else 
    {
       echo("Ошибка загрузки файла");
    }  
?>