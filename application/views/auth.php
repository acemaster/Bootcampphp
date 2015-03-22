<!DOCTYPE html>
<html>
<head>
	<title>NanoBlog</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url('assets1/css/bootstrap.css'); ?>">
</head>
<body>
<script src="assets/js/bootstrap.js" type="text/javascript" charset="utf-8" ></script>
	<br>
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8">
			<img src="<?php echo base_url('assets/img/bootcamp.jpg'); ?>" alt="profile image" class="img-thumbnail">
		</div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
			<br><br>
					<form role="form" id="signin" method = "post" action="<?php echo base_url('index.php/user/signin'); ?>">
					<div class="form-group">
 						 <input name="username" type="text" class="form-control" placeholder="Username" required>
					</div>
					<br>
					<div class="form-group">
 						 <input name="password" type="password" class="form-control" placeholder="password" required>
					</div>
					<br>
					<div class="form-group">
						<center>
						<button type="submit" class="btn btn-lg btn-info">Sign in</button>
						</center>
					</div>
					</form>
				</div>
			
			</div>
			</div>
		</div>
	</div>


</body>
</html>