<?php

require_once('config/db.php');
require_once('config/base.php');
require_once('config/helper.php');

if(isset($_GET['page']))
{
	include_once('application/home.php');
}else if(isset($_GET['view'])){
	include_once('application/view.php');
}else{
	include_once('application/home.php');
}
