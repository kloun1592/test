<?php

$query = "SELECT `photoName` FROM `photos` WHERE 1";
    $result = $mysqli->query ( $query );    
$image = $result->fetch_assoc();
      header("Content-type: image/jpg ");
      echo mysql_escape_string( $image['file'] );
