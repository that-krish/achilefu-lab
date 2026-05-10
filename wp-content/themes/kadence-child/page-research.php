<?php
/**
 * Template for the Research landing page (Mission & Vision).
 * Matches slug: research  —  page ID 7.
 */
defined( 'ABSPATH' ) || exit;
get_header();
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
				The Achilefu Lab develops optical and molecular tools that let scientists and clinicians see biology at a resolution and specificity not possible with conventional methods — from the single molecule to the operating room.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- Mission statement -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Mission &amp; Vision</h2>
				<div class="al-prose">
					<p>
						Our mission is to invent, develop, and deploy light-based technologies that illuminate the molecular signatures of disease — making the invisible visible for both discovery and care.
					</p>
					<p>
						We believe that understanding disease at its earliest, most precise level demands tools purpose-built for that task. By designing novel molecular probes, imaging agents, and detection systems, we create the vocabulary that lets biology speak clearly — to researchers, surgeons, and ultimately to patients.
					</p>
					<p>
						Our vision is a future in which a surgeon can see every cancer cell in real time, a clinician can detect disease years before symptoms arise, and a researcher can watch cellular processes unfold in living tissue without disturbing them. Every project in this lab is a step toward that future.
					</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Research platforms -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Our Research Platforms</h2>
				<p class="al-inner-section__lead">
					Three interconnected areas of work — each building toward a world where light-based medicine is the standard of care.
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
							Custom-engineered fluorescent probes and near-infrared agents that target specific biological molecules — enabling deep-tissue, real-time imaging of cancer, neurodegeneration, and infection.
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
							Real-time intraoperative fluorescence imaging systems that let surgeons visualize tumor boundaries, nerve structures, and vascular anatomy — reducing margin errors and improving patient outcomes.
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

			<!-- Why light? -->
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
						<p class="al-feature-card__desc">Engineered probes bind selectively to disease-associated targets — not just tissue, but the precise molecular signature of a tumor or pathogen.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M12 8v4l3 3"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Real-Time Readout</p>
						<p class="al-feature-card__desc">Fluorescence signals appear instantly and continuously — enabling live feedback during surgery or therapy rather than waiting for pathology results.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Non-Ionizing Safety</p>
						<p class="al-feature-card__desc">Unlike X-ray or PET imaging, near-infrared light carries no ionizing radiation — enabling repeat imaging without cumulative risk to patients or surgical teams.</p>
					</div>
				</div>
			</section>

			<!-- CTA -->
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
