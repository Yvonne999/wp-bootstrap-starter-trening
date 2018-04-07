<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/web/assets/mobirise-icons/mobirise-icons.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/tether/tether.min.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/bootstrap/css/bootstrap-grid.min.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/bootstrap/css/bootstrap-reboot.min.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/socicon/css/styles.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/dropdown/css/style.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/theme/css/style.css">
<link rel="stylesheet"
	href="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/mobirise/css/mbr-additional.css"
	type="text/css">
<?php wp_head(); ?>
</head>

<body>
    <?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<section class="menu cid-qMRI8I39VT" once="menu" id="menu1-e">



		<nav
			class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-fixed-top navbar-toggleable-sm">
			<button class="navbar-toggler navbar-toggler-right" type="button"
				data-toggle="collapse" data-target="#navbarSupportedContent"
				aria-controls="navbarSupportedContent" aria-expanded="false"
				aria-label="Toggle navigation">
				<div class="hamburger">
					<span></span> <span></span> <span></span> <span></span>
				</div>
			</button>
			<div class="menu-logo">
				<div class="navbar-brand">

					<span class="navbar-caption-wrap"> <a
						class="navbar-caption text-white display-4"
						href=""> <img
							src="/wordpress/wp-content/themes/wp-bootstrap-starter/assets/images/logo.png"
							width="300" height="66">
					</a>
					</span>
				</div>
			</div>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav nav-dropdown" data-app-modern-menu="true">
					<li class="nav-item"><a class="nav-link link text-white display-4"
						href="http://127.0.0.1/wordpress/oferta/"> <span
							class="mbri-home mbr-iconfont mbr-iconfont-btn"></span> Oferta
					</a></li>
					<li class="nav-item"><a class="nav-link link text-white display-4"
						href="http://127.0.0.1/wordpress/o-firmie/"> <span
							class="mbri-search mbr-iconfont mbr-iconfont-btn"></span> O firmie
					</a></li>
					<li class="nav-item"><a class="nav-link link text-white display-4"
						href="http://127.0.0.1/wordpress/o-marce/"> <span
							class="mbri-search mbr-iconfont mbr-iconfont-btn"></span> O marce
					</a></li>
					<li class="nav-item"><a class="nav-link link text-white display-4"
						href="http://127.0.0.1/wordpress/kontakt/"> <span
							class="mbri-search mbr-iconfont mbr-iconfont-btn"></span> Kontakt
					</a></li>
				</ul>
			</div>
		</nav>
	</section>
	<section class="cid-qMRI8KY68F mbr-parallax-background" id="header2-f">





		<div class="container align-center">
			<div class="row justify-content-md-center">
				<div class="mbr-white col-md-10">
					<p
						class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">
						<b>ROMET</b>
					</p>



				</div>
			</div>
		</div>

	</section>
	<!-- #masthead -->
	
                <?php endif; ?>