<?php
/**
 * Template for the Media page.
 * Matches slug: media  —  page ID 11.
 */
defined( 'ABSPATH' ) || exit;
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
				News coverage, featured images from the lab, and press resources for journalists
				covering the Achilefu Lab's work in optical imaging and biomedical engineering.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- Featured images -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Featured Images</h2>
				<p class="al-inner-section__lead">
					High-resolution molecular imaging captures from the lab &mdash; available for
					editorial and educational use with attribution.
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

			<!-- News & press coverage -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">In the News</h2>
				<p class="al-inner-section__lead">
					Selected press coverage and features on the Achilefu Lab's research and impact.
				</p>

				<div class="al-press-list">

					<!-- Each press item: add real entries below as they are identified -->

					<article class="al-press-item">
						<div class="al-press-item__source">UT Southwestern Newsroom</div>
						<h3 class="al-press-item__title">
							<a href="https://www.utsouthwestern.edu/newsroom/" target="_blank" rel="noopener">
								Dr. Achilefu Named Inaugural Chair of Biomedical Engineering at UTSW
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							UT Southwestern Medical Center announces Dr. Samuel Achilefu as the first Chair
							of the newly established Department of Biomedical Engineering, holder of the
							Lyda Hill Distinguished University Chair.
						</p>
					</article>

					<article class="al-press-item">
						<div class="al-press-item__source">National Academy of Engineering</div>
						<h3 class="al-press-item__title">
							<a href="https://www.nae.edu/" target="_blank" rel="noopener">
								Dr. Samuel Achilefu Elected to the National Academy of Engineering
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							Election to the NAE recognizes Dr. Achilefu's contributions to engineering
							biomedical optics and optical imaging systems for cancer detection and treatment.
						</p>
					</article>

					<article class="al-press-item">
						<div class="al-press-item__source">National Academy of Medicine</div>
						<h3 class="al-press-item__title">
							<a href="https://nam.edu/" target="_blank" rel="noopener">
								Dr. Samuel Achilefu Elected to the National Academy of Medicine
							</a>
						</h3>
						<p class="al-press-item__excerpt">
							The NAM elects Dr. Achilefu for his pioneering work in optical molecular imaging,
							including the development of cancer-imaging goggles used in operating rooms worldwide.
						</p>
					</article>

					<!--
					  Add more press items as they are gathered.
					  Format:
					  <article class="al-press-item">
					    <div class="al-press-item__source">Outlet Name · Month YYYY</div>
					    <h3 class="al-press-item__title">
					      <a href="URL" target="_blank" rel="noopener">Headline</a>
					    </h3>
					    <p class="al-press-item__excerpt">Short description…</p>
					  </article>
					-->

				</div><!-- /.al-press-list -->
			</section>

			<hr class="al-divider">

			<!-- Video / talks -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Talks &amp; Lectures</h2>
				<p class="al-inner-section__lead">
					Conference presentations, named lectures, and public talks by members of the Achilefu Lab.
				</p>

				<div class="al-media-gallery__placeholder">
					<div class="al-media-gallery__placeholder-icon" aria-hidden="true">
						<svg viewBox="0 0 48 48" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
							<rect x="4" y="8" width="40" height="28" rx="3"/>
							<polygon points="20,18 32,24 20,30" fill="currentColor" stroke="none" opacity="0.4"/>
							<line x1="16" y1="42" x2="32" y2="42"/>
						</svg>
					</div>
					<p>Video recordings and lecture links coming soon.</p>
				</div>
			</section>

			<!-- CTA -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Press &amp; Media Inquiries</h3>
					<p>For interview requests, high-resolution image licensing, or editorial inquiries, reach our communications team.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Contact Us</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
