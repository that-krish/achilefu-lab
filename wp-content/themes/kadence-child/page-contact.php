<?php
/**
 * Template for the Contact page.
 * Matches slug: contact  —  page ID 12.
 */
defined( 'ABSPATH' ) || exit;
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
				Whether you're a prospective student, research collaborator, industry partner,
				or member of the press &mdash; we'd love to hear from you.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<div class="al-contact-layout">

				<!-- Left: form -->
				<div class="al-contact-form-col">
					<h2 class="al-inner-section__title">Send a Message</h2>
					<p class="al-prose" style="margin-bottom:2rem;">
						Use the form below to reach us directly. We respond to most inquiries within two business days.
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
								Contact form coming soon &mdash; please email us directly at
								<a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a>.
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
							5323 Harry Hines Blvd<br>
							Dallas, TX 75390
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
							Prospective graduate students and postdoctoral fellows: include your CV
							and a brief statement of research interests.
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
							For interview requests or media inquiries, contact Erin in lab communications at
							<a href="mailto:contact@achilefulab.org">contact@achilefulab.org</a>.
						</p>
					</div>

				</aside><!-- /.al-contact-details-col -->

			</div><!-- /.al-contact-layout -->

		</div><!-- .al-container -->
	</div><!-- .al-inner-body -->

</div><!-- .al-inner-page -->

<?php get_footer(); ?>
