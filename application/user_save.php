<?php
if(!empty($_POST))
{
	$username = @$_POST['username'];
	$password = @md5($_POST['password']);
	$role = @intval($_POST['role']);
	$db->query("INSERT INTO user SET username = '$username', password = '$password'");
	$last_id = $db->insert_id;
	$last_id = @intval($last_id);
	$db->query("INSERT INTO user_role SET role_id = $role, user_id = $last_id");
	?>
	<script type="text/javascript">
		window.location.href = "<?php echo base_url('user_add&s=1') ?>";
	</script>
	<?php
}