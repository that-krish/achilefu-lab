<?php
/**
 * Template for the Media page.
 * Matches slug: media  —  page ID 11.
 *
 * v3.0 — visual showcase rewrite. Categorized image galleries (research imagery,
 *        lab life, conferences & events, operating room) with inline-SVG placeholder
 *        art in the brand palette. Press/awards content moved off this page; it lives
 *        on the home page's "Latest from the Lab" section.
 */
defined( 'ABSPATH' ) || exit;

$url_contact = al_page_url( 'contact' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="media-heading">
		<div class="al-container">
			<p class="al-inner-hero__eyebrow">Media &amp; Imagery</p>
			<h1 class="al-inner-hero__title" id="media-heading">
				Light, Captured.
			</h1>
			<p class="al-inner-hero__sub">
				A visual record of the Achilefu Lab &mdash; molecular imaging captures, microscopy, instrumentation, conferences, and the people who make the work happen.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Featured image ─────────────────────────────── -->
			<!-- [PLACEHOLDER] Featured molecular imaging capture; replace with hero photo when available. -->
			<figure class="al-media-figure al-media-figure--featured al-media-figure--full al-media-figure--overlay">
				<svg viewBox="0 0 1200 514" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder for featured molecular imaging capture">
					<defs>
						<radialGradient id="hl-glow1" cx="38%" cy="48%" r="46%">
							<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.95"/>
							<stop offset="35%" stop-color="#87BCDE" stop-opacity="0.55"/>
							<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
						</radialGradient>
						<radialGradient id="hl-glow1b" cx="72%" cy="62%" r="28%">
							<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.55"/>
							<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
						</radialGradient>
					</defs>
					<rect width="1200" height="514" fill="#1C3347"/>
					<rect width="1200" height="514" fill="url(#hl-glow1)"/>
					<rect width="1200" height="514" fill="url(#hl-glow1b)"/>
					<g fill="#F2F6F9">
						<circle cx="320" cy="180" r="3.2" opacity="0.95"/>
						<circle cx="410" cy="240" r="2.0" opacity="0.85"/>
						<circle cx="265" cy="295" r="2.6" opacity="0.9"/>
						<circle cx="510" cy="200" r="1.6" opacity="0.75"/>
						<circle cx="455" cy="350" r="2.2" opacity="0.85"/>
						<circle cx="380" cy="380" r="1.4" opacity="0.7"/>
						<circle cx="610" cy="305" r="2.8" opacity="0.9"/>
						<circle cx="720" cy="260" r="1.8" opacity="0.8"/>
						<circle cx="820" cy="330" r="2.4" opacity="0.85"/>
						<circle cx="900" cy="220" r="1.6" opacity="0.7"/>
						<circle cx="985" cy="370" r="2.0" opacity="0.8"/>
						<circle cx="180" cy="410" r="1.4" opacity="0.65"/>
						<circle cx="1050" cy="160" r="1.8" opacity="0.75"/>
					</g>
				</svg>
				<figcaption>
					<!-- [PLACEHOLDER] -->
					NIR-II fluorescence capture of a tumor margin, in&nbsp;vivo &middot; 2024
				</figcaption>
			</figure>

			<hr class="al-divider">

			<!-- ── Section: Research Imagery ──────────────────── -->
			<section class="al-inner-section" aria-labelledby="media-research-heading">
				<h2 class="al-inner-section__title" id="media-research-heading">Research Imagery</h2>
				<p class="al-inner-section__lead">
					Molecular images, NIR fluorescence captures, confocal and widefield microscopy, in&nbsp;vivo imaging, and instrumentation. The visual record of how the lab sees disease at the molecular level.
				</p>

				<!-- [PLACEHOLDER] All images in this gallery are placeholder SVG art until photographs are collected from team members. -->
				<div class="al-media-gallery">

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: NIR fluorescence whole-animal imaging">
							<defs>
								<radialGradient id="r-glow1" cx="40%" cy="55%" r="42%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.9"/>
									<stop offset="40%" stop-color="#87BCDE" stop-opacity="0.45"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="338" fill="#1C3347"/>
							<rect width="600" height="338" fill="url(#r-glow1)"/>
							<g fill="#F2F6F9">
								<circle cx="180" cy="160" r="2.4" opacity="0.9"/>
								<circle cx="220" cy="200" r="1.6" opacity="0.8"/>
								<circle cx="260" cy="180" r="2.0" opacity="0.85"/>
								<circle cx="305" cy="225" r="1.4" opacity="0.7"/>
								<circle cx="340" cy="155" r="2.2" opacity="0.88"/>
							</g>
						</svg>
						<figcaption>NIR-II whole-animal fluorescence imaging, LS301 probe &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: confocal microscopy">
							<defs>
								<radialGradient id="r-glow2" cx="50%" cy="50%" r="38%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.85"/>
									<stop offset="60%" stop-color="#87BCDE" stop-opacity="0.3"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#1C3347"/>
							<rect width="600" height="600" fill="url(#r-glow2)"/>
							<g fill="#F2F6F9">
								<circle cx="240" cy="260" r="2.2" opacity="0.9"/>
								<circle cx="290" cy="320" r="1.8" opacity="0.85"/>
								<circle cx="350" cy="280" r="2.6" opacity="0.95"/>
								<circle cx="320" cy="380" r="1.5" opacity="0.75"/>
								<circle cx="400" cy="350" r="2.0" opacity="0.85"/>
								<circle cx="260" cy="420" r="1.6" opacity="0.8"/>
							</g>
						</svg>
						<figcaption>Confocal microscopy &mdash; tumor-targeted probe uptake &middot; 2023 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: cherenkov imaging">
							<defs>
								<radialGradient id="r-glow3" cx="55%" cy="40%" r="40%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.9"/>
									<stop offset="50%" stop-color="#87BCDE" stop-opacity="0.35"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="450" height="600" fill="#243B4A"/>
							<rect width="450" height="600" fill="url(#r-glow3)"/>
							<g fill="#F2F6F9">
								<circle cx="200" cy="220" r="2.2" opacity="0.9"/>
								<circle cx="245" cy="260" r="1.6" opacity="0.8"/>
								<circle cx="285" cy="320" r="2.0" opacity="0.85"/>
								<circle cx="175" cy="380" r="1.4" opacity="0.7"/>
								<circle cx="320" cy="420" r="1.8" opacity="0.8"/>
							</g>
						</svg>
						<figcaption>Cherenkov luminescence imaging during radiotherapy &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: histology overlay">
							<defs>
								<radialGradient id="r-glow4" cx="30%" cy="35%" r="50%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.65"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
								<radialGradient id="r-glow4b" cx="75%" cy="70%" r="32%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.75"/>
									<stop offset="100%" stop-color="#B5DBF3" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#1C3347"/>
							<rect width="600" height="600" fill="url(#r-glow4)"/>
							<rect width="600" height="600" fill="url(#r-glow4b)"/>
							<g fill="#F2F6F9">
								<circle cx="190" cy="200" r="1.8" opacity="0.8"/>
								<circle cx="430" cy="430" r="2.2" opacity="0.9"/>
								<circle cx="450" cy="380" r="1.4" opacity="0.7"/>
								<circle cx="220" cy="170" r="1.2" opacity="0.65"/>
							</g>
						</svg>
						<figcaption>Multimodal histology overlay &mdash; fluorescence + brightfield &middot; 2023 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: probe synthesis">
							<defs>
								<radialGradient id="r-glow5" cx="50%" cy="50%" r="55%">
									<stop offset="0%"  stop-color="#243B4A" stop-opacity="0"/>
									<stop offset="55%" stop-color="#87BCDE" stop-opacity="0.18"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#1C3347"/>
							<rect width="600" height="600" fill="url(#r-glow5)"/>
							<g stroke="#87BCDE" stroke-width="1.4" fill="none" opacity="0.75">
								<path d="M180 300 L260 260 L340 300 L420 260"/>
								<path d="M260 260 L260 200"/>
								<path d="M340 300 L340 360"/>
							</g>
							<g fill="#B5DBF3" opacity="0.95">
								<circle cx="180" cy="300" r="6"/>
								<circle cx="260" cy="260" r="6"/>
								<circle cx="340" cy="300" r="6"/>
								<circle cx="420" cy="260" r="6"/>
								<circle cx="260" cy="200" r="6"/>
								<circle cx="340" cy="360" r="6"/>
							</g>
						</svg>
						<figcaption>NIR fluorophore &mdash; molecular structure rendering <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: imaging instrumentation">
							<defs>
								<linearGradient id="r-grad1" x1="0%" y1="0%" x2="100%" y2="100%">
									<stop offset="0%"  stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
								<radialGradient id="r-glow6" cx="50%" cy="55%" r="32%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.5"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="338" fill="url(#r-grad1)"/>
							<rect width="600" height="338" fill="url(#r-glow6)"/>
							<g stroke="#87BCDE" stroke-width="1.2" fill="none" opacity="0.6">
								<rect x="220" y="120" width="160" height="100" rx="4"/>
								<line x1="220" y1="170" x2="380" y2="170"/>
								<line x1="300" y1="120" x2="300" y2="220"/>
								<circle cx="300" cy="170" r="22"/>
							</g>
							<circle cx="300" cy="170" r="3" fill="#F2F6F9" opacity="0.95"/>
						</svg>
						<figcaption>Custom-built NIR imaging system &mdash; lab bay 4 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: in vivo capture">
							<defs>
								<radialGradient id="r-glow7" cx="50%" cy="55%" r="38%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.85"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="450" height="600" fill="#1C3347"/>
							<rect width="450" height="600" fill="url(#r-glow7)"/>
							<g fill="#F2F6F9">
								<circle cx="180" cy="280" r="2.0" opacity="0.85"/>
								<circle cx="225" cy="320" r="2.6" opacity="0.95"/>
								<circle cx="270" cy="290" r="1.6" opacity="0.8"/>
								<circle cx="250" cy="380" r="2.0" opacity="0.85"/>
							</g>
						</svg>
						<figcaption>In&nbsp;vivo tumor imaging &mdash; preclinical model &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: cell imaging">
							<defs>
								<radialGradient id="r-glow8" cx="45%" cy="45%" r="36%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.55"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#243B4A"/>
							<rect width="600" height="600" fill="url(#r-glow8)"/>
							<g fill="#B5DBF3">
								<circle cx="200" cy="220" r="14" opacity="0.7"/>
								<circle cx="330" cy="260" r="18" opacity="0.55"/>
								<circle cx="280" cy="370" r="12" opacity="0.75"/>
								<circle cx="410" cy="400" r="16" opacity="0.55"/>
								<circle cx="170" cy="380" r="10" opacity="0.7"/>
							</g>
						</svg>
						<figcaption>Targeted probe uptake &mdash; single-cell fluorescence <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--wide al-media-figure--full">
						<svg viewBox="0 0 1200 675" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: spectral imaging panel">
							<defs>
								<radialGradient id="r-glow9a" cx="20%" cy="50%" r="22%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.85"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
								<radialGradient id="r-glow9b" cx="50%" cy="50%" r="22%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.7"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
								<radialGradient id="r-glow9c" cx="82%" cy="50%" r="22%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.55"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="1200" height="675" fill="#1C3347"/>
							<rect width="1200" height="675" fill="url(#r-glow9a)"/>
							<rect width="1200" height="675" fill="url(#r-glow9b)"/>
							<rect width="1200" height="675" fill="url(#r-glow9c)"/>
							<g stroke="#87BCDE" stroke-width="1" opacity="0.4">
								<line x1="400" y1="80" x2="400" y2="595"/>
								<line x1="800" y1="80" x2="800" y2="595"/>
							</g>
							<g fill="#F2F6F9">
								<circle cx="240" cy="340" r="2.4" opacity="0.9"/>
								<circle cx="600" cy="340" r="2.4" opacity="0.9"/>
								<circle cx="960" cy="340" r="2.4" opacity="0.9"/>
							</g>
						</svg>
						<figcaption>Three-channel spectral panel &mdash; 700&nbsp;nm, 800&nbsp;nm, 900&nbsp;nm fluorescence &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Section: Lab Life ──────────────────────────── -->
			<section class="al-inner-section" aria-labelledby="media-life-heading">
				<h2 class="al-inner-section__title" id="media-life-heading">Lab Life</h2>
				<p class="al-inner-section__lead">
					The community behind the science &mdash; group photos, celebrations, milestones, lab dinners, graduation hoods, birthdays, and the everyday rhythm of a research team.
				</p>

				<!-- [PLACEHOLDER] All images in this gallery are placeholder SVG art until photographs are collected from team members. -->
				<div class="al-media-gallery">

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: group photo">
							<defs>
								<linearGradient id="lab1" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#2D4654"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="600" height="338" fill="url(#lab1)"/>
							<g fill="#87BCDE" opacity="0.65">
								<circle cx="100" cy="180" r="22"/>
								<circle cx="170" cy="170" r="24"/>
								<circle cx="245" cy="175" r="22"/>
								<circle cx="320" cy="170" r="24"/>
								<circle cx="395" cy="175" r="22"/>
								<circle cx="470" cy="170" r="24"/>
							</g>
							<g fill="#B5DBF3" opacity="0.4">
								<rect x="78"  y="210" width="44" height="80" rx="4"/>
								<rect x="148" y="200" width="44" height="90" rx="4"/>
								<rect x="223" y="205" width="44" height="85" rx="4"/>
								<rect x="298" y="200" width="44" height="90" rx="4"/>
								<rect x="373" y="205" width="44" height="85" rx="4"/>
								<rect x="448" y="200" width="44" height="90" rx="4"/>
							</g>
						</svg>
						<figcaption>Annual lab group photo &mdash; UTSW BME &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: lab dinner">
							<defs>
								<radialGradient id="lab2" cx="50%" cy="50%" r="50%">
									<stop offset="0%"  stop-color="#F2F6F9" stop-opacity="0.18"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#243B4A"/>
							<rect width="600" height="600" fill="url(#lab2)"/>
							<g fill="#B5DBF3" opacity="0.55">
								<circle cx="200" cy="220" r="36"/>
								<circle cx="380" cy="220" r="36"/>
								<circle cx="290" cy="380" r="38"/>
							</g>
							<g fill="#87BCDE" opacity="0.35">
								<rect x="160" y="260" width="80" height="120" rx="6"/>
								<rect x="340" y="260" width="80" height="120" rx="6"/>
								<rect x="250" y="420" width="80" height="120" rx="6"/>
							</g>
						</svg>
						<figcaption>End-of-year lab dinner &middot; 2023 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: graduation hooding">
							<defs>
								<linearGradient id="lab3" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="450" height="600" fill="url(#lab3)"/>
							<g fill="#87BCDE" opacity="0.55">
								<circle cx="225" cy="220" r="50"/>
							</g>
							<path d="M150 280 Q225 250 300 280 L300 480 L150 480 Z" fill="#B5DBF3" opacity="0.4"/>
							<path d="M175 270 Q225 240 275 270 L275 200 Q225 180 175 200 Z" fill="#1C3347"/>
						</svg>
						<figcaption>PhD graduation hooding ceremony &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: birthday">
							<defs>
								<radialGradient id="lab4" cx="50%" cy="60%" r="40%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.45"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#243B4A"/>
							<rect width="600" height="600" fill="url(#lab4)"/>
							<rect x="200" y="320" width="200" height="140" rx="6" fill="#F2F6F9" opacity="0.85"/>
							<rect x="240" y="280" width="120" height="40" rx="4" fill="#87BCDE" opacity="0.75"/>
							<g stroke="#B5DBF3" stroke-width="3" opacity="0.85">
								<line x1="260" y1="220" x2="260" y2="280"/>
								<line x1="300" y1="220" x2="300" y2="280"/>
								<line x1="340" y1="220" x2="340" y2="280"/>
							</g>
							<g fill="#B5DBF3">
								<circle cx="260" cy="210" r="5"/>
								<circle cx="300" cy="210" r="5"/>
								<circle cx="340" cy="210" r="5"/>
							</g>
						</svg>
						<figcaption>Birthday in the lab &mdash; another decade of imaging <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: lab outing">
							<defs>
								<linearGradient id="lab5" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.3"/>
									<stop offset="60%" stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="600" height="338" fill="url(#lab5)"/>
							<g fill="#87BCDE" opacity="0.5">
								<circle cx="140" cy="190" r="18"/>
								<circle cx="200" cy="185" r="20"/>
								<circle cx="260" cy="190" r="18"/>
								<circle cx="320" cy="185" r="20"/>
								<circle cx="380" cy="190" r="18"/>
								<circle cx="440" cy="185" r="20"/>
							</g>
							<rect x="0" y="280" width="600" height="58" fill="#1C3347" opacity="0.7"/>
						</svg>
						<figcaption>Lab retreat &mdash; outside Dallas &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: new member welcome">
							<defs>
								<radialGradient id="lab6" cx="50%" cy="40%" r="45%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.5"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="450" height="600" fill="#243B4A"/>
							<rect width="450" height="600" fill="url(#lab6)"/>
							<g fill="#87BCDE" opacity="0.65">
								<circle cx="160" cy="240" r="30"/>
								<circle cx="290" cy="240" r="30"/>
							</g>
							<g fill="#B5DBF3" opacity="0.4">
								<rect x="125" y="280" width="70" height="120" rx="6"/>
								<rect x="255" y="280" width="70" height="120" rx="6"/>
							</g>
						</svg>
						<figcaption>Welcoming new postdocs &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: holiday party">
							<defs>
								<radialGradient id="lab7" cx="45%" cy="45%" r="48%">
									<stop offset="0%"  stop-color="#F2F6F9" stop-opacity="0.12"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="#1C3347"/>
							<rect width="600" height="600" fill="url(#lab7)"/>
							<g fill="#B5DBF3">
								<circle cx="120" cy="200" r="3" opacity="0.9"/>
								<circle cx="180" cy="180" r="2" opacity="0.7"/>
								<circle cx="250" cy="220" r="3" opacity="0.85"/>
								<circle cx="320" cy="190" r="2" opacity="0.75"/>
								<circle cx="400" cy="210" r="3" opacity="0.9"/>
								<circle cx="470" cy="180" r="2" opacity="0.7"/>
							</g>
							<g fill="#87BCDE" opacity="0.55">
								<circle cx="180" cy="380" r="28"/>
								<circle cx="300" cy="380" r="28"/>
								<circle cx="420" cy="380" r="28"/>
							</g>
						</svg>
						<figcaption>Holiday party &mdash; lab + collaborators &middot; 2023 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--wide">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: whiteboard moment">
							<defs>
								<linearGradient id="lab8" x1="0%" y1="0%" x2="100%" y2="0%">
									<stop offset="0%"  stop-color="#1C3347"/>
									<stop offset="100%" stop-color="#243B4A"/>
								</linearGradient>
							</defs>
							<rect width="600" height="338" fill="url(#lab8)"/>
							<rect x="120" y="80" width="360" height="180" rx="4" fill="#F2F6F9" opacity="0.92"/>
							<g stroke="#1C3347" stroke-width="1.6" fill="none" opacity="0.7">
								<line x1="150" y1="120" x2="280" y2="120"/>
								<line x1="150" y1="150" x2="240" y2="150"/>
								<line x1="150" y1="180" x2="300" y2="180"/>
								<line x1="320" y1="120" x2="450" y2="120"/>
								<line x1="320" y1="150" x2="430" y2="150"/>
								<circle cx="400" cy="200" r="18"/>
							</g>
						</svg>
						<figcaption>Whiteboard moment &mdash; weekly group meeting <!-- [PLACEHOLDER] --></figcaption>
					</figure>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Section: Conferences & Events ──────────────── -->
			<section class="al-inner-section" aria-labelledby="media-conf-heading">
				<h2 class="al-inner-section__title" id="media-conf-heading">Conferences &amp; Events</h2>
				<p class="al-inner-section__lead">
					Lab members presenting at SPIE Photonics West, BMES, the World Molecular Imaging Congress, and other venues where the field gathers.
				</p>

				<!-- [PLACEHOLDER] All images in this gallery are placeholder SVG art until photographs are collected from team members. -->
				<div class="al-media-gallery">

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: keynote talk">
							<defs>
								<linearGradient id="conf1" x1="0%" y1="0%" x2="100%" y2="0%">
									<stop offset="0%"  stop-color="#1C3347"/>
									<stop offset="50%" stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="600" height="338" fill="url(#conf1)"/>
							<rect x="80" y="60" width="440" height="180" fill="#F2F6F9" opacity="0.9"/>
							<g fill="#1C3347" opacity="0.5">
								<rect x="110" y="90" width="200" height="14"/>
								<rect x="110" y="120" width="280" height="8"/>
								<rect x="110" y="140" width="260" height="8"/>
								<rect x="110" y="170" width="220" height="8"/>
								<rect x="110" y="190" width="180" height="8"/>
							</g>
							<rect x="250" y="270" width="100" height="50" rx="4" fill="#87BCDE" opacity="0.65"/>
						</svg>
						<figcaption>Plenary &mdash; SPIE Photonics West, San Francisco &middot; 2025 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: poster session">
							<defs>
								<linearGradient id="conf2" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="450" height="600" fill="url(#conf2)"/>
							<rect x="80" y="80" width="290" height="380" fill="#F2F6F9" opacity="0.93"/>
							<g fill="#1C3347" opacity="0.6">
								<rect x="100" y="105" width="160" height="18"/>
								<rect x="100" y="140" width="240" height="6"/>
								<rect x="100" y="155" width="220" height="6"/>
								<rect x="100" y="180" width="100" height="80"/>
								<rect x="220" y="180" width="120" height="80"/>
								<rect x="100" y="280" width="240" height="6"/>
								<rect x="100" y="295" width="220" height="6"/>
								<rect x="100" y="320" width="240" height="120" fill="#87BCDE" opacity="0.4"/>
							</g>
						</svg>
						<figcaption>Poster session &mdash; BMES Annual Meeting &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: panel discussion">
							<defs>
								<radialGradient id="conf3" cx="50%" cy="40%" r="50%">
									<stop offset="0%"  stop-color="#87BCDE" stop-opacity="0.3"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="url(#conf3)"/>
							<g fill="#B5DBF3" opacity="0.55">
								<circle cx="130" cy="280" r="34"/>
								<circle cx="250" cy="275" r="34"/>
								<circle cx="370" cy="275" r="34"/>
								<circle cx="490" cy="280" r="34"/>
							</g>
							<rect x="0" y="380" width="600" height="220" fill="#1C3347" opacity="0.55"/>
							<g fill="#F2F6F9" opacity="0.4">
								<rect x="100" y="410" width="80" height="100" rx="4"/>
								<rect x="220" y="410" width="80" height="100" rx="4"/>
								<rect x="340" y="410" width="80" height="100" rx="4"/>
								<rect x="460" y="410" width="80" height="100" rx="4"/>
							</g>
						</svg>
						<figcaption>Symposium panel &mdash; molecular-guided surgery &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: conference travel">
							<defs>
								<linearGradient id="conf4" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.18"/>
									<stop offset="60%" stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
							</defs>
							<rect width="600" height="600" fill="url(#conf4)"/>
							<g fill="#1C3347" opacity="0.9">
								<rect x="0" y="380" width="600" height="220"/>
							</g>
							<g fill="#243B4A" opacity="0.95">
								<rect x="80"  y="260" width="60" height="180"/>
								<rect x="160" y="220" width="80" height="220"/>
								<rect x="260" y="280" width="60" height="160"/>
								<rect x="340" y="200" width="90" height="240"/>
								<rect x="450" y="260" width="60" height="180"/>
							</g>
							<g fill="#87BCDE" opacity="0.55">
								<rect x="92"  y="290" width="14" height="14"/>
								<rect x="180" y="250" width="14" height="14"/>
								<rect x="270" y="310" width="14" height="14"/>
								<rect x="360" y="230" width="14" height="14"/>
								<rect x="465" y="290" width="14" height="14"/>
							</g>
						</svg>
						<figcaption>Conference travel &mdash; San Francisco skyline &middot; 2025 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--wide al-media-figure--full">
						<svg viewBox="0 0 1200 675" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: award ceremony">
							<defs>
								<radialGradient id="conf5" cx="50%" cy="50%" r="40%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.45"/>
									<stop offset="100%" stop-color="#1C3347" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="1200" height="675" fill="#1C3347"/>
							<rect width="1200" height="675" fill="url(#conf5)"/>
							<rect x="200" y="180" width="800" height="320" fill="#243B4A" opacity="0.85"/>
							<rect x="540" y="160" width="120" height="40" fill="#87BCDE" opacity="0.65"/>
							<rect x="500" y="220" width="200" height="240" fill="#F2F6F9" opacity="0.92"/>
							<g fill="#1C3347" opacity="0.5">
								<rect x="520" y="240" width="160" height="12"/>
								<rect x="520" y="270" width="140" height="8"/>
								<rect x="520" y="290" width="150" height="8"/>
								<rect x="520" y="310" width="130" height="8"/>
								<rect x="520" y="370" width="160" height="60" fill="#87BCDE" opacity="0.6"/>
							</g>
						</svg>
						<figcaption>Awards reception &mdash; World Molecular Imaging Congress &middot; 2024 <!-- [PLACEHOLDER] --></figcaption>
					</figure>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Section: In the Operating Room ─────────────── -->
			<section class="al-inner-section" aria-labelledby="media-or-heading">
				<h2 class="al-inner-section__title" id="media-or-heading">In the Operating Room</h2>
				<p class="al-inner-section__lead">
					Translational moments &mdash; equipment, instrumentation, and surgical-suite environments where the lab's imaging technologies move from bench to bedside. No patient-identifying imagery.
				</p>

				<!-- [PLACEHOLDER] All images in this gallery are placeholder SVG art until photographs are collected. All clinical imagery omits patient-identifying content per HIPAA. -->
				<div class="al-media-gallery">

					<figure class="al-media-figure al-media-figure--wide al-media-figure--span-2">
						<svg viewBox="0 0 600 338" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: surgical suite">
							<defs>
								<radialGradient id="or1" cx="50%" cy="45%" r="35%">
									<stop offset="0%"  stop-color="#F2F6F9" stop-opacity="0.55"/>
									<stop offset="60%" stop-color="#87BCDE" stop-opacity="0.18"/>
									<stop offset="100%" stop-color="#1C3347" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="338" fill="#1C3347"/>
							<rect width="600" height="338" fill="url(#or1)"/>
							<g stroke="#87BCDE" stroke-width="1.2" fill="none" opacity="0.5">
								<rect x="220" y="140" width="160" height="100" rx="6"/>
								<circle cx="300" cy="190" r="32"/>
								<line x1="300" y1="60" x2="300" y2="140"/>
							</g>
							<circle cx="300" cy="190" r="4" fill="#F2F6F9" opacity="0.95"/>
						</svg>
						<figcaption>Cancer-imaging goggles &mdash; intraoperative configuration <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: instrumentation">
							<defs>
								<linearGradient id="or2" x1="0%" y1="0%" x2="100%" y2="100%">
									<stop offset="0%"  stop-color="#243B4A"/>
									<stop offset="100%" stop-color="#1C3347"/>
								</linearGradient>
								<radialGradient id="or2b" cx="50%" cy="50%" r="30%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.4"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="url(#or2)"/>
							<rect width="600" height="600" fill="url(#or2b)"/>
							<g stroke="#87BCDE" stroke-width="1.4" fill="none" opacity="0.65">
								<rect x="180" y="200" width="240" height="160" rx="8"/>
								<rect x="220" y="240" width="160" height="80" rx="4"/>
								<line x1="300" y1="360" x2="300" y2="440"/>
								<rect x="260" y="440" width="80" height="20" rx="3"/>
							</g>
						</svg>
						<figcaption>NIR imaging system &mdash; OR-ready unit <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--portrait">
						<svg viewBox="0 0 450 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: surgical light">
							<defs>
								<radialGradient id="or3" cx="50%" cy="30%" r="35%">
									<stop offset="0%"  stop-color="#F2F6F9" stop-opacity="0.7"/>
									<stop offset="60%" stop-color="#87BCDE" stop-opacity="0.2"/>
									<stop offset="100%" stop-color="#1C3347" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="450" height="600" fill="#1C3347"/>
							<rect width="450" height="600" fill="url(#or3)"/>
							<g stroke="#87BCDE" stroke-width="1.4" fill="none" opacity="0.55">
								<circle cx="225" cy="180" r="60"/>
								<line x1="225" y1="240" x2="225" y2="380"/>
								<rect x="170" y="380" width="110" height="40" rx="4"/>
							</g>
						</svg>
						<figcaption>Surgical illumination &mdash; NIR + visible spectrum <!-- [PLACEHOLDER] --></figcaption>
					</figure>

					<figure class="al-media-figure al-media-figure--square">
						<svg viewBox="0 0 600 600" preserveAspectRatio="xMidYMid slice" role="img" aria-label="Placeholder: imaging display">
							<defs>
								<linearGradient id="or4" x1="0%" y1="0%" x2="0%" y2="100%">
									<stop offset="0%"  stop-color="#1C3347"/>
									<stop offset="100%" stop-color="#243B4A"/>
								</linearGradient>
								<radialGradient id="or4b" cx="50%" cy="45%" r="22%">
									<stop offset="0%"  stop-color="#B5DBF3" stop-opacity="0.75"/>
									<stop offset="100%" stop-color="#87BCDE" stop-opacity="0"/>
								</radialGradient>
							</defs>
							<rect width="600" height="600" fill="url(#or4)"/>
							<rect x="100" y="120" width="400" height="280" rx="8" fill="#1C3347"/>
							<rect x="100" y="120" width="400" height="280" rx="8" fill="url(#or4b)"/>
							<rect x="100" y="120" width="400" height="280" rx="8" fill="none" stroke="#87BCDE" stroke-width="1.2" opacity="0.6"/>
							<rect x="280" y="420" width="40" height="60" fill="#243B4A"/>
							<rect x="230" y="475" width="140" height="10" rx="3" fill="#243B4A"/>
							<g fill="#F2F6F9">
								<circle cx="280" cy="240" r="2.4" opacity="0.9"/>
								<circle cx="320" cy="270" r="1.6" opacity="0.75"/>
								<circle cx="260" cy="290" r="2.0" opacity="0.85"/>
							</g>
						</svg>
						<figcaption>Intraoperative imaging display &mdash; real-time fluorescence overlay <!-- [PLACEHOLDER] --></figcaption>
					</figure>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Image Use & Licensing ──────────────────────── -->
			<section class="al-inner-section" aria-labelledby="media-licensing-heading">
				<h2 class="al-inner-section__title" id="media-licensing-heading">Image Use &amp; Licensing</h2>

				<div class="al-two-col al-two-col--60-40">
					<div class="al-prose">
						<p>
							Imagery on this page is provided for editorial and educational use. Please credit <strong>Achilefu Lab, UT Southwestern Medical Center</strong> and link back to <em>achilefulab.org</em> where possible.
						</p>
						<p>
							For high-resolution files, alternate framings, or use in print/broadcast features, contact the lab directly. We can typically provide TIFF or print-ready files within a few business days. <!-- [PLACEHOLDER] confirm turnaround with UTSW comms. -->
						</p>
						<p>
							Commercial use, redistribution, or modification of images requires written permission. Clinical and operating-room imagery omits patient-identifying content; any further clinical context must be cleared through UTSW communications.
						</p>
					</div>

					<div class="al-prose">
						<p><strong>Quick reference</strong></p>
						<p>
							Credit line: <em>"Achilefu Lab, UT Southwestern Medical Center."</em>
						</p>
						<p>
							High-res requests: <a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a> <!-- [PLACEHOLDER] confirm address -->
						</p>
						<p>
							Press &amp; comms: route through UTSW Newsroom for institutional approval on broadcast features.
						</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ────────────────────────────────────────── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Submit a Photo or Request an Image</h3>
					<p>Lab members &mdash; send us photos from the bench, the OR, conferences, or lab life and we'll add them to the gallery. Press &mdash; reach out for high-resolution files and licensing.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
