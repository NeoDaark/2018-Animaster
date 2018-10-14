<!-- Home - Header content box  -->
<?php
require_once 'System/config.php';
$title='Info';
$migas='#Info|servers.php';
$dir = 'root';
$depth = '0';
include "Public/layouts/head.php";
?>




<!-- Body content box -->
<section class="content">
		<div class="content__inner">
			<header class="content__title">
					<h1 class="c-white">xxx</h1>
					<div class="actions">
							<a href="#" class="actions__item zmdi zmdi-trending-up c-white"></a>
							<a href="#" class="actions__item zmdi zmdi-check-all c-white"></a>

							<div class="dropdown actions__item">
									<i data-toggle="dropdown" class="zmdi zmdi-more-vert"></i>
									<div class="dropdown-menu dropdown-menu-right">
											<a href="#" class="dropdown-item">Refresh</a>
											<a href="#" class="dropdown-item">Manage Widgets</a>
											<a href="#" class="dropdown-item">Settings</a>
									</div>
							</div>
					</div>
			</header>

			<div class="card">
					<div class="card-header">
							<h2 class="card-title">xxx</h2>
							<small class="card-subtitle">xxx</small>
					</div>

					<div class="card-block">
						<?php
							//$timeTarget = 0.05; // 50 milisegundos

						//	$coste = 9;
							//$testpas = password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);
						//	echo $testpas.'<br>';
						//	$testpas = password_hash("test", PASSWORD_BCRYPT, ["cost" => $coste]);
						//	echo $testpas;
						?>
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
<?php include "Public/layouts/footer.php";?>
