<?php
/**
 * Template for the Optical & Molecular Imaging research area page.
 * Matches slug: optical-imaging  —  page ID 20, child of research (7).
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="omi-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo al_page_url( 'research' ); ?>">Research</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Optical &amp; Molecular Imaging</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Research Platform</p>
			<h1 class="al-inner-hero__title" id="omi-heading">
				Seeing Disease at the Molecular Level
			</h1>
			<p class="al-inner-hero__sub">
				We engineer bespoke fluorescent probes and imaging agents that bind to the molecular signatures of disease — making tumors, pathogens, and disease processes visible in living tissue with unprecedented precision.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- Overview -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Platform Overview</h2>
				<div class="al-prose">
					<p>
						The foundation of the Achilefu Lab's work is the design of small-molecule and peptide-based probes that operate in the near-infrared (NIR) spectrum — wavelengths of light that penetrate deep into biological tissue without causing damage. These probes are not passive dyes; they are purpose-designed molecular sensors that activate, accumulate, or change their signal in response to specific biological targets.
					</p>
					<p>
						Our chemistry encompasses a spectrum of probe architectures: always-on targeted agents for receptor-expressing tumors, activatable probes that remain dark until encountering disease-specific enzymes or pH changes, and multimodal agents that can be detected by both optical and complementary imaging modalities (PET, MRI). This versatility allows us to match the probe to the biological question and clinical need.
					</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Key capabilities -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Key Capabilities</h2>
				<p class="al-inner-section__lead">From probe synthesis to preclinical validation, we own the full pipeline.</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>
							</svg>
						</div>
						<p class="al-feature-card__title">NIR Fluorophore Design</p>
						<p class="al-feature-card__desc">Synthesis and optimization of heptamethine cyanine dyes, BODIPY derivatives, and porphyrin-based agents tuned for deep-tissue penetration and high signal-to-background contrast.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="3"/>
								<path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Activatable Probes</p>
						<p class="al-feature-card__desc">Smart agents that remain non-fluorescent until triggered by cathepsins, matrix metalloproteinases, reactive oxygen species, or low-pH tumor microenvironments — dramatically improving specificity.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="3" width="20" height="14" rx="2"/>
								<path d="M8 21h8M12 17v4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Multimodal Agents</p>
						<p class="al-feature-card__desc">Hybrid probes that combine optical fluorescence with PET radiotracers or MRI contrast, enabling the same molecular target to be imaged at clinical scale (PET/MRI) and surgical resolution (fluorescence).</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2L2 7l10 5 10-5-10-5z"/>
								<path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Fluorescence Lifetime Imaging</p>
						<p class="al-feature-card__desc">Beyond intensity-based imaging, we exploit the time-domain behavior of photons (FLIM) to distinguish probe populations, quantify molecular interactions, and reduce autofluorescence interference.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Receptor-Targeted Delivery</p>
						<p class="al-feature-card__desc">Conjugation of fluorophores to peptides, antibodies, and small-molecule ligands that actively home to overexpressed receptors on tumor cells — concentrating signal where it matters most.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Preclinical Validation</p>
						<p class="al-feature-card__desc">In vitro binding assays, cell culture studies, and small-animal in vivo imaging using our custom spectral and lifetime-resolved systems — establishing efficacy before clinical translation.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Disease focus areas -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Disease Focus Areas</h2>
				<div class="al-prose">
					<p><strong style="color:var(--al-text)">Cancer Detection &amp; Staging.</strong> Probes targeting tumor-associated receptors (integrins, EGFR, somatostatin receptors) and enzymatic activity enable non-invasive detection and precise delineation of primary tumors, lymph node involvement, and metastatic sites.</p>
					<p><strong style="color:var(--al-text)">Neurological Disease.</strong> Agents designed to cross the blood-brain barrier and bind amyloid plaques, tau tangles, or neuroinflammatory markers — supporting both research into disease mechanisms and early diagnostic imaging.</p>
					<p><strong style="color:var(--al-text)">Infectious Disease.</strong> Species-specific probes targeting bacterial or fungal cell-wall components allow rapid, non-culture-based identification of pathogens in tissue, with applications in surgical debridement and implant infection.</p>
					<p><strong style="color:var(--al-text)">Cardiovascular Disease.</strong> Imaging vulnerable atherosclerotic plaques and mapping myocardial viability using probes sensitive to oxidative stress and hypoxia markers.</p>
				</div>
			</section>

			<!-- CTA -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Interested in this platform?</h3>
					<p>We welcome collaborations with chemists, biologists, and clinical investigators. Contact us to discuss probe design, agent licensing, or joint research.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
