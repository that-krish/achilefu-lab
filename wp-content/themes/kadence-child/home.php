<?php
/**
 * Template for the Journal index (WordPress "Posts page").
 * Mirrors the inner-page editorial template: .al-inner-hero band + .al-inner-body list.
 */
defined( 'ABSPATH' ) || exit;

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="journal-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Journal</span>
			</nav>
			<h1 class="al-inner-hero__title" id="journal-heading">Journal</h1>
			<p class="al-inner-hero__sub">
				Notes from the lab &mdash; new findings, paper announcements, conference dispatches, and commentary from the team.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<?php if ( have_posts() ) : ?>

				<ul class="al-journal-list">
					<?php while ( have_posts() ) : the_post(); ?>
						<li class="al-journal-item">
							<p class="al-journal-item__meta">
								<time datetime="<?php echo esc_attr( get_the_date( 'c' ) ); ?>">
									<?php echo esc_html( get_the_date() ); ?>
								</time>
							</p>
							<h2 class="al-journal-item__title">
								<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
							</h2>
							<?php $excerpt = get_the_excerpt(); if ( $excerpt ) : ?>
								<p class="al-journal-item__excerpt"><?php echo esc_html( $excerpt ); ?></p>
							<?php endif; ?>
							<a href="<?php the_permalink(); ?>" class="al-journal-item__more">
								Read entry &rarr;
							</a>
						</li>
					<?php endwhile; ?>
				</ul>

				<?php
				$pagination = paginate_links( [
					'mid_size'  => 1,
					'prev_text' => '&larr; Previous',
					'next_text' => 'Next &rarr;',
					'type'      => 'array',
				] );
				if ( $pagination ) : ?>
					<nav class="al-journal-pagination" aria-label="Posts navigation">
						<?php echo implode( '', array_map( 'wp_kses_post', $pagination ) ); ?>
					</nav>
				<?php endif; ?>

			<?php else : ?>

				<p class="al-journal-empty">Entries are on the way &mdash; check back soon.</p>

			<?php endif; ?>

		</div>
	</div>

</div>

<?php get_footer(); ?>
