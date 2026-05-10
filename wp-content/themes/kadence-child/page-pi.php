<?php
/**
 * Template for the Meet the PI page.
 * Matches slug: pi  —  page ID 23, child of team (9).
 */
defined( 'ABSPATH' ) || exit;

$pi_photo     = get_template_directory_uri() . '/../../../uploads/dr-achilefu.jpg';
$pi_photo_abs = get_template_directory() . '/../../../uploads/dr-achilefu.jpg';
// Resolve relative to child theme directory
$uploads_dir  = wp_get_upload_dir();
$photo_path   = $uploads_dir['basedir'] . '/dr-achilefu.jpg';
$photo_url    = $uploads_dir['baseurl'] . '/dr-achilefu.jpg';
$has_photo    = file_exists( $photo_path );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="pi-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo al_page_url( 'team' ); ?>">Team</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Principal Investigator</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Principal Investigator</p>
			<h1 class="al-inner-hero__title" id="pi-heading">Dr. Samuel Achilefu</h1>
			<p class="al-inner-hero__sub">
				Professor and Chair, Department of Biomedical Engineering, UT Southwestern Medical Center. Pioneer in optical and molecular imaging, and one of a small number of researchers elected to both the National Academy of Engineering and the National Academy of Medicine.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<div class="al-two-col al-two-col--40-60">

				<!-- Left: photo + quick stats -->
				<aside>
					<div class="al-pi-photo">
						<?php if ( $has_photo ) : ?>
							<img
								src="<?php echo esc_url( $photo_url ); ?>"
								alt="Dr. Samuel Achilefu"
								width="480"
								height="600"
								loading="eager"
								decoding="async"
							>
						<?php else : ?>
							<div class="al-pi-photo-placeholder" aria-hidden="true">
								<svg viewBox="0 0 80 80" fill="none"><circle cx="40" cy="30" r="18" stroke="#A8B8C4" stroke-width="2"/><path d="M8 72c0-17.67 14.33-32 32-32s32 14.33 32 32" stroke="#A8B8C4" stroke-width="2" stroke-linecap="round"/></svg>
							</div>
						<?php endif; ?>
					</div>

					<div class="al-pi-stats">
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">300+</span>
							<span class="al-pi-stat__label">Publications</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">70+</span>
							<span class="al-pi-stat__label">Patents</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">2</span>
							<span class="al-pi-stat__label">National Academies</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">25+</span>
							<span class="al-pi-stat__label">Yrs of Innovation</span>
						</div>
					</div>
				</aside>

				<!-- Right: bio + credentials -->
				<div>
					<div class="al-pi-badges">
						<span class="al-badge">NAE Member</span>
						<span class="al-badge">NAM Member</span>
						<span class="al-badge">UTSW BME Chair</span>
						<span class="al-badge">Simmons Cancer Center</span>
					</div>

					<section class="al-inner-section" style="margin-bottom:2.5rem">
						<h2 class="al-inner-section__title">Biography</h2>
						<div class="al-prose">
							<p>
								Dr. Samuel Achilefu is a world-renowned scientist, inventor, and physician-engineer whose career has been defined by a singular pursuit: giving physicians and scientists the ability to see disease with molecular precision. He joined UT Southwestern Medical Center in 1999 and has built one of the most productive biomedical optics laboratories in the world, founding the institution's optical imaging program and serving as its inaugural Chair of Biomedical Engineering.
							</p>
							<p>
								His research spans the full spectrum from fundamental photochemistry — designing novel near-infrared fluorescent probes and activatable molecular sensors — to translational engineering, creating FDA-compatible devices and agents that have entered clinical evaluation. This breadth is rare: Dr. Achilefu is equally at home synthesizing a new cyanine dye and advising a surgical team on intraoperative imaging protocols.
							</p>
							<p>
								Beyond the laboratory, Dr. Achilefu is a committed educator and mentor who has trained dozens of graduate students, postdoctoral fellows, and clinical researchers who now lead their own programs at institutions around the world. He brings the same rigor and imagination to training the next generation as he does to his own research.
							</p>
						</div>
					</section>

					<section class="al-inner-section" style="margin-bottom:2.5rem">
						<h2 class="al-inner-section__title">Awards &amp; Honors</h2>
						<div class="al-prose">
							<p>
								Elected to the <strong>National Academy of Engineering</strong> — the highest professional honor accorded an engineer in the United States — in recognition of contributions to optical molecular imaging for cancer diagnosis and surgery.
							</p>
							<p>
								Elected to the <strong>National Academy of Medicine</strong> — honoring outstanding contributions to the fields of health and medicine. One of a very small group of scientists holding membership in both Academies simultaneously.
							</p>
							<p>
								Additional recognition includes awards from the Society of Nuclear Medicine and Molecular Imaging, the International Society for Optics and Photonics (SPIE), the American Chemical Society, and multiple NIH-funded program leadership roles.
								<em>[Full awards list to be confirmed with Dr. Achilefu's office before publication.]</em>
							</p>
						</div>
					</section>

					<section class="al-inner-section">
						<h2 class="al-inner-section__title">Research Focus</h2>
						<div class="al-prose">
							<p>
								Dr. Achilefu's current research concentrates on three interconnected areas: the design of next-generation NIR molecular probes with improved pharmacokinetics and tumor selectivity; the development of intraoperative fluorescence-guided surgery platforms for solid tumors; and the clinical translation of optical imaging technologies through FDA pathways and academic–industry partnerships.
							</p>
						</div>
						<a href="<?php echo al_page_url( 'research' ); ?>" class="al-inner-cta__btn" style="background:var(--al-primary);color:#fff;display:inline-flex;margin-top:1.5rem;padding:10px 20px;border-radius:var(--r-control);font-size:.875rem;font-weight:600;text-decoration:none;">
							Explore Our Research →
						</a>
					</section>
				</div>
			</div>

			<hr class="al-divider">

			<!-- Contact block -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Connect with Dr. Achilefu</h3>
					<p>For research collaborations, speaking engagements, media enquiries, or prospective lab members — use our contact form.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
