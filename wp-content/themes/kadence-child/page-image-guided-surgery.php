<?php
/**
 * Template for the Image-Guided Surgery research area page.
 * Matches slug: image-guided-surgery  —  page ID 21, child of research (7).
 *
 * v2.2 — editorial density refresh: inline clinical stats, active project stream,
 *         dense publications/partners lists, technology platform cards, sibling nav.
 */
defined( 'ABSPATH' ) || exit;

$url_research     = al_page_url( 'research' );
$url_publications = al_page_url( 'publications' );
$url_contact      = al_page_url( 'contact' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="igs-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">&rsaquo;</span>
				<a href="<?php echo $url_research; ?>">Research</a>
				<span aria-hidden="true">&rsaquo;</span>
				<span aria-current="page">Image-Guided Surgery</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Research Platform</p>
			<h1 class="al-inner-hero__title" id="igs-heading">
				Real-Time Vision for the Operating Room
			</h1>
			<p class="al-inner-hero__sub">
				Fluorescence-guided surgery platforms &mdash; including the wearable cancer-imaging goggles developed in our lab &mdash; that let surgeons see tumor margins, lymph nodes, and critical structures in real time, reducing incomplete resections and improving patient outcomes.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Clinical impact strip + framing prose ── -->
			<div class="al-two-col al-two-col--40-60">

				<!-- Left: at-a-glance stats -->
				<aside>
					<p class="al-latest__col-heading">Clinical Footprint</p>
					<div class="al-pi-stats">
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] cumulative surgeries enabled across all sites -->
							<span class="al-pi-stat__value">100+</span>
							<span class="al-pi-stat__label">Surgeries Enabled <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] active clinical sites -->
							<span class="al-pi-stat__value">5</span>
							<span class="al-pi-stat__label">Clinical Sites <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] devices currently in human trials -->
							<span class="al-pi-stat__value">3</span>
							<span class="al-pi-stat__label">Devices in Trial <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] cancer indications imaged to date -->
							<span class="al-pi-stat__value">12+</span>
							<span class="al-pi-stat__label">Cancer Types Imaged <!-- [PLACEHOLDER] --></span>
						</div>
					</div>
				</aside>

				<!-- Right: framing + how it works -->
				<div>
					<section class="al-inner-section">
						<h2 class="al-inner-section__title">The Problem We Solve</h2>
						<div class="al-prose">
							<p>
								Cancer surgery has an Achilles' heel: surgeons operate under white light, using visual and tactile cues to separate tumor from healthy tissue. Cancer cells routinely infiltrate beyond what the eye can see. Positive surgical margins occur in 20&ndash;40% of solid tumor resections and remain the leading cause of local recurrence.
							</p>
							<p>
								Our platforms give the operating team a real-time molecular map of the tumor boundary &mdash; the cancer-imaging goggles pioneered in this lab were among the first to translate near-infrared fluorescence guidance into routine oncologic practice, and have since been used in operating rooms across multiple academic medical centers.
							</p>
						</div>
					</section>

					<section class="al-inner-section" style="margin-bottom:0;">
						<h2 class="al-inner-section__title">How It Works</h2>
						<p class="al-inner-section__lead">
							Three components in concert: a tumor-targeted near-infrared probe, a wearable or stand-mounted fluorescence camera, and a real-time display that overlays the molecular signal on the surgeon's view.
						</p>
					</section>
				</div>
			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Active Clinical Projects (3-col stream) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="igs-projects-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="igs-projects-heading">Active Clinical Projects</h2>
					<p class="al-inner-section__lead">
						Devices, agents, and trial protocols currently in development or under clinical evaluation. <!-- [PLACEHOLDER] full project list pending review with clinical collaborators. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Wearable Imaging Systems -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Wearable Imaging Systems</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Next-Generation NIR Imaging Goggles (v3)</p>
								<p class="al-latest__meta">UTSW &middot; Preclinical &middot; Multi-indication <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Head-Mounted Display with Multispectral Overlay</p>
								<p class="al-latest__meta">UTSW &middot; Feasibility &middot; Breast / Soft-tissue <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Pediatric Tumor Imaging System</p>
								<p class="al-latest__meta">Multi-site &middot; Design phase &middot; Pediatric oncology <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: Intraoperative Trials -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Intraoperative Trials</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Real-Time Tumor Margin Assessment in Breast Cancer</p>
								<p class="al-latest__meta">UTSW Simmons &middot; Phase I/II &middot; Breast-conserving surgery <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Lymph Node Mapping with Targeted NIR Probes</p>
								<p class="al-latest__meta">Multi-site &middot; Phase I &middot; Melanoma / Breast <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fluorescence-Guided Cytoreduction in Ovarian Cancer</p>
								<p class="al-latest__meta">Partner site &middot; Phase I &middot; Gynecologic oncology <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Surgical AR &amp; Decision Support -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Surgical AR &amp; Decision Support</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Surgical AR Integration for Nerve Preservation</p>
								<p class="al-latest__meta">UTSW &middot; Preclinical &middot; Head &amp; neck / Parotid <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Perforator &amp; Flap Perfusion Mapping</p>
								<p class="al-latest__meta">UTSW Plastic Surgery &middot; Pilot &middot; Reconstructive <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Real-Time Image Processing for Margin Call-Out</p>
								<p class="al-latest__meta">UTSW &middot; Software platform &middot; Cross-indication <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Technology Platforms (feature grid) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Technology Platforms</h2>
				<p class="al-inner-section__lead">
					The hardware and software components that make intraoperative fluorescence imaging practical &mdash; engineered in-house and validated against clinical workflows.
				</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M2 9a3 3 0 0 1 3-3h14a3 3 0 0 1 3 3v6a3 3 0 0 1-3 3H5a3 3 0 0 1-3-3z"/>
								<circle cx="8" cy="12" r="2"/>
								<circle cx="16" cy="12" r="2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Wearable Fluorescence Imager</p>
						<p class="al-feature-card__desc">Head-mounted near-infrared camera and display worn by the surgeon, freeing both hands and keeping the molecular signal aligned with the operative field at all times.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M3 12h3M18 12h3M12 3v3M12 18v3"/>
								<circle cx="12" cy="12" r="6"/>
								<circle cx="12" cy="12" r="2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Multispectral Detection</p>
						<p class="al-feature-card__desc">Custom optical filters and detectors that separate the targeted NIR fluorescence from autofluorescence and ambient OR illumination &mdash; preserving contrast at the margin.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="3" y="4" width="18" height="14" rx="2"/>
								<path d="M7 9l3 3-3 3M13 15h4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Image Processing Pipeline</p>
						<p class="al-feature-card__desc">Low-latency software that merges white-light and fluorescence streams, normalizes signal across distances, and flags suspicious regions for the surgeon in real time.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="4" width="20" height="13" rx="2"/>
								<path d="M8 21h8M12 17v4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Surgeon Display Systems</p>
						<p class="al-feature-card__desc">From in-eye micro-displays to operating-room monitors, validated for color fidelity, latency, and ergonomics during long oncologic procedures.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Clinical Applications (compact prose) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Clinical Applications</h2>
				<div class="al-prose">
					<p><strong style="color:var(--al-text)">Breast cancer.</strong> Margin delineation in breast-conserving surgery &mdash; lowering re-excision rates and protecting cosmetic outcomes.</p>
					<p><strong style="color:var(--al-text)">Brain tumors.</strong> Glioma boundary visualization for more complete resection of high-grade gliomas while preserving eloquent cortex.</p>
					<p><strong style="color:var(--al-text)">Colorectal cancer.</strong> Anastomotic perfusion assessment and sentinel lymph node mapping to guide oncological resection and reduce leak.</p>
					<p><strong style="color:var(--al-text)">Reconstructive &amp; plastic surgery.</strong> Perforator mapping and flap perfusion assessment for objective intraoperative planning of tissue transfers.</p>
					<p><strong style="color:var(--al-text)">Nerve visualization.</strong> Nerve-selective probes that protect peripheral nerves during oncologic, orthopedic, and parotid procedures.</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 5: Selected Publications  /  Clinical Partners ── -->
			<div class="al-two-col al-two-col--60-40">

				<!-- Selected Publications -->
				<section class="al-inner-section" style="margin-bottom:0;" aria-labelledby="igs-pubs-heading">
					<h2 class="al-inner-section__title" id="igs-pubs-heading">Selected Publications</h2>
					<p class="al-inner-section__lead">
						Representative work from the image-guided surgery program. <!-- [PLACEHOLDER] citations below pending verification. -->
					</p>
					<ul class="al-latest__list">
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Wearable NIR fluorescence imaging for image-guided breast cancer surgery</p>
								<p class="al-latest__meta">Annals of Surgery &middot; 2024 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Real-time tumor margin detection using a head-mounted display</p>
								<p class="al-latest__meta">Journal of Biomedical Optics &middot; 2023 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Clinical evaluation of fluorescence-guided cytoreduction in advanced ovarian cancer</p>
								<p class="al-latest__meta">Cancer Research &middot; 2023 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">A head-mounted near-infrared imaging system for cancer surgery</p>
								<p class="al-latest__meta">Journal of Biomedical Optics &middot; 2014 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Targeted near-infrared probes for sentinel lymph node mapping</p>
								<p class="al-latest__meta">Annals of Surgical Oncology &middot; 2022 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Nerve-selective contrast agents for intraoperative nerve preservation</p>
								<p class="al-latest__meta">Science Translational Medicine &middot; 2021 <!-- [PLACEHOLDER] --></p>
							</a>
						</li>
					</ul>
					<a href="<?php echo $url_publications; ?>" class="al-latest__more" style="margin-top:1.25rem;">
						View all publications &rarr;
					</a>
				</section>

				<!-- Clinical Partners -->
				<aside>
					<section class="al-inner-section" style="margin-bottom:0;">
						<h2 class="al-inner-section__title">Clinical Partners</h2>
						<p class="al-inner-section__lead">
							Academic medical centers and surgical teams collaborating on device evaluation, multi-site trials, and protocol development. <!-- [PLACEHOLDER] partner list pending confirmation. -->
						</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">UT Southwestern Medical Center</p>
								<p class="al-latest__meta">Simmons Comprehensive Cancer Center &middot; lead site <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Washington University in St. Louis</p>
								<p class="al-latest__meta">Department of Radiology &middot; multi-site trial <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">MD Anderson Cancer Center</p>
								<p class="al-latest__meta">Surgical oncology &middot; protocol collaboration <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Memorial Sloan Kettering Cancer Center</p>
								<p class="al-latest__meta">Image-guided surgery program <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Children's Health (Dallas)</p>
								<p class="al-latest__meta">Pediatric oncology &middot; device evaluation <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</section>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 6: Related Research (sibling nav) ── -->
			<section class="al-inner-section" aria-labelledby="igs-related-heading">
				<h2 class="al-inner-section__title" id="igs-related-heading">Related Research</h2>
				<p class="al-inner-section__lead">
					Image-guided surgery sits between molecular probe design and full clinical translation. Explore the upstream and downstream platforms.
				</p>

				<div class="al-research-nav">

					<a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="3"/>
								<path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Optical &amp; Molecular Imaging</p>
						<p class="al-research-nav-card__desc">
							The probes, dyes, and activatable sensors that make our intraoperative systems possible &mdash; engineered upstream of the operating room.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

					<a href="<?php echo al_page_url( 'research/bench-to-bedside' ); ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Bench to Bedside</p>
						<p class="al-research-nav-card__desc">
							The regulatory, manufacturing, and clinical-trial workstreams that move a working prototype out of our lab and into multi-site human use.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

				</div>
			</section>

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Clinical or Industry Partnership</h3>
					<p>We work with surgical teams, cancer centers, and medical device companies to validate and deploy image-guided surgery platforms. Reach out to discuss a multi-site trial or device collaboration.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
