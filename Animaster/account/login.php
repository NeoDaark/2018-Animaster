<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='SignIn ';
$dir = 'account';
$depth = '1';
$menu = "hide";
include "../Public/layouts/head.php";
?>
<script>
    $( document ).ready(function() {
			$('#loginput').click(function(){
				var user = {
					mail : $('#ism').val(),
					pass : $('#isp').val()
				};
				if ($('#ism').val()== "" || $('#isp').val()== ""){
					if($('#ism').val()== "" && $('#isp').val()== ""){
						anotify('Email and password are empty!', 'red');
					}else if ($('#ism').val()== ""){
						anotify('Email is empty!', 'red');
					}else if($('#isp').val()== ""){
						anotify('Password is empty!', 'red');
					}
				}else{
					$.ajax({
						type: "POST",
						url: "<?php echo $directory?>System/Protocols/Users_Signin.php",
						data: user,
						success: function (response) {
							console.log(response);
							if(response == 'fail'){
								anotify('Invalid user or password!', 'red');
							}else if(response == 'succes'){
								anotify('Welcome to Animaster!', 'green');

								setInterval(function() {
									var url = "<?php echo $directory?>home";
									location.href=url;
								}, 1000);

							}
						}
					});
				}
			});
    });
</script>

<!-- Body content box -->
<div class="login">
		<!-- Login -->
		<div class="login__block active" id="l-login">
				<div class="login__block__header">
						<i class="zmdi zmdi-account-circle"></i>
						Hi there! Please Sign in

						<div class="actions actions--inverse login__block__actions">
								<div class="dropdown">
										<i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

										<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="create">Create an account</a>
												<a class="dropdown-item" href="forgot">Forgot password?</a>
										</div>
								</div>
						</div>
				</div>

				<div class="login__block__body">
						<div class="form-group form-group--float form-group--centered">
								<input type="text" class="form-control" id="ism" readonly onclick="focusMethod('ism')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Email Address</label>
								<i class="form-group__bar"></i>
						</div>

						<div class="form-group form-group--float form-group--centered">
								<input type="password" class="form-control" id="isp" readonly onclick="focusMethod('isp')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Password</label>
								<i class="form-group__bar"></i>
						</div>

						<button href="index-2.html" class="btn btn--icon login__block__btn" id="loginput"><i class="zmdi zmdi-long-arrow-right"></i></button>
				</div>
		</div>
</div>


<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?>
