<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	if(isset($_COOKIE['checkLogin']) == 1){
		if($_COOKIE['checkLogin'] == 1){
		header('Location: '.$uri.'/admin/');
		}
		else{
		header('Location: '.$uri.'/Personnel/');

		}
	}
	else{
		header('Location: '.$uri.'/login/');
	}
	exit;
?>