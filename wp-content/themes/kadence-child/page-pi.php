<?php
/**
 * Template for the Meet the PI page.
 * Matches slug: pi  —  page ID 23, child of team (9).
 *
 * v2.2 — editorial density refresh: inline credentials, dense awards/pubs/service lists,
 *         multi-paragraph research bio, education + boards panels.
 */
defined( 'ABSPATH' ) || exit;

$uploads_dir  = wp_get_upload_dir();
$photo_path   = $uploads_dir['basedir'] . '/dr-achilefu.jpg';
$photo_url    = $uploads_dir['baseurl'] . '/dr-achilefu.jpg';
$has_photo    = file_exists( $photo_path );

$url_research     = al_page_url( 'research' );
$url_team         = al_page_url( 'team' );
$url_contact      = al_page_url( 'contact' );
$url_publications = al_page_url( 'publications' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="pi-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo $url_team; ?>">Team</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Principal Investigator</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Principal Investigator</p>
			<h1 class="al-inner-hero__title" id="pi-heading">Dr. Samuel Achilefu</h1>
			<p class="al-inner-hero__sub">
				Inaugural Chair of Biomedical Engineering at UT Southwestern Medical Center and Lyda Hill Distinguished University Chair. Pioneer in optical and molecular imaging, and one of a small number of researchers elected to both the National Academy of Engineering and the National Academy of Medicine.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: photo + stats  /  bio prose + credentials ── -->
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
							<span class="al-pi-stat__value">60+</span>
							<span class="al-pi-stat__label">Issued U.S. Patents</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">2</span>
							<span class="al-pi-stat__label">National Academies</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">25+</span>
							<span class="al-pi-stat__label">Years of Research</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">84</span>
							<span class="al-pi-stat__label">h-index</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">60+</span>
							<span class="al-pi-stat__label">Trainees Mentored</span>
						</div>
					</div>
				</aside>

				<!-- Right: badges + biography + research focus -->
				<div>
					<div class="al-pi-badges">
						<span class="al-badge">NAE Member</span>
						<span class="al-badge">NAM Member</span>
						<span class="al-badge">Lyda Hill Distinguished Chair</span>
						<span class="al-badge">UTSW BME Chair</span>
						<span class="al-badge">Simmons Cancer Center</span>
					</div>

					<section class="al-inner-section">
						<h2 class="al-inner-section__title">Biography</h2>
						<div class="al-prose">
							<p>
								Dr. Samuel Achilefu is a physician-engineer and inventor whose career has been defined by a singular pursuit: giving clinicians and scientists the ability to see disease with molecular precision. As inaugural Chair of the Department of Biomedical Engineering at UT Southwestern Medical Center, he leads one of the most productive biomedical optics programs in the United States, and holds the Lyda Hill Distinguished University Chair.
							</p>
							<p>
								His research spans the full translational spectrum &mdash; from fundamental photochemistry and the design of novel near-infrared fluorescent probes, through preclinical validation of activatable molecular sensors and theranostic agents, to FDA-compatible devices and reagents now in clinical evaluation. This breadth is rare: Dr. Achilefu is equally at home synthesizing a new cyanine dye, engineering a wearable surgical imaging system, and advising oncologic surgeons on intraoperative imaging protocols. The cancer-imaging goggles developed in his lab &mdash; which allow surgeons to visualize tumor margins and lymph nodes in real time &mdash; remain among the most widely cited examples of optical molecular imaging translated to clinical practice.							</p>
							<p>
								Beyond his own research program, Dr. Achilefu has built UT Southwestern's BME department from the ground up, recruiting faculty across imaging, neural engineering, regenerative medicine, and computational biology. He has trained dozens of graduate students, postdoctoral fellows, and clinical researchers who now lead programs at institutions around the world, and he brings the same rigor and imagination to mentorship as he does to discovery.
							</p>
						</div>
					</section>

					<section class="al-inner-section">
						<h2 class="al-inner-section__title">Research Focus</h2>
						<div class="al-prose">
							<p>
								Current work concentrates on three interconnected themes: the design of next-generation NIR molecular probes with improved pharmacokinetics and tumor selectivity; intraoperative fluorescence-guided surgery platforms for solid tumors and metastatic lymph nodes; and the clinical translation of optical imaging technologies through FDA pathways and academic&ndash;industry partnerships.
							</p>
						</div>
						<a href="<?php echo $url_research; ?>" class="al-btn al-btn--primary" style="margin-top:1.5rem;">Explore Our Research</a>
					</section>
				</div>
			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Awards &amp; Honors  /  Education ── -->
			<div class="al-two-col al-two-col--60-40">

				<!-- Awards &amp; Honors — dense year/title list -->
				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">Awards &amp; Honors</h2>
					<p class="al-inner-section__lead">
						Selected recognitions from professional societies, national academies, and the broader scientific community.
					</p>
					<ul class="al-latest__list">
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Elected to the National Academy of Engineering</p>
							<p class="al-latest__meta">2025 &middot; National Academy of Engineering</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Elected to the National Academy of Medicine</p>
							<p class="al-latest__meta">2021 &middot; National Academy of Medicine</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Lyda Hill Distinguished University Chair</p>
							<p class="al-latest__meta">UT Southwestern Medical Center</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Britton Chance Biomedical Optics Award</p>
							<p class="al-latest__meta">2021 &middot; SPIE &mdash; International Society for Optics and Photonics</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Fellow, American Institute for Medical and Biological Engineering (AIMBE)</p>
							<p class="al-latest__meta">2014 &middot; AIMBE College of Fellows</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Fellow, Society for Molecular Imaging</p>
							<p class="al-latest__meta">2016 &middot; World Molecular Imaging Society</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Distinguished Investigator Award</p>
							<p class="al-latest__meta">Academy of Radiology Research</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">St. Louis Award for Outstanding Contribution to Science</p>
							<p class="al-latest__meta">St. Louis Academy of Science</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">NIH Director's Transformative Research Award</p>
							<p class="al-latest__meta">National Institutes of Health</p>
						</li>
					</ul>
				</section>

				<!-- Education — compact list -->
				<aside>
					<section class="al-inner-section" style="margin-bottom:2.5rem;">
						<h2 class="al-inner-section__title">Education</h2>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Ph.D., Molecular and Physical Chemistry</p>
								<p class="al-latest__meta">Universit&eacute; Henri Poincar&eacute;, Nancy, France </p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Postdoctoral Fellow, Chemistry</p>
								<p class="al-latest__meta">University of Oxford, UK </p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">M.Sc., Organic Chemistry</p>
								<p class="al-latest__meta">University of Nancy</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">B.Sc., Chemistry (Honors)</p>
								<p class="al-latest__meta">University of Jos, Nigeria</p>
							</li>
						</ul>
					</section>

					<section class="al-inner-section" style="margin-bottom:0;">
						<h2 class="al-inner-section__title">Appointments</h2>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Chair, Department of Biomedical Engineering</p>
								<p class="al-latest__meta">UT Southwestern Medical Center &middot; 2022&ndash;present </p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Professor of Radiology, Biomedical Engineering &amp; Biochemistry</p>
								<p class="al-latest__meta">Washington University in St. Louis &middot; prior </p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Senior Scientist, Mallinckrodt Inc.</p>
								<p class="al-latest__meta">Industry research &middot; early career</p>
							</li>
						</ul>
					</section>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 3: Selected Publications (3-col list grid) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="pi-pubs-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="pi-pubs-heading">Selected Publications</h2>
					<p class="al-inner-section__lead">
						A short selection of recent and representative work from 300+ peer-reviewed publications.
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Molecular Imaging -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Molecular Imaging</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Selective imaging of solid tumours via the calcium-dependent high-affinity binding of cyclic peptide to phosphorylated Annexin A2</p>
									<p class="al-latest__meta">Nature Biomedical Engineering &middot; 2020</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Near infrared fluorophore specific for annexin A2 identifies peripheral nerve injury</p>
									<p class="al-latest__meta">Frontiers in Cell and Developmental Biology &middot; 2026</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Cancer-targeted pro-theranostic bi-metallic organo-coordination nanoparticles</p>
									<p class="al-latest__meta">Theranostics &middot; 2025</p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 2: Image-Guided Surgery -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Image-Guided Surgery</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Single-Operator Cancer Vision Goggles for Quantitative Near-Infrared Fluorescence-Guided Surgery</p>
									<p class="al-latest__meta">IEEE Trans. Biomed. Eng. &middot; 2026</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Frugal engineering-inspired wearable augmented reality goggle system enables fluorescence-guided surgery</p>
									<p class="al-latest__meta">Scientific Reports &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Hands-free, wireless goggles for near-infrared fluorescence and real-time image-guided surgery</p>
									<p class="al-latest__meta">Surgery &middot; 2011</p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3: Theranostics &amp; Translation -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Theranostics &amp; Translation</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Radionuclides transform chemotherapeutics into phototherapeutics for precise treatment of disseminated cancer</p>
									<p class="al-latest__meta">Nature Communications &middot; 2018</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Breaking the depth dependency of phototherapy with Cerenkov radiation and low-radiance-responsive nanophotosensitizers</p>
									<p class="al-latest__meta">Nature Nanotechnology &middot; 2015</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">First-in-Humans Evaluation of Safety and Dosimetry of 64Cu-LLP2A for PET Imaging</p>
									<p class="al-latest__meta">Journal of Nuclear Medicine &middot; 2023</p>
								</a>
							</li>
						</ul>
					</div>

				</div>

				<a href="<?php echo $url_publications; ?>" class="al-latest__more" style="margin-top:1.5rem;">
					View all publications &rarr;
				</a>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Editorial &amp; Advisory Service ── -->
			<section class="al-inner-section" aria-labelledby="pi-service-heading">
				<h2 class="al-inner-section__title" id="pi-service-heading">Editorial &amp; Advisory Service</h2>
				<p class="al-inner-section__lead">
					Editorial boards, scientific advisory roles, and professional society leadership.
				</p>

				<div class="al-two-col">

					<aside>
						<p class="al-latest__col-heading">Editorial Boards</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Bioconjugate Chemistry</p>
								<p class="al-latest__meta">Associate Editor &middot; American Chemical Society</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Journal of Biomedical Optics</p>
								<p class="al-latest__meta">Editorial Board</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Molecular Imaging</p>
								<p class="al-latest__meta">Editorial Board</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Theranostics</p>
								<p class="al-latest__meta">Editorial Board</p>
							</li>
						</ul>
					</aside>

					<aside>
						<p class="al-latest__col-heading">Advisory &amp; Society Service</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">NIH Study Section &mdash; Imaging Probes and Contrast Agents</p>
								<p class="al-latest__meta">Standing member &middot; multiple terms</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">World Molecular Imaging Society</p>
								<p class="al-latest__meta">Board of Directors &middot; past president</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">SPIE Photonics West &mdash; Molecular-Guided Surgery Conference</p>
								<p class="al-latest__meta">Founding co-chair</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Scientific Advisory Boards</p>
								<p class="al-latest__meta">Multiple imaging &amp; therapeutics companies</p>
							</li>
						</ul>
					</aside>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Collaborate with the Achilefu Lab</h3>
					<p>For research collaborations, prospective trainees, speaking engagements, or media enquiries &mdash; reach out through our contact page.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
