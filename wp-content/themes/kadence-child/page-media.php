<?php
/**
 * Template for the Media page (hub).
 * Matches slug: media  —  page ID 11.
 *
 * v4.2 — hub now pulls real photos from the Gallery Photos CPT. Each row queries
 *        the 3 newest captured-date photos in its category (Research / People /
 *        Events) via al_render_gallery_photos(). Hand-curated SVG placeholders
 *        are gone — content is fully CMS-managed from WP admin → Gallery Photos.
 *        Full per-category galleries live on:
 *          /media-research/  → page-media-research.php
 *          /media-people/    → page-media-people.php
 *          /media-events/    → page-media-events.php
 */
defined( 'ABSPATH' ) || exit;

$url_contact  = al_page_url( 'contact' );
$url_research = al_page_url( 'media-research' );
$url_people   = al_page_url( 'media-people' );
$url_events   = al_page_url( 'media-events' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-heading">
		<div class="al-container">
			<h1 class="al-inner-hero__title" id="media-heading">
				Light, Captured.
			</h1>
			<p class="al-inner-hero__sub">
				A visual record of the Achilefu Lab &mdash; research, lab life, and conferences.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Research ────────────────────────────── -->
			<section class="al-media-hub-row" aria-labelledby="hub-research-heading">
				<header class="al-media-hub-row__header">
					<h2 class="al-inner-section__title" id="hub-research-heading">Research</h2>
					<a href="<?php echo $url_research; ?>" class="al-media-hub-row__see-more">See more</a>
				</header>
				<p class="al-inner-section__lead">
					Cell lines, microscopy, NIR captures, instrumentation, and operating-room work &mdash; the imaging output of the lab.
				</p>
				<div class="al-media-hub-row__gallery">
					<?php al_render_gallery_photos( 'research', 3 ); ?>
				</div>
			</section>

			<!-- ── Row 2: People ──────────────────────────────── -->
			<section class="al-media-hub-row" aria-labelledby="hub-people-heading">
				<header class="al-media-hub-row__header">
					<h2 class="al-inner-section__title" id="hub-people-heading">People</h2>
					<a href="<?php echo $url_people; ?>" class="al-media-hub-row__see-more">See more</a>
				</header>
				<p class="al-inner-section__lead">
					The lab as a community &mdash; retreats, dinners, hooding ceremonies, birthdays, and the everyday rhythm of the group.
				</p>
				<div class="al-media-hub-row__gallery">
					<?php al_render_gallery_photos( 'people', 3 ); ?>
				</div>
			</section>

			<!-- ── Row 3: Events ──────────────────────────────── -->
			<section class="al-media-hub-row" aria-labelledby="hub-events-heading">
				<header class="al-media-hub-row__header">
					<h2 class="al-inner-section__title" id="hub-events-heading">Events</h2>
					<a href="<?php echo $url_events; ?>" class="al-media-hub-row__see-more">See more</a>
				</header>
				<p class="al-inner-section__lead">
					Conferences, plenaries, posters, panels, awards, and travel &mdash; the lab out at SPIE, BMES, WMIC, and other venues where the field gathers.
				</p>
				<div class="al-media-hub-row__gallery">
					<?php al_render_gallery_photos( 'events', 3 ); ?>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ────────────────────────────────────────── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Request an Image</h3>
					<p>
						For high-resolution files or use in print and broadcast features, email <a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a>. Credit "Achilefu Lab, UT Southwestern Medical Center."
					</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
