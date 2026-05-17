<?php
/**
 * Template for the Optical & Molecular Imaging research area page.
 * Matches slug: optical-imaging  —  page ID 20, child of research (7).
 *
 * v2.0 — editorial density refresh: inline stat strip, active projects stream,
 *         selected publications grid, related research nav, tightened prose.
 */
defined( 'ABSPATH' ) || exit;

$url_research      = al_page_url( 'research' );
$url_igs           = al_page_url( 'research/image-guided-surgery' );
$url_b2b           = al_page_url( 'research/bench-to-bedside' );
$url_team          = al_page_url( 'team' );
$url_contact       = al_page_url( 'contact' );
$url_publications  = al_page_url( 'publications' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="omi-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<a href="<?php echo $url_research; ?>">Research</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Optical &amp; Molecular Imaging</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Foundational Research</p>
			<h1 class="al-inner-hero__title" id="omi-heading">
				Seeing Disease at the Molecular Level
			</h1>
			<p class="al-inner-hero__sub">
				Bespoke near-infrared probes and imaging agents that bind the molecular signatures of disease &mdash; rendering tumors, pathogens, and biological processes visible in living tissue with chemical specificity.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Overview prose  +  inline stat strip ── -->
			<div class="al-two-col al-two-col--60-40">

				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">Platform Overview</h2>
					<div class="al-prose">
						<p>
							The foundation of the Achilefu Lab is the chemistry of seeing. We design small-molecule and peptide-based probes that operate in the near-infrared (NIR) spectrum &mdash; wavelengths that penetrate deep into tissue with low scatter and minimal autofluorescence. These are not passive dyes; they are purpose-built molecular sensors that activate, accumulate, or shift signal in response to specific biological targets.
						</p>
						<p>
							The chemistry spans the full architecture space: always-on targeted agents for receptor-expressing tumors, activatable probes that remain dark until they encounter disease-specific enzymes or pH gradients, and multimodal agents detectable by complementary imaging modalities (PET, MRI). The result is a library of tools that can be matched to the biological question rather than the other way around.
						</p>
					</div>
				</section>

				<aside>
					<p class="al-inner-section__lead" style="margin-top:0;">By the numbers <!-- [PLACEHOLDER] --></p>
					<div class="al-pi-stats" style="margin-top:0.5rem;">
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">150+</span>
							<span class="al-pi-stat__label">Publications in area <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">30+</span>
							<span class="al-pi-stat__label">Active probes <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">8</span>
							<span class="al-pi-stat__label">NIH-funded projects <!-- [PLACEHOLDER] --></span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">25+</span>
							<span class="al-pi-stat__label">Years of work <!-- [PLACEHOLDER] --></span>
						</div>
					</div>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Key Technology Platforms (feature grid) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Key Technology Platforms</h2>
				<p class="al-inner-section__lead">Core chemistries and instrumentation that the lab owns end-to-end &mdash; from molecule to mouse to image.</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="3"/>
								<path d="M12 1v4M12 19v4M4.22 4.22l2.83 2.83M16.95 16.95l2.83 2.83M1 12h4M19 12h4M4.22 19.78l2.83-2.83M16.95 7.05l2.83-2.83"/>
							</svg>
						</div>
						<p class="al-feature-card__title">NIR Fluorescent Probes</p>
						<p class="al-feature-card__desc">Heptamethine cyanines, BODIPY derivatives, and porphyrin scaffolds tuned for deep-tissue penetration and high signal-to-background contrast in the 700&ndash;1100&nbsp;nm window.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Activatable Imaging Agents</p>
						<p class="al-feature-card__desc">Self-quenching and FRET-based architectures that switch on in response to cathepsins, matrix metalloproteinases, ROS, or low-pH tumor microenvironments.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M12 2L2 7l10 5 10-5-10-5z"/>
								<path d="M2 17l10 5 10-5M2 12l10 5 10-5"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Theranostic Platforms</p>
						<p class="al-feature-card__desc">Single-molecule and nanoplatform agents that combine optical reporting with photodynamic, photothermal, or radiotherapeutic payloads for image-and-treat workflows.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="3" width="20" height="14" rx="2"/>
								<path d="M8 21h8M12 17v4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Detection Systems</p>
						<p class="al-feature-card__desc">In-house spectral, time-domain (FLIM), and Cherenkov-coupled imaging benches developed alongside the chemistry &mdash; so probe and instrument co-evolve.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Active Projects (3-col list stream) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="omi-projects-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="omi-projects-heading">Active Projects</h2>
					<p class="al-inner-section__lead">
						A snapshot of ongoing probe-design and imaging-agent campaigns in the lab. <!-- [PLACEHOLDER] project list pending verification with PI. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Targeted probes -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Targeted Probes</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">NIR probes for HER2+ breast cancer</p>
								<p class="al-latest__meta">Affibody conjugate &middot; preclinical <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Integrin-targeted cyanines for glioma margins</p>
								<p class="al-latest__meta">RGD scaffold &middot; orthotopic models <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Somatostatin-receptor probes for neuroendocrine tumors</p>
								<p class="al-latest__meta">Octreotate analog &middot; in&nbsp;vivo validation <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: Activatable probes -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Activatable Probes</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Self-quenching probes for tumor microenvironment imaging</p>
								<p class="al-latest__meta">pH-responsive &middot; pancreatic models <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Protease-activated probes for cathepsin imaging</p>
								<p class="al-latest__meta">Cleavable linker &middot; breast &amp; ovarian <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Caged probes for triggered release imaging</p>
								<p class="al-latest__meta">Photoactivatable &middot; mechanism studies <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Multimodal & theranostics -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Multimodal &amp; Theranostics</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Multimodal NIR/PET contrast agents</p>
								<p class="al-latest__meta">Cu-64 chelate &middot; co-registered imaging <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Photodynamic theranostic agents for resistant tumors</p>
								<p class="al-latest__meta">PDT payload &middot; melanoma models <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cherenkov-excited probes for radiotherapy guidance</p>
								<p class="al-latest__meta">Radioluminescent &middot; with Radiation Oncology <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Selected Publications (3-col list grid) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="omi-pubs-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="omi-pubs-heading">Selected Publications</h2>
					<p class="al-inner-section__lead">
						Representative papers from the lab's probe-chemistry and molecular-imaging program. <!-- [PLACEHOLDER] all citations below pending verification. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Probe chemistry -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Probe Chemistry</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Self-quenching NIR fluorescent probes for tumor imaging</p>
									<p class="al-latest__meta">Nature Chemistry &middot; 2024 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Cyanine dyes with extended pharmacokinetics for deep-tissue imaging</p>
									<p class="al-latest__meta">J. Am. Chem. Soc. &middot; 2023 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 2: Activatable & targeted -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Activatable &amp; Targeted</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Activatable cyanines for protease imaging in solid tumors</p>
									<p class="al-latest__meta">Bioconjugate Chemistry &middot; 2024 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Receptor-targeted NIR probes for image-guided cancer staging</p>
									<p class="al-latest__meta">Molecular Imaging &middot; 2022 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3: Theranostics & multimodal -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Theranostics &amp; Multimodal</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Theranostic nanoplatforms for combined imaging and therapy</p>
									<p class="al-latest__meta">ACS Nano &middot; 2023 <!-- [PLACEHOLDER] --></p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Dual-modality NIR/PET agents for clinical translation</p>
									<p class="al-latest__meta">Theranostics &middot; 2021 <!-- [PLACEHOLDER] --></p>
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

			<!-- ── Row 5: Disease Focus Areas (compact prose) ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Disease Focus Areas</h2>
				<div class="al-prose">
					<p><strong style="color:var(--al-text)">Cancer detection &amp; staging.</strong> Probes against integrins, EGFR, HER2, and somatostatin receptors enable non-invasive detection and precise delineation of primary tumors, nodal involvement, and metastatic disease.</p>
					<p><strong style="color:var(--al-text)">Neurological disease.</strong> Agents engineered to cross the blood&ndash;brain barrier and bind amyloid plaques, tau tangles, or neuroinflammatory markers &mdash; supporting both mechanistic research and early diagnostic imaging.</p>
					<p><strong style="color:var(--al-text)">Infectious disease.</strong> Species-specific probes targeting bacterial and fungal cell-wall components for rapid, non-culture identification of pathogens in tissue and on implants.</p>
					<p><strong style="color:var(--al-text)">Cardiovascular disease.</strong> Imaging vulnerable atherosclerotic plaques and mapping myocardial viability using probes responsive to oxidative stress and hypoxia.</p>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 6: Related research ── -->
			<section class="al-inner-section" aria-labelledby="omi-related-heading">
				<h2 class="al-inner-section__title" id="omi-related-heading">Related Research</h2>
				<p class="al-inner-section__lead">Sibling platforms in the Achilefu Lab research program.</p>

				<div class="al-research-nav">

					<a href="<?php echo $url_igs; ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
								<circle cx="12" cy="12" r="3"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Image-Guided Surgery</p>
						<p class="al-research-nav-card__desc">
							Intraoperative fluorescence systems that put these probes to work in the operating room &mdash; resolving tumor margins, nerves, and lymph nodes in real time.
						</p>
						<span class="al-research-nav-card__arrow">
							Explore platform
							<svg width="14" height="14" viewBox="0 0 14 14" fill="none" aria-hidden="true"><path d="M3 7h8M7 3l4 4-4 4" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round"/></svg>
						</span>
					</a>

					<a href="<?php echo $url_b2b; ?>" class="al-research-nav-card">
						<div class="al-research-nav-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
							</svg>
						</div>
						<p class="al-research-nav-card__title">Bench to Bedside</p>
						<p class="al-research-nav-card__desc">
							Translating probe chemistry and devices into FDA-cleared agents and clinical-grade systems through preclinical validation, IND filings, and active trials.
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
					<h3>Collaborate on probe design &amp; molecular imaging</h3>
					<p>We welcome chemists, biologists, and clinical investigators interested in joint probe development, agent licensing, or shared imaging studies. Meet the team behind the chemistry, or reach out directly.</p>
				</div>
				<a href="<?php echo $url_team; ?>" class="al-inner-cta__btn">Meet the Team</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
