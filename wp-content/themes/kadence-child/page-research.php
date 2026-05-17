<?php
/**
 * Template for the Research landing page (Mission & Vision).
 * Matches slug: research  —  page ID 7.
 *
 * v2 — denser editorial layout: trimmed prose, inline stat strip,
 *      3-col "Recent Breakthroughs" content stream, tightened Why Light grid.
 */
defined( 'ABSPATH' ) || exit;
get_header();

$url_publications = al_page_url( 'publications' );
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="research-heading">
		<div class="al-container">
			<p class="al-inner-hero__eyebrow">Our Research</p>
			<h1 class="al-inner-hero__title" id="research-heading">
				Harnessing Light to Understand &amp; Treat Disease
			</h1>
			<p class="al-inner-hero__sub">
				Optical and molecular tools that let scientists and clinicians see biology at a resolution and specificity not possible with conventional methods &mdash; from the single molecule to the operating room.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ─────────────────────────────────────────────
				 1. Mission & Vision — trimmed to two paragraphs
			───────────────────────────────────────────────── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Mission &amp; Vision</h2>
				<div class="al-prose">
					<p>
						We invent and deploy light-based technologies that illuminate the molecular signatures of disease &mdash; building the probes, agents, and detection systems that let biology speak clearly to researchers, surgeons, and patients.
					</p>
					<p>
						Our vision is a clinic where a surgeon sees every cancer cell in real time, a physician detects disease years before symptoms, and a researcher watches cellular processes unfold in living tissue. Every project in the lab is a step toward that standard of care.
					</p>
				</div>

				<!-- Inline stat strip — lab at a glance -->
				<!-- [PLACEHOLDER] stat values pending confirmation from PI -->
				<ul class="al-pi-stats" aria-label="Research program at a glance">
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">3</span>
						<span class="al-pi-stat__label">Active research platforms</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">30+</span>
						<span class="al-pi-stat__label">Institutional collaborations</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">12</span>
						<span class="al-pi-stat__label">NIH-funded projects</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">200+</span>
						<span class="al-pi-stat__label">Trainees &amp; alumni</span>
					</li>
				</ul>
			</section>

			<hr class="al-divider">

			<!-- ─────────────────────────────────────────────
				 2. Research platforms — 3 IA-backbone cards
			───────────────────────────────────────────────── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Our Research Platforms</h2>
				<p class="al-inner-section__lead">
					Three interconnected areas of work &mdash; each building toward a world where light-based medicine is the standard of care.
				</p>

				<div class="al-research-nav">

					<!-- Optical & Molecular Imaging -->
					<a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="3"/>
								<path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Optical &amp; Molecular Imaging</p>
						<p class="al-research-nav-card__desc">
							Custom-engineered fluorescent probes and near-infrared agents that target specific biological molecules &mdash; enabling deep-tissue, real-time imaging of cancer, neurodegeneration, and infection.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

					<!-- Image-Guided Surgery -->
					<a href="<?php echo al_page_url( 'research/image-guided-surgery' ); ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
								<circle cx="12" cy="12" r="3"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Image-Guided Surgery</p>
						<p class="al-research-nav-card__desc">
							Real-time intraoperative fluorescence imaging systems that let surgeons visualize tumor boundaries, nerve structures, and vascular anatomy &mdash; reducing margin errors and improving patient outcomes.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

					<!-- Bench to Bedside -->
					<a href="<?php echo al_page_url( 'research/bench-to-bedside' ); ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Bench to Bedside</p>
						<p class="al-research-nav-card__desc">
							Translating laboratory discoveries into FDA-cleared devices and clinical-grade agents through rigorous preclinical validation, IND filings, and active clinical trials at UT Southwestern and partner centers.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ─────────────────────────────────────────────
				 3. Recent Breakthroughs — 3-col content stream
				 (one column per research platform)
			───────────────────────────────────────────────── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Recent Breakthroughs</h2>
				<p class="al-inner-section__lead">
					Selected publications and milestones across the lab's three research platforms.
				</p>

				<div class="al-latest__grid">

					<!-- Optical & Molecular Imaging -->
					<!-- [PLACEHOLDER] sample publications — replace with curated list -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Optical Imaging</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Tumor-targeted near-infrared probes for sub-millimeter lesion detection</p>
									<p class="al-latest__meta">Nature Biomedical Engineering &middot; 2025</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">A pH-activated cyanine dye for in vivo glioma delineation</p>
									<p class="al-latest__meta">ACS Nano &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Multispectral imaging of microvascular hypoxia in solid tumors</p>
									<p class="al-latest__meta">J. Biomed. Opt. &middot; 2024</p>
								</a>
							</li>
						</ul>
						<a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" class="al-latest__more">
							Explore the platform &rarr;
						</a>
					</div>

					<!-- Image-Guided Surgery -->
					<!-- [PLACEHOLDER] sample publications — replace with curated list -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Image-Guided Surgery</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Wearable fluorescence goggles improve margin clearance in breast-conserving surgery</p>
									<p class="al-latest__meta">Annals of Surgery &middot; 2025</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Real-time intraoperative lymph node mapping with NIR contrast</p>
									<p class="al-latest__meta">JAMA Surgery &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Augmented-reality overlays for nerve preservation in head &amp; neck procedures</p>
									<p class="al-latest__meta">IEEE Trans. Med. Imaging &middot; 2023</p>
								</a>
							</li>
						</ul>
						<a href="<?php echo al_page_url( 'research/image-guided-surgery' ); ?>" class="al-latest__more">
							Explore the platform &rarr;
						</a>
					</div>

					<!-- Bench to Bedside -->
					<!-- [PLACEHOLDER] sample publications — replace with curated list -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Bench to Bedside</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">First-in-human trial of LS301 in image-guided cancer resection</p>
									<p class="al-latest__meta">Clinical Cancer Research &middot; 2025</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">IND-enabling toxicology of a tumor-targeted theranostic agent</p>
									<p class="al-latest__meta">Molecular Pharmaceutics &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Manufacturing and GMP scale-up of NIR contrast agents for clinical use</p>
									<p class="al-latest__meta">Bioconjugate Chemistry &middot; 2023</p>
								</a>
							</li>
						</ul>
						<a href="<?php echo al_page_url( 'research/bench-to-bedside' ); ?>" class="al-latest__more">
							Explore the platform &rarr;
						</a>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ─────────────────────────────────────────────
				 4. Why Light? — three tightened feature cards
			───────────────────────────────────────────────── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Why Light?</h2>
				<p class="al-inner-section__lead">
					Light interacts with matter in ways that are uniquely informative, minimally invasive, and exquisitely tunable.
				</p>
				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Molecular Specificity</p>
						<p class="al-feature-card__desc">Engineered probes bind selectively to disease-associated targets &mdash; the precise molecular signature of a tumor or pathogen, not just tissue.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M12 8v4l3 3"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Real-Time Readout</p>
						<p class="al-feature-card__desc">Fluorescence signals appear instantly and continuously &mdash; enabling live feedback during surgery rather than waiting on pathology.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Non-Ionizing Safety</p>
						<p class="al-feature-card__desc">Unlike X-ray or PET, near-infrared light carries no ionizing radiation &mdash; safe for repeat imaging in patients and surgical teams alike.</p>
					</div>
				</div>
			</section>

			<!-- ─────────────────────────────────────────────
				 5. CTA — collaboration banner
			───────────────────────────────────────────────── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Work With Us</h3>
					<p>We collaborate with clinicians, industry partners, and research institutions worldwide. Reach out to explore a partnership or join the lab.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
