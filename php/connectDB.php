<?php
    const SITE = "http://git.ru/";
    const DBHOST = "localhost";
    const DBUSER = "root";
    const DBPASS = "";
    const DBNAME = "gallery";
    $db = @mysqli_connect(DBHOST, DBUSER, DBPASS, DBNAME) or die("Нет подключения к БД");
    mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");
