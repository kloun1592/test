<?php
	function CallHeaderInAdminHandler()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . REDIRECT . '');
	};
	function CallHeaderInUploadFormHandlerWithSuccessStatus()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_1 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus2()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_2 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus3()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_3 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus4()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_4 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus6()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_6 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus7()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_7 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus8()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_NUM_8 . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatusDefault()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . STATUS_DEFAULT . '');
	};