<!-- Home -- Header content box -->
<?php
require_once 'System/config.php';
$title='News';
$migas='#News|index.php';
$dir = 'root';
$depth = '0';
include "Public/layouts/head.php";

?>

<style> </style>
<!-- 
<script>
    $title = "Phantom MMORPG";
    $body = "Unete a nuestro discord! \n y a disfrutar :D \n \n Att: dev";
    $icon = "Public/icon/=EyeIcon.png";
    DesktopNotifyshow($title, $body, $icon);
</script>
-->

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
		<div class="topwell">
		  <h1 style="margin-bottom: 40px;">Login</h1>
		  <form action="/sessions/create" class="login"  method="post">
			<label style="width: 120px; text-align: right;">Email Address:</label>
			<input autocapitalize="off" autocorrect="off" name="email" style="width: calc(100% - 130px); max-width: 300px;" type="text" value="">
			<br>
			<label style="width: 120px; text-align: right;">Password:</label>
			<input autocapitalize="off" autocorrect="off" name="password" style="width: calc(100% - 130px); max-width: 300px;" type="password">
			<p style="margin-left: 150px;">
			  <a href="/account/lost_password">I can't remember my password »</a>
			</p>
			<div class="clear" style="height: 15px;"></div>
			<div class="d-block" style="text-align: center; justify-content: center">
				<p>
				  <button class="btn btn-primary btn-lg bgm-cyan center" type="submit">
					<i class="zmdi zmdi-key"></i>
					Sign In
				  </button>
				</p>
				<p class="center2">
				  or
				</p>
				
				<p>
				  <a class="btn btn-primary bgm-red center m-0 p-0 p-t-5 p-b-5" href="signup.php" style="margin-left: 20px;">
					Create Account »
				  </a>
				</p>
			</div>
		  </form>
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
<?php include "Public/layouts/footer.php";?> 




