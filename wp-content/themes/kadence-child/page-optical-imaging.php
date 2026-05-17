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
							A flagship example is our cyclic octapeptide-based NIR probe that selectively recognizes phosphorylated Annexin A2 (pANXA2) &mdash; a calcium-dependent marker overexpressed at invasive tumor edges and trafficked to necrotic regions via macrophages. This probe enables high-affinity binding to tumor margins, detection of metastatic spread, and fluorescence-guided surgical resection. The lab also investigates copper-catalyzed covalent dimerization of NIR cyanine dyes to engineer probes with optimized pharmacokinetics and improved tumor selectivity.
						</p>
					</div>
				</section>

				<aside>
					<p class="al-inner-section__lead" style="margin-top:0;">By the numbers</p>
					<div class="al-pi-stats" style="margin-top:0.5rem;">
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">300+</span>
							<span class="al-pi-stat__label">Peer-reviewed publications</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">60+</span>
							<span class="al-pi-stat__label">Issued U.S. Patents</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">4</span>
							<span class="al-pi-stat__label">Products in clinical study</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">25+</span>
							<span class="al-pi-stat__label">Years of innovation</span>
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
						A snapshot of ongoing probe-design and imaging-agent campaigns in the lab.
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Targeted probes -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Targeted Probes</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cyclic octapeptide NIR probe for phosphorylated Annexin A2 in solid tumors</p>
								<p class="al-latest__meta">pANXA2-targeted &middot; tumor detection &amp; surgical resection</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">CD38-targeted peptides for multiple myeloma imaging</p>
								<p class="al-latest__meta">PET &amp; NIR imaging &middot; myeloma models</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Transferrin receptor-targeted probes for breast cancer metastasis</p>
								<p class="al-latest__meta">Primary &amp; metastatic lesion detection &middot; in vivo</p>
							</li>
						</ul>
					</div>

					<!-- Column 2: Nanoparticle &amp; multimodal platforms -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Nanoparticle &amp; Multimodal</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Bi-metallic organo-coordination nanoparticles for cancer-targeted theranostics</p>
								<p class="al-latest__meta">PET/optical &middot; multi-tumor models</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Chelate-free gadolinium-loaded TiO₂ nanoparticles for MRI</p>
								<p class="al-latest__meta">MRI contrast &middot; stable nanoplatform</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Thio-stabilized gold nanoparticles for NIR fluorescence detection</p>
								<p class="al-latest__meta">Multifunctional &middot; optical imaging</p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Cyanine dye chemistry -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Dye Chemistry</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Copper-catalyzed covalent dimerization of NIR fluorescent cyanine dyes</p>
								<p class="al-latest__meta">Probe engineering &middot; pharmacokinetic optimization</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Side-chain modification of collagen-targeting peptide to prevent dye aggregation</p>
								<p class="al-latest__meta">Photochemistry &middot; structural biology</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Non-invasive NIR probe for monitoring arthritis treatment response</p>
								<p class="al-latest__meta">Tyrosine-phosphorylated proteins &middot; in vivo</p>
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
						Representative papers from the lab's probe-chemistry and molecular-imaging program.
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Probe chemistry -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Probe Chemistry</p>
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
						</ul>
					</div>

					<!-- Column 2: Targeted &amp; multimodal -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Targeted &amp; Multimodal</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Development of New CD38 Targeted Peptides for Cancer Imaging</p>
									<p class="al-latest__meta">Molecular Imaging and Biology &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Side-chain modification of collagen-targeting peptide prevents dye aggregation</p>
									<p class="al-latest__meta">J. Photochem. Photobiol. A &middot; 2022</p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3: Theranostics & nanoparticles -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Theranostics &amp; Nanoparticles</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Cancer-targeted pro-theranostic bi-metallic organo-coordination nanoparticles</p>
									<p class="al-latest__meta">Theranostics &middot; 2025</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Non-invasive monitoring of arthritis treatment response via targeting of tyrosine-phosphorylated proteins</p>
									<p class="al-latest__meta">Arthritis Research &amp; Therapy &middot; 2021</p>
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
