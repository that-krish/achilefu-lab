<?php
/**
 * Kadence Child — header.php
 * Overrides the parent Kadence header with a custom wordmark + dropdown nav.
 * Helper functions live in functions.php (al_page_url, al_blog_url).
 */

defined( 'ABSPATH' ) || exit;
?>
<!doctype html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?php do_action( 'kadence_before_wrapper' ); ?>

<div id="wrapper" class="site wp-site-blocks">
	<?php
	/**
	 * kadence_before_header fires the skip-link among other things.
	 * @hooked kadence_do_skip_to_content_link - 2
	 */
	do_action( 'kadence_before_header' );
	?>

	<header id="masthead" class="al-site-header" role="banner">
		<div class="al-header-inner">

			<!-- ── Logo / Wordmark ───────────────────────── -->
			<a class="al-logo"
			   href="<?php echo esc_url( home_url( '/' ) ); ?>"
			   rel="home"
			   aria-label="<?php bloginfo( 'name' ); ?> — Home">
				<span class="al-logo-mark" aria-hidden="true"></span>
				<span class="al-logo-text">Achilefu <strong>Lab</strong></span>
			</a>

			<!-- ── Primary Nav ───────────────────────────── -->
			<nav id="al-primary-nav" class="al-primary-nav" aria-label="Primary navigation">

				<!-- Research -->
				<div class="al-nav-group">
					<button class="al-nav-label" aria-haspopup="true" aria-expanded="false">
						Research
						<svg class="al-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
							<path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<div class="al-dropdown" role="menu">
						<a href="<?php echo al_page_url( 'research' ); ?>" role="menuitem">Mission &amp; Vision</a>
						<div class="al-dropdown-divider" role="separator"></div>
						<a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" role="menuitem">Optical &amp; Molecular Imaging</a>
					</div>
				</div>

				<!-- Team -->
				<div class="al-nav-group">
					<button class="al-nav-label" aria-haspopup="true" aria-expanded="false">
						Team
						<svg class="al-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
							<path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<div class="al-dropdown" role="menu">
						<a href="<?php echo al_page_url( 'team/pi' ); ?>" role="menuitem">Meet the PI</a>
						<a href="<?php echo al_page_url( 'team' ); ?>" role="menuitem">Meet the Team</a>
					</div>
				</div>

				<!-- Updates -->
				<div class="al-nav-group">
					<button class="al-nav-label" aria-haspopup="true" aria-expanded="false">
						Updates
						<svg class="al-chevron" width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
							<path d="M2 4l4 4 4-4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
					</button>
					<div class="al-dropdown" role="menu">
						<a href="<?php echo al_page_url( 'media' ); ?>" role="menuitem">Media</a>
						<a href="<?php echo al_blog_url(); ?>" role="menuitem">Blog</a>
						<a href="<?php echo al_page_url( 'lab-calendar' ); ?>" role="menuitem">Lab Calendar</a>
					</div>
				</div>

			</nav>

			<!-- ── CTA + Hamburger ───────────────────────── -->
			<div class="al-header-end">
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-contact-cta">
					Contact
				</a>
				<button
					class="al-hamburger"
					id="al-menu-toggle"
					aria-controls="al-primary-nav"
					aria-expanded="false"
					aria-label="Open navigation menu"
				>
					<span></span><span></span><span></span>
				</button>
			</div>

		</div><!-- .al-header-inner -->
	</header><!-- #masthead -->

	<?php do_action( 'kadence_after_header' ); ?>

	<main id="inner-wrap" class="wrap kt-clear" role="main">
		<?php do_action( 'kadence_before_content' ); ?>
