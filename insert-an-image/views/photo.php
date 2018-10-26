<!DOCTYPE html>
<html>
<head>
	<title>Photo Upload</title>
</head>
<body>
	<form method="post" action="<?php echo base_url('Home/addImage');?>" enctype='multipart/form-data'>

		<input type="text" name="img_name" class="form-control" required="required"/>
		<input type="file" name="img_1" class="form-control" required="required"/>


		<button class="btn btn-success" type="submit">Submit</button>

	 </form>
</body>
</html>