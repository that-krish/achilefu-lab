<?php
/**
 * Template for the Meet the Team page.
 * Matches slug: team  —  page ID 9.
 */
defined( 'ABSPATH' ) || exit;

/*
 * Team data — add entries here as bios become available.
 * Format: [ 'name', 'role', 'photo_filename' (in wp-content/uploads/team/), 'pronouns' ]
 * Leave photo_filename empty string for the placeholder avatar.
 */
$team = [
	// Postdoctoral Fellows
	[ 'group' => 'Postdoctoral Fellows',   'members' => [] ],
	// Graduate Students
	[ 'group' => 'Graduate Students',      'members' => [] ],
	// Research Scientists
	[ 'group' => 'Research Scientists',    'members' => [] ],
	// Alumni
	[ 'group' => 'Lab Alumni',             'members' => [] ],
];

$uploads_url = wp_get_upload_dir()['baseurl'];

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="team-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Team</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Our People</p>
			<h1 class="al-inner-hero__title" id="team-heading">Meet the Team</h1>
			<p class="al-inner-hero__sub">
				A community of chemists, engineers, biologists, and clinicians united by the goal of making light-based medicine a reality — from first synthesis to first patient.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- PI card -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Principal Investigator</h2>
				<div style="max-width:460px">
					<a href="<?php echo al_page_url( 'team/pi' ); ?>" class="al-research-nav-card" style="flex-direction:row;align-items:center;gap:1.5rem;padding:1.75rem 2rem;">
						<div style="width:72px;height:72px;border-radius:var(--r-card);overflow:hidden;flex-shrink:0;">
							<?php
							$photo = wp_get_upload_dir()['basedir'] . '/dr-achilefu.jpg';
							if ( file_exists( $photo ) ) :
							?>
								<img src="<?php echo esc_url( wp_get_upload_dir()['baseurl'] . '/dr-achilefu.jpg' ); ?>" alt="Dr. Samuel Achilefu" style="width:100%;height:100%;object-fit:cover;display:block;">
							<?php else : ?>
								<div style="width:100%;height:100%;background:linear-gradient(150deg,#e2edf5,#d0dfe8);display:flex;align-items:center;justify-content:center;">
									<svg width="28" height="28" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="8" r="4" stroke="#a8b8c4" stroke-width="1.5"/><path d="M4 20c0-4 3.58-7 8-7s8 3 8 7" stroke="#a8b8c4" stroke-width="1.5" stroke-linecap="round"/></svg>
								</div>
							<?php endif; ?>
						</div>
						<div>
							<p class="al-research-nav-card__title" style="margin-bottom:0.25rem">Dr. Samuel Achilefu</p>
							<p class="al-research-nav-card__desc" style="font-size:.8rem">Professor &amp; Chair, Biomedical Engineering · NAE · NAM</p>
							<span class="al-research-nav-card__arrow" style="margin-top:.75rem">Full profile →</span>
						</div>
					</a>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Lab members (placeholder) -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Lab Members</h2>
				<p class="al-inner-section__lead">
					Team bios are coming soon. Check back or <a href="<?php echo al_page_url('contact'); ?>" style="color:var(--al-primary)">contact us</a> if you'd like to connect with a specific lab member.
				</p>

				<!-- Placeholder grid showing roles -->
				<div class="al-team-grid">
					<?php
					$roles = [
						'Postdoctoral Fellow',
						'Postdoctoral Fellow',
						'PhD Student',
						'PhD Student',
						'PhD Student',
						'Research Scientist',
					];
					foreach ( $roles as $role ) :
					?>
					<div class="al-team-card">
						<div class="al-team-card__placeholder" aria-hidden="true">
							<svg viewBox="0 0 44 44" fill="none">
								<circle cx="22" cy="16" r="8" stroke="#C5D5E0" stroke-width="1.5"/>
								<path d="M4 40c0-9.94 8.06-18 18-18s18 8.06 18 18" stroke="#C5D5E0" stroke-width="1.5" stroke-linecap="round"/>
							</svg>
						</div>
						<div class="al-team-card__body">
							<p class="al-team-card__name">— Joining soon —</p>
							<p class="al-team-card__role"><?php echo esc_html( $role ); ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Join the lab -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Join the Achilefu Lab</h3>
					<p>We are always looking for motivated PhD students, postdoctoral fellows, and research scientists with backgrounds in chemistry, engineering, biology, or medicine. Reach out to learn about open positions.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Enquire Now</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
