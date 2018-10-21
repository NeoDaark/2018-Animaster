<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='SignUp ';
$dir = 'account';
$depth = '1';
$menu = "hide";
include "../Public/layouts/head.php";
?>
<script>
    $( document ).ready(function() {
			$('#createinput').click(function(){
				var user = {
					user : $('#isu').val(),
					mail : $('#ism').val(),
					pass : $('#isp').val()
				};
				if ($('#ism').val()== "" || $('#isp').val()== "" || $('#isu').val()== ""){
					if($('#ism').val()== "" && $('#isp').val()== "" && $('#isu').val()== ""){
						anotify('All inputs are empty!', 'red');
					}else if($('#isu').val()== ""){
						anotify('User is empty!', 'red');
					}else if ($('#ism').val()== ""){
						anotify('Email is empty!', 'red');
					}else if($('#isp').val()== ""){
						anotify('Password is empty!', 'red');
					}
				}else{
					$.ajax({
						type: "POST",
						url: "<?php echo $directory?>System/Protocols/Users_Signup.php",
						data: user,
						success: function (response) {
							console.log(response);
							if(response == 'fail00'){
								anotify('Try again in a few minutes!', 'red');
							}else if(response == 'fail01'){
								anotify('user already exists', 'red');
							}else if(response == 'fail02'){
								anotify('email already exists', 'red');
							}else if(response == 'fail03'){
								anotify('user and email already exist', 'red');
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
		<!-- Register -->
		<div class="login__block active" id="l-register">
				<div class="login__block__header palette-Blue bg">
						<i class="zmdi zmdi-account-circle"></i>
						Create an account

						<div class="actions actions--inverse login__block__actions">
								<div class="dropdown">
										<i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

										<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="login">Already have an account?</a>
												<a class="dropdown-item" href="forgot">Forgot password?</a>
										</div>
								</div>
						</div>
				</div>

				<div class="login__block__body">
						<div class="form-group form-group--float form-group--centered">
								<input type="text" class="form-control" id="isu" readonly onclick="focusMethod('isu')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Name</label>
								<i class="form-group__bar"></i>
						</div>

						<div class="form-group form-group--float form-group--centered ">
								<input type="email" class="form-control"  id="ism" readonly onclick="focusMethod('ism')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Email</label>
								<i class="form-group__bar"></i>
						</div>

						<div class="form-group form-group--float form-group--centered">
								<input type="password" class="form-control" id="isp" readonly onclick="focusMethod('isp')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Password</label>
								<i class="form-group__bar"></i>
						</div>

						<div class="form-group">
								<label class="custom-control custom-checkbox">
										<input type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">
											By registering, you accept the <a class="link" href="#">Terms of Service</a> and the <a class="link" href="#">Privacy Policy</a>,
											including the <a class="link" href="#">use of Cookies</a>.
										</span>
								</label>
						</div>

						<button href="" class="btn btn--icon login__block__btn" id="createinput"><i class="zmdi zmdi-check"></i></button>
				</div>
		</div>
</div>


<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?>
