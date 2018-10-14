<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='Forgot Password ?';
$dir = 'account';
$depth = '1';
$menu = "hide";
include "../Public/layouts/head.php";
?>

<!-- Body content box -->
<div class="login">
		<!-- Forgot Password -->
		<div class="login__block active" id="l-forget-password">
				<div class="login__block__header palette-Purple bg">
						<i class="zmdi zmdi-account-circle"></i>
						Forgot Password?

						<div class="actions actions--inverse login__block__actions">
								<div class="dropdown">
										<i data-toggle="dropdown" class="zmdi zmdi-more-vert actions__item"></i>

										<div class="dropdown-menu dropdown-menu-right">
												<a class="dropdown-item" href="login">Already have an account?</a>
												<a class="dropdown-item" href="create">Create an account</a>
										</div>
								</div>
						</div>
				</div>

				<div class="login__block__body">
						<p class="mt-4">Please enter the email address that is associated with your Animaster account to recover your password.</p>

						<div class="form-group form-group--float form-group--centered">
								<input type="text" class="form-control" id="ism" readonly onclick="focusMethod('ism')" onfocus="if (this.hasAttribute('readonly')) { this.removeAttribute('readonly'); this.blur();    this.focus();  }">
								<label>Email</label>
								<i class="form-group__bar"></i>
						</div>

						<button href="index-2.html" class="btn btn--icon login__block__btn"><i class="zmdi zmdi-check"></i></button>
				</div>
		</div>
</div>


<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?>
