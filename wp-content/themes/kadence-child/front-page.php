<?php
/**
 * Home page template — Achilefu Lab
 * v2.2 — denser editorial layout: inline credentials, featured research,
 *         PI w/ inline stats, 3-col "Latest from the Lab".
 */

defined( 'ABSPATH' ) || exit;

get_header();

$url_research     = esc_url( get_permalink( get_page_by_path( 'research' ) ) );
$url_contact      = esc_url( get_permalink( get_page_by_path( 'contact' ) ) );
$url_team         = esc_url( get_permalink( get_page_by_path( 'team' ) ) );
$url_publications = al_page_url( 'publications' );
$url_media        = al_page_url( 'media' );
$url_blog         = esc_url( get_permalink( get_option( 'page_for_posts' ) ) );

$uploads      = wp_get_upload_dir();
$pi_file      = $uploads['basedir'] . '/dr-achilefu.jpg';
$pi_url       = $uploads['baseurl'] . '/dr-achilefu.jpg';
$pi_has_photo = file_exists( $pi_file );

$lab_bg_file = $uploads['basedir'] . '/lab-bg.jpg';
$lab_bg_url  = $uploads['baseurl'] . '/lab-bg.jpg';
$has_lab_bg  = file_exists( $lab_bg_file );
?>

<div class="al-home">

  <!-- ═══════════════════════════════════════════════════════════
       1. HERO — headline + inline credentials strip
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-hero" aria-labelledby="al-hero-headline">
    <div class="al-container">

      <span class="al-hero__eyebrow">Achilefu Lab &middot; UT Southwestern</span>

      <h1 class="al-hero__headline" id="al-hero-headline">
        Harnessing <em>Light</em> to Understand, Diagnose &amp;&nbsp;Treat&nbsp;Disease.
      </h1>

      <p class="al-hero__sub">
        Optical and molecular imaging technologies&nbsp;&mdash; from molecular probe to clinical care.
      </p>

      <div class="al-hero__actions">
        <a href="<?php echo $url_research; ?>" class="al-btn al-btn--primary">Our Research</a>
        <a href="<?php echo $url_contact; ?>"  class="al-btn al-btn--secondary">Contact Us</a>
      </div>

      <ul class="al-hero__cred" aria-label="Lab at a glance">
        <li><strong>300+</strong> Publications</li>
        <li><strong>70+</strong> U.S. Patents</li>
        <li><strong>NAE &amp; NAM</strong> Member</li>
        <li><strong>25+ Years</strong> of Innovation</li>
      </ul>

    </div>
  </section><!-- /.al-hero -->


  <!-- ═══════════════════════════════════════════════════════════
       2. RESEARCH PILLARS — cinematic expanding panels
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-pillars" aria-label="Research focus areas">
    <div class="al-pillars-grid">

      <div class="al-pillar-panel" tabindex="0" role="group" aria-label="Optical and Molecular Imaging">
        <span class="al-pillar-panel__number" aria-hidden="true">01</span>
        <div class="al-pillar-panel__content">
          <div class="al-pillar-panel__icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="24" cy="24" r="7.5" stroke="currentColor" stroke-width="2.5"/>
              <line x1="24" y1="4"  x2="24" y2="11" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="24" y1="37" x2="24" y2="44" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="4"  y1="24" x2="11" y2="24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="37" y1="24" x2="44" y2="24" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <line x1="10.1" y1="10.1" x2="14.5" y2="14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <line x1="33.5" y1="33.5" x2="37.9" y2="37.9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <line x1="37.9" y1="10.1" x2="33.5" y2="14.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <line x1="14.5" y1="33.5" x2="10.1" y2="37.9" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
            </svg>
          </div>
          <h3 class="al-pillar-panel__title">Optical &amp; Molecular Imaging</h3>
          <p class="al-pillar-panel__desc">
            Near-infrared fluorescence platforms that reveal disease at the molecular level.
          </p>
          <a href="<?php echo al_page_url( 'research/optical-imaging' ); ?>" class="al-pillar-panel__link">
            Learn more &rarr;
          </a>
        </div>
      </div>

      <div class="al-pillar-panel" tabindex="0" role="group" aria-label="Image-Guided Surgery">
        <span class="al-pillar-panel__number" aria-hidden="true">02</span>
        <div class="al-pillar-panel__content">
          <div class="al-pillar-panel__icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 24C4 24 12 13 24 13C36 13 44 24 44 24C44 24 36 35 24 35C12 35 4 24 4 24Z"
                    stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
              <circle cx="24" cy="24" r="5.5" stroke="currentColor" stroke-width="2.5"/>
              <circle cx="24" cy="24" r="2"   fill="currentColor"/>
            </svg>
          </div>
          <h3 class="al-pillar-panel__title">Image-Guided Surgery</h3>
          <p class="al-pillar-panel__desc">
            Wearable cancer-imaging systems for real-time visualization during oncologic surgery.
          </p>
          <a href="<?php echo al_page_url( 'research/image-guided-surgery' ); ?>" class="al-pillar-panel__link">
            Learn more &rarr;
          </a>
        </div>
      </div>

      <div class="al-pillar-panel" tabindex="0" role="group" aria-label="Bench to Bedside">
        <span class="al-pillar-panel__number" aria-hidden="true">03</span>
        <div class="al-pillar-panel__content">
          <div class="al-pillar-panel__icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 8H31" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M19 8V21L9 36.5C8.1 38 9.4 40 11.5 40H36.5C38.6 40 39.9 38 39 36.5L29 21V8"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.5 33H38.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <circle cx="17"  cy="36.5" r="1.75" fill="currentColor" opacity="0.5"/>
              <circle cx="25"  cy="38"   r="1.5"  fill="currentColor" opacity="0.5"/>
              <circle cx="32"  cy="35.5" r="2"    fill="currentColor" opacity="0.5"/>
            </svg>
          </div>
          <h3 class="al-pillar-panel__title">Bench to Bedside</h3>
          <p class="al-pillar-panel__desc">
            From novel molecular probes through preclinical validation to clinical translation.
          </p>
          <a href="<?php echo al_page_url( 'research/bench-to-bedside' ); ?>" class="al-pillar-panel__link">
            Learn more &rarr;
          </a>
        </div>
      </div>

    </div>
  </section><!-- /.al-pillars -->


  <!-- ═══════════════════════════════════════════════════════════
       3. FEATURED RESEARCH — editorial highlight
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-highlight" aria-labelledby="al-highlight-heading">
    <div class="al-container">
      <div class="al-highlight__inner">

        <div class="al-highlight__media al-reveal">
          <?php if ( $has_lab_bg ) : ?>
            <img src="<?php echo esc_url( $lab_bg_url ); ?>"
                 alt="Achilefu Lab research"
                 loading="lazy" decoding="async">
          <?php else : ?>
            <div class="al-highlight__media-placeholder" aria-hidden="true">
              <svg viewBox="0 0 600 450" xmlns="http://www.w3.org/2000/svg" preserveAspectRatio="xMidYMid slice">
                <defs>
                  <radialGradient id="hl-glow1" cx="32%" cy="38%" r="42%">
                    <stop offset="0%" stop-color="#9FE5C4" stop-opacity="0.85"/>
                    <stop offset="100%" stop-color="#9FE5C4" stop-opacity="0"/>
                  </radialGradient>
                  <radialGradient id="hl-glow2" cx="72%" cy="62%" r="38%">
                    <stop offset="0%" stop-color="#B5DBF3" stop-opacity="0.75"/>
                    <stop offset="100%" stop-color="#B5DBF3" stop-opacity="0"/>
                  </radialGradient>
                </defs>
                <rect width="600" height="450" fill="#1C3347"/>
                <rect width="600" height="450" fill="url(#hl-glow1)"/>
                <rect width="600" height="450" fill="url(#hl-glow2)"/>
              </svg>
            </div>
          <?php endif; ?>
        </div>

        <div class="al-highlight__copy al-reveal" data-delay="2">
          <p class="al-highlight__eyebrow">Featured Research</p>
          <h2 class="al-highlight__title" id="al-highlight-heading">
            Real-time fluorescence guidance for cancer surgery
          </h2>
          <p class="al-highlight__meta">
            <span>Journal of Biomedical Optics</span>
            <span class="al-highlight__meta-sep" aria-hidden="true">·</span>
            <span>2024</span>
            <span class="al-highlight__meta-sep" aria-hidden="true">·</span>
            <span>Cover feature</span>
          </p>
          <p class="al-highlight__lede">
            The lab's wearable near-infrared fluorescence imaging system &mdash; built on a decade of
            molecular probe engineering &mdash; lets surgeons see tumor margins and lymph nodes
            in real time during oncologic procedures. Now in active clinical use at UT Southwestern
            and partner institutions.
          </p>
          <a href="<?php echo $url_research; ?>" class="al-highlight__link">
            Read the research &rarr;
          </a>
        </div>

      </div>
    </div>
  </section><!-- /.al-highlight -->


  <!-- ═══════════════════════════════════════════════════════════
       4. PI SPOTLIGHT + INLINE STATS
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-pi" aria-labelledby="al-pi-heading">
    <div class="al-container">
      <div class="al-pi__inner">

        <div class="al-pi__photo-wrap al-reveal">
          <?php if ( $pi_has_photo ) : ?>
            <img src="<?php echo esc_url( $pi_url ); ?>"
                 alt="Dr. Samuel Achilefu, Principal Investigator of the Achilefu Lab"
                 width="380" height="475"
                 loading="lazy" decoding="async">
          <?php else : ?>
            <div class="al-pi__photo-placeholder" role="img" aria-label="Dr. Samuel Achilefu — photo coming soon">
              <svg viewBox="0 0 380 475" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect width="380" height="475" fill="#D8E6EF"/>
                <circle cx="190" cy="175" r="85"  fill="#B8CED9"/>
                <ellipse cx="190" cy="500" rx="155" ry="130" fill="#B8CED9"/>
                <text x="190" y="310" font-family="DM Sans, sans-serif" font-size="12"
                      fill="#7A9AAB" text-anchor="middle">Photo coming soon</text>
              </svg>
            </div>
          <?php endif; ?>
        </div>

        <div class="al-pi__content al-reveal" data-delay="2">
          <p class="al-pi__eyebrow">Principal Investigator</p>
          <h2 class="al-pi__name" id="al-pi-heading">Dr. Samuel Achilefu</h2>

          <div class="al-pi__badges">
            <span class="al-badge">NAE Member</span>
            <span class="al-badge">NAM Member</span>
            <span class="al-badge">Lyda Hill Distinguished Chair</span>
          </div>

          <p class="al-pi__bio">
            Inaugural Chair of Biomedical Engineering at UT Southwestern. The Achilefu Lab
            develops optical and molecular imaging technologies that change how disease is
            detected and treated&nbsp;&mdash; from the molecular probe to the operating room.
          </p>

          <ul class="al-pi__stats" aria-label="Lab statistics">
            <li>
              <span class="al-pi__stat-value">300+</span>
              <span class="al-pi__stat-label">Peer-reviewed publications</span>
            </li>
            <li>
              <span class="al-pi__stat-value">70+</span>
              <span class="al-pi__stat-label">U.S. Patents</span>
            </li>
            <li>
              <span class="al-pi__stat-value">2</span>
              <span class="al-pi__stat-label">National Academy memberships</span>
            </li>
            <li>
              <span class="al-pi__stat-value">25+</span>
              <span class="al-pi__stat-label">Years of innovation</span>
            </li>
          </ul>

          <a href="<?php echo $url_team; ?>" class="al-btn al-btn--primary">Meet the Team</a>
        </div>

      </div>
    </div>
  </section><!-- /.al-pi -->


  <!-- ═══════════════════════════════════════════════════════════
       5. LATEST FROM THE LAB — 3-col: Publications, News, Blog
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-latest" aria-labelledby="al-latest-heading">
    <div class="al-container">

      <div class="al-latest__head">
        <h2 class="al-section-heading" id="al-latest-heading">Latest from the Lab</h2>
        <p class="al-section-subhead">
          Active research, recent press coverage, and updates from the lab.
        </p>
      </div>

      <div class="al-latest__grid">

        <!-- Recent Publications -->
        <div class="al-latest__col al-reveal" data-delay="1">
          <p class="al-latest__col-heading">Recent Publications</p>
          <ul class="al-latest__list">
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Targeted near-infrared probes for image-guided cancer surgery</p>
                <p class="al-latest__meta">Nature Biomedical Engineering &middot; 2025</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Wearable fluorescence imaging for intraoperative tumor margin assessment</p>
                <p class="al-latest__meta">J. Biomed. Opt. &middot; 2024</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Theranostic agents for combined molecular imaging and targeted therapy</p>
                <p class="al-latest__meta">Biomaterials &middot; 2024</p>
              </a>
            </li>
          </ul>
          <a href="<?php echo $url_publications; ?>" class="al-latest__more">
            View all publications &rarr;
          </a>
        </div>

        <!-- In the News -->
        <div class="al-latest__col al-reveal" data-delay="2">
          <p class="al-latest__col-heading">In the News</p>
          <ul class="al-latest__list">
            <li class="al-latest__item">
              <a href="<?php echo $url_media; ?>">
                <p class="al-latest__title">Achilefu named inaugural Chair of Biomedical Engineering at UTSW</p>
                <p class="al-latest__meta">UT Southwestern Newsroom</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_media; ?>">
                <p class="al-latest__title">Elected to the National Academy of Medicine</p>
                <p class="al-latest__meta">National Academy of Medicine</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_media; ?>">
                <p class="al-latest__title">Elected to the National Academy of Engineering</p>
                <p class="al-latest__meta">National Academy of Engineering</p>
              </a>
            </li>
          </ul>
          <a href="<?php echo $url_media; ?>" class="al-latest__more">
            View all press &rarr;
          </a>
        </div>

        <!-- From the Blog -->
        <div class="al-latest__col al-reveal" data-delay="3">
          <p class="al-latest__col-heading">From the Blog</p>
          <?php
          $recent = get_posts( [
            'numberposts'      => 3,
            'post_status'      => 'publish',
            'suppress_filters' => false,
          ] );
          if ( $recent ) :
          ?>
          <ul class="al-latest__list">
            <?php foreach ( $recent as $post ) : setup_postdata( $post ); ?>
              <li class="al-latest__item">
                <a href="<?php echo esc_url( get_permalink( $post ) ); ?>">
                  <p class="al-latest__title"><?php echo esc_html( get_the_title( $post ) ); ?></p>
                  <p class="al-latest__meta"><?php echo esc_html( get_the_date( 'M j, Y', $post ) ); ?></p>
                </a>
              </li>
            <?php endforeach; wp_reset_postdata(); ?>
          </ul>
          <a href="<?php echo $url_blog; ?>" class="al-latest__more">
            View all posts &rarr;
          </a>
          <?php else : ?>
            <p class="al-latest__empty">Posts coming soon.</p>
          <?php endif; ?>
        </div>

      </div>
    </div>
  </section><!-- /.al-latest -->


  <!-- ═══════════════════════════════════════════════════════════
       6. AFFILIATIONS — tight closing band
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-affiliations" aria-label="Affiliations and partners">
    <div class="al-container">
      <div class="al-affiliations__inner">
        <p class="al-affiliations__label">Affiliated with</p>
        <div class="al-affiliations__logos">
          <div class="al-affiliation-item">UT Southwestern Medical Center</div>
          <div class="al-affiliation-item">Harold C. Simmons Comprehensive Cancer Center</div>
          <div class="al-affiliation-item">National Institutes of Health</div>
        </div>
      </div>
    </div>
  </section><!-- /.al-affiliations -->

</div><!-- /.al-home -->

<?php get_footer(); ?>
