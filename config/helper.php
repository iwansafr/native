<?php

include_once('config.php');

$url = @$config['base_url'];

function base_url($base_url='')
{
	global $url;
	if(!empty($base_url))
	{
		return $url.'?page='.$base_url;
	}else{
		return $url;
	}
}
