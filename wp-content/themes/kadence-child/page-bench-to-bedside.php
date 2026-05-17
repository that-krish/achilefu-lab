<?php
/**
 * Template for the Bench to Bedside research area page.
 * Matches slug: bench-to-bedside  —  page ID 22, child of research (7).
 *
 * v2 — editorial density refresh: dense stat strip, active-trials stream,
 *       milestone list, translational pubs, partners panel, sibling nav.
 */
defined( 'ABSPATH' ) || exit;

$url_research         = al_page_url( 'research' );
$url_optical          = al_page_url( 'research/optical-imaging' );
$url_image_guided     = al_page_url( 'research/image-guided-surgery' );
$url_contact          = al_page_url( 'contact' );
$url_publications     = al_page_url( 'publications' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="b2b-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo $url_research; ?>">Research</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Bench to Bedside</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Research Platform</p>
			<h1 class="al-inner-hero__title" id="b2b-heading">
				From Discovery to Patient Impact
			</h1>
			<p class="al-inner-hero__sub">
				A discovery is only as valuable as the patients it reaches. We build the regulatory, commercial, and clinical pathways that carry our optical technologies from laboratory proof-of-concept to approved medical tools at UT Southwestern and beyond.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Translation philosophy + inline stats ── -->
			<div class="al-two-col al-two-col--60-40">

				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">Our Translation Philosophy</h2>
					<div class="al-prose">
						<p>
							Most academic laboratories generate knowledge. We build with it. From the moment a probe enters our design pipeline, we think about the patient who will one day receive it &mdash; what disease are they fighting, what does their surgeon or oncologist need, and what regulatory and manufacturing standards will the agent have to meet?
						</p>
						<p>
							This forward-looking mindset shapes every decision: we select disease targets with defined unmet clinical need, design agents with formulation and stability in mind from the outset, and partner with clinical investigators at UT Southwestern Medical Center to validate efficacy in relevant patient populations as early as possible.
						</p>
					</div>
				</section>

				<aside>
					<div class="al-pi-stats">
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] active + completed clinical trials -->
							<span class="al-pi-stat__value">8</span>
							<span class="al-pi-stat__label">Clinical Trials <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] IND filings to date -->
							<span class="al-pi-stat__value">4</span>
							<span class="al-pi-stat__label">IND Filings <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<!-- [PLACEHOLDER] industry licensees + partners -->
							<span class="al-pi-stat__value">12</span>
							<span class="al-pi-stat__label">Industry Partners <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">25+</span>
							<span class="al-pi-stat__label">Years of Translation</span>
						</div>
					</div>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Translational Pipeline (feature grid) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Translational Pipeline</h2>
				<p class="al-inner-section__lead">A disciplined, stage-gated workflow from chemistry to clinic &mdash; with a parallel commercialization track to ensure scalable patient access.</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M8 12l2 2 4-4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Preclinical Validation</p>
						<p class="al-feature-card__desc">GLP-compliant toxicology, pharmacokinetics, and efficacy studies in validated disease models &mdash; assembling the data package required for IND-enabling submissions.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/>
								<polyline points="14 2 14 8 20 8"/>
								<line x1="16" y1="13" x2="8" y2="13"/>
								<line x1="16" y1="17" x2="8" y2="17"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Regulatory &amp; IND</p>
						<p class="al-feature-card__desc">Preparation and submission of Investigational New Drug applications, with direct engagement of the FDA's Division of Imaging and Radiation Medicine for imaging-agent pathways.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
								<circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Clinical Trials</p>
						<p class="al-feature-card__desc">First-in-human safety and dosing studies followed by Phase II/III efficacy trials &mdash; conducted with surgical oncologists and radiologists at UTSW and affiliated academic medical centers.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="7" width="20" height="14" rx="2"/>
								<path d="M16 21V5a2 2 0 0 0-2-2h-4a2 2 0 0 0-2 2v16"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Industry &amp; Health-System Partnerships</p>
						<p class="al-feature-card__desc">Licensing and spin-out agreements via UTSW Technology Development &mdash; pairing the lab's chemistry with manufacturing, distribution, and health-system adoption pathways.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Active Clinical Trials (3-col stream) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="b2b-trials-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="b2b-trials-heading">Active Clinical Trials</h2>
					<p class="al-inner-section__lead">
						Selected studies currently enrolling at UT Southwestern and partner sites. <!-- [PLACEHOLDER] all trial details below pending verification with lab + clinicaltrials.gov listings. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Surgical Oncology -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Surgical Oncology</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">NIR-guided breast cancer surgery margin assessment</p>
								<p class="al-latest__meta">Phase II &middot; NCT0XXXXXXX &middot; UTSW Simmons Cancer Center <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fluorescence-guided cytoreduction in ovarian cancer</p>
								<p class="al-latest__meta">Phase I/II &middot; NCT0XXXXXXX &middot; Multi-site <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Targeted intraoperative imaging in head &amp; neck cancer</p>
								<p class="al-latest__meta">Phase II &middot; NCT0XXXXXXX &middot; UTSW Otolaryngology <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: Theranostics & Targeted Imaging -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Theranostics &amp; Targeted Imaging</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Theranostic agent for metastatic prostate cancer</p>
								<p class="al-latest__meta">Phase I &middot; NCT0XXXXXXX &middot; UTSW + industry sponsor <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Multimodal probe for glioblastoma resection</p>
								<p class="al-latest__meta">Phase I/II &middot; NCT0XXXXXXX &middot; UTSW Neurosurgery <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">NIR-II probe for deep-tissue tumor imaging</p>
								<p class="al-latest__meta">Phase I &middot; NCT0XXXXXXX &middot; Investigator-initiated <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Device & Platform Studies -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Device &amp; Platform Studies</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cancer-imaging goggles &mdash; multi-tumor feasibility study</p>
								<p class="al-latest__meta">Phase II &middot; NCT0XXXXXXX &middot; UTSW Surgical Oncology <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Wearable fluorescence platform &mdash; sentinel lymph node mapping</p>
								<p class="al-latest__meta">Phase I &middot; NCT0XXXXXXX &middot; Multi-site <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cherenkov-excited luminescence imaging in radiotherapy</p>
								<p class="al-latest__meta">Phase I &middot; NCT0XXXXXXX &middot; UTSW Radiation Oncology <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Recent Milestones + Partners (60/40 split) ── -->
			<div class="al-two-col al-two-col--60-40">

				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">Recent Milestones</h2>
					<p class="al-inner-section__lead">
						Regulatory, clinical, and commercialization markers from the past several years.
					</p>
					<ul class="al-latest__list">
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">FDA Breakthrough Device designation for cancer-imaging goggles platform</p>
							<p class="al-latest__meta">2024 &middot; U.S. Food &amp; Drug Administration <!-- [PLACEHOLDER] --></p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">IND clearance for next-generation theranostic agent</p>
							<p class="al-latest__meta">2023 &middot; FDA Division of Imaging and Radiation Medicine <!-- [PLACEHOLDER] --></p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Phase I trial completed for tumor-targeted NIR probe</p>
							<p class="al-latest__meta">2023 &middot; UTSW Simmons Cancer Center <!-- [PLACEHOLDER] --></p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Multi-site Phase I study of fluorescence-guided cytoreduction opens</p>
							<p class="al-latest__meta">2022 &middot; UTSW + 3 academic medical centers <!-- [PLACEHOLDER] --></p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Industry licensing agreement announced for wearable imaging system</p>
							<p class="al-latest__meta">2022 &middot; UTSW Office for Technology Development <!-- [PLACEHOLDER] --></p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">First-in-human study of theranostic radiotracer initiated</p>
							<p class="al-latest__meta">2021 &middot; Investigator-initiated, UTSW <!-- [PLACEHOLDER] --></p>
						</li>
					</ul>
				</section>

				<aside>
					<section class="al-inner-section" style="margin-bottom:0;">
						<h2 class="al-inner-section__title">Partners</h2>
						<p class="al-latest__col-heading" style="margin-top:1.5rem;">Industry</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Imaging &amp; surgical device licensees</p>
								<p class="al-latest__meta">Multiple medtech partners <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Contrast agent development</p>
								<p class="al-latest__meta">Pharma + radiopharma sponsors <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Diagnostics spin-out activity</p>
								<p class="al-latest__meta">UTSW Office for Technology Development <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>

						<p class="al-latest__col-heading" style="margin-top:2rem;">Clinical Sites</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">UT Southwestern Medical Center</p>
								<p class="al-latest__meta">Simmons Cancer Center &middot; Surgical &amp; Radiation Oncology</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Affiliated academic medical centers</p>
								<p class="al-latest__meta">Multi-site Phase I/II networks <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">NCI-designated cancer center collaborators</p>
								<p class="al-latest__meta">Translational consortium <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</section>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 5: Selected Clinical / Translational Publications ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="b2b-pubs-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="b2b-pubs-heading">Selected Translational Publications</h2>
					<p class="al-inner-section__lead">
						Clinical and preclinical reports anchoring the lab's translational programs. <!-- [PLACEHOLDER] citations pending verification. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: First-in-Human -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">First-in-Human</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">First-in-human evaluation of NIR fluorescence-guided breast cancer surgery</p>
									<p class="al-latest__meta">Annals of Surgery &middot; 2024 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Phase I safety and dosimetry of a tumor-targeted theranostic agent</p>
									<p class="al-latest__meta">Journal of Nuclear Medicine &middot; 2023 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 2: Preclinical & Regulatory -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Preclinical &amp; Regulatory</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Toxicology and pharmacokinetics of a near-infrared targeted probe</p>
									<p class="al-latest__meta">Clinical Cancer Research &middot; 2023 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Translational considerations for clinical NIR fluorescence imaging</p>
									<p class="al-latest__meta">Annu. Rev. Biomed. Eng. &middot; 2020 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3: Clinical Outcomes -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Clinical Outcomes</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Multi-site Phase I study of fluorescence-guided cytoreduction</p>
									<p class="al-latest__meta">J. Clinical Oncology &middot; 2023 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Wearable fluorescence imaging for intraoperative margin assessment</p>
									<p class="al-latest__meta">Journal of Biomedical Optics &middot; 2024 <!-- [PLACEHOLDER] --></p>
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

			<!-- ── Row 6: Innovation Portfolio (short prose) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Innovation Portfolio</h2>
				<div class="al-prose">
					<p>
						Over 25 years, the lab has built one of the most productive translational track records in biomedical optics: more than 70 issued or pending patents, multiple INDs filed with the U.S. FDA, and licensing agreements with medical device and pharmaceutical companies. Several technologies developed here are in active clinical evaluation at UT Southwestern and partner institutions. <em>[Specific agent and device names to be confirmed with lab before publication.]</em>
					</p>
					<p>
						This portfolio is sustained by funding from the National Institutes of Health, the National Science Foundation, the Department of Defense, and industry sponsors &mdash; and by decades of relationship-building between our bench scientists and the clinical community at UT Southwestern.
					</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 7: Related research areas ── -->
			<section class="al-inner-section" aria-labelledby="b2b-related-heading">
				<h2 class="al-inner-section__title" id="b2b-related-heading">Related Research</h2>
				<p class="al-inner-section__lead">Sibling platforms that feed our translational pipeline.</p>

				<div class="al-research-nav">

					<a href="<?php echo $url_optical; ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="3"/>
								<path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Optical &amp; Molecular Imaging</p>
						<p class="al-research-nav-card__desc">
							Custom-engineered fluorescent probes and near-infrared agents &mdash; the chemistry that feeds every translational program in this pipeline.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

					<a href="<?php echo $url_image_guided; ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
								<circle cx="12" cy="12" r="3"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Image-Guided Surgery</p>
						<p class="al-research-nav-card__desc">
							Real-time intraoperative fluorescence imaging systems &mdash; the device platforms that pair with our clinical-grade agents in active trials.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Industry &amp; Clinical Partnerships</h3>
					<p>Biotech, pharma, medtech, and clinical trial sites &mdash; reach out to discuss licensing, sponsored research, or collaboration on active and upcoming translational programs.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
