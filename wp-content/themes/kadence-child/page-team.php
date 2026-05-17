<?php
/**
 * Template for the Meet the Team page.
 * Matches slug: team  —  page ID 9.
 *
 * v2.5 — full revamp:
 *        PI feature strip · monogram team cards (no photos) ·
 *        group-count chips · alumni metric ribbon + directory grid.
 *        Source roster: labs.utsouthwestern.edu/achilefu-lab/lab-members-and-alumni
 */
defined( 'ABSPATH' ) || exit;

/*
 * Team roster. v2.6 card layout: portrait card with a generic silhouette in
 * the image area (top) + name & role (bottom). A separate "footer" rectangle
 * sits attached below, carrying up to 3 quick-action icons.
 *
 * Per-member keys:
 *   name      (string, required)
 *   role      (string, required)
 *   focus     (string, optional — 1-line specialty; retained in data for
 *             future use but NOT currently rendered on the card)
 *   linkedin  (string, optional — full https URL to LinkedIn profile)
 *   scholar   (string, optional — full https URL to Google Scholar profile)
 *   email     (string, optional — plain email address, no `mailto:` prefix)
 *
 * The footer rectangle renders only when at least one of `linkedin` /
 * `scholar` / `email` is non-empty, and each icon within only renders if its
 * own field is non-empty. LinkedIn / Scholar open in a new tab; email
 * triggers the OS mail client (no new tab).
 */
$team = [

	[
		'group'   => 'Faculty',
		'members' => [
			// DUMMY DATA — all 3 icons
			[ 'name' => 'Walter Akers, Ph.D.',          'role' => 'Associate Professor',
			  'linkedin' => 'https://www.linkedin.com/in/placeholder',
			  'scholar'  => 'https://scholar.google.com/citations?user=PLACEHOLDER',
			  'email'    => 'placeholder@example.com' ],
			// DUMMY DATA — LinkedIn + Email (no Scholar)
			[ 'name' => 'Xiao Xu, Ph.D.',                'role' => 'Assistant Professor',
			  'linkedin' => 'https://www.linkedin.com/in/placeholder',
			  'scholar'  => '',
			  'email'    => 'placeholder@example.com' ],
			// DUMMY DATA — Scholar + Email (no LinkedIn)
			[ 'name' => 'Anchal Ghai, Ph.D.',            'role' => 'Instructor',
			  'focus' => 'Molecular &amp; optical imaging agents for multiple myeloma',
			  'linkedin' => '',
			  'scholar'  => 'https://scholar.google.com/citations?user=PLACEHOLDER',
			  'email'    => 'placeholder@example.com' ],
			// DUMMY DATA — Email only
			[ 'name' => 'Christopher Egbulefu, MBBCh.', 'role' => 'Instructor',
			  'focus' => 'Nanoparticle-drug formulations &amp; fluorescence probes',
			  'linkedin' => '',
			  'scholar'  => '',
			  'email'    => 'placeholder@example.com' ],
			// DUMMY DATA — LinkedIn only
			[ 'name' => 'Zijian Deng, Ph.D.',            'role' => 'Instructor',
			  'focus' => 'Optical imaging &amp; sensing technologies for oncology',
			  'linkedin' => 'https://www.linkedin.com/in/placeholder',
			  'scholar'  => '',
			  'email'    => '' ],
			// DUMMY DATA — Scholar only
			[ 'name' => 'Pere Dosta Pons, Ph.D.',        'role' => 'Instructor',
			  'focus' => 'Biomaterials for nucleic acid &amp; immunotherapy delivery',
			  'linkedin' => '',
			  'scholar'  => 'https://scholar.google.com/citations?user=PLACEHOLDER',
			  'email'    => '' ],
		],
	],

	[
		'group'   => 'Staff Scientists &amp; Engineers',
		'members' => [
			// DUMMY DATA — LinkedIn + Scholar (no Email)
			[ 'name' => 'Krishna Sharmah Gautam, Ph.D.', 'role' => 'Senior Research Scientist',
			  'focus' => 'Compound design &amp; synthesis for imaging and drug delivery',
			  'linkedin' => 'https://www.linkedin.com/in/placeholder',
			  'scholar'  => 'https://scholar.google.com/citations?user=PLACEHOLDER',
			  'email'    => '' ],
			[ 'name' => 'Tao Chen, Ph.D.',                'role' => 'Senior Research Scientist',
			  'focus' => 'Imaging cellular constituents &amp; chemical dynamics',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Pritam Biswas, Ph.D.',           'role' => 'Research Scientist',
			  'focus' => 'Theragnostic nanocomposites for cancer',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Hina Khan, Ph.D.',               'role' => 'Research Scientist',
			  'focus' => 'Small-molecule &amp; peptide probes for fluorescence-guided imaging',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Ian Zurutuza, M.S.',             'role' => 'Research Engineer',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Christopher Ta, M.S.',           'role' => 'Research Engineer',
			  'focus' => 'Embedded systems &amp; microcontrollers for biomedical applications',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Adit Mehta, M.S.',               'role' => 'Research Engineer',
			  'focus' => 'Bioreactor &amp; biosensor systems for regenerative medicine',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Meghan Doyal',                   'role' => 'Research Associate',
			  'focus' => 'Molecular biology tools for complex systems',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Cody Hongsermeier',              'role' => 'Research Technician II',
			  'focus' => 'Fluorescence imaging, nanotech &amp; radiochemistry',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Nicole Blasi',                   'role' => 'Research Technician II',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
		],
	],

	[
		'group'   => 'Postdoctoral Fellows',
		'members' => [
			[ 'name' => 'Chidube Alagbaoso, Ph.D.', 'role' => 'Postdoctoral Researcher',
			  'focus' => 'Imaging &amp; targeting disseminated breast-cancer cells',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Hengbo Huang, Ph.D.',       'role' => 'Postdoctoral Researcher',
			  'focus' => 'Multi-functional nanomaterials for MR / optical imaging &amp; therapy',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
		],
	],

	[
		'group'   => 'Graduate Students',
		'members' => [
			[ 'name' => 'Zhiyao Li, M.S.',          'role' => 'Ph.D. Student',
			  'focus' => 'PET imaging agents &amp; theranostic methods',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Eshani Das, M.S.',         'role' => 'Ph.D. Student',
			  'focus' => 'Immunotherapeutics for breast cancer',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Hanru (Haini) Zhang, M.S.', 'role' => 'Ph.D. Student',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
		],
	],

	[
		'group'   => 'Summer Interns',
		'members' => [
			[ 'name' => 'Kiran Parikh',     'role' => 'High School Researcher',
			  'focus' => 'Cancer immunotherapy agent development',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
			[ 'name' => 'Elizabeth Chong',  'role' => 'High School Researcher',
			  'focus' => 'Wound-healing dressings · pH &amp; oxygenation strategies',
			  'linkedin' => '', 'scholar' => '', 'email' => '' ],
		],
	],
];

/* Lab Alumni — separate editorial list (no card grid). */
$alumni = [
	[ 'name' => 'Tim (Tieqiao) Zhang', 'years' => '2022–2024', 'role' => 'Senior Research Scientist',  'now' => 'Director, Imaging Incubator — University of Maryland, College Park' ],
	[ 'name' => 'Eda Celikbas',         'years' => '2023',       'role' => 'Postdoctoral Fellow',         'now' => 'Biopharma Strategy Consultant — Scitaris, Berlin' ],
	[ 'name' => 'Nisha Gamadia',        'years' => '2022–2024', 'role' => 'Research Assistant II',       'now' => 'Pediatrics, UT Southwestern' ],
	[ 'name' => 'Megan Michie',         'years' => '2019–2024', 'role' => 'M.D./Ph.D. Student',          'now' => 'MSTP — Washington University in St. Louis' ],
	[ 'name' => 'Katie Rubitschung',    'years' => '2023',       'role' => 'Graduate Rotation Student',   'now' => 'Ph.D. Student — UT Southwestern' ],
	[ 'name' => 'Suman Mondal',         'years' => '2010–2022', 'role' => 'Ph.D. Student → Instructor', 'now' => 'Scientist — Philips Image-Guided Therapy' ],
	[ 'name' => 'Christine O\'Brien',   'years' => '2017–2022', 'role' => 'Postdoctoral Fellow / Instructor', 'now' => 'Assistant Professor — Washington University in St. Louis' ],
	[ 'name' => 'Leo Shmuylovich',      'years' => '2020–2022', 'role' => 'Postdoctoral Fellow',         'now' => 'Assistant Professor — Washington University in St. Louis' ],
	[ 'name' => 'Rui Tang',              'years' => '2013–2022', 'role' => 'Instructor',                  'now' => 'Instructor — Washington University in St. Louis' ],
	[ 'name' => 'Gail Sudlow',           'years' => '2008–2021', 'role' => 'Lab Supervisor',              'now' => 'Retired' ],
	[ 'name' => 'Katie Duncan',          'years' => '2018–2022', 'role' => 'Lab Technician',              'now' => 'Ph.D. Student — Washington University in St. Louis' ],
	[ 'name' => 'Hongyu Meng',           'years' => '2016–2022', 'role' => 'Ph.D. Student',               'now' => 'SDE — Amazon Web Services' ],
	[ 'name' => 'Lei Fang',              'years' => '2016–2022', 'role' => 'Ph.D. Student',               'now' => 'SDE — Amazon' ],
	[ 'name' => 'Baogang Xu',            'years' => '—',          'role' => 'Senior Scientist',            'now' => 'Senior Scientist — Washington University in St. Louis' ],
	[ 'name' => 'Kvar Black',            'years' => '2017–2022', 'role' => 'Research Instructor',         'now' => 'Patent Scientist — Washington University in St. Louis' ],
	[ 'name' => 'Dorota Grabowska',      'years' => '2012–2022', 'role' => 'Research Scientist',          'now' => 'Senior Scientist / Research Admin — Washington University in St. Louis' ],
	[ 'name' => 'Yixiao Lin',            'years' => '2021–2022', 'role' => 'Graduate Rotation Student',   'now' => 'Ph.D. Student — Washington University in St. Louis' ],
	[ 'name' => 'Rachel Mintz',          'years' => '2021–2022', 'role' => 'M.D./Ph.D. Student',          'now' => 'M.D./Ph.D. Student — Washington University in St. Louis' ],
	[ 'name' => 'Xuefeng Gao',           'years' => '2015–2022', 'role' => 'Staff Scientist',             'now' => 'Staff Scientist — Washington University in St. Louis' ],
	[ 'name' => 'Cathy (Kexian) Liang',  'years' => '—',          'role' => 'Staff Scientist',             'now' => 'Staff Scientist — Washington University in St. Louis' ],
	[ 'name' => 'Partha Karmakar',       'years' => '2015–2022', 'role' => 'Postdoctoral Researcher',     'now' => 'Scientific Manager — Chemistry R&amp;D' ],
	[ 'name' => 'Julie Prior',           'years' => '—',          'role' => 'Research Lab Manager',        'now' => 'Research Lab Manager — Washington University in St. Louis' ],
	[ 'name' => 'Brad Manion',           'years' => '—',          'role' => 'Research Assistant',          'now' => 'Research Assistant — Washington University in St. Louis' ],
	[ 'name' => 'Matthew Mixdorf',       'years' => '2017–2020', 'role' => 'Research Assistant',          'now' => 'QI Data Analyst — Boston Children\'s Hospital' ],
	[ 'name' => 'Kelvin Bishop',         'years' => '2018–2019', 'role' => 'Research Technician',         'now' => 'Ph.D. Student — University of Washington' ],
	[ 'name' => 'Karen Nwosu',           'years' => '2019–2021', 'role' => 'Research Technician',         'now' => 'Clinical Applications Engineer — Intuitive' ],
	[ 'name' => 'Shaw-Wei Sen',          'years' => '—',          'role' => 'M.D./Ph.D. Student',          'now' => 'Assistant Professor — UT Southwestern' ],
	[ 'name' => 'Dolon Maji',            'years' => '2011–2017', 'role' => 'Ph.D. Student',               'now' => 'Senior Biologics Project Rep (QTAS)' ],
	[ 'name' => 'Jessica Miller',        'years' => '2011–2018', 'role' => 'M.D./Ph.D. Student',          'now' => 'Resident Physician' ],
	[ 'name' => 'Daniel Lane',           'years' => '2014–2021', 'role' => 'Ph.D. Student',               'now' => 'Postdoctoral Research Fellow — Fred Hutch' ],
	[ 'name' => 'LeMoyne Habimana-Griffin','years' => '2011–2019', 'role' => 'M.D./Ph.D. Student',       'now' => 'Resident — Washington University in St. Louis' ],
];

get_header();
?>

<div class="al-inner-page">

	<!-- ── Hero ──────────────────────────────────────────── -->
	<section class="al-inner-hero" aria-labelledby="team-heading">
		<div class="al-container">
			<nav class="al-inner-hero__breadcrumb" aria-label="Breadcrumb">
				<a href="<?php echo esc_url( home_url( '/' ) ); ?>">Home</a>
				<span aria-hidden="true">›</span>
				<span aria-current="page">Team</span>
			</nav>
			<h1 class="al-inner-hero__title" id="team-heading">Meet the Team</h1>
			<p class="al-inner-hero__sub">
				Chemists, engineers, biologists, and clinicians making light-based medicine real &mdash; from first synthesis to first patient.
			</p>
		</div>
	</section>

	<!-- ── Body ──────────────────────────────────────────── -->
	<div class="al-inner-body">
		<div class="al-container">

			<!-- ── Intro lede + lab-at-a-glance stats ── -->
			<section class="al-inner-section">
				<p class="al-inner-section__lead">
					The Achilefu Lab brings together researchers from biomedical engineering, chemistry, medicine, and the clinical sciences &mdash; working at the interface of light, molecules, and patient care. The roster below reflects the people currently driving that work forward, plus an alumni network that now spans academia, industry, and clinical practice.
				</p>

				<ul class="al-pi-stats" aria-label="Lab at a glance">
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">300+</span>
						<span class="al-pi-stat__label">Publications</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">60+</span>
						<span class="al-pi-stat__label">Issued U.S. Patents</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">25+</span>
						<span class="al-pi-stat__label">Years of Training</span>
					</li>
					<li class="al-pi-stat">
						<span class="al-pi-stat__value">3</span>
						<span class="al-pi-stat__label">Startups Founded</span>
					</li>
				</ul>
			</section>

			<hr class="al-divider">

			<!-- ── Principal Investigator · feature strip ── -->
			<section class="al-inner-section">
				<a href="<?php echo al_page_url( 'team/pi' ); ?>" class="al-team-pi" aria-label="View full profile for Dr. Samuel Achilefu">
					<div class="al-team-pi__inner">
						<p class="al-team-pi__eyebrow">Principal Investigator</p>
						<h2 class="al-team-pi__name">Samuel Achilefu, Ph.D.</h2>
						<p class="al-team-pi__title">
							Lyda Hill Distinguished University Chair in Biomedical Engineering &middot; Professor &amp; Chair, Biomedical Engineering
						</p>
						<ul class="al-team-pi__tags" aria-label="Affiliations and honors">
							<li>National Academy of Engineering</li>
							<li>National Academy of Medicine</li>
							<li>Simmons Cancer Center</li>
							<li>Radiology</li>
						</ul>
						<span class="al-team-pi__more">Full profile <span aria-hidden="true">&rarr;</span></span>
					</div>
					<div class="al-team-pi__rule" aria-hidden="true"></div>
				</a>
			</section>

			<hr class="al-divider">

			<!-- ── Team groups (loop) ── -->
			<?php foreach ( $team as $section ) :
				if ( empty( $section['members'] ) ) {
					continue;
				}
			?>
			<section class="al-inner-section al-team-group">
				<div class="al-team-group__head">
					<h2 class="al-inner-section__title al-team-group__title"><?php echo $section['group']; // already-escaped HTML entities ?></h2>
					<span class="al-team-group__count"><?php echo count( $section['members'] ); ?></span>
				</div>

				<div class="al-team-grid">
					<?php foreach ( $section['members'] as $member ) :
						$linkedin = ! empty( $member['linkedin'] ) ? $member['linkedin'] : '';
						$scholar  = ! empty( $member['scholar']  ) ? $member['scholar']  : '';
						$email    = ! empty( $member['email']    ) ? $member['email']    : '';
					?>
					<article class="al-team-card">
						<div class="al-team-card__main">
							<div class="al-team-card__image" aria-hidden="true">
								<svg class="al-team-card__silhouette" viewBox="0 0 24 24" fill="currentColor" focusable="false"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-4.97 0-9 2.69-9 6v2h18v-2c0-3.31-4.03-6-9-6z"/></svg>
							</div>
							<div class="al-team-card__body">
								<p class="al-team-card__name"><?php echo esc_html( $member['name'] ); ?></p>
								<p class="al-team-card__role"><?php echo esc_html( $member['role'] ); ?></p>
							</div>
						</div>

						<?php if ( $linkedin || $scholar || $email ) : ?>
						<div class="al-team-card__footer">
							<?php if ( $linkedin ) : ?>
								<a href="<?php echo esc_url( $linkedin ); ?>" class="al-team-card__link al-team-card__link--linkedin" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( $member['name'] ); ?> on LinkedIn">
									<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M20.45 2H3.55A1.55 1.55 0 002 3.55v16.9A1.55 1.55 0 003.55 22h16.9A1.55 1.55 0 0022 20.45V3.55A1.55 1.55 0 0020.45 2zM8.34 18.74H5.36V9.5h2.98v9.24zM6.85 8.24a1.73 1.73 0 11.01-3.46 1.73 1.73 0 010 3.46zm11.89 10.5h-2.98v-4.49c0-1.07-.02-2.45-1.49-2.45-1.49 0-1.72 1.16-1.72 2.37v4.57H9.57V9.5h2.86v1.26h.04a3.13 3.13 0 012.82-1.55c3.02 0 3.57 1.99 3.57 4.57v4.96z"/></svg>
								</a>
							<?php endif; ?>
							<?php if ( $scholar ) : ?>
								<a href="<?php echo esc_url( $scholar ); ?>" class="al-team-card__link al-team-card__link--scholar" target="_blank" rel="noopener noreferrer" aria-label="<?php echo esc_attr( $member['name'] ); ?> on Google Scholar">
									<svg viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" focusable="false"><path d="M12 3L1 9l11 6 9-4.91V17h2V9L12 3zM5 13.18v3.91L12 21l7-3.91v-3.91L12 17l-7-3.82z"/></svg>
								</a>
							<?php endif; ?>
							<?php if ( $email ) : ?>
								<a href="mailto:<?php echo esc_attr( antispambot( $email ) ); ?>" class="al-team-card__link al-team-card__link--email" aria-label="Email <?php echo esc_attr( $member['name'] ); ?>">
									<svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true" focusable="false"><rect x="3" y="5" width="18" height="14" rx="2"/><path d="M3.5 6.5l8.5 6.5 8.5-6.5"/></svg>
								</a>
							<?php endif; ?>
						</div>
						<?php endif; ?>
					</article>
					<?php endforeach; ?>
				</div>
			</section>

			<hr class="al-divider">
			<?php endforeach; ?>

			<!-- ── Alumni · metric ribbon + directory ── -->
			<section class="al-inner-section al-team-alumni">
				<div class="al-team-group__head">
					<h2 class="al-inner-section__title al-team-group__title">Lab Alumni</h2>
					<span class="al-team-group__count"><?php echo count( $alumni ); ?>+</span>
				</div>

				<p class="al-team-alumni__lead">
					Former lab members now leading research, teaching, and clinical work across academia and industry. The Achilefu Lab has trained researchers for more than 25 years &mdash; alumni span faculty positions, industry R&amp;D, and direct patient care worldwide.
				</p>

				<ul class="al-team-alumni__ribbon" aria-label="Alumni at a glance">
					<li>
						<span class="al-team-alumni__metric">30<span class="al-team-alumni__metric-suffix">+</span></span>
						<span class="al-team-alumni__metric-label">Alumni placed</span>
					</li>
					<li>
						<span class="al-team-alumni__metric">15<span class="al-team-alumni__metric-suffix">+</span></span>
						<span class="al-team-alumni__metric-label">In academia &amp; research</span>
					</li>
					<li>
						<span class="al-team-alumni__metric">7<span class="al-team-alumni__metric-suffix">+</span></span>
						<span class="al-team-alumni__metric-label">In industry R&amp;D</span>
					</li>
					<li>
						<span class="al-team-alumni__metric">25<span class="al-team-alumni__metric-suffix">+ yr</span></span>
						<span class="al-team-alumni__metric-label">Continuous mentorship</span>
					</li>
				</ul>

				<ol class="al-team-alumni__list">
					<?php foreach ( $alumni as $a ) : ?>
					<li class="al-team-alumni-row">
						<p class="al-team-alumni-row__name"><?php echo esc_html( $a['name'] ); ?></p>
						<p class="al-team-alumni-row__role">
							<span class="al-team-alumni-row__years"><?php echo esc_html( $a['years'] ); ?></span>
							<span class="al-team-alumni-row__sep" aria-hidden="true">&middot;</span>
							<?php echo esc_html( $a['role'] ); ?>
						</p>
						<p class="al-team-alumni-row__now"><?php echo $a['now']; // entity-encoded inline ?></p>
					</li>
					<?php endforeach; ?>
				</ol>
			</section>

			<hr class="al-divider">

			<!-- ── Join the lab CTA ── -->
			<div class="al-inner-cta">
				<div class="al-inner-cta__copy">
					<h3>Join the Achilefu Lab</h3>
					<p>We're always looking for curious researchers at the intersection of optics, chemistry, and medicine &mdash; prospective postdoctoral fellows, graduate students, and collaborators alike. If our work resonates, we'd love to hear from you.</p>
				</div>
				<a href="<?php echo al_page_url( 'contact' ); ?>" class="al-inner-cta__btn">Get in Touch</a>
			</div>

		</div>
	</div>

</div>

<?php get_footer(); ?>
