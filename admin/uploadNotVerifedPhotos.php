<?php
    const SITE = "http://git.ru/";
    const DBHOST = "localhost";
    const DBUSER = "root";
    const DBPASS = "";
    const DBNAME = "gallery";
    $db = @mysqli_connect(DBHOST, DBUSER, DBPASS) or die("Нет подключения к БД");
    mysqli_set_charset($db, "utf8") or die("Не установлена кодировка соединения");

/*Подключаемся к БД*/

$db_selected = mysql_select_db("gallery");
if (!$db_selected) {
    die ('Не удалось выбрать базу: ' . mysql_error());
};
/*Делаем запрос к БД*/
$result = mysql_query('SELECT "photoName" FROM "photos"', $db);
/*Преобразовываем результат в массив*/
$myrow = mysql_fetch_array($result);
var_dump($myrow);
/*Выводим результат на экран*/
echo $myrow['photoName'];