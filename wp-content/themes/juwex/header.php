<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" <?php language_attributes(); ?>> <!--<![endif]-->
<head>
		<!-- <SCRIPT type="text/javascript" src="/wp-includes/js/jquery/jquery.js"></SCRIPT> -->
	<!-- <SCRIPT type="text/javascript" src="../wp-content\themes\juwex\js\popup_img.js"></SCRIPT> -->

	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<title><?php wp_title('|', true, 'right'); bloginfo('name'); ?></title>
	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?> >
	<header class="top_header">
		
		<div class="top_menu cf">
			<div class="wrapper cf">
				<div class="wrapper_white cf">
					<div class="buttons">
						Главная
					</div>
					<div class="buttons">
						Каталог
					</div>
					<div class="buttons">
						Информация
					</div>
					<div class="buttons_social">
						<i class="fa fa-google-plus" aria-hidden="true"></i>
					</div>
					<div class="buttons_social">
						<i class="fa fa-vk" aria-hidden="true"></i>
					</div>
					<div class="buttons_social">
						<i class="fa fa-facebook" aria-hidden="true"></i>
					</div>
					<div class="buttons_social">
						<i class="fa fa-twitter" aria-hidden="true"></i>
					</div>

				</div>
			</div>
		</div>

		<div class="wrapper cf">
			<div class="header_third adress_section" >
				<div class="header_text">
					rulman@mail.ru
				</div>
				<div class="header_text">
					vk.com/katalog001
				</div>
			</div>
			<div class="header_third logo_section" >
				<img src="<?php echo ale_get_option('sitelogo'); ?>" /> >
			</div>
			<div class="header_third name_section" >
				<div class="header_text">
					Чикуров Роман 
				</div>
				<div class="header_text">
					т.8 909 062 6538
				</div>	
			</div>
		</div>
<!-- 		<nav class="top_navigation">
			<div class="wrapper cf">

				<?php
				if ( has_nav_menu( 'header_menu' ) ) {
					wp_nav_menu(array(
						'theme_location'=> 'header_menu',
						'menu'			=> 'Header Menu',
						'menu_class'	=> 'ale_headermenu cf',
						'walker'		=> new Aletheme_Nav_Walker(),
						'container'		=> '',
						));
				}
				?>
			</div>
		</nav> -->


		<div class="wrapper cf">
			<!-- <div class="wrapper_white " > -->
				<div class="buttons_menu">
				<a href="/home" >Помолвочные кольца</a>
				</div>
				<div class="buttons_menu">
				<a href="/premium/" >Премиум кольца</a>
				</div>
				<div class="buttons_menu">
				<a href="/man-rings/" >Мужские кольца</a>
				</div>
				<div class="buttons_menu">
					Броши
				</div>
				<div class="buttons_menu">
					<a href="/sculpt/" >Скульптура</a>
				</div>

			<!-- </div> -->
		</div>


	</header>










