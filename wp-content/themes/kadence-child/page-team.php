<?php
/**
 * Template for the Meet the Team page.
 * Matches slug: team  —  page ID 9.
 *
 * v2.2 — denser editorial layout matching home page restructure:
 *        intro lede + mini stats strip · per-group headings · alumni list ·
 *        join-the-lab CTA.
 */
defined( 'ABSPATH' ) || exit;

/*
 * Team data — add entries here as bios become available.
 * Format: [ 'name', 'role', 'photo_filename' (in wp-content/uploads/team/) ]
 * Leave photo_filename empty string for the placeholder avatar.
 *
 * Roster will be populated once confirmed with lab admin.
 */
$team = [

	// ─── Postdoctoral Fellows ───────────────────────────────────────────
	[
		'group'   => 'Postdoctoral Fellows',
		'members' => [],
	],

	// ─── Graduate Students ──────────────────────────────────────────────
	[
		'group'   => 'Graduate Students',
		'members' => [],
	],

	// ─── Research Scientists ────────────────────────────────────────────
	[
		'group'   => 'Research Scientists',
		'members' => [],
	],

	// ─── Lab Alumni ─────────────────────────────────────────────────────
	[
		'group'   => 'Lab Alumni',
		'members' => [],
	],
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
				A community of chemists, engineers, biologists, and clinicians united by the goal of making light-based medicine a reality &mdash; from first synthesis to first patient.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Intro lede + lab-at-a-glance stats ── -->
			<section class="al-inner-section">
				<p class="al-inner-section__lead">
					The Achilefu Lab brings together researchers from biomedical engineering, chemistry, medicine, and the clinical sciences &mdash; working at the interface of light, molecules, and patient care. The roster below reflects the people currently driving that work forward, plus an alumni network that now spans academia, industry, and clinical practice.
				</p>

				<ul class="al-pi-stats" aria-label="Lab at a glance">
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">300+</span>
						<span class="al-pi-stat__label">Publications</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">60+</span>
						<span class="al-pi-stat__label">Issued U.S. Patents</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">25+</span>
						<span class="al-pi-stat__label">Years of Training</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">3</span>
						<span class="al-pi-stat__label">Startup Companies Founded</span>
					</li>
				</ul>
			</section>

			<hr class="al-divider">

			<!-- ── Principal Investigator ── -->
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
							<p class="al-research-nav-card__desc" style="font-size:.8rem">Professor &amp; Chair, Biomedical Engineering &middot; NAE &middot; NAM</p>
							<span class="al-research-nav-card__arrow" style="margin-top:.75rem">Full profile &rarr;</span>
						</div>
					</a>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Team groups (loop) ── -->
			<?php foreach ( $team as $i => $section ) :
				// Only render groups that have at least one member; skip empty arrays.
				if ( empty( $section['members'] ) || $section['group'] === 'Lab Alumni' ) {
					// Alumni handled separately below in editorial list format.
					continue;
				}
			?>
			<section class="al-inner-section">
				<h2 class="al-inner-section__title"><?php echo esc_html( $section['group'] ); ?></h2>

				<div class="al-team-grid">
					<?php foreach ( $section['members'] as $member ) :
						$photo_file = ! empty( $member['photo_filename'] )
							? $uploads_url . '/team/' . $member['photo_filename']
							: '';
					?>
					<div class="al-team-card">
						<?php if ( $photo_file ) : ?>
							<img src="<?php echo esc_url( $photo_file ); ?>" alt="<?php echo esc_attr( $member['name'] ); ?>" class="al-team-card__photo" loading="lazy" decoding="async">
						<?php else : ?>
							<div class="al-team-card__placeholder" aria-hidden="true">
								<svg viewBox="0 0 44 44" fill="none">
									<circle cx="22" cy="16" r="8" stroke="#C5D5E0" stroke-width="1.5"/>
									<path d="M4 40c0-9.94 8.06-18 18-18s18 8.06 18 18" stroke="#C5D5E0" stroke-width="1.5" stroke-linecap="round"/>
								</svg>
							</div>
						<?php endif; ?>
						<div class="al-team-card__body">
							<p class="al-team-card__name"><?php echo esc_html( $member['name'] ); ?></p>
							<p class="al-team-card__role"><?php echo esc_html( $member['role'] ); ?></p>
						</div>
					</div>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="al-divider">
			<?php endforeach; ?>

			<!-- ── Alumni network · editorial ── -->
			<section class="al-inner-section al-latest">
				<div class="al-latest__head">
					<h2 class="al-section-heading">Alumni Network</h2>
					<p class="al-section-subhead">
						Former lab members now leading research, teaching, and clinical work across academia and industry. The Achilefu Lab has trained researchers for more than 25 years; alumni span faculty positions, industry R&amp;D, and clinical translation worldwide.
					</p>
				</div>

				<div class="al-latest__grid">
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Where Alumni Land</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Academic faculty positions</p>
								<p class="al-latest__meta">Independent research programs at universities and medical schools across the U.S., Europe, and Asia</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Industry research &amp; development</p>
								<p class="al-latest__meta">Scientists and engineers at biotech, pharma, and medical device companies</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Clinical translation &amp; medical practice</p>
								<p class="al-latest__meta">Physician-scientists bridging laboratory discovery and direct patient care</p>
							</li>
						</ul>
					</div>

					<div class="al-latest__col">
						<p class="al-latest__col-heading">Lab Legacy</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">25+ years of continuous trainee mentorship</p>
								<p class="al-latest__meta">Founded at Washington University in St. Louis; continued at UT Southwestern Medical Center</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">3 startup companies founded</p>
								<p class="al-latest__meta">Lab discoveries commercialized via UTSW Office for Technology Development</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">4 products currently in clinical study</p>
								<p class="al-latest__meta">Technologies carried from bench to active human evaluation</p>
							</li>
						</ul>
					</div>

					<div class="al-latest__col">
						<p class="al-latest__col-heading">Connect</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Alumni inquiries</p>
								<p class="al-latest__meta">Reach out via the contact page &mdash; we welcome reconnections from former lab members</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Prospective trainees</p>
								<p class="al-latest__meta">Ask about the lab culture, mentorship, and career outcomes through the contact page</p>
							</li>
						</ul>
						<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-latest__more">
							Get in touch &rarr;
						</a>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Join the lab CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Join the Achilefu Lab</h3>
					<p>We're always looking for curious researchers at the intersection of optics, chemistry, and medicine &mdash; prospective postdoctoral fellows, graduate students, and collaborators alike. If our work resonates, we'd love to hear from you.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
