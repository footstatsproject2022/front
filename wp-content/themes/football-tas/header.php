<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Titan
 * @since 3.0.0
 */
?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	
	<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/style.css" />
	<link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/styles/hover-min.css" />
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
	
	<title><?php bloginfo('name') ?> | <?php the_title(); ?></title>
	
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<?php 
	$user_id = get_current_user_id();
	$user = get_userdata( $user_id );
?>

<header id="main-nav" class="header-second transparent"> 
    <div class="container"> 
		<nav class="row align-items-center m-0">
			<div class="col-lg-4">
				<div class="brand-logo">
				<?php if( !empty(get_theme_mod( 'custom_logo' )) ): ?>
					<?php the_custom_logo('full'); ?>
				<?php else: ?>
					<a href="<?php echo site_url() ?>" class="custom-logo-link text-white">
						<h3><?php echo bloginfo('name'); ?></h3>
					</a>
				<?php endif; ?>
				</div>
			</div>
			<!-- end of logo section -->

			<div class="col-lg-8 right-side">
				<div class="row">
					<div class="col">
						<a href="<?php echo site_url().'/about-us' ?>" class="btn btn-outline-light px-4 me-3 mb-3 mb-md-0">WHO WE ARE?</a>
						<a href="<?php echo site_url().'/players-data-nfts' ?>" class="btn btn-outline-light px-4 mb-3 mb-md-0">PLAYERS</a>
					</div>
					<div class="col mb-3 mb-md-0">
						<?php if( is_user_logged_in() ): ?>
							<div class="d-flex justify-content-md-end">
								<div class="flex-shrink-0 dropdown account">
									<a href="#" class="d-flex align-items-center text-white text-decoration-none dropdown-toggle" id="dropdownUser2" data-bs-toggle="dropdown" aria-expanded="false">
										<img src="https://github.com/mdo.png" alt="mdo" width="50" height="50" class="rounded-circle me-2">
										<span class="d-inline-block">
											<span class="username"><?php echo @$user->first_name.' '.@$user->last_name; ?></span><br>
											<span class="description">Footballer, India</span>
										</span>
										<i class="bi bi-chevron-down ms-3"></i>
									</a>
									<ul class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdownUser2"> 
										<li><a class="dropdown-item" href="#">New project...</a></li> 
										<li><a class="dropdown-item" href="#">Settings</a></li>
										<li><a class="dropdown-item" href="#">Profile</a></li>
										<li><hr class="dropdown-divider"></li>
										<li><a class="dropdown-item" href="<?php echo site_url().'/logout'; ?>">Sign out</a></li> 
									</ul>
								</div>
							</div>
						<?php else: ?>
							<div class="d-flex justify-content-md-end">
								<a href="<?php echo site_url().'/register' ?>" class="btn btn-light px-4 me-3 mb-3 mb-md-0"><i class="bi bi-person-plus"></i> REGISTER</a>
								<a href="<?php echo site_url().'/login' ?>" class="btn btn-light px-4 mb-3 mb-md-0"><i class="bi bi-person"></i> LOGIN</a>
							</div>
						<?php endif; ?>
					</div>
				</div>
			</div>

		</nav>
	</div>
</header>