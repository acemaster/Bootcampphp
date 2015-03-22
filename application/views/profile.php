<div class="container">
    <div class="row">
    	<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    	</div>
    	<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
    		<form role="form" id="signin" method = "post" action="<?php echo base_url('index.php/user/profile_update'); ?>">
					<div class="form-group">
						<label> Name : </label>
 						 <input name="name" type="text" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label> Gender : </label>
 						 <input name="gender" type="radio" class="" placeholder="" required> Male
 						 <input name="gender" type="radio" class="" placeholder="" required> Female
					</div>
					<div class="form-group">
						<label> DOB : </label>
 						 <input name="dob" type="date" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label> Current city : </label>
 						 <input name="city" type="text" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label> Mobile : </label>
 						 <input name="mobile" type="text" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label> Email : </label>
 						 <input name="email" type="email" class="form-control" placeholder="" required>
					</div>
					<div class="form-group">
						<label> Pic : </label>
 						 <input name="pic" type="file" class="form-control" placeholder="" >
					</div>
					<div class="form-group">
						<center>
						<button type="submit" class="btn btn-lg btn-info">Sign in</button>
						</center>
					</div>
					</form>
				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
    	</div>
			</div>
		</div>