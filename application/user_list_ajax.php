<?php
$data = array('status'=>0);
$page = @intval($_GET['p']);
$db->query("SELECT u.id,u.username,r.title AS role,u.created,u.updated FROM user AS u LEFT JOIN user_role AS ur ON(u.id=ur.user_id) LEFT JOIN role AS r ON(ur.role_id=r.id) LIMIT {$page},1");
$user = $db->result();
if(!empty($user))
{
	$data['data'] = $user;
	$data['status'] = 1;
}

output_json($data);
