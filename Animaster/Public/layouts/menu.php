<script>
	$( document ).ready(function() {
			//Changue color id of the user
			//#######################################################################
			$('.coloractive').click(function(){
					var data = {
						id_color : this.id
					};
					$.ajax({
							type: "POST",
							url: "<?php echo $directory?>System/Protocols/Users_Color.php",
							data: data,
							success: function (response) {
								//console.log(response);
								if(response == 'fail'){
									anotify('[ 1d100 = 03 ] You have a blunder!', 'red');
								}else if(response == 'succes'){
									anotify('Color changed!', 'green');
								}else if(response == 'nosession'){
									anotify('SignIn is needed to make this permanent! ', 'dark');
								}
							}
					});
			});
	});
</script>

<!-- Aqui empieza el header -->
<header class="header z-depth-1 <?=$menu?>">
		<div class="navigation-trigger hidden-xl-up" data-ma-action="aside-open" data-ma-target=".sidebar">
				<div class="navigation-trigger__inner">
						<i class="navigation-trigger__line"></i>
						<i class="navigation-trigger__line"></i>
						<i class="navigation-trigger__line"></i>
				</div>
		</div>
		<div class="header__logo ">
				<h1><a href="<?=$directory?>home">Animaster</a></h1>
		</div>

		<form class="search">
				<div class="search__inner">
						<input type="text" class="search__text" placeholder="Search for people, files, documents...">
						<i class="zmdi zmdi-search search__helper" data-ma-action="search-close"></i>
				</div>
		</form>

		<ul class="top-nav">
				<li class="hidden-xl-up"><a href="#" data-ma-action="search-open"><i class="zmdi zmdi-search"></i></a></li>
				<?php
				if(!isset($_SESSION['user'])){
					echo '
						<li class="waves-effect dropdown" data-toggle="tooltip" data-placement="bottom" data-original-title="Sign In" ><a href="'.$directory.'account/login"><i class="fas fa-sign-in-alt"></i></a></li>
						<li class="waves-effect dropdown" data-toggle="tooltip" data-placement="bottom" data-original-title="Sign Up"><a href="'.$directory.'account/create"><i class="fas fa-user-plus"></i></a></li>
					';
				}
				?>
				<li class="dropdown"<?=$icons?>>
						<a class="waves-effect" href="#" data-toggle="dropdown" ><i class="zmdi zmdi-email"></i></a>
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

				<li class="dropdown top-nav__notifications" <?=$icons?>>
						<a class="waves-effect top-nav__notify" href="#" data-toggle="dropdown">
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

				<li class="dropdown hidden-xs-down" <?=$icons?>>
						<a class="waves-effect" href="#" data-toggle="dropdown"><i class="zmdi zmdi-check-circle"></i></a>

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

				<li class="dropdown hidden-xs-down" <?=$icons?>>
						<a class="waves-effect" href="#" data-toggle="dropdown"><i class="zmdi zmdi-apps"></i></a>

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

				<li class="dropdown hidden-xs-down">
						<a class="waves-effect" href="#" data-toggle="dropdown"><i class="zmdi zmdi-more-vert "></i></a>

						<div class="dropdown-menu dropdown-menu-right">
								<div class="dropdown-item theme-switch">
										Theme Switch
										<div class="btn-group btn-group-toggle btn-group--colors" data-toggle="buttons">
												<label id="0" class="coloractive btn bg-green <?=$coloractive[0]?>"><input type="radio" value="green" autocomplete="off" checked></label>
												<label id="1" class="coloractive btn bg-blue <?=$coloractive[1]?>"><input type="radio" value="blue" autocomplete="off"></label>
												<label id="2" class="coloractive btn bg-red <?=$coloractive[2]?>"><input type="radio" value="red" autocomplete="off"></label>
												<label id="3" class="coloractive btn bg-orange <?=$coloractive[3]?>"><input type="radio" value="orange" autocomplete="off"></label>
												<label id="4" class="coloractive btn bg-teal <?=$coloractive[4]?>"><input type="radio" value="teal" autocomplete="off"></label>

												<div class="clearfix mt-2"></div>

												<label id="5" class="coloractive btn bg-cyan <?=$coloractive[5]?>"><input type="radio" value="cyan" autocomplete="off"></label>
												<label id="6" class="coloractive btn bg-dark <?=$coloractive[6]?>"><input type="radio" value="dark-blue" autocomplete="off"></label>
												<label id="7" class="coloractive btn bg-purple <?=$coloractive[7]?>"><input type="radio" value="purple" autocomplete="off"></label>
												<label id="8" class="coloractive btn bg-indigo <?=$coloractive[8]?>"><input type="radio" value="indigo" autocomplete="off"></label>
												<label id="9" class="coloractive btn bg-brown <?=$coloractive[9]?>"><input type="radio" value="brown" autocomplete="off"></label>

										</div>
								</div>

								<?php
									if(!isset($_SESSION['user'])){
										echo ' ';
									}
									if(isset($_SESSION['user'])){
										echo '
											<a class="dropdown-item divider" href=""> </a>
											<a class="dropdown-item" href="'.$directory.'sessions/destroy"><i class="zmdi zmdi-time-restore"></i> Logout</a>
											<a class="dropdown-item divider" href=""> </a>
										';
									}
								?>
                <a data-action="fullscreen" class="dropdown-item" href="#"><i class="zmdi zmdi-fullscreen">  </i> Toggle Fullscreen</a>
                <a data-action="clear-localstorage" class="dropdown-item" href="#"><i class="zmdi zmdi-delete">  </i> Clear Local Storage</a>
								<?php
								if ($user_rol == 1){
									echo '<a class="dropdown-item" href="'.$directory.'"../Themex/"><i class="zmdi zmdi-label-alt-outline"></i> Theme</a>';

								}


								?>

						</div>
				</li>
		</ul>

</header>

<aside class="sidebar <?=$menu?>">
    <div class="scrollbar-inner">
        <div class="user" <?=$icons?>>
            <div class="user__info" data-toggle="dropdown">
                <img class="user__img" src="<?=$gravatar_link?>" alt="">
                <div>
                    <div class="user__name"><?=$user_name?></div>
                    <div class="user__email"><?=$user_mail?></div>
                </div>
            </div>

            <div class="dropdown-menu">
                <a class="dropdown-item" href="#">View Profile</a>
                <a class="dropdown-item" href="#">Settings</a>
                <a class="dropdown-item" href="#">Logout</a>
            </div>
        </div>

        <ul class="navigation">
            <li><a href="index-2.html"><i class="zmdi zmdi-home"></i> Home</a></li>

            <li class="navigation__sub navigation__sub--active navigation__sub--toggled">
                <a href="#"><i class="zmdi zmdi-view-week"></i> Variants</a>

                <ul>
                    <li><a href="hidden-sidebar.html">Hidden Sidebar</a></li>
                    <li class="navigation__active"><a href="boxed-layout.html">Boxed Layout</a></li>
                    <li><a href="hidden-sidebar-boxed-layout.html">Boxed Layout with Hidden Sidebar</a></li>
                    <li><a href="top-navigation.html">Top Navigation</a></li>
                </ul>
            </li>

            <li><a href="typography.html"><i class="zmdi zmdi-format-underlined"></i> Typography</a></li>

            <li><a href="widgets.html"><i class="zmdi zmdi-widgets"></i> Widgets</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-view-list"></i> Tables</a>

                <ul>
                    <li><a href="html-table.html">HTML Table</a></li>
                    <li><a href="data-table.html">Data Table</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-text"></i> Forms</a>

                <ul>
                    <li><a href="form-elements.html">Basic Form Elements</a></li>
                    <li><a href="form-components.html">Form Components</a></li>
                    <li><a href="form-layouts.html">Form Layouts</a></li>
                    <li><a href="form-validation.html">Form Validation</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-swap-alt"></i> User Interface</a>

                <ul>
                    <li><a href="colors.html">Colors</a></li>
                    <li><a href="css-animations.html">CSS Animations</a></li>
                    <li><a href="buttons.html">Buttons</a></li>
                    <li><a href="icons.html">Icons</a></li>
                    <li><a href="listview.html">Listview</a></li>
                    <li><a href="toolbars.html">Toolbars</a></li>
                    <li><a href="cards.html">Cards</a></li>
                    <li><a href="alerts.html">Alerts</a></li>
                    <li><a href="badges.html">Badges</a></li>
                    <li><a href="breadcrumbs.html">Bredcrumbs</a></li>
                    <li><a href="jumbotron.html">Jumbotron</a></li>
                    <li><a href="navs.html">Navs</a></li>
                    <li><a href="pagination.html">Pagination</a></li>
                    <li><a href="progress.html">Progress</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-group-work"></i> Javascript Components</a>

                <ul class="navigation__sub">
                    <li><a href="carousel.html">Carousel</a></li>
                    <li><a href="collapse.html">Collapse</a></li>
                    <li><a href="dropdowns.html">Dropdowns</a></li>
                    <li><a href="modals.html">Modals</a></li>
                    <li><a href="popover.html">Popover</a></li>
                    <li><a href="tabs.html">Tabs</a></li>
                    <li><a href="tooltips.html">Tooltips</a></li>
                    <li><a href="notifications-alerts.html">Notifications & Alerts</a></li>
                    <li><a href="tree-view.html">Tree View</a></li>
                </ul>
            </li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-trending-up"></i> Charts</a>

                <ul>
                    <li><a href="flot-charts.html">Flot</a></li>
                    <li><a href="other-charts.html">Other Charts</a></li>
                </ul>
            </li>

            <li><a href="calendar.html"><i class="zmdi zmdi-calendar"></i> Calendar</a></li>

            <li><a href="photo-gallery.html"><i class="zmdi zmdi-image"></i> Photo Gallery</a></li>

            <li class="navigation__sub">
                <a href="#"><i class="zmdi zmdi-collection-item"></i> Sample Pages</a>

                <ul>
                    <li><a href="profile-about.html">Profile</a></li>
                    <li><a href="messages.html">Messages</a></li>
                    <li><a href="contacts.html">Contacts</a></li>
                    <li><a href="new-contact.html">New Contact</a></li>
                    <li><a href="groups.html">Groups</a></li>
                    <li><a href="pricing-tables.html">Pricing Tables</a></li>
                    <li><a href="invoice.html">Invoice</a></li>
                    <li><a href="todo-lists.html">Todo Lists</a></li>
                    <li><a href="notes.html">Notes</a></li>
                    <li><a href="search-results.html">Search Results</a></li>
                    <li><a href="issue-tracker.html">Issue Tracker</a></li>
                    <li><a href="faq.html">FAQ</a></li>
                    <li><a href="team.html">Team</a></li>
                    <li><a href="blog.html">Blog</a></li>
                    <li><a href="blog-details.html">Blog Details</a></li>
                    <li><a href="questions-answers.html">Questions & Answers</a></li>
                    <li><a href="questions-answers-details.html">Questions & Answers Details</a></li>
                    <li><a href="login.html">Login & SignUp</a></li>
                    <li><a href="lockscreen.html">Lockscreen</a></li>
                    <li><a href="404.html">404</a></li>
                    <li><a href="empty.html">Empty Page</a></li>
                </ul>
            </li>
        </ul>
    </div>
</aside>

<!-- //Imagen de fondo -->
<div id="bgmslider">
    <img src="<?=$directory?>Public/img/rpgbg.jpg" />
	<script>
    $(document).ready(function(){
        var src = $("#bgmslider img").eq(0).attr('src');
        $('html').css('backgroundImage','url('+src+')');

    });
	</script>
</div>
