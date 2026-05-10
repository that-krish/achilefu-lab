<?php
/**
 * Template for the Lab Calendar page.
 * Matches slug: lab-calendar  —  page ID 24.
 *
 * To embed a Google Calendar replace the placeholder below with:
 *   <iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&..." ...></iframe>
 * Then remove the .al-calendar-frame placeholder div.
 */
defined( 'ABSPATH' ) || exit;
get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="cal-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Lab Calendar</span>
			</nav>
			<p class="al-inner-hero__eyebrow">Updates</p>
			<h1 class="al-inner-hero__title" id="cal-heading">Lab Calendar</h1>
			<p class="al-inner-hero__sub">
				Lab meetings, journal clubs, seminars, and public events from the Achilefu Lab at UT Southwestern.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- Calendar embed area -->
			<section class="al-inner-section">

				<!-- ── SWAP THIS BLOCK with an <iframe> once the Google Calendar is set up ── -->
				<div class="al-calendar-frame" role="img" aria-label="Calendar coming soon">
					<div class="al-calendar-frame__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="4" width="18" height="18" rx="2"/>
							<line x1="16" y1="2" x2="16" y2="6"/>
							<line x1="8" y1="2" x2="8" y2="6"/>
							<line x1="3" y1="10" x2="21" y2="10"/>
						</svg>
					</div>
					<p><strong style="color:var(--al-text)">Calendar coming soon.</strong></p>
					<p>Replace this placeholder with a Google Calendar iframe. Set the calendar to public in Google Calendar settings, then embed using the share / embed link provided by Google.</p>
				</div>
				<!-- ── END placeholder ── -->

			</section>

			<hr class="al-divider">

			<!-- Recurring events -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Regular Events</h2>
				<p class="al-inner-section__lead">
					Recurring activities in the Achilefu Lab. Exact schedules confirmed each semester.
				</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Lab Meeting</p>
						<p class="al-feature-card__desc">Weekly all-hands meeting. Lab members present ongoing research, recent data, and upcoming experiments. Open to collaborators by invitation.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
								<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Journal Club</p>
						<p class="al-feature-card__desc">Bi-weekly critical review of the latest literature in molecular imaging, optical probes, and image-guided surgery. Rotating presenter and open discussion.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M12 8v4l3 3"/>
							</svg>
						</div>
						<p class="al-feature-card__title">BME Seminar Series</p>
						<p class="al-feature-card__desc">UTSW Biomedical Engineering Department seminars featuring invited speakers from academia and industry. Open to all UTSW community members.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Research Symposium</p>
						<p class="al-feature-card__desc">Annual lab symposium showcasing a year's work to collaborators, partners, and the broader UTSW community. Includes poster session and invited talk.</p>
					</div>
				</div>
			</section>

			<!-- CTA -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Want to Attend or Present?</h3>
					<p>Visiting scientists and prospective collaborators are welcome at many of our events. Contact us to arrange access or to propose a seminar.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
