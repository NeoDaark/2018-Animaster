<!-- Header content box -->
<?php 
require_once '../System/config.php';
$title='SignUp';
$migas='#SignUp|signup.php';
$dir = 'account';
$depth = '1';
$nuser = "";
$nmail = "";
$err = "";
session_start(); 
if(isset($_SESSION['nuser']) && isset($_SESSION['nmail'])){
	$nuser = $_SESSION['nuser'];
	$nmail = $_SESSION['nmail'];
	$err = $_SESSION['neror'];
	unset($_SESSION["nuser"]);
	unset($_SESSION["nmail"]);
	unset($_SESSION["neror"]);
}



include "../Public/layouts/head.php";?>

<script>
    $(function() {
		// Verify user function
		
		
		// Verify password function
		function VerifyPassword() {
			var pass = $('#inputPass').val();
            var pass2 = $('#inputPass2').val();
			if (pass.length < 4 || pass2.length < 4){
				console.log('small');
				$('#alertpass').removeClass('hidden');
			}else if (pass.length > 40 || pass2.length > 40){
				console.log('big');
				$('#alertpass').removeClass('hidden');
			}else{
				console.log('ok');
				$('#alertpass').addClass('hidden');
			}
			if(pass == pass2 && pass != "" && pass2 != "" && pass.length >= 4 && pass2.length >= 4 && pass.length <= 40 && pass2.length <= 40){
				$('#methods').removeClass('bgm-red');
				$('#methods2').removeClass('bgm-red');
			}else{
				$('#methods').addClass('bgm-red');
				$('#methods2').addClass('bgm-red');
			}
		}
		// Call Verify password function
		$(document.body).delegate('#inputPass', 'change', function() { VerifyPassword(); });
		$(document.body).delegate('#inputPass2', 'change', function() { VerifyPassword(); });
		
		// See Password function
		function SeePassword(id1, id2, attrtype) {
			if($('#inputPass').val() != "" && $('#inputPass2').val() != ""){
				VerifyPassword();
			}
			var pass = $(id1).clone();
            $(id1).remove();
            pass.attr('type',attrtype);
            pass.insertAfter(id2);
		}
		//Call See Password function
        $('#methods').mousedown(function() { SeePassword('#inputPass', '#inputPassLabel', 'text'); });
        $('#methods').mouseup(function() { SeePassword('#inputPass', '#inputPassLabel', 'password'); });
		$('#methods').mouseout(function() { SeePassword('#inputPass', '#inputPassLabel', 'password'); });
		$('#methods2').mousedown(function() { SeePassword('#inputPass2', '#inputPass2Label', 'text'); });
        $('#methods2').mouseup(function() { SeePassword('#inputPass2', '#inputPass2Label', 'password'); });
		$('#methods2').mouseout(function() { SeePassword('#inputPass2', '#inputPass2Label', 'password'); });
    });
</script>
<!-- Body content box -->
<div class="container" >
	<div class="clear" style="height: 40px;"></div>
	
	<!-- Form start -->
    <form method="POST" name="myForm" action="../System/Protocols/Users_Signin.php" enctype="multipart/form-data">
		<div class="row bgm-dark">
		
			<!-- Form Title -->
            <div class="col-md-12 cinput">
				<h1 style="margin-bottom: 40px;">Join today to animaster!</h1>
            </div>
			
			<!-- User Input -->
            <div class="col-md-12 cinput">
                <label for="inputUser" class="sr-only">User</label>
                <input type="text"  id="inputUser"  class="form-control" name="user" placeholder="User *" value="<?php echo $nuser; ?>" maxlength="40" required>
            </div>
				<div class="col-md-12 cinput">
					<div class="alert alert-red <?php if ($err==03 || $err== 01){}else{echo 'hidden';} ?>" role="alert" id="alertuser">
						That user is already in use. Please choose another.
					</div>
				</div>
			
            <!-- Password input -->
            <div class="col-md-6 cinput">
                <div class="input-group">
					<input type="password" style="display: none;" name="passwordForAutoCompleteDisable" />
                    <label for="inputPass" id="inputPassLabel"class="sr-only">Password</label>
                    <input type="password"  id="inputPass"  class="form-control" name="pass" placeholder="Password *" maxlength="40" required >
                    <span class="input-group-btn">
                        <button class="btn btn-default " type="button" id="methods"><i class="zmdi zmdi-eye"></i></button>
                    </span>
                </div>
            </div>
			<div class="col-md-6 cinput">
                <div class="input-group">
					<input type="password" style="display: none;" name="passwordForAutoCompleteDisable" />
                    <label for="inputPass2" id="inputPass2Label"class="sr-only">Confirm Password</label>
                    <input type="password"  id="inputPass2"  class="form-control" name="pass2" placeholder="Confirm Password *" maxlength="40" required >
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="button" id="methods2"><i class="zmdi zmdi-eye"></i></button>
                    </span>
                </div>
            </div>
				<div class="col-md-12 cinput">
					<div class="alert alert-red hidden" role="alert" id="alertpass">
						Password must be between 4 and 40 characters long.
					</div>
				</div>
			
			<!-- Email Input -->
            <div class="col-md-12 cinput">
                <label for="inputEmail" class="sr-only">E-mail</label>
                <input type="text"  id="inputEmail"  class="form-control" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="E-mail *" maxlength="100" value="<?php echo $nmail; ?>" required>
            </div>
				<div class="col-md-12 cinput">
					<div class="alert alert-red hidden" role="alert" id="alertmail">
						Email must be between 3 and 100 characters long.
					</div>
					<div class="alert alert-red <?php if ($err==03 || $err== 02){}else{echo 'hidden';} ?>" role="alert" id="alertmailused">
						That email address is already in use. Please choose another.
					</div>
				</div>
			
			<!-- Submit Button -->
            <div class="col-md-12 cinput">
                <button class="btn btn-lg bgm-cyan c-white btn-block" type="submit" id="registernow" >Register now!</button>
            </div> 
			
			<!-- Terms of use -->
            <div class="col-md-12" id="alertmsg">
                <div class="alert alert-default" role="alert">
					By registering, you accept the <a class="link" href="#">Terms of Service</a> and the <a class="link" href="#">Privacy Policy</a>, 
					including the <a class="link" href="#">use of Cookies</a>.
                </div>
            </div>
        </div>
    </form> <!-- /Form End -->
	
</div> <!-- /container -->

<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?> 

