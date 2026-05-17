<?php
/**
 * Template for the Bench to Bedside research area page.
 * Matches slug: bench-to-bedside  —  page ID 22, child of research (7).
 *
 * v3 — complete rewrite based on labs.utsouthwestern.edu/achilefu-lab source.
 *       Structure: mission → Perspective pipeline (Concept→Research→Dissemination→Translation)
 *       → four clinical technologies → selected publications → funding → partners → nav.
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
				Complete Solutions from Concept to Clinic
			</h1>
			<p class="al-inner-hero__sub">
				The unique strength of the Achilefu Lab is the ability to develop complete solutions from conception, implementation, and validation to human clinical care. We aim to change the way medicine is practiced.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Mission + translation outcomes ── -->
			<div class="al-two-col al-two-col--60-40">

				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">The Achilefu Lab Approach</h2>
					<div class="al-prose">
						<p>
							There are major advances to be made in how we address diseases like cancer or neurological conditions. However, many diseased and healthy tissues are hard to visualize within the body, presenting a major challenge for making these advances.
						</p>
						<p>
							We develop techniques using light and custom molecular contrast agents to visualize tissue inside animals and humans. We then use those tools to better understand the underlying biology on a molecular level, build diagnostic tools that are more accurate and less invasive than existing methods, and develop novel light-based treatments for disease.
						</p>
						<p>
							Dr. Achilefu has guided multiple research endeavors from concept to clinic, launching startup companies to commercialize innovative products and working with clinical investigators at UT Southwestern Medical Center to validate technologies in human patients.
						</p>
					</div>
				</section>

				<aside>
					<div class="al-pi-stats">
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">4</span>
							<span class="al-pi-stat__label">Products in clinical study</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">3</span>
							<span class="al-pi-stat__label">Startup companies launched</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">60+</span>
							<span class="al-pi-stat__label">Issued U.S. Patents</span>
						</div>
						<div class="al-pi-stat">
							<span class="al-pi-stat__value">Multiple</span>
							<span class="al-pi-stat__label">Commercial licenses</span>
						</div>
					</div>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Perspective Pipeline (Concept → Research → Dissemination → Translation) ── -->
			<section class="al-inner-section" aria-labelledby="b2b-pipeline-heading">
				<h2 class="al-inner-section__title" id="b2b-pipeline-heading">The Perspective Pipeline</h2>
				<p class="al-inner-section__lead">
					The lab tracks research activity across four stages &mdash; from first ideas through clinical and commercial translation. Numbers below reflect the cumulative output of the Achilefu Lab.
				</p>

				<div class="al-feature-grid">

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M12 8v4M12 16h.01"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Concept</p>
						<p class="al-feature-card__desc">More than <strong>1,000</strong> research ideas generated &mdash; the upstream creative and hypothesis-generation phase that seeds every project in the pipeline.</p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M9 3H5a2 2 0 0 0-2 2v4m6-6h10a2 2 0 0 1 2 2v4M9 3v18m0 0h10a2 2 0 0 0 2-2V9M9 21H5a2 2 0 0 1-2-2V9m0 0h18"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Research</p>
						<p class="al-feature-card__desc">More than <strong>300 active projects</strong> pursued across molecular probe design, optical instrumentation, cancer biology, and clinical imaging.</p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
								<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Dissemination</p>
						<p class="al-feature-card__desc"><strong>300+</strong> scientific publications &middot; <strong>60+</strong> issued U.S. patents &middot; <strong>1,000+</strong> presentations &middot; <strong>80+</strong> trainees mentored.</p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M22 12h-4l-3 9L9 3l-3 9H2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Translation</p>
						<p class="al-feature-card__desc"><strong>4</strong> products in active clinical study &middot; <strong>3</strong> startup companies commercializing discoveries &middot; multiple licenses to industry partners.</p>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Technologies in the Clinical Pipeline ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="b2b-tech-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="b2b-tech-heading">Technologies in the Clinical Pipeline</h2>
					<p class="al-inner-section__lead">
						Four major technology platforms developed in the Achilefu Lab are currently in clinical study or active clinical translation.
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: LS301 / pANXA2 -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">LS301 &mdash; Annexin A2 Probe</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cyclic octapeptide targeting phosphorylated Annexin A2 (pANXA2)</p>
								<p class="al-latest__meta">Selectively binds invasive edges of solid tumors &middot; traffics to necrotic core via macrophages &middot; detects tumor xenografts &amp; metastatic lesions</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fluorescence-guided surgical tumor resection</p>
								<p class="al-latest__meta">Proof-of-concept in mice; broadly applicable to most solid cancers where high pANXA2 + elevated calcium are present in the microenvironment</p>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Selective imaging of solid tumours via the calcium-dependent high-affinity binding of cyclic peptide to phosphorylated Annexin A2</p>
									<p class="al-latest__meta">Nature Biomedical Engineering &middot; 2020</p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 2: RaST / Cerenkov -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">RaST &mdash; Cerenkov &amp; TiO&zwj;₂ Therapy</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Radionuclide-Stimulated Dynamic Therapy (RaST) using Cerenkov radiation to activate TiO₂ nanophotosensitizers</p>
								<p class="al-latest__meta">Depth-independent &middot; oxygen-independent &middot; tumor remission + high tumor-infiltrating lymphocyte counts in preclinical models</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Transferrin-coated TiO₂ nanoparticles + clinically used radionuclides colocalize in tumors</p>
								<p class="al-latest__meta">Selective cancer cell destruction &middot; activates immune system &middot; overcomes shallow light-penetration limit of conventional photodynamic therapy</p>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Breaking the depth dependency of phototherapy with Cerenkov radiation and low-radiance-responsive nanophotosensitizers</p>
									<p class="al-latest__meta">Nature Nanotechnology &middot; 2015</p>
								</a>
							</li>
						</ul>
					</div>

					<!-- Column 3: Cancer Vision Goggles + FDTI -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Cancer Vision Goggles &amp; FDTI</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Cancer Vision Goggles &mdash; wearable NIR fluorescence-guided surgery system</p>
								<p class="al-latest__meta">Hands-free &middot; wireless &middot; real-time tumor margin and lymph node visualization in the operating room</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Focal Dynamic Thermal Imaging (FDTI) &mdash; label-free tissue characterization</p>
								<p class="al-latest__meta">405 nm laser stimulates focal tissue regions &middot; thermal camera captures heterogeneity &middot; delineates malignant, benign, and inflamed tissue without contrast agents</p>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Single-Operator Cancer Vision Goggles for Quantitative Near-Infrared Fluorescence-Guided Oncologic Surgery</p>
									<p class="al-latest__meta">IEEE Trans. Biomed. Eng. &middot; 2026</p>
								</a>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Selected Translational Publications ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="b2b-pubs-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="b2b-pubs-heading">Selected Translational Publications</h2>
					<p class="al-inner-section__lead">
						Key papers spanning the four clinical programs &mdash; from foundational discoveries to first-in-human studies.
					</p>
				</div>

				<div class="al-latest__grid">

					<div class="al-latest__col">
						<p class="al-latest__col-heading">Molecular Imaging &amp; Surgery</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Selective imaging of solid tumours via the calcium-dependent high-affinity binding of cyclic peptide to phosphorylated Annexin A2</p>
									<p class="al-latest__meta">Nature Biomedical Engineering &middot; 2020</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Frugal engineering-inspired wearable augmented reality goggle system enables fluorescence-guided cancer surgery</p>
									<p class="al-latest__meta">Scientific Reports &middot; 2024</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">First-in-Humans Evaluation of Safety and Dosimetry of 64Cu-LLP2A for PET Imaging</p>
									<p class="al-latest__meta">Journal of Nuclear Medicine &middot; 2023</p>
								</a>
							</li>
						</ul>
					</div>

					<div class="al-latest__col">
						<p class="al-latest__col-heading">RaST Therapy</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Breaking the depth dependency of phototherapy with Cerenkov radiation and low-radiance-responsive nanophotosensitizers</p>
									<p class="al-latest__meta">Nature Nanotechnology &middot; 2015</p>
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
									<p class="al-latest__title">Chemo-RaST with bortezomib inhibits multiple myeloma relapse</p>
									<p class="al-latest__meta">Theranostics &middot; 2025</p>
								</a>
							</li>
						</ul>
					</div>

					<div class="al-latest__col">
						<p class="al-latest__col-heading">Radionuclide &amp; Immune Therapy</p>
						<ul class="al-latest__list">
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Radionuclide-stimulated dynamic therapy induces complementary immunogenic necroptosis and apoptosis cancer cell death pathways</p>
									<p class="al-latest__meta">Communications Biology &middot; 2026</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">Orthogonal targeting of osteoclasts and myeloma cells for radionuclide stimulated dynamic therapy</p>
									<p class="al-latest__meta">Theranostics &middot; 2021</p>
								</a>
							</li>
							<li class="al-latest__item">
								<a href="<?php echo $url_publications; ?>">
									<p class="al-latest__title">In vivo quantitative assessment of therapeutic response to bortezomib therapy in myeloma</p>
									<p class="al-latest__meta">EJNMMI Research &middot; 2021</p>
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

			<!-- ── Row 5: Funding + Partners (60/40) ── -->
			<div class="al-two-col al-two-col--60-40">

				<section class="al-inner-section" style="margin-bottom:0;">
					<h2 class="al-inner-section__title">Funding</h2>
					<p class="al-inner-section__lead">
						The lab's translational programs are sustained by federal and state funding from agencies with direct interest in moving discoveries to patients.
					</p>
					<ul class="al-latest__list">
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">National Institutes of Health</p>
							<p class="al-latest__meta">National Institute of Biomedical Imaging and Bioengineering (NIBIB) &middot; National Cancer Institute (NCI)</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">National Science Foundation</p>
							<p class="al-latest__meta">Engineering and physical sciences programs supporting device development and optical systems</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Department of Defense</p>
							<p class="al-latest__meta">Breast Cancer Research Program &mdash; Dr. Achilefu was the first recipient of the DOD BCRP Distinguished Investigator Award</p>
						</li>
						<li class="al-latest__item al-latest__item--static">
							<p class="al-latest__title">Cancer Prevention &amp; Research Institute of Texas (CPRIT)</p>
							<p class="al-latest__meta">Established Investigator Award &middot; Grant RR220013</p>
						</li>
					</ul>
				</section>

				<aside>
					<section class="al-inner-section" style="margin-bottom:0;">
						<h2 class="al-inner-section__title">Collaborators</h2>

						<p class="al-latest__col-heading" style="margin-top:1.5rem;">Washington University in St. Louis</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Goggles</p>
								<p class="al-latest__meta">Victor Gruev, Ph.D. &middot; Shengkui Gao, Ph.D.</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Oncologic Surgery</p>
								<p class="al-latest__meta">Julie Margenthaler, Ph.D. &middot; Ryan Fields, Ph.D.</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Molecular Imaging &amp; Radiology</p>
								<p class="al-latest__meta">Farrokh Dehdashti, M.D. &middot; Christopher Malone, M.D.</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Gastroenterology &middot; Urology</p>
								<p class="al-latest__meta">Deborah Rubin, M.D. &middot; Steve Edmundowicz, M.D. &middot; Jeff Arbeit, M.D. &middot; Gerald Andriole, M.D.</p>
							</li>
						</ul>

						<p class="al-latest__col-heading" style="margin-top:1.5rem;">Other Institutions</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Cincinnati</p>
								<p class="al-latest__meta">Nalini Kotagiri &middot; Cerenkov &amp; RaST therapy</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Iowa</p>
								<p class="al-latest__meta">Yang Liu, Ph.D.</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Arizona</p>
								<p class="al-latest__meta">Ron Liang, Ph.D. &middot; Nan Zhu, Ph.D. &middot; College of Optical Sciences</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">University of Missouri</p>
								<p class="al-latest__meta">Jeffrey Bryan, DVM &middot; Tony Mann, DVM &middot; Michael Lewis, Ph.D. &middot; Veterinary Surgery</p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Fudan University &mdash; Hepatic Surgery</p>
								<p class="al-latest__meta">Zhao-You Tang, M.D. &middot; Jia Fan, M.D., Ph.D. &middot; Hui-Chuan Sun, M.D. &middot; Qing-Hai Ye, M.D.</p>
							</li>
						</ul>
					</section>
				</aside>

			</div>

			<hr class="al-divider">

			<!-- ── Row 6: Related research areas ── -->
			<section class="al-inner-section" aria-labelledby="b2b-related-heading">
				<h2 class="al-inner-section__title" id="b2b-related-heading">Related Research</h2>
				<p class="al-inner-section__lead">Sibling platforms that feed the translational pipeline.</p>

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
							Custom-engineered fluorescent probes and near-infrared agents &mdash; the chemistry upstream of every clinical program on this page.
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
							The Cancer Vision Goggles and FDTI platforms &mdash; from wearable device engineering to first clinical use in the operating room.
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
					<p>Biotech, pharma, medtech, and clinical investigators &mdash; reach out to discuss licensing, sponsored research, or collaboration on active translational programs.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
