<?php
	header('Refresh: 3; url=../index.html');
	if (preg_match('#[a-z]+#i', $photoTitle))
	{
		echo '';
	} 
	elseif (preg_match('#[а-яё]+#i', $photoTitle))
	{
		echo '';
	} 