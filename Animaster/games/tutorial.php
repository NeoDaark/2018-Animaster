<!-- Home - Header content box  -->
<?php
require_once '../System/config.php';
$title='Tutorial ';
$dir = 'games-tutorial';
$depth = '1';
include "../Public/layouts/head.php";
?>




<!-- Body content box -->
<section class="content">
	<div class="content__inner">
		<header class="content__title">
			<h1>Frequently A0sked Questions</h1>
			<small>Duis mollis estnon commodo luctus nisierat porttitor ligula eget lacinia odio semnec</small>
		</header>

		<div class="row">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header">Donec id elit non mi porta gravida at eget metus?</div>
					<div class="card-body">
						<p class="card-text">Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum. Sed posuere consectetur est at lobortis. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Etiam porta sem malesuada magna mollis euismod. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Nullam id dolor id nibh ultricies vehicula ut id elit. Cras justo odio, dapibus ac facilisis in, egestas eget quam.</p>
					</div>
				</div>

				<div class="card">
					<div class="card-header">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec pharetra Ligula Parturient elit?</div>
					<div class="card-body">
						Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue. Etiam porta sem malesuada magna mollis euismod. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Nulla vitae elit libero, a pharetra augue.
					</div>
				</div>

				<div class="card">
					<div class="card-header">Maecenas sed diam eget risus varius blandit sit amet non magna?</div>
					<div class="card-body">
						Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed posuere consectetur est at lobortis. Maecenas faucibus mollis interdum.
					</div>
				</div>

				<div class="card">
					<div class="card-header">Risus Fermentum Cras Tristique?</div>
					<div class="card-body">
						Donec ullamcorper nulla non metus auctor fringilla. Donec sed odio dui. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
					</div>
				</div>

				<div class="card">
					<div class="card-header">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor?</div>
					<div class="card-body">
						Vestibulum id ligula porta felis euismod semper. Curabitur blandit tempus porttitor. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.
					</div>
				</div>

				<div class="card">
					<div class="card-header">Integer posuere erat a ante venenatis dapibus posuere velit aliquet?</div>
					<div class="card-body">
						Sed posuere consectetur est at lobortis. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Donec id elit non mi porta gravida at eget metus. Aenean lacinia bibendum nulla sed consectetur.

						Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec ullamcorper nulla non metus auctor fringilla. Aenean lacinia bibendum nulla sed consectetur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur blandit tempus porttitor. Donec sed odio dui. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.
					</div>
				</div>
			</div>

			<div class="col-md-4">
				<form class="card">
					<div class="card-body">
						<h4 class="card-title">Write to us</h4>
						<h6 class="card-subtitle">Aeneanquam ellentesque ornare lacinia</h6>

						<div class="form-group">
								<input type="text" class="form-control" placeholder="Full Name">
								<i class="form-group__bar"></i>
						</div>
						<div class="form-group">
								<input type="text" class="form-control" placeholder="Email Address">
								<i class="form-group__bar"></i>
						</div>
						<div class="form-group">
								<input type="text" class="form-control" placeholder="Contact Number">
								<i class="form-group__bar"></i>
						</div>
						<div class="form-group">
								<textarea class="form-control textarea-autosize" placeholder="Message" style="overflow: hidden; overflow-wrap: break-word; height: 52px;"></textarea>
								<i class="form-group__bar"></i>
						</div>

						<p class="mb-5">By sending us your information, you agree to Root’s Terms of Use &amp; Privacy Policy.</p>

						<div class="text-right">
								<button class="btn btn-primary">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	<footer class="footer hidden-xs-down">
		<p>Animaster Inc. © 2017. All rights reserved.</p>

		<ul class="nav footer__nav">
				<a class="nav-link" href="#">Homepage</a>

				<a class="nav-link" href="#">Company</a>

				<a class="nav-link" href="#">Support</a>

				<a class="nav-link" href="#">News</a>

				<a class="nav-link" href="#">Contacts</a>
		</ul>
	</footer>
</div>
</section>

<!-- Footer content box -->
<?php include "../Public/layouts/footer.php";?>
