<?php
/**
 * Template for the Image-Guided Surgery research area page.
 * Matches slug: image-guided-surgery  —  page ID 21, child of research (7).
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="igs-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo al_page_url( 'research' ); ?>">Research</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Image-Guided Surgery</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Research Platform</p>
			<h1 class="al-inner-hero__title" id="igs-heading">
				Real-Time Vision for the Operating Room
			</h1>
			<p class="al-inner-hero__sub">
				We develop fluorescence-guided surgery platforms that give surgeons the ability to see, in real time, exactly where cancer ends and healthy tissue begins — reducing incomplete resections and improving patient outcomes.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- The problem -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">The Problem We Solve</h2>
				<div class="al-prose">
					<p>
						Cancer surgery has an Achilles' heel: surgeons operate under white light, using visual and tactile cues refined over centuries to distinguish tumor from healthy tissue. Yet cancer cells can infiltrate beyond visible margins. Positive surgical margins — leaving cancer cells behind — occur in 20–40% of solid tumor resections depending on the cancer type and are the leading cause of local recurrence.
					</p>
					<p>
						The answer is not better training or better hands — surgeons are already exceptional. The answer is better information: a real-time molecular map of the tumor boundary that reveals what the eye cannot see.
					</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- How it works -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">How It Works</h2>
				<p class="al-inner-section__lead">Three components working in concert: a targeted agent, a camera system, and real-time image processing.</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">1 — Tumor-Targeted Agent</p>
						<p class="al-feature-card__desc">A near-infrared fluorescent probe is administered before surgery. It homes to and accumulates in tumor tissue while clearing from healthy tissue, creating a high-contrast molecular signal that persists throughout the procedure.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="2" width="20" height="20" rx="2"/>
								<circle cx="12" cy="12" r="4"/>
								<path d="M12 2v4M12 18v4M2 12h4M18 12h4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">2 — Fluorescence Camera System</p>
						<p class="al-feature-card__desc">Custom-built or adapted NIR-capable cameras illuminate the operative field and detect fluorescence emission invisible to the naked eye. Our systems overlay the fluorescent signal on the conventional white-light view in real time.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="5" y="2" width="14" height="20" rx="2"/>
								<path d="M9 7h6M9 11h6M9 15h4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">3 — Intraoperative Feedback</p>
						<p class="al-feature-card__desc">Surgeons see a merged display: normal tissue in white light, fluorescent tumor signal highlighted in a contrasting color. Residual disease that would otherwise remain is immediately visible — before the patient is closed.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- Clinical applications -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Clinical Applications</h2>
				<div class="al-prose">
					<p><strong style="color:var(--al-text)">Breast Cancer.</strong> Delineating tumor margins in breast-conserving surgery — reducing the re-excision rate and sparing patients a second operation while improving cosmetic outcomes.</p>
					<p><strong style="color:var(--al-text)">Brain Tumors.</strong> Glioma boundaries are notoriously difficult to define visually. Fluorescence guidance enables more complete resection of high-grade gliomas while preserving eloquent cortex adjacent to the tumor.</p>
					<p><strong style="color:var(--al-text)">Colorectal Cancer.</strong> Real-time assessment of anastomotic perfusion and lymph node mapping to guide oncological resection and reduce leak complications.</p>
					<p><strong style="color:var(--al-text)">Reconstructive &amp; Plastic Surgery.</strong> Perforator mapping and flap perfusion assessment — providing surgeons objective blood-flow data to plan and verify tissue transfers intraoperatively.</p>
					<p><strong style="color:var(--al-text)">Nerve Visualization.</strong> Probes selective for peripheral nerve tissue protect against inadvertent injury during oncological, orthopedic, and parotid gland surgeries.</p>
				</div>
			</section>

			<!-- CTA -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Clinical or Industry Partnership</h3>
					<p>We work with surgical teams and medical device companies to validate and deploy image-guided surgery platforms. Contact us to discuss a collaboration.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
