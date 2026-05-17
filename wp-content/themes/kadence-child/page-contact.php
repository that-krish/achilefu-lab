<?php
/**
 * Template for the Contact page.
 * Matches slug: contact  —  page ID 12.
 *
 * v2.2 — editorial density refresh: tightened hero + form intro,
 *         added FAQ-style "How we route inquiries" stream, address /
 *         visitor-info section, and academic-profile links row.
 */
defined( 'ABSPATH' ) || exit;

$url_team         = al_page_url( 'team' );
$url_pi           = al_page_url( 'pi' );
$url_publications = al_page_url( 'publications' );
$url_join         = al_page_url( 'join-us' );

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="contact-heading">
		<div class="al-container">
			<p class="al-inner-hero__eyebrow">Contact</p>
			<h1 class="al-inner-hero__title" id="contact-heading">
				Connect With the Lab
			</h1>
			<p class="al-inner-hero__sub">
				Collaborators, prospective trainees, industry partners, and press &mdash; the right routing details are below.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: form + sticky details ── -->
			<div class="al-contact-layout">

				<!-- Left: form -->
				<div class="al-contact-form-col">
					<h2 class="al-inner-section__title">Send a Message</h2>
					<p class="al-prose" style="margin-bottom:1.75rem;">
						Most inquiries receive a reply within two business days. For routing details, see the panel at right.
					</p>

					<?php
					/*
					 * WPForms: replace the shortcode ID below with the real form ID once
					 * the Contact form is created in WPForms → All Forms.
					 * Example: [wpforms id="123"]
					 * Remove the placeholder div once the shortcode is active.
					 */
					if ( shortcode_exists( 'wpforms' ) ) :
						// Uncomment and set the correct ID when the form is ready:
						// echo do_shortcode( '[wpforms id="YOUR_FORM_ID"]' );
					endif;
					?>

					<!-- Contact form placeholder — replace with WPForms shortcode above -->
					<div class="al-contact-placeholder">
						<form class="al-contact-form" aria-label="Contact form placeholder">
							<div class="al-field-row">
								<div class="al-field">
									<label for="cf-name">Full Name</label>
									<input type="text" id="cf-name" placeholder="Dr. Jane Smith" disabled>
								</div>
								<div class="al-field">
									<label for="cf-email">Email Address</label>
									<input type="email" id="cf-email" placeholder="jane@institution.edu" disabled>
								</div>
							</div>
							<div class="al-field">
								<label for="cf-subject">Subject</label>
								<input type="text" id="cf-subject" placeholder="e.g. Research collaboration inquiry" disabled>
							</div>
							<div class="al-field">
								<label for="cf-msg">Message</label>
								<textarea id="cf-msg" rows="6" placeholder="Tell us about yourself and how we can help…" disabled></textarea>
							</div>
							<p class="al-contact-placeholder__note">
								Contact form coming soon &mdash; email
								<a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a> in the meantime.
							</p>
						</form>
					</div>
				</div><!-- /.al-contact-form-col -->

				<!-- Right: details -->
				<aside class="al-contact-details-col">

					<div class="al-contact-detail-card">
						<div class="al-contact-detail-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
								<polyline points="22,6 12,13 2,6"/>
							</svg>
						</div>
						<h3 class="al-contact-detail-card__label">General Inquiries</h3>
						<a href="mailto:contact@achilefulab.org" class="al-contact-detail-card__value">
							contact@achilefulab.org
						</a>
					</div>

					<div class="al-contact-detail-card">
						<div class="al-contact-detail-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0 1 18 0z"/>
								<circle cx="12" cy="10" r="3"/>
							</svg>
						</div>
						<h3 class="al-contact-detail-card__label">Lab Location</h3>
						<address class="al-contact-detail-card__value">
							UT Southwestern Medical Center<br>
							5323 Harry Hines Blvd, Dallas, TX 75390
						</address>
					</div>

					<div class="al-contact-detail-card">
						<div class="al-contact-detail-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/>
								<circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87"/>
								<path d="M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<h3 class="al-contact-detail-card__label">Joining the Lab</h3>
						<p class="al-contact-detail-card__value">
							Prospective students &amp; postdocs: include CV and a brief research-interest statement.
						</p>
					</div>

					<div class="al-contact-detail-card">
						<div class="al-contact-detail-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<rect x="2" y="3" width="20" height="14" rx="2" ry="2"/>
								<line x1="8" y1="21" x2="16" y2="21"/>
								<line x1="12" y1="17" x2="12" y2="21"/>
							</svg>
						</div>
						<h3 class="al-contact-detail-card__label">Press &amp; Media</h3>
						<p class="al-contact-detail-card__value">
							Interview requests: Erin in lab comms &mdash;
							<a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a>.
						</p>
					</div>

				</aside><!-- /.al-contact-details-col -->

			</div><!-- /.al-contact-layout -->

			<hr class="al-divider">

			<!-- ── Row 2: How we route inquiries (3-col list grid) ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="contact-routing-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="contact-routing-heading">How We Route Inquiries</h2>
					<p class="al-inner-section__lead">
						A quick guide to who handles what, and what to include so we can respond efficiently. <!-- [PLACEHOLDER] routing details and response windows pending confirmation with lab admin. -->
					</p>
				</div>

				<div class="al-latest__grid">

					<!-- Column 1: Research & training -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Research &amp; Training</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Research collaboration inquiries</p>
								<p class="al-latest__meta">Routed to PI &middot; typical response 2&ndash;3 business days <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Prospective graduate students</p>
								<p class="al-latest__meta">Include CV + research interests &middot; routed to lab admin <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Postdoctoral fellowships</p>
								<p class="al-latest__meta">CV, two references, statement of interest &middot; routed to PI <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Visiting scholars &amp; sabbaticals</p>
								<p class="al-latest__meta">Routed to PI &middot; subject to UTSW visa &amp; appointment policy <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 2: External & industry -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">External &amp; Industry</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Industry partnerships &amp; licensing</p>
								<p class="al-latest__meta">Routed to UTSW Office for Technology Development <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Sponsored research &amp; contracts</p>
								<p class="al-latest__meta">Routed to UTSW Sponsored Programs &middot; copy lab admin <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Speaking &amp; conference invitations</p>
								<p class="al-latest__meta">Routed to PI's office &middot; advance notice appreciated <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Vendor &amp; reagent solicitations</p>
								<p class="al-latest__meta">Email only &middot; no on-site drop-ins <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

					<!-- Column 3: Press & public -->
					<div class="al-latest__col">
						<p class="al-latest__col-heading">Press &amp; Public</p>
						<ul class="al-latest__list">
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Press &amp; media inquiries</p>
								<p class="al-latest__meta">Handled by Erin in lab communications <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Patient inquiries</p>
								<p class="al-latest__meta">Directed to UTSW clinical care teams &middot; the lab does not provide direct patient care <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Image &amp; figure reuse permissions</p>
								<p class="al-latest__meta">Email contact@achilefulab.org with citation context <!-- [PLACEHOLDER] --></p>
							</li>
							<li class="al-latest__item al-latest__item--static">
								<p class="al-latest__title">Outreach &amp; community events</p>
								<p class="al-latest__meta">Routed to lab comms &middot; response within one week <!-- [PLACEHOLDER] --></p>
							</li>
						</ul>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Visiting the lab — address + practical notes ── -->
			<section class="al-inner-section" aria-labelledby="contact-visit-heading">
				<div class="al-two-col al-two-col--40-60">

					<aside>
						<p class="al-inner-hero__eyebrow" style="margin-bottom:0.75rem;">Visit</p>
						<h2 class="al-inner-section__title" id="contact-visit-heading" style="margin-bottom:1rem;">Finding the Lab</h2>
						<address class="al-prose" style="font-style:normal;">
							<strong style="color:var(--al-text);">Achilefu Lab</strong><br>
							Department of Biomedical Engineering<br>
							UT Southwestern Medical Center<br>
							5323 Harry Hines Blvd<br>
							Dallas, TX 75390<br>
							<!-- [PLACEHOLDER] suite / building / floor number -->
							Building &amp; suite: TBD
						</address>
					</aside>

					<div>
						<div class="al-prose">
							<p>
								The lab is located on the UT Southwestern Medical Center campus in Dallas. Most visitors enter through the South Campus parking structures; visitor parking is available adjacent to the main hospital entrance, with directions provided after appointments are confirmed. <!-- [PLACEHOLDER] confirm preferred visitor garage with PI's office. -->
							</p>
							<p>
								Please coordinate visits in advance with the PI's office or lab admin &mdash; campus access is badge-controlled and most lab spaces require an escort. Site visits for collaborators, prospective trainees, and industry partners are welcomed by appointment.
							</p>
							<p>
								<strong style="color:var(--al-text);">A note on scope:</strong> the Achilefu Lab is a research laboratory within UT Southwestern's Department of Biomedical Engineering. We do not operate a clinic, see patients, or provide medical advice. Patient inquiries and care coordination should be directed to UTSW clinical services.
							</p>
						</div>
					</div>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Connect on (academic profiles) ── -->
			<section class="al-inner-section" aria-labelledby="contact-connect-heading">
				<h2 class="al-inner-section__title" id="contact-connect-heading">Connect on Academic Profiles</h2>
				<p class="al-inner-section__lead">
					Follow Dr. Achilefu's publications, citations, and the lab's public work across the channels below. <!-- [PLACEHOLDER] confirm URLs with PI's office before launch. -->
				</p>

				<div class="al-pi-badges" style="margin-top:1.25rem;">
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->Google Scholar</a>
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->ORCID</a>
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->PubMed</a>
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->ResearchGate</a>
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->LinkedIn</a>
					<a href="#" class="al-badge"><!-- [PLACEHOLDER URL] -->Lab X / Twitter</a>
					<a href="<?php echo $url_pi; ?>" class="al-badge">PI Profile</a>
					<a href="<?php echo $url_publications; ?>" class="al-badge">Publications</a>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Interested in joining the lab?</h3>
					<p>Open positions, application materials, and trainee pathways are listed on the Join Us page.</p>
				</div>
				<a href="<?php echo $url_join; ?>" class="al-inner-cta__btn">See Open Positions</a>
			</div>

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
