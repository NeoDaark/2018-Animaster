<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='My campaigns ';
$dir = 'campaigns';
$depth = '1';
include "../Public/layouts/head.php";?>

<script>
    $(document).ready(function(){

    });
</script>

<!-- Body content box -->
<section class="content">
		<div class="content__inner">

			<header class="content__title">
				<h1 class="c-white">Welcome to My Games Section</h1>
			</header>

			<div class="card">
				<div class="card-header">
					<h2 class="card-title">Here is a list of the games I'm in</h2>
					<small class="card-subtitle">Juegos en los que puedo jugar, ya sea como máster o como jugador</small>
				</div>

			</div>

      <div class="card-deck">
        <div class="card">
            <img class="card-img-top h200" src="https://i.pinimg.com/564x/b3/37/2a/b3372a118b11a4a0f5714a1aecb40dbc.jpg">

            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</h6>
                <div class="actions">
                    <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 25px, 0px);">
                            <a href="#" class="dropdown-item">Refresh</a>
                            <a href="#" class="dropdown-item">Manage Widgets</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>

                <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, fermentum massa justo sit amet risus. Donec sed odio dui eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
        </div>
        <div class="card">
            <img class="card-img-top h200" src="https://i.pinimg.com/564x/66/70/60/667060b5533b1e8b7ad43043b401d2e5.jpg">

            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</h6>
                <div class="actions">
                    <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 25px, 0px);">
                            <a href="#" class="dropdown-item">Refresh</a>
                            <a href="#" class="dropdown-item">Manage Widgets</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
                <p class="card-text">Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
            </div>
        </div>

        <div class="card">
            <img class="card-img-top h200" src="https://i.pinimg.com/564x/f6/49/2e/f6492e2e97364ff21e5b22a0c2ed2df8.jpg">

            <div class="card-body">
                <h4 class="card-title">Card title</h4>
                <h6 class="card-subtitle">Praesent commodo cursus magna scelerisque consectetur</h6>
                <div class="actions">
                    <a href="#" class="actions__item zmdi zmdi-trending-up"></a>
                    <a href="#" class="actions__item zmdi zmdi-check-all"></a>

                    <div class="dropdown actions__item">
                        <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
                        <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 25px, 0px);">
                            <a href="#" class="dropdown-item">Refresh</a>
                            <a href="#" class="dropdown-item">Manage Widgets</a>
                            <a href="#" class="dropdown-item">Settings</a>
                        </div>
                    </div>
                </div>
                <p class="card-text">Aenean lacinia bibendum nulla sed consectetur. Fusce dapibus.</p>
            </div>
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
