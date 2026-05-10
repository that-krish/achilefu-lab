<?php
/**
 * Template for the Bench to Bedside research area page.
 * Matches slug: bench-to-bedside  —  page ID 22, child of research (7).
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="b2b-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo al_page_url( 'research' ); ?>">Research</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Bench to Bedside</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Research Platform</p>
			<h1 class="al-inner-hero__title" id="b2b-heading">
				From Discovery to Patient Impact
			</h1>
			<p class="al-inner-hero__sub">
				A discovery is only as valuable as the patients it reaches. We build the regulatory, commercial, and clinical pathways that carry our optical technologies from laboratory proof-of-concept to approved medical tools.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- Philosophy -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Our Translation Philosophy</h2>
				<div class="al-prose">
					<p>
						Most academic laboratories generate knowledge. We build with it. From the moment a probe enters our design pipeline, we think about the patient who will one day receive it — what disease are they fighting, what does their surgeon or oncologist need, and what regulatory and manufacturing standards will the agent have to meet?
					</p>
					<p>
						This forward-looking mindset shapes every decision: we select disease targets with defined unmet clinical need, design agents with formulation and stability in mind from the outset, and partner with clinical investigators at UT Southwestern Medical Center to validate efficacy in relevant patient populations as early as possible.
					</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Translation pathway -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">The Translation Pathway</h2>
				<p class="al-inner-section__lead">A disciplined, stage-gated process from chemistry to clinic.</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Lead Optimization</p>
						<p class="al-feature-card__desc">Iterative structure–activity relationship studies to optimize binding affinity, selectivity, pharmacokinetics, and optical properties before committing to in vivo work.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M8 12l2 2 4-4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Preclinical Validation</p>
						<p class="al-feature-card__desc">GLP-compliant toxicology and efficacy studies in validated disease models, providing the data package required for IND filing with the FDA.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
								<polyline points="14 2 14 8 20 8"/>
								<line x1="16" y1="13" x2="8" y2="13"/>
								<line x1="16" y1="17" x2="8" y2="17"/>
								<polyline points="10 9 9 9 8 9"/>
							</svg>
						</div>
						<p class="al-feature-card__title">IND &amp; Regulatory Filing</p>
						<p class="al-feature-card__desc">Preparation and submission of Investigational New Drug applications, with engagement of the FDA's Division of Imaging and Radiation Medicine for imaging agent pathways.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
								<circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Phase I / II Clinical Trials</p>
						<p class="al-feature-card__desc">First-in-human safety and dosing studies followed by efficacy trials, conducted in partnership with surgical oncologists and radiologists at UTSW and affiliated academic medical centers.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="7" width="20" height="14" rx="2"/>
								<path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Commercialization &amp; Licensing</p>
						<p class="al-feature-card__desc">Working with the UT Southwestern Technology Transfer office and industry partners to license or spin out technologies — ensuring sustainable pathways for broad patient access.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Post-Market Surveillance</p>
						<p class="al-feature-card__desc">Continued outcomes monitoring for approved agents and devices, with data feeding back to improve next-generation probes and identify new clinical indications.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Impact -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Innovation Portfolio</h2>
				<div class="al-prose">
					<p>
						Over 25 years, the lab has built one of the most productive translational track records in biomedical optics: more than 70 issued or pending patents, multiple INDs filed with the U.S. FDA, and licensing agreements with medical device and pharmaceutical companies. Several technologies developed here are in active clinical evaluation at UT Southwestern and partner institutions. <em>[Specific agent and device names to be confirmed with lab before publication.]</em>
					</p>
					<p>
						This portfolio is made possible by sustained funding from the National Institutes of Health, the National Science Foundation, the Department of Defense, and industry sponsors — and by the decades of relationship-building between our bench scientists and the clinical community at UT Southwestern Medical Center.
					</p>
				</div>
			</section>

			<!-- CTA -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Licensing &amp; Partnership Enquiries</h3>
					<p>Industry partners, clinical trial sites, and investors — contact us to learn about our translational portfolio and ongoing programs.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
