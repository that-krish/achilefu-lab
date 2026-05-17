<?php
/**
 * Single Journal entry template — auto-applied to every published post.
 * Sam writes title + body + (optional) category. This wraps it in the editorial layout.
 */
defined( 'ABSPATH' ) || exit;

$url_journal = al_journal_url();

get_header();

while ( have_posts() ) :
	the_post();

	$cats = get_the_category();
	$primary = ! empty( $cats ) ? $cats[0] : null;
	$section_label = ( $primary && $primary->slug !== 'uncategorized' )
		? $primary->name
		: 'Journal';
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="post-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo esc_url( $url_journal ); ?>">Journal</a>
			</nav>
			<p class="al-inner-hero__eyebrow"><?php echo esc_html( $section_label ); ?></p>
			<h1 class="al-inner-hero__title" id="post-heading"><?php the_title(); ?></h1>
			<p class="al-inner-hero__sub">
				<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
					<?php echo esc_html( get_the_date() ); ?>
				</time>
				<span aria-hidden="true">&middot;</span>
				<?php echo esc_html( get_the_author() ); ?>
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<article class="al-post-body">
				<?php the_content(); ?>
			</article>

			<p class="al-post-back">
				<a href="<?php echo esc_url( $url_journal ); ?>">&larr; Back to Journal</a>
			</p>

		</div>
	</div>

</div>

<?php
endwhile;
get_footer();
