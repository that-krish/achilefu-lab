<?php
/**
 * Template Name: Media — People
 * Matches slug: media-people  (top-level page, sibling of Media).
 *
 * Subpage of the /media/ hub — the lab as a community: retreats, dinners,
 * hooding, birthdays, everyday rhythm. Auto-pulls all Gallery Photos tagged
 * with the "People" photo_category, newest captured-date first. To add or
 * remove photos, go to WP admin → Gallery Photos → Add New.
 * URL: /media-people/
 */
defined( 'ABSPATH' ) || exit;

$url_media = al_page_url( 'media' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-people-heading">
		<div class="al-container">
			<h1 class="al-inner-hero__title" id="media-people-heading">
				People
			</h1>
			<p class="al-inner-hero__sub">
				The lab as a community &mdash; retreats, dinners, hooding ceremonies, birthdays, and the everyday rhythm of the group.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<div class="al-media-gallery">
				<?php al_render_gallery_photos( 'people' ); ?>
			</div>

			<div class="al-post-back">
				<a href="<?php echo $url_media; ?>">&larr; Back to Media</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
