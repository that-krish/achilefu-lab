<?php
/**
 * Home page template — Achilefu Lab
 * v2.3.5 — Hero · PI · Latest (Pubs + Blog) · Affiliations.
 */

defined( 'ABSPATH' ) || exit;

get_header();

$url_research     = esc_url( get_permalink( get_page_by_path( 'research' ) ) );
$url_contact      = esc_url( get_permalink( get_page_by_path( 'contact' ) ) );
$url_team         = esc_url( get_permalink( get_page_by_path( 'team' ) ) );
$url_publications = al_page_url( 'publications' );
$url_blog         = esc_url( get_permalink( get_option( 'page_for_posts' ) ) );

$uploads      = wp_get_upload_dir();
$pi_file      = $uploads['basedir'] . '/dr-achilefu.jpg';
$pi_url       = $uploads['baseurl'] . '/dr-achilefu.jpg';
$pi_has_photo = file_exists( $pi_file );
?>

<div class="al-home">

  <!-- ═══════════════════════════════════════════════════════════
       1. HERO — headline + inline credentials strip
       Decorative "fluorescent molecule field" — dots scattered behind
       the content that light up as the cursor passes (NIR excitation
       metaphor). Pure flare; degrades to static dim dots without JS.
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-hero" aria-labelledby="al-hero-headline">

    <!-- Molecule field is populated by JS in functions.php — count scales
         with hero area so density stays consistent across screen sizes. -->
    <div class="al-hero__molecules" aria-hidden="true"></div>

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
        <li><strong>60+</strong> U.S. Patents</li>
        <li><strong>NAE &amp; NAM</strong> Member</li>
        <li><strong>4</strong> Products in Clinical Study</li>
      </ul>

    </div>

    <a href="#al-pi" class="al-hero__scroll" aria-label="Scroll to next section">
      <svg viewBox="0 0 24 24" width="22" height="22" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <polyline points="6 9 12 15 18 9"></polyline>
      </svg>
    </a>
  </section><!-- /.al-hero -->



  <!-- ═══════════════════════════════════════════════════════════
       2. PI SPOTLIGHT + INLINE STATS
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-pi" id="al-pi" aria-labelledby="al-pi-heading">
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
              <span class="al-pi__stat-value">60+</span>
              <span class="al-pi__stat-label">Issued U.S. Patents</span>
            </li>
            <li>
              <span class="al-pi__stat-value">2</span>
              <span class="al-pi__stat-label">National Academy memberships</span>
            </li>
            <li>
              <span class="al-pi__stat-value">3</span>
              <span class="al-pi__stat-label">Startup companies founded</span>
            </li>
          </ul>

          <a href="<?php echo $url_team; ?>" class="al-btn al-btn--primary">Meet the Team</a>
        </div>

      </div>
    </div>
  </section><!-- /.al-pi -->


  <!-- ═══════════════════════════════════════════════════════════
       3. LATEST FROM THE LAB — 2-col: Publications, Blog
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-latest" aria-labelledby="al-latest-heading">
    <div class="al-container">

      <div class="al-latest__head">
        <h2 class="al-section-heading" id="al-latest-heading">Latest from the Lab</h2>
        <p class="al-section-subhead">
          Recent publications and updates from the lab.
        </p>
      </div>

      <div class="al-latest__grid">

        <!-- Recent Publications -->
        <div class="al-latest__col al-reveal" data-delay="1">
          <p class="al-latest__col-heading">Recent Publications</p>
          <ul class="al-latest__list">
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Single-Operator Cancer Vision Goggles for Quantitative Near-Infrared Fluorescence-Guided Surgery</p>
                <p class="al-latest__meta">IEEE Trans. Biomed. Eng. &middot; 2026</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Radionuclide-stimulated dynamic therapy induces complementary immunogenic necroptosis and apoptosis</p>
                <p class="al-latest__meta">Communications Biology &middot; 2026</p>
              </a>
            </li>
            <li class="al-latest__item">
              <a href="<?php echo $url_publications; ?>">
                <p class="al-latest__title">Chemo-RaST with bortezomib inhibits multiple myeloma relapse</p>
                <p class="al-latest__meta">Theranostics &middot; 2025</p>
              </a>
            </li>
          </ul>
          <a href="<?php echo $url_publications; ?>" class="al-latest__more">
            View all publications &rarr;
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
       4. AFFILIATIONS — tight closing band
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
