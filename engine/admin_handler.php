<?php
	require_once '../database/dbFunctions.php';
    require_once '../database/dbConnectionConst.php';
    require_once '../const/textConst.php';
    require_once '../const/numberConst.php';
    require_once '../const/errorConst.php';
    header('Refresh: ' . REDIRECT_TIME . '; url=../uploadNotVerifedPhotos.php');
	checkValue();