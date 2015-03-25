<?php
	require_once '../lib/db_functions.php';
	require_once '../lib/extra_fucntions.php';
    require_once '../const/db_connection_const.php';
    require_once '../const/text_const.php';
    require_once '../const/number_const.php';
    require_once '../const/error_const.php';
    CallHeaderInAdminHandler();
	echo checkPhotoValueInAdmin();