<!-- Home -- Header content box -->
<?php
require_once '../System/config.php';
$title='Login';
$migas='#login|new.php';
$dir = 'session';
$depth = '1';
include "../Public/layouts/head.php";

?>
<!-- Body content box -->

<div class="container">
	<div class="row">
	  <div class="col-md-12">
		<div class="flash">
		  
		</div>
	  </div>
	</div>
	<div class="clear" style="height: 40px;"></div>
	<div class="row c-white">
		<div class="col-md-6 bgm-dark z-depth-1 h-330">
			<h1 style="margin-bottom: 40px;">Login</h1>
			<div>
				<label style="width: 120px; text-align: right;">User:</label>
				<input id="userinput2" autocapitalize="off" autocorrect="off" name="user" style="width: calc(100% - 130px); max-width: 300px;" type="text" value="">
				<br>
				<label style="width: 120px; text-align: right;">Password:</label>
				<input id="passinput2" autocapitalize="off" autocorrect="off" name="password" style="width: calc(100% - 130px); max-width: 300px;" type="password">
				<p style="margin-left: 150px;">
				  <a href="<?php echo $directorio?>/account/lost_password">I can't remember my password »</a>
				</p>
				<div class="clear" style="height: 15px;"></div>
				<div class="d-block" style="text-align: center; justify-content: center">
					<p>
					  <button class="btn btn-primary btn-lg bgm-cyan center" id="loginput2">
						<i class="zmdi zmdi-key"></i>
						Sign In
					  </button>
					</p>
					<p class="center2">
					  or
					</p>
					<p>
					  <a class="btn btn-primary bgm-red center m-0 p-0 p-t-5 p-b-5" href="<?php echo $directorio?>account/create" style="margin-left: 20px;">
						Create Account »
					  </a>
					</p>
				</div>
			</div>
		</div>
	  <div class="col-md-6 bgm-white c-black z-depth-1 h-330">
		<h2>Welcome to Animaster!</h2>
		<p>Animaster is a new virtual tabletop that's incredibly easy to use and runs online, right in your web browser.</p>
		<p>
		  You need an account to continue, but if you'd like more information about Animaster, including a tour explaining all the features in more detail,
		  <a href="#" class="c-yellow p-l-5 p-r-5 f-700 f-15 bgm-dark" >check out the main site »</a>
		</p>
	  </div>
	</div>


		
</div>

<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?> 

