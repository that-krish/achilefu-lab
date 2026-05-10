<?php
/**
 * Home page template — Achilefu Lab
 *
 * Bypasses Kadence's block-editor pipeline for full layout control.
 * All styles live in kadence-child/style.css under the .al-home namespace.
 */

defined( 'ABSPATH' ) || exit;

get_header();

// Resolve page slugs to URLs once, reuse below.
$url_research = esc_url( get_permalink( get_page_by_path( 'research' ) ) );
$url_contact  = esc_url( get_permalink( get_page_by_path( 'contact' ) ) );
$url_team     = esc_url( get_permalink( get_page_by_path( 'team' ) ) );
$url_blog     = esc_url( get_permalink( get_option( 'page_for_posts' ) ) );

// PI photo: place dr-achilefu.jpg in wp-content/uploads/ to activate.
$uploads       = wp_get_upload_dir();
$pi_file       = $uploads['basedir'] . '/dr-achilefu.jpg';
$pi_url        = $uploads['baseurl'] . '/dr-achilefu.jpg';
$pi_has_photo  = file_exists( $pi_file );
?>

<div class="al-home">

  <!-- ═══════════════════════════════════════════════════════════
       1. HERO
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-hero" aria-labelledby="al-hero-headline">
    <div class="al-container">
      <h1 class="al-hero__headline" id="al-hero-headline">
        Harnessing Light to Understand, Diagnose &amp;&nbsp;Treat&nbsp;Disease.
      </h1>

      <p class="al-hero__sub">
        Pioneering optical and molecular imaging technologies — from molecular probe to clinical care.
      </p>

      <div class="al-hero__actions">
        <a href="<?php echo $url_research; ?>" class="al-btn al-btn--primary">Our Research</a>
        <a href="<?php echo $url_contact; ?>"  class="al-btn al-btn--secondary">Contact Us</a>
      </div>
    </div>
  </section><!-- /.al-hero -->


  <!-- ═══════════════════════════════════════════════════════════
       2. RESEARCH PILLARS
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-pillars" aria-labelledby="al-pillars-heading">
    <div class="al-container">
      <h2 class="al-section-heading" id="al-pillars-heading">What We Do</h2>

      <div class="al-pillars__grid">

        <!-- Pillar 1: Optical & Molecular Imaging -->
        <div class="al-pillar">
          <div class="al-pillar__icon" aria-hidden="true">
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
          <h3 class="al-pillar__title">Optical &amp; Molecular Imaging</h3>
          <p class="al-pillar__desc">
            Near-infrared fluorescence platforms that reveal disease at the molecular level,
            enabling detection that the naked eye cannot achieve.
          </p>
        </div>

        <!-- Pillar 2: Image-Guided Surgery -->
        <div class="al-pillar">
          <div class="al-pillar__icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M4 24C4 24 12 13 24 13C36 13 44 24 44 24C44 24 36 35 24 35C12 35 4 24 4 24Z"
                    stroke="currentColor" stroke-width="2.5" stroke-linejoin="round"/>
              <circle cx="24" cy="24" r="5.5" stroke="currentColor" stroke-width="2.5"/>
              <circle cx="24" cy="24" r="2"   fill="currentColor"/>
            </svg>
          </div>
          <h3 class="al-pillar__title">Image-Guided Surgery</h3>
          <p class="al-pillar__desc">
            Wearable cancer-imaging systems and fluorescent goggles for real-time visualization
            during oncologic surgery — used in operating rooms worldwide.
          </p>
        </div>

        <!-- Pillar 3: Bench to Bedside -->
        <div class="al-pillar">
          <div class="al-pillar__icon" aria-hidden="true">
            <svg viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M17 8H31" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
              <path d="M19 8V21L9 36.5C8.1 38 9.4 40 11.5 40H36.5C38.6 40 39.9 38 39 36.5L29 21V8"
                    stroke="currentColor" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M9.5 33H38.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"/>
              <circle cx="17"  cy="36.5" r="1.75" fill="currentColor" opacity="0.45"/>
              <circle cx="25"  cy="38"   r="1.5"  fill="currentColor" opacity="0.45"/>
              <circle cx="32"  cy="35.5" r="2"    fill="currentColor" opacity="0.45"/>
            </svg>
          </div>
          <h3 class="al-pillar__title">Bench to Bedside</h3>
          <p class="al-pillar__desc">
            End-to-end development — from novel molecular probes through preclinical validation
            to clinical translation and patient care.
          </p>
        </div>

      </div><!-- /.al-pillars__grid -->
    </div><!-- /.al-container -->
  </section><!-- /.al-pillars -->


  <!-- ═══════════════════════════════════════════════════════════
       3. PI SPOTLIGHT
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-pi" aria-labelledby="al-pi-heading">
    <div class="al-container">
      <div class="al-pi__inner">

        <div class="al-pi__photo-wrap">
          <?php if ( $pi_has_photo ) : ?>
            <img
              src="<?php echo esc_url( $pi_url ); ?>"
              alt="Dr. Samuel Achilefu, Principal Investigator of the Achilefu Lab"
              width="380" height="475"
              loading="lazy"
              decoding="async"
            >
          <?php else : ?>
            <!-- Placeholder shown until dr-achilefu.jpg is placed in wp-content/uploads/ -->
            <div class="al-pi__photo-placeholder" role="img" aria-label="Dr. Samuel Achilefu — photo coming soon">
              <svg viewBox="0 0 380 475" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                <rect width="380" height="475" fill="#E8EFF3"/>
                <circle cx="190" cy="175" r="85"  fill="#C8D5DC"/>
                <ellipse cx="190" cy="500" rx="155" ry="130" fill="#C8D5DC"/>
                <text x="190" y="310" font-family="DM Sans, sans-serif" font-size="12"
                      fill="#8FA8B5" text-anchor="middle">
                  Photo coming soon
                </text>
              </svg>
            </div>
          <?php endif; ?>
        </div><!-- /.al-pi__photo-wrap -->

        <div class="al-pi__content">
          <p class="al-pi__eyebrow">Principal Investigator</p>
          <h2 class="al-pi__name" id="al-pi-heading">Dr. Samuel Achilefu</h2>

          <div class="al-pi__badges">
            <span class="al-badge">NAE Member</span>
            <span class="al-badge">NAM Member</span>
            <span class="al-badge">UTSW BME Chair</span>
          </div>

          <p class="al-pi__bio">
            Inaugural Chair of Biomedical Engineering at UT Southwestern and holder of the Lyda Hill
            Distinguished University Chair. Elected to both the National Academy of Engineering and the
            National Academy of Medicine, his lab develops optical imaging technologies that change how
            cancer is diagnosed and treated — in the operating room and beyond.
          </p>

          <a href="<?php echo $url_team; ?>" class="al-btn al-btn--primary">Meet the Team</a>
        </div><!-- /.al-pi__content -->

      </div><!-- /.al-pi__inner -->
    </div><!-- /.al-container -->
  </section><!-- /.al-pi -->


  <!-- ═══════════════════════════════════════════════════════════
       4. LAB IN NUMBERS
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-numbers" aria-label="Lab statistics">
    <div class="al-container">
      <div class="al-numbers__grid">

        <div class="al-stat">
          <span class="al-stat__value">300+</span>
          <span class="al-stat__label">Peer-reviewed publications</span>
        </div>

        <div class="al-stat">
          <span class="al-stat__value">70+</span>
          <span class="al-stat__label">U.S. Patents</span>
        </div>

        <div class="al-stat">
          <span class="al-stat__value">2</span>
          <span class="al-stat__label">National Academy memberships</span>
        </div>

        <div class="al-stat">
          <span class="al-stat__value">25+</span>
          <!-- [VERIFY] with Dr. Achilefu before go-live -->
          <span class="al-stat__label">Years of innovation</span>
        </div>

      </div><!-- /.al-numbers__grid -->
    </div><!-- /.al-container -->
  </section><!-- /.al-numbers -->


  <!-- ═══════════════════════════════════════════════════════════
       5. LATEST FROM THE LAB
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-blog" aria-labelledby="al-blog-heading">
    <div class="al-container">
      <h2 class="al-section-heading" id="al-blog-heading">Latest from the Lab</h2>

      <div class="al-blog__grid">
        <?php
        $recent = get_posts( [
          'numberposts'      => 3,
          'post_status'      => 'publish',
          'suppress_filters' => false,
        ] );

        if ( $recent ) :
          foreach ( $recent as $post ) :
            setup_postdata( $post );
            $excerpt = get_the_excerpt( $post );
            if ( ! $excerpt ) {
              $excerpt = wp_trim_words( get_the_content( null, false, $post ), 22, '…' );
            }
        ?>
          <article class="al-card" aria-label="<?php echo esc_attr( get_the_title( $post ) ); ?>">
            <div class="al-card__meta">
              <time datetime="<?php echo esc_attr( get_the_date( 'c', $post ) ); ?>">
                <?php echo esc_html( get_the_date( 'M j, Y', $post ) ); ?>
              </time>
            </div>
            <h3 class="al-card__title">
              <a href="<?php echo esc_url( get_permalink( $post ) ); ?>">
                <?php echo esc_html( get_the_title( $post ) ); ?>
              </a>
            </h3>
            <?php if ( $excerpt ) : ?>
              <p class="al-card__excerpt"><?php echo esc_html( $excerpt ); ?></p>
            <?php endif; ?>
            <a href="<?php echo esc_url( get_permalink( $post ) ); ?>"
               class="al-card__link"
               aria-label="<?php echo esc_attr( 'Read more: ' . get_the_title( $post ) ); ?>">
              Read more &rarr;
            </a>
          </article>
        <?php
          endforeach;
          wp_reset_postdata();
        else :
        ?>
          <p class="al-blog__empty">Posts coming soon.</p>
        <?php endif; ?>
      </div><!-- /.al-blog__grid -->

      <div class="al-blog__cta">
        <a href="<?php echo $url_blog; ?>" class="al-btn al-btn--secondary">View all posts</a>
      </div>
    </div><!-- /.al-container -->
  </section><!-- /.al-blog -->


  <!-- ═══════════════════════════════════════════════════════════
       6. AFFILIATIONS
  ══════════════════════════════════════════════════════════════ -->
  <section class="al-affiliations" aria-label="Affiliations and partners">
    <div class="al-container">
      <p class="al-affiliations__label">Affiliated with</p>

      <div class="al-affiliations__logos">
        <!--
          Replace each text item with an <img> once logo files are available.
          Suggested paths (all in wp-content/uploads/logos/):
            logo-utsw.svg
            logo-simmons.svg
            logo-nih.svg
          Use grayscale, height ~36px. CSS handles opacity + hover.
        -->
        <div class="al-affiliation-item">UT Southwestern Medical Center</div>
        <div class="al-affiliation-item">Harold C. Simmons Comprehensive Cancer Center</div>
        <div class="al-affiliation-item">National Institutes of Health</div>
      </div>
    </div>
  </section><!-- /.al-affiliations -->

</div><!-- /.al-home -->

<?php get_footer(); ?>
