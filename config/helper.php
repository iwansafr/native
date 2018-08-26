<?php

include_once('config.php');

$url = @$config['base_url'];

function base_url($base_url='')
{
	global $url;
	if(!empty($base_url))
	{
		return $url.DIRECTORY_SEPARATOR.'?page='.$base_url;
	}else{
		return $url.DIRECTORY_SEPARATOR;
	}
}
function output_json($array)
{
	$output = '{}';
	if (!empty($array))
	{
		if (is_object($array))
		{
			$array = (array)$array;
		}
		if (!is_array($array))
		{
			$output = $array;
		}else{
			if (defined('JSON_PRETTY_PRINT'))
			{
				$output = json_encode($array, JSON_PRETTY_PRINT);
			}else{
				$output = json_encode($array);
			}
		}
	}
	header('content-type: application/json; charset: UTF-8');
	header('cache-control: must-revalidate');
	header('expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
	echo $output;
	exit();
}