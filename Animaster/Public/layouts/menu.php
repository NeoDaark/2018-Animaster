<?php
	//Directorio --> enlaces del menu
	$directorio = '';
	if ($dir == 'root'){
		$directorio = '';
	}else{
		if($depth == 1){
			$directorio = '../';
		}else if($depth == 2){
			$directorio = '../../';
		}else if($depth == 3){
			$directorio = '../../../';
		}
	}
?>
<!-- Aqui empieza el header -->
<header class="header">
		<div class="header__logo">
				<h1><a href="<?php echo $directorio; ?>home">Animaster</a></h1>
		</div>

		<form class="search">
				<div class="search__inner">
						<input type="text" class="search__text" placeholder="Search for people, files, documents...">
						<i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
				</div>
		</form>

		<ul class="top-nav">
				<li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>

				<li class="dropdown">
						<a href="#" data-toggle="dropdown" class="waves-effect"><i class="zmdi zmdi-email"></i></a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
								<div class="listview listview--hover">
										<div class="listview__header">
												Messages

												<div class="actions">
														<a href="messages.html" class="actions__item zmdi zmdi-plus"></a>
												</div>
										</div>

										<a href="#" class="listview__item">
												<img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

												<div class="listview__content">
														<div class="listview__heading">
																David Belle <small>12:01 PM</small>
														</div>
														<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
												</div>
										</a>

										<a href="#" class="listview__item">
												<img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

												<div class="listview__content">
														<div class="listview__heading">
																Jonathan Morris
																<small>02:45 PM</small>
														</div>
														<p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
												</div>
										</a>

										<a href="#" class="listview__item">
												<img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

												<div class="listview__content">
														<div class="listview__heading">
																Fredric Mitchell Jr.
																<small>08:21 PM</small>
														</div>
														<p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
												</div>
										</a>

										<a href="#" class="listview__item">
												<img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

												<div class="listview__content">
														<div class="listview__heading">
																Glenn Jecobs
																<small>08:43 PM</small>
														</div>
														<p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
												</div>
										</a>

										<a href="#" class="listview__item">
												<img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

												<div class="listview__content">
														<div class="listview__heading">
																Bill Phillips
																<small>11:32 PM</small>
														</div>
														<p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
												</div>
										</a>

										<a href="#" class="view-more">View all messages</a>
								</div>
						</div>
				</li>

				<li class="dropdown top-nav__notifications">
						<a href="#" data-toggle="dropdown" class="top-nav__notify waves-effect">
								<i class="zmdi zmdi-notifications"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right dropdown-menu--block">
								<div class="listview listview--hover">
										<div class="listview__header">
												Notifications

												<div class="actions">
														<a href="#" class="actions__item zmdi zmdi-check-all" data-ma-action="notifications-clear"></a>
												</div>
										</div>

										<div class="listview__scroll scrollbar-inner">
												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">David Belle</div>
																<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Jonathan Morris</div>
																<p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Fredric Mitchell Jr.</div>
																<p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Glenn Jecobs</div>
																<p>Ut vitae lacus sem ellentesque maximus, nunc sit amet varius dignissim, dui est consectetur neque</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Bill Phillips</div>
																<p>Proin laoreet commodo eros id faucibus. Donec ligula quam, imperdiet vel ante placerat</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">David Belle</div>
																<p>Cum sociis natoque penatibus et magnis dis parturient montes</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Jonathan Morris</div>
																<p>Nunc quis diam diamurabitur at dolor elementum, dictum turpis vel</p>
														</div>
												</a>

												<a href="#" class="listview__item">
														<img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

														<div class="listview__content">
																<div class="listview__heading">Fredric Mitchell Jr.</div>
																<p>Phasellus a ante et est ornare accumsan at vel magnauis blandit turpis at augue ultricies</p>
														</div>
												</a>
										</div>

										<div class="p-1"></div>
								</div>
						</div>
				</li>

				<li class="dropdown hidden-xs-down">
						<a href="#" data-toggle="dropdown" class="waves-effect"><i class="zmdi zmdi-check-circle"></i></a>

						<div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
								<div class="listview listview--hover">
										<div class="listview__header">Tasks</div>

										<a href="#" class="listview__item">
												<div class="listview__content">
														<div class="listview__heading">HTML5 Validation Report</div>

														<div class="progress">
																<div class="progress-bar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</a>

										<a href="#" class="listview__item">
												<div class="listview__content">
														<div class="listview__heading">Google Chrome Extension</div>

														<div class="progress">
																<div class="progress-bar bg-warning" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</a>

										<a href="#" class="listview__item">
												<div class="listview__content">
														<div class="listview__heading">Social Intranet Projects</div>

														<div class="progress">
																<div class="progress-bar bg-success" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</a>

										<a href="#" class="listview__item">
												<div class="listview__content">
														<div class="listview__heading">Bootstrap Admin Template</div>

														<div class="progress">
																<div class="progress-bar bg-info" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</a>

										<a href="#" class="listview__item">
												<div class="listview__content">
														<div class="listview__heading">Youtube Client App</div>

														<div class="progress">
																<div class="progress-bar bg-danger" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
														</div>
												</div>
										</a>

										<a href="#" class="view-more">View all tasks</a>
								</div>
						</div>
				</li>

				<li class="dropdown hidden-xs-down">
						<a href="#" data-toggle="dropdown" class="waves-effect"><i class="zmdi zmdi-apps"></i></a>

						<div class="dropdown-menu dropdown-menu-right dropdown-menu--block" role="menu">
								<div class="row app-shortcuts">
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-calendar"></i>
												<small class="">Calendar</small>
												<span class="app-shortcuts__helper bg-red"></span>
										</a>
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-file-text"></i>
												<small class="">Files</small>
												<span class="app-shortcuts__helper bg-blue"></span>
										</a>
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-email"></i>
												<small class="">Email</small>
												<span class="app-shortcuts__helper bg-teal"></span>
										</a>
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-trending-up"></i>
												<small class="">Reports</small>
												<span class="app-shortcuts__helper bg-blue-grey"></span>
										</a>
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-view-headline"></i>
												<small class="">News</small>
												<span class="app-shortcuts__helper bg-orange"></span>
										</a>
										<a class="col-4 app-shortcuts__item" href="#">
												<i class="zmdi zmdi-image"></i>
												<small class="">Gallery</small>
												<span class="app-shortcuts__helper bg-light-green"></span>
										</a>
								</div>
						</div>
				</li>

				<li class="dropdown hidden-xs-down ">
						<a href="#" data-toggle="dropdown" class="waves-effect"><i class="zmdi zmdi-more-vert "></i></a>

						<div class="dropdown-menu dropdown-menu-right">
								<div class="dropdown-item theme-switch">
										Theme Switch
										<div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
												<label class="btn bg-green"><input type="radio" value="green" autocomplete="off" checked></label>
												<label class="btn bg-blue"><input type="radio" value="blue" autocomplete="off"></label>
												<label class="btn bg-red"><input type="radio" value="red" autocomplete="off"></label>
												<label class="btn bg-orange"><input type="radio" value="orange" autocomplete="off"></label>
												<label class="btn bg-teal"><input type="radio" value="teal" autocomplete="off"></label>

												<div class="clearfix mt-2"></div>

												<label class="btn bg-cyan active"><input type="radio" value="cyan" autocomplete="off"></label>
												<label class="btn bg-blue-grey"><input type="radio" value="blue-grey" autocomplete="off"></label>
												<label class="btn bg-purple"><input type="radio" value="purple" autocomplete="off"></label>
												<label class="btn bg-indigo"><input type="radio" value="indigo" autocomplete="off"></label>
												<label class="btn bg-brown"><input type="radio" value="brown" autocomplete="off"></label>
										</div>
								</div>

								<?php
									if(!isset($_SESSION['user'])){
										echo ' ';
									}
									if(isset($_SESSION['user'])){
										echo '
											<a class="dropdown-item divider" href=""> </a>
											<a class="dropdown-item" href="'.$directorio.'sessions/destroy"><i class="zmdi zmdi-time-restore"></i> Logout</a>
											<a class="dropdown-item divider" href=""> </a>
										';
									}
								?>

                <a data-action="fullscreen" class="dropdown-item" href="#"><i class="zmdi zmdi-fullscreen">  </i> Toggle Fullscreen</a>
                <a data-action="clear-localstorage" class="dropdown-item" href="#"><i class="zmdi zmdi-delete">  </i> Clear Local Storage</a>
						</div>
				</li>
		</ul>

		<ul class="top-menu">
		<?php
			//Menu izquierda
			if(!isset($_SESSION['user'])){
				echo '
					<li class="active pull-left waves-effect"><a href="'.$directorio.'home">home</a></li>

				';
			}
			if(isset($_SESSION['user'])){
				echo '
					<li class="active pull-left waves-effect"><a href="'.$directorio.'home">home</a></li>
					<li class="active pull-left waves-effect"><a href="'.$directorio.'campaigns/search">My campaigns</a></li>
					<li class="active pull-left waves-effect"><a href="'.$directorio.'lfg">Looking for group</a></li>
				';
			}
			//Menu derecha
			if(!isset($_SESSION['user'])){
				echo '
					<li class="waves-effect pull-right idplr"><a href="'.$directorio.'account/login">Sign In</a></li>
					<li class="waves-effect pull-right idplr"><a href="'.$directorio.'account/create">Sign Up</a></li>
				';
			}
			if(isset($_SESSION['user'])){
				echo '
					<li class="waves-effect pull-right idplr"><a href="'.$directorio.'account/">Hola, '.$value['user_name'].'!</a></li>
				';
				}
			?>
		</ul>
</header>

<!-- //Imagen de fondo -->
<div id="bgmslider">
    <img src="<?php echo $directorio.'Public/img/rpgbg.jpg'?>" />
	<script>
    $(document).ready(function(){
        var src = $("#bgmslider img").eq(0).attr('src');
        $('html').css('backgroundImage','url('+src+')');

    });
	</script>
</div>
