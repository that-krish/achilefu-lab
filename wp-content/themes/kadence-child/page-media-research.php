<?php
/**
 * Template Name: Media — Research
 * Matches slug: media-research  (top-level page, sibling of Media).
 *
 * Subpage of the /media/ hub — research imagery + OR/translational gallery.
 * Auto-pulls all Gallery Photos tagged with the "Research" photo_category,
 * newest captured-date first. To add or remove photos, go to
 * WP admin → Gallery Photos → Add New (or edit an existing one).
 * URL: /media-research/
 */
defined( 'ABSPATH' ) || exit;

$url_media = al_page_url( 'media' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-research-heading">
		<div class="al-container">
			<h1 class="al-inner-hero__title" id="media-research-heading">
				Research
			</h1>
			<p class="al-inner-hero__sub">
				Cell lines, microscopy, NIR captures, instrumentation, and the operating-room work where imaging moves bench-to-bedside.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<div class="al-media-gallery">
				<?php al_render_gallery_photos( 'research' ); ?>
			</div>

			<div class="al-post-back">
				<a href="<?php echo $url_media; ?>">&larr; Back to Media</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
