<?php
/**
 * Template Name: Media — Events
 * Matches slug: media-events  (top-level page, sibling of Media).
 *
 * Subpage of the /media/ hub — conferences, plenaries, posters, panels, awards,
 * travel, and other lab events. Auto-pulls all Gallery Photos tagged with the
 * "Events" photo_category, newest captured-date first. To add or remove photos,
 * go to WP admin → Gallery Photos → Add New.
 * URL: /media-events/
 */
defined( 'ABSPATH' ) || exit;

$url_media = al_page_url( 'media' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-events-heading">
		<div class="al-container">
			<h1 class="al-inner-hero__title" id="media-events-heading">
				Events
			</h1>
			<p class="al-inner-hero__sub">
				Conferences, plenaries, posters, awards, and travel &mdash; the lab out at SPIE Photonics West, BMES, WMIC, and other venues.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<div class="al-media-gallery">
				<?php al_render_gallery_photos( 'events' ); ?>
			</div>

			<div class="al-post-back">
				<a href="<?php echo $url_media; ?>">&larr; Back to Media</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
