<?php
/**
 * Template for the Media page.
 * Matches slug: media  —  page ID 11.
 *
 * v2.2 — editorial density refresh: inline press stat strip, dense featured + tail press lists,
 *         speaking engagements stream, press-resources grid, awards & recognition list.
 */
defined( 'ABSPATH' ) || exit;

$url_contact = al_page_url( 'contact' );
$url_pi      = al_page_url( 'pi' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-heading">
		<div class="al-container">
			<p class="al-inner-hero__eyebrow">Media &amp; Press</p>
			<h1 class="al-inner-hero__title" id="media-heading">
				Light Meets Discovery.
			</h1>
			<p class="al-inner-hero__sub">
				News coverage, featured images, speaking engagements, and press resources for journalists covering the Achilefu Lab's work in optical and molecular imaging.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Inline stat strip ── -->
			<div class="al-pi-stats" style="grid-template-columns:repeat(4,1fr);">
				<div class="al-pi-stat">
					<span class="al-pi-stat__value">150+</span>
					<span class="al-pi-stat__label">Press mentions <!-- [PLACEHOLDER] --></span>
				</div>
				<div class="al-pi-stat">
					<span class="al-pi-stat__value">25+</span>
					<span class="al-pi-stat__label">Conferences / yr <!-- [PLACEHOLDER] --></span>
				</div>
				<div class="al-pi-stat">
					<span class="al-pi-stat__value">50+</span>
					<span class="al-pi-stat__label">Invited talks <!-- [PLACEHOLDER] --></span>
				</div>
				<div class="al-pi-stat">
					<span class="al-pi-stat__value">1,200+</span>
					<span class="al-pi-stat__label">Total citations in press <!-- [VERIFY] --></span>
				</div>
			</div>

			<hr class="al-divider">

			<!-- ── Row 2: Featured Images ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Featured Images</h2>
				<p class="al-inner-section__lead">
					High-resolution molecular imaging captures from the lab &mdash; available for editorial and educational use with attribution.
				</p>

				<div class="al-media-gallery">
					<!--
					  Add lab images here as they are collected from team members.
					  Format: <figure class="al-media-figure">
					             <img src="..." alt="..." loading="lazy">
					             <figcaption>Caption text</figcaption>
					           </figure>
					-->
					<div class="al-media-gallery__placeholder">
						<div class="al-media-gallery__placeholder-icon" aria-hidden="true">
							<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="4" y="8" width="40" height="32" rx="3"/>
								<circle cx="16" cy="20" r="4"/>
								<path d="M4 36l10-10 6 6 8-10 16 14"/>
							</svg>
						</div>
						<p>
							Molecular imaging photography from lab members is coming soon.<br>
							Contact <a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a>
							to share images for inclusion.
						</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: In the News — featured + dense tail ── -->
			<section class="al-inner-section" aria-labelledby="media-news-heading">
				<h2 class="al-inner-section__title" id="media-news-heading">In the News</h2>
				<p class="al-inner-section__lead">
					Selected press coverage and features on the Achilefu Lab's research and impact.
				</p>

				<div class="al-press-list">

					<article class="al-press-item">
						<div class="al-press-item__source">UT Southwestern Newsroom &middot; 2024</div>
						<h3 class="al-press-item__title">
							<a href="https://www.utsouthwestern.edu/newsroom/" target="_blank" rel="noopener">
								Dr. Achilefu Named Inaugural Chair of Biomedical Engineering at UTSW
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							UT Southwestern Medical Center announces Dr. Samuel Achilefu as the first Chair of the newly established Department of Biomedical Engineering, holder of the Lyda Hill Distinguished University Chair.
						</p>
					</article>

					<article class="al-press-item">
						<div class="al-press-item__source">National Academy of Medicine &middot; 2024</div>
						<h3 class="al-press-item__title">
							<a href="https://nam.edu/" target="_blank" rel="noopener">
								Dr. Samuel Achilefu Elected to the National Academy of Medicine
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							The NAM elects Dr. Achilefu for his pioneering work in optical molecular imaging, including the development of cancer-imaging goggles used in operating rooms worldwide.
						</p>
					</article>

					<article class="al-press-item">
						<div class="al-press-item__source">National Academy of Engineering &middot; 2018</div>
						<h3 class="al-press-item__title">
							<a href="https://www.nae.edu/" target="_blank" rel="noopener">
								Dr. Samuel Achilefu Elected to the National Academy of Engineering
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							Election to the NAE recognizes Dr. Achilefu's contributions to engineering biomedical optics and optical imaging systems for cancer detection and treatment.
						</p>
					</article>

				</div><!-- /.al-press-list -->
			</section>

			<!-- ── Row 4: More Coverage — dense list ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="media-more-coverage-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="media-more-coverage-heading">More Coverage</h2>
					<p class="al-inner-section__lead">
						Additional features, interviews, and mentions across science and general press. <!-- [PLACEHOLDER] full press archive pending verification with comms team. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Science press -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Science Press</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Spotlight on near-infrared imaging probes</p>
								<p class="al-latest__meta">Nature &middot; 2024 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Surgeons see cancer they used to miss</p>
								<p class="al-latest__meta">Science News &middot; 2023 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">JAMA news editorial on intraoperative imaging</p>
								<p class="al-latest__meta">JAMA &middot; 2022 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">The chemistry of seeing tumors in real time</p>
								<p class="al-latest__meta">C&amp;EN &middot; 2021 <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: General press -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">General Press</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Dallas-Fort Worth's biomedical engineering leap</p>
								<p class="al-latest__meta">D Magazine &middot; 2024 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">The Texan scientists rewiring cancer surgery</p>
								<p class="al-latest__meta">Texas Monthly &middot; 2023 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">St. Louis to Dallas: a biomedical inventor's next chapter</p>
								<p class="al-latest__meta">St. Louis Post-Dispatch &middot; 2022 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">UTSW launches biomedical engineering department</p>
								<p class="al-latest__meta">Dallas Morning News &middot; 2022 <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Radio, podcast & video -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Radio, Podcast &amp; Video</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Lighting up cancer: a conversation on optical imaging</p>
								<p class="al-latest__meta">NPR Science Friday &middot; 2023 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">The Story Collider &mdash; live science storytelling</p>
								<p class="al-latest__meta">Podcast &middot; 2022 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Innovators in medicine: cancer imaging goggles</p>
								<p class="al-latest__meta">PBS NewsHour &middot; 2019 <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">TEDx talk: making the invisible visible</p>
								<p class="al-latest__meta">TEDx St. Louis &middot; 2017 <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 5: Speaking Engagements ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="media-talks-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="media-talks-heading">Speaking Engagements</h2>
					<p class="al-inner-section__lead">
						Recent and upcoming named lectures, plenary talks, and conference keynotes by members of the lab. <!-- [PLACEHOLDER] schedule pending confirmation with PI's office. -->
					</p>
				</div>

				<div class="al-latest__grid" style="grid-template-columns:1fr 1fr;">

					<!-- Column 1: Recent -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Recent</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Plenary &mdash; "Seeing disease at the molecular level"</p>
								<p class="al-latest__meta">2025 &middot; SPIE Photonics West, San Francisco <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Keynote &mdash; Intraoperative fluorescence imaging</p>
								<p class="al-latest__meta">2024 &middot; World Molecular Imaging Congress <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Distinguished lecture &mdash; Chemistry of NIR probes</p>
								<p class="al-latest__meta">2024 &middot; Stanford School of Medicine <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Invited talk &mdash; Theranostic agents for oncology</p>
								<p class="al-latest__meta">2023 &middot; Gordon Research Conference, Bioanalytical Sensors <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Named lecture &mdash; Britton Chance Memorial</p>
								<p class="al-latest__meta">2023 &middot; University of Pennsylvania <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: Upcoming -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Upcoming</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Plenary &mdash; Image-guided surgery in the next decade</p>
								<p class="al-latest__meta">2026 &middot; AACR Annual Meeting <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Invited talk &mdash; Cherenkov imaging for radiotherapy</p>
								<p class="al-latest__meta">2026 &middot; ASTRO Annual Meeting <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Symposium chair &mdash; Molecular-Guided Surgery</p>
								<p class="al-latest__meta">2026 &middot; SPIE Photonics West <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Distinguished seminar series</p>
								<p class="al-latest__meta">2026 &middot; MD Anderson Cancer Center <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Keynote &mdash; UTSW BME Annual Symposium</p>
								<p class="al-latest__meta">2026 &middot; UT Southwestern Medical Center <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>

				<!-- Talks video gallery placeholder -->
				<div class="al-media-gallery" style="margin-top:2.5rem;">
					<div class="al-media-gallery__placeholder">
						<div class="al-media-gallery__placeholder-icon" aria-hidden="true">
							<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="4" y="8" width="40" height="28" rx="3"/>
								<polygon points="20,18 32,24 20,30" fill="currentColor" stroke="none" opacity="0.4"/>
								<line x1="16" y1="42" x2="32" y2="42"/>
							</svg>
						</div>
						<p>Video recordings and named-lecture links coming soon.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 6: Press Resources ── -->
			<section class="al-inner-section" aria-labelledby="media-resources-heading">
				<h2 class="al-inner-section__title" id="media-resources-heading">Press Resources</h2>
				<p class="al-inner-section__lead">
					Materials for journalists, editors, and conference organizers. For anything not listed, contact our communications team. <!-- [PLACEHOLDER] downloadable assets pending preparation. -->
				</p>

				<div class="al-feature-grid">

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="3" y="3" width="18" height="18" rx="2"/>
								<circle cx="8.5" cy="8.5" r="1.5"/>
								<path d="M21 15l-5-5L5 21"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Editorial Image Use</p>
						<p class="al-feature-card__desc">Lab images may be used in editorial and educational contexts with attribution to the Achilefu Lab, UT Southwestern Medical Center. Commercial use requires written permission. <!-- [PLACEHOLDER] confirm policy with UTSW comms. --></p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 15v4a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2v-4"/>
								<polyline points="7 10 12 15 17 10"/>
								<line x1="12" y1="15" x2="12" y2="3"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Press Kit Download</p>
						<p class="al-feature-card__desc">Comprehensive press kit with lab background, PI biography, current research summaries, and high-resolution figures &mdash; available on request. <!-- [PLACEHOLDER] PDF pending. --></p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M2 12h20M12 2a15.3 15.3 0 0 1 4 10 15.3 15.3 0 0 1-4 10 15.3 15.3 0 0 1-4-10 15.3 15.3 0 0 1 4-10z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Visual Identity</p>
						<p class="al-feature-card__desc">Lab logo, color palette, and approved usage guidelines for conference programs, posters, and editorial features. <!-- [PLACEHOLDER] brand pack pending. --></p>
					</div>

					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"/>
								<circle cx="12" cy="7" r="4"/>
							</svg>
						</div>
						<p class="al-feature-card__title">PI Portrait &amp; Bio</p>
						<p class="al-feature-card__desc">High-resolution portrait of Dr. Achilefu and short/long-form biographies in editorial-ready format. <a href="<?php echo $url_pi; ?>">See PI page</a> for full background. <!-- [PLACEHOLDER] portrait file pending. --></p>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 7: Awards &amp; Recognition ── -->
			<section class="al-inner-section" aria-labelledby="media-awards-heading">
				<h2 class="al-inner-section__title" id="media-awards-heading">Awards &amp; Recognition</h2>
				<p class="al-inner-section__lead">
					Honors and recognitions for the lab and PI from national academies, professional societies, and the broader research community.
				</p>
				<ul class="al-latest__list">
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Elected to the National Academy of Medicine</p>
						<p class="al-latest__meta">2024 &middot; National Academy of Medicine <!-- [VERIFY] year --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Elected to the National Academy of Engineering</p>
						<p class="al-latest__meta">2018 &middot; National Academy of Engineering <!-- [VERIFY] year --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Lyda Hill Distinguished University Chair</p>
						<p class="al-latest__meta">UT Southwestern Medical Center <!-- [VERIFY] year of appointment --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Britton Chance Biomedical Optics Award</p>
						<p class="al-latest__meta">2021 &middot; SPIE &mdash; International Society for Optics and Photonics <!-- [PLACEHOLDER] --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Fellow, American Institute for Medical and Biological Engineering (AIMBE)</p>
						<p class="al-latest__meta">2014 &middot; AIMBE College of Fellows <!-- [PLACEHOLDER] --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Fellow, Society for Molecular Imaging</p>
						<p class="al-latest__meta">2016 &middot; World Molecular Imaging Society <!-- [PLACEHOLDER] --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">NIH Director's Transformative Research Award</p>
						<p class="al-latest__meta">National Institutes of Health <!-- [PLACEHOLDER] --></p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Distinguished Investigator Award</p>
						<p class="al-latest__meta">Academy of Radiology Research <!-- [PLACEHOLDER] --></p>
					</li>
				</ul>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Press &amp; Media Inquiries</h3>
					<p>For interview requests, high-resolution image licensing, speaking-engagement enquiries, or editorial collaboration &mdash; reach our communications team.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Contact Us</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
