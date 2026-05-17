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
				Interventional Molecular Systems to Understand &amp; Improve Human Health
			</h1>
			<p class="al-inner-hero__sub">
				Light-based imaging techniques using custom molecular contrast agents to visualize tissue, understand molecular biology, create diagnostic tools, and establish light-based treatments &mdash; from the single molecule to the operating room.
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
						The Achilefu Lab develops complete solutions from conception through human clinical implementation. We design light-based imaging technologies using custom molecular contrast agents that visualize tissue, reveal molecular biology, enable diagnostics, and establish light-based treatments for disease.
					</p>
					<p>
						Our vision is a clinic where a surgeon sees every cancer cell in real time, a physician detects disease years before symptoms, and a researcher watches cellular processes unfold in living tissue. Every project &mdash; from probe chemistry to wearable surgical imager to first-in-human trial &mdash; is a step toward that standard of care.
					</p>
				</div>

				<!-- Inline stat strip — lab at a glance -->
				<ul class="al-pi-stats" aria-label="Research program at a glance">
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">300+</span>
						<span class="al-pi-stat__label">Scientific publications</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">60+</span>
						<span class="al-pi-stat__label">Issued U.S. Patents</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">4</span>
						<span class="al-pi-stat__label">Products in clinical study</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">3</span>
						<span class="al-pi-stat__label">Startup companies</span>
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
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Optical Imaging</p>
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
						<a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" class="al-latest__more">
							Explore the platform &rarr;
						</a>
					</div>

					<!-- Image-Guided Surgery -->
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
									<p class="al-latest__title">Quantitative tumor depth determination using dual wavelength excitation fluorescence</p>
									<p class="al-latest__meta">Biomedical Optics Express &middot; 2022</p>
								</a>
							</li>
						</ul>
						<a href="<?php echo al_page_url( 'research/image-guided-surgery' ); ?>" class="al-latest__more">
							Explore the platform &rarr;
						</a>
					</div>

					<!-- Bench to Bedside -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Bench to Bedside</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">First-in-Humans Evaluation of Safety and Dosimetry of 64Cu-LLP2A for PET Imaging</p>
									<p class="al-latest__meta">Journal of Nuclear Medicine &middot; 2023</p>
								</a>
							</li>
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
