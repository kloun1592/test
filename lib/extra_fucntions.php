<?php
	function callHeaderInAdminHandler()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . ADMIN_HANDLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithSuccessStatus()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . SUCCESS_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus2()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD2_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus3()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD3_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus4()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD4_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus6()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD6_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus7()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD7_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatus8()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD8_UPLOAD_FORM_HADLER_HEADER . '');
	};
	function CallHeaderInUploadFormHandlerWithBadStatusDefault()
	{
		header('Refresh: ' . REDIRECT_TIME . ';' . BAD_DEFAULT_UPLOAD_FORM_HADLER_HEADER . '');
	};