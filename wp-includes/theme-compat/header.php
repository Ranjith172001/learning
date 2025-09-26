<?php

/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version.
 */
_deprecated_file(
	/* translators: %s: Template name. */
	sprintf(__('Theme without %s'), basename(__FILE__)),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf(__('Please include a %s template in your theme.'), basename(__FILE__))
);
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<link rel="profile" href="https://gmpg.org/xfn/11" />
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />

	<title><?php echo wp_get_document_title(); ?></title>

	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

	<?php if (file_exists(get_stylesheet_directory() . '/images/kubrickbgwide.jpg')) { ?>
		<style type="text/css" media="screen">
			<?php
			// Checks to see whether it needs a sidebar.
			if (empty($withcomments) && ! is_single()) {
			?>#page {
				background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbg-<?php bloginfo('text_direction'); ?>.jpg") repeat-y top;
				border: none;
			}

			<?php } else { // No sidebar. 
			?>#page {
				background: url("<?php bloginfo('stylesheet_directory'); ?>/images/kubrickbgwide.jpg") repeat-y top;
				border: none;
			}

			<?php } ?>
		</style>
	<?php } ?>

	<?php
	if (is_singular()) {
		wp_enqueue_script('comment-reply');
	}
	?>

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<div id="page">

		<div id="header" role="banner">
			<div id="headerimg">
				<nav class="navbar navbar-expand-lg bg-body-tertiary">
					<div class="container">
						<a class="navbar-brand" href="<?php  ?>">Navbar</a>
						<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
							<span class="navbar-toggler-icon"></span>
						</button>
						<div class="collapse navbar-collapse" id="navbarSupportedContent">
							<ul class="navbar-nav mx-auto mb-2 mb-lg-0">
								<li class="nav-item">
									<a class="nav-link active" aria-current="page" href="#">Home</a>
								</li>
								<?php 
                                if ( is_user_logged_in()){
									echo '<li><span class="nav-link" href="#">Yes</span></li>';
								}else{
									echo '<li><a class="nav-link" href="#">Register</a></li>';
								}
								
								?>
							</ul>
							<div class="d-flex">
								<?php
								if( is_user_logged_in() ) {
									$current_user = wp_get_current_user();
									echo '<a class="btn btn-outline-success" href="' . esc_url( wp_logout_url( get_permalink() ) ) . '">Logout</a>';
								} else {
									echo '<a class="btn btn-outline-success me-2" href="' . esc_url( wp_login_url() ) . '">Login</a>';
								}
								?>
							</div>
						</div>
					</div>
				</nav>
			</div>
		</div>