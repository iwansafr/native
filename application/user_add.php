<?php
$role = $db->query('SELECT * FROM role');
$role = $db->result();
include_once('user_save.php');
if(@intval($_GET['s']))
{
	echo 'data saved successfully';
}
?>
<form method="post">
	<table>
		<tr>
			<td>username</td>
			<td>:</td>
			<td><input type="text" name="username"></td>
		</tr>
		<tr>
			<td>password</td>
			<td>:</td>
			<td><input type="password" name="password"></td>
		</tr>
		<tr>
			<td>role</td>
			<td>:</td>
			<td>
				<?php
				if(!empty($role))
				{
					echo '<select name="role">';
					foreach ($role as $key => $value)
					{
						echo '<option value="'.$value['id'].'">'.$value['title'].'</option>';
					}
					echo '</select>';
				}
				?>
			</td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="save"> <input type="reset" value="reset"></td>
		</tr>
	</table>
</form>