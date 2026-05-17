<?php
/**
 * Template for the Lab Calendar page.
 * Matches slug: lab-calendar  —  page ID 24.
 *
 * v2.0 — editorial density refresh: inline stat strip, upcoming events stream,
 *         recurring schedule grid, subscribe block, past highlights, CTA.
 *
 * To embed a Google Calendar replace the .al-calendar-frame block below with:
 *   <iframe src="https://calendar.google.com/calendar/embed?src=YOUR_CALENDAR_ID&..." ...></iframe>
 */
defined( 'ABSPATH' ) || exit;

$url_contact = al_page_url( 'contact' );
$url_team    = al_page_url( 'team' );

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
				Weekly meetings, journal clubs, visiting speakers, and conference travel &mdash; the working rhythm of the Achilefu Lab at UT&nbsp;Southwestern.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Row 1: Inline stat strip ── -->
			<section class="al-inner-section">
				<div class="al-pi-stats">
					<div class="al-pi-stat">
						<span class="al-pi-stat__value">Weekly</span>
						<span class="al-pi-stat__label">Lab Meetings</span>
					</div>
					<div class="al-pi-stat">
						<span class="al-pi-stat__value">Bi-weekly</span>
						<span class="al-pi-stat__label">Journal Club</span>
					</div>
					<div class="al-pi-stat">
						<span class="al-pi-stat__value">SPIE &middot; BMES &middot; WMIC</span>
						<span class="al-pi-stat__label">Annual Conferences</span>
					</div>
					<div class="al-pi-stat">
						<span class="al-pi-stat__value">Open</span>
						<span class="al-pi-stat__label">To Collaborators</span>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 2: Calendar embed area ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Live Calendar</h2>
				<p class="al-inner-section__lead">
					Subscribe to follow lab meetings, seminars, and travel in real time. Visiting researchers and prospective collaborators are welcome at most public events &mdash; contact us for an invite link.
				</p>

				<!-- ── SWAP THIS BLOCK with an <iframe> once the Google Calendar is set up ── -->
				<div class="al-calendar-frame" role="img" aria-label="Calendar embed pending">
					<div class="al-calendar-frame__icon" aria-hidden="true">
						<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
							<rect x="3" y="4" width="18" height="18" rx="2"/>
							<line x1="16" y1="2" x2="16" y2="6"/>
							<line x1="8" y1="2" x2="8" y2="6"/>
							<line x1="3" y1="10" x2="21" y2="10"/>
						</svg>
					</div>
					<p><strong style="color:var(--al-text)">Calendar embed pending.</strong></p>
					<p>The Google Calendar embed will appear here once the lab calendar is made public. In the meantime, see the upcoming events list below or contact us to receive direct invites.</p>
				</div>
				<!-- ── END placeholder ── -->
			</section>

			<hr class="al-divider">

			<!-- ── Row 3: Upcoming Events ── -->
			<section class="al-inner-section" aria-labelledby="cal-upcoming-heading">
				<h2 class="al-inner-section__title" id="cal-upcoming-heading">Upcoming Events</h2>
				<p class="al-inner-section__lead">
					Specific event dates and presenters are confirmed on a rolling basis. Subscribe to the calendar below for live updates, or contact the lab to be added to the seminar invite list.
				</p>
				<div class="al-feature-grid">
					<div class="al-feature-card">
						<p class="al-feature-card__title">Weekly Lab Meetings</p>
						<p class="al-feature-card__desc">All-hands meeting where one member presents in depth and others give brief status updates. Open to invited collaborators.</p>
					</div>
					<div class="al-feature-card">
						<p class="al-feature-card__title">Bi-weekly Journal Club</p>
						<p class="al-feature-card__desc">Critical review of new literature in molecular imaging, probe chemistry, and image-guided surgery. Rotating presenter; all trainees participate.</p>
					</div>
					<div class="al-feature-card">
						<p class="al-feature-card__title">Visiting Seminars</p>
						<p class="al-feature-card__desc">Hosted speakers from collaborating institutions and industry; typically coordinated with the UTSW BME Seminar Series.</p>
					</div>
					<div class="al-feature-card">
						<p class="al-feature-card__title">Conference Travel</p>
						<p class="al-feature-card__desc">The lab attends SPIE Photonics West, BMES Annual Meeting, World Molecular Imaging Congress (WMIC), and Society of Nuclear Medicine &amp; Molecular Imaging (SNMMI).</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 4: Recurring schedule grid ── -->
			<section class="al-inner-section">
				<h2 class="al-inner-section__title">Recurring Schedule</h2>
				<p class="al-inner-section__lead">
					The weekly cadence the lab runs on. Exact rooms and times are confirmed each semester &mdash; contact the lab manager to receive current scheduling.
				</p>

				<div class="al-feature-grid">
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/>
								<path d="M23 21v-2a4 4 0 0 0-3-3.87M16 3.13a4 4 0 0 1 0 7.75"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Weekly Lab Meeting</p>
						<p class="al-feature-card__desc">All-hands meeting. One lab member presents in depth; everyone else gives a one-minute status. Open to invited collaborators.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/>
								<path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/>
							</svg>
						</div>
						<p class="al-feature-card__title">Bi-weekly Journal Club</p>
						<p class="al-feature-card__desc">Critical review of new literature in molecular imaging, probe chemistry, and image-guided surgery. Rotating presenter.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<circle cx="12" cy="12" r="10"/>
								<path d="M12 8v4l3 3"/>
							</svg>
						</div>
						<p class="al-feature-card__title">PI Office Hours</p>
						<p class="al-feature-card__desc">Open block for trainees, prospective students, and collaborators. Drop in or book a slot through the lab manager.</p>
					</div>
					<div class="al-feature-card">
						<div class="al-feature-card__icon" aria-hidden="true">
							<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.75" stroke-linecap="round" stroke-linejoin="round">
								<polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/>
							</svg>
						</div>
						<p class="al-feature-card__title">UTSW BME Seminar Series</p>
						<p class="al-feature-card__desc">Department-wide seminars with invited speakers from academia and industry. Open to the UTSW community. The Achilefu Lab actively participates in speaker selection.</p>
					</div>
				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 5: Subscribe / iCal ── -->
			<section class="al-inner-section">
				<div class="al-two-col al-two-col--60-40">

					<div>
						<h2 class="al-inner-section__title">Subscribe to the Calendar</h2>
						<div class="al-prose">
							<p>
								Add the public lab calendar to Google Calendar, Apple Calendar, or any iCal-compatible client and the schedule will keep itself in sync &mdash; including changes, cancellations, and visiting-speaker additions. Recommended for collaborators and trainees who want a single source of truth.
							</p>
							<p>
								Private events (one-on-ones, internal reviews) stay off this feed. For invite-only events, contact the lab manager to be added directly.
							</p>
						</div>
					</div>

					<aside style="display:flex; flex-direction:column; gap:0.75rem; align-self:center;">
						<a href="<?php echo $url_contact; ?>" class="al-btn al-btn--primary">Request Calendar Access</a>
						<a href="<?php echo $url_contact; ?>" class="al-btn al-btn--secondary">Get Seminar Invites</a>
					</aside>

				</div>
			</section>

			<hr class="al-divider">

			<!-- ── Row 6: Recent Activity ── -->
			<section class="al-latest al-latest--nested" aria-labelledby="cal-past-heading">
				<div class="al-latest__head">
					<h2 class="al-inner-section__title" id="cal-past-heading">Recent Activity</h2>
					<p class="al-inner-section__lead">
						A look at lab activity from the past year, drawn from publications and conference records.
					</p>
				</div>

				<ul class="al-latest__list">
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Single-Operator Cancer Vision Goggles paper published</p>
						<p class="al-latest__meta">2026 &middot; IEEE Transactions on Biomedical Engineering &middot; Xu et al.</p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Radionuclide-stimulated dynamic therapy immunogenic cell death paper published</p>
						<p class="al-latest__meta">2026 &middot; Communications Biology &middot; Egbulefu et al.</p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">Chemo-RaST with bortezomib for myeloma relapse prevention published</p>
						<p class="al-latest__meta">2025 &middot; Theranostics &middot; Ghai et al.</p>
					</li>
					<li class="al-latest__item al-latest__item--static">
						<p class="al-latest__title">First-in-humans evaluation of ⁶⁴Cu-LLP2A published in Journal of Nuclear Medicine</p>
						<p class="al-latest__meta">2023 &middot; Laforest et al. &middot; Safety &amp; dosimetry results</p>
					</li>
				</ul>
			</section>

			<hr class="al-divider">

			<!-- ── CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Host a seminar or visit the lab</h3>
					<p>We welcome visiting scientists, prospective trainees, and collaborators interested in giving a talk or sitting in on lab meetings. Reach out to coordinate dates and access.</p>
				</div>
				<a href="<?php echo $url_contact; ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
