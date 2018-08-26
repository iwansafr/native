<!DOCTYPE html>
<html>
<head>
	<title>native</title>
	<script type="text/javascript">
		var _URL = "<?php echo base_url()?>";
	</script>
</head>
<body>
	<h1>welcome to native</h1>
	<?php include 'top_menu.php' ?>
	<?php include 'content.php' ?>

	<script src="<?php echo base_url().'assets/jquery/jquery.min.js' ?>"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#load_user').on('click', function(){
				var a = $('#user_row').html();
				// var b = a.replace('{title}', 'iwan');
				var p= $(this).val();
				$.ajax({
					url : _URL+'?view=user_list_ajax&p='+p,
					// type: "POST",
					// data: formData,
					// data: p,
					contentType: false,
					processData: false,
					dataType: "JSON",
					success: function(data)
					{
						// var i;
						// for(i=0;i<data.length;i++){

						// }
						if(data.status){
							var f;
							user = data.data;
							user.forEach(function(key){
								var b = a.replace('{id}', key.id);
								var c = b.replace('{username}', key.username);
								var d = c.replace('{role}', key.role);
								var e = d.replace('{created}', key.created);
								f = e.replace('{updated}', key.updated);
							});
							$('#table_user').append(f);
							p++;
							$('#load_user').val(p);
						}
					},
					error: function (jqXHR, textStatus, errorThrown)
					{
					  alert('Error');
					}
			  });
			});
		});
	</script>
</body>
</html>