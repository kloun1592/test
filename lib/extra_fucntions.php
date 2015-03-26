<?php
	function callHeaderInAdminHandler()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . REDIRECT . '');
	};
	function callHeaderInUploadFormHandlerWithSuccessStatus()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_1 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus2()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_2 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus3()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_3 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus4()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_4 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus6()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_6 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus7()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_7 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatus8()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_8 . '');
	};
	function callHeaderInUploadFormHandlerWithBadStatusDefault()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_DEFAULT . '');
	};