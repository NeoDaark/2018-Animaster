<!-- Header content box -->
<?php
require_once '../System/config.php';
$title='My Games ';
$dir = 'games-index';
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
					<h2 class="card-title">Games where I can play as master</h2>
        </div>
			</div>

      <div class="card profile" id="game_card">
        <div class="profile__img" id="game_img">
          <img id="game_img" src="https://i.pinimg.com/564x/b3/37/2a/b3372a118b11a4a0f5714a1aecb40dbc.jpg" alt="">
          <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
        </div>
        <div class="profile__info">
          <game_title>Aenean lacinia bibendum nulla sed consectetur.</game_title>
          <p class="card-text" id="game_dess">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, fermentum massa justo sit amet risus. Donec sed odio dui eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
          <ul class="icon-list" id="horitzontal">
            <li><i class="zmdi zmdi-phone"></i> 308-360-8938</li> <li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
          </ul>
        </div>
        <div class="dropdown actions__item" id="game_options">
            <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 25px, 0px);">
                <a href="#" class="dropdown-item"><i class="zmdi zmdi-play"></i> Play</a>
                <a href="#" class="dropdown-item"><i class="zmdi zmdi-settings"></i> Settings</a>
            </div>
        </div>
      </div>

      <div class="card profile" id="game_card">
        <div class="profile__img" id="game_img">
          <img id="game_img" src="https://i-h1.pinimg.com/564x/fb/9d/cb/fb9dcb261e53abb88fecba7a868ac643.jpg" alt="">
          <a href="#" class="zmdi zmdi-camera profile__img__edit"></a>
        </div>
        <div class="profile__info">
          <game_title>Aenean lacinia bibendum nulla sed consectetur.</game_title>
          <p class="card-text" id="game_dess">Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Duis mollis, est non commodo luctus, nisi erat porttitor ligula, fermentum massa justo sit amet risus. Donec sed odio dui eget lacinia odio sem nec elit. Aenean lacinia bibendum nulla sed consectetur.</p>
          <ul class="icon-list" id="horitzontal">
            <li><i class="zmdi zmdi-phone"></i> 308-360-8938</li> <li><i class="zmdi zmdi-email"></i> malinda@inbound.plus</li>
          </ul>
        </div>
        <div class="dropdown actions__item" id="game_options">
            <i data-toggle="dropdown" class="zmdi zmdi-more-vert" aria-expanded="false"></i>
            <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(30px, 25px, 0px);">
                <a href="#" class="dropdown-item"><i class="zmdi zmdi-play"></i> Play</a>
                <a href="#" class="dropdown-item"><i class="zmdi zmdi-settings"></i> Settings</a>
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
