<?php
$page = @$_GET['view'];
if(!empty($page))
{
	switch($page)
	{
		case 'user_add':
			include 'user_add.php';
		break;
		case 'user_list':
			include 'user_list.php';
		break;
		case 'user_list_ajax':
			include 'user_list_ajax.php';
		break;
		case 'user_save':
			include 'user_save.php';
		break;
		default:
			echo 'PAGE THAT YOU REQUESTED IS NOT FOUND';
		break;
	}
}