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
				Fluorescence-guided surgery platforms &mdash; including the wearable Cancer Vision Goggles and label-free Focal Dynamic Thermal Imaging (FDTI) system developed in this lab &mdash; that let surgeons distinguish malignant, benign, and inflamed tissue in real time, reducing incomplete resections and improving patient outcomes.
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
							<span class="al-pi-stat__value">100+</span>
							<span class="al-pi-stat__label">Surgeries Enabled</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">5+</span>
							<span class="al-pi-stat__label">Clinical Sites</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">2</span>
							<span class="al-pi-stat__label">Devices in Trial</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">10+</span>
							<span class="al-pi-stat__label">Cancer Types Imaged</span>
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
								The lab has developed two complementary surgical imaging technologies: near-infrared fluorescence-guided Cancer Vision Goggles (wearable, hands-free, paired with targeted molecular probes) and Focal Dynamic Thermal Imaging (FDTI) &mdash; a label-free system using a 405&nbsp;nm laser to stimulate tissue and capture thermal responses, distinguishing malignant from benign and inflamed tissue through material heterogeneity without any contrast agent.
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
						Devices, agents, and trial protocols currently in development or under clinical evaluation.
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Cancer Vision Goggles -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Cancer Vision Goggles</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Single-operator quantitative NIR fluorescence Cancer Vision Goggles</p>
								<p class="al-latest__meta">UTSW &middot; Surgical oncology &middot; Multi-tumor</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Frugal engineering wearable AR goggle for fluorescence-guided surgery</p>
								<p class="al-latest__meta">Low-cost platform &middot; Broad accessibility</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Quantitative tumor depth determination via dual wavelength excitation</p>
								<p class="al-latest__meta">UTSW &middot; Intraoperative depth mapping</p>
							</li>
						</ul>
					</div>

					<!-- Column 2: FDTI / Thermal Imaging -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Focal Dynamic Thermal Imaging</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Label-free FDTI distinguishes malignant, benign, and inflamed tissue</p>
								<p class="al-latest__meta">405&nbsp;nm laser excitation &middot; Material heterogeneity detection</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">FDTI for intraoperative margin assessment without contrast agents</p>
								<p class="al-latest__meta">No probe required &middot; Real-time thermal response</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Integration of FDTI with fluorescence-guided surgery platforms</p>
								<p class="al-latest__meta">Complementary modalities &middot; Surgical decision support</p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Fluorescence-Guided Surgery Trials -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Fluorescence-Guided Surgery</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Real-Time Tumor Margin Assessment with pANXA2 NIR probe</p>
								<p class="al-latest__meta">UTSW Simmons &middot; Breast-conserving surgery</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fluorescence-guided cytoreduction in ovarian cancer</p>
								<p class="al-latest__meta">Multi-site &middot; Gynecologic oncology</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fiber endface photoacoustic generator for quantitative photoacoustic tomography</p>
								<p class="al-latest__meta">Intraoperative guidance &middot; Novel instrumentation</p>
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
						Representative work from the image-guided surgery program.
					</p>
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
								<p class="al-latest__title">Low-cost augmented reality goggles enable precision fluorescence-guided cancer surgery</p>
								<p class="al-latest__meta">Research Square &middot; 2023</p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Quantitative tumor depth determination using dual wavelength excitation fluorescence</p>
								<p class="al-latest__meta">Biomedical Optics Express &middot; 2022</p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Real-time fluorescence image-guided oncologic surgery</p>
								<p class="al-latest__meta">Advances in Cancer Research &middot; 2014</p>
							</a>
						</li>
						<li class="al-latest__item">
							<a href="<?php echo $url_publications; ?>">
								<p class="al-latest__title">Hands-free, wireless goggles for near-infrared fluorescence and real-time image-guided surgery</p>
								<p class="al-latest__meta">Surgery &middot; 2011</p>
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
							Academic medical centers and research teams collaborating on device evaluation and fluorescence-guided surgery protocols.
						</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">UT Southwestern Medical Center</p>
								<p class="al-latest__meta">Simmons Comprehensive Cancer Center &middot; Surgical &amp; Radiation Oncology &middot; Lead site</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Washington University in St. Louis</p>
								<p class="al-latest__meta">Victor Gruev, Shengkui Gao (Goggles) &middot; Julie Margenthaler, Ryan Fields (Oncologic Surgery) &middot; Farrokh Dehdashti (Molecular Imaging)</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Arizona</p>
								<p class="al-latest__meta">Ron Liang, Nan Zhu &middot; College of Optical Sciences &middot; Optics and instrumentation</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Missouri</p>
								<p class="al-latest__meta">Jeffrey Bryan, Tony Mann (Veterinary Surgery) &middot; Preclinical surgical oncology models</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fudan University, Shanghai</p>
								<p class="al-latest__meta">Zhao-You Tang, Jia Fan, Hui-Chuan Sun &middot; Hepatic Surgery &middot; International translation</p>
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
