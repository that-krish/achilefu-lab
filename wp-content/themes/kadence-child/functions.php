<?php
/**
 * Kadence Child — functions.php
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	// Syne (display headings) + DM Sans (body/UI) — single request
	wp_enqueue_style(
		'al-fonts',
		'https://fonts.googleapis.com/css2?family=Syne:wght@600;700;800&family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
		[],
		null
	);

	wp_enqueue_style(
		'kadence-child',
		get_stylesheet_uri(),
		[ 'kadence-global', 'al-fonts' ],
		wp_get_theme()->get( 'Version' )
	);
} );

// ── Nav helpers ────────────────────────────────────────────────────────────────

if ( ! function_exists( 'al_page_url' ) ) {
	function al_page_url( string $slug ): string {
		$page = get_page_by_path( $slug );
		return $page ? esc_url( get_permalink( $page ) ) : '#';
	}
}

if ( ! function_exists( 'al_blog_url' ) ) {
	function al_blog_url(): string {
		$id = (int) get_option( 'page_for_posts' );
		return $id ? esc_url( get_permalink( $id ) ) : esc_url( home_url( '/blog/' ) );
	}
}

// ── Global JS: header scroll + scroll reveal ───────────────────────────────────

add_action( 'wp_footer', function () {
	?>
	<script>
	(function () {

		// Header solidify on scroll
		var header = document.querySelector('.al-site-header');
		if (header) {
			var onScroll = function () {
				header.classList.toggle('is-scrolled', window.scrollY > 60);
			};
			window.addEventListener('scroll', onScroll, { passive: true });
			onScroll();
		}

		// Scroll reveal — adds .is-visible to .al-reveal elements when they enter viewport
		var reveals = document.querySelectorAll('.al-reveal');
		if (reveals.length && 'IntersectionObserver' in window) {
			var revealIO = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						entry.target.classList.add('is-visible');
						revealIO.unobserve(entry.target);
					}
				});
			}, { threshold: 0.12 });
			reveals.forEach(function (el) { revealIO.observe(el); });
		}

	})();
	</script>
	<?php
}, 18 );

// ── Front-page only JS ─────────────────────────────────────────────────────────

add_action( 'wp_footer', function () {
	if ( ! is_front_page() ) return;
	?>
	<script>
	(function () {

		// ── Stat counter animation ─────────────────────────────────────────────
		function animateCounter(el) {
			var target   = parseInt(el.dataset.count, 10);
			var suffix   = el.dataset.suffix || '';
			var duration = 1800;
			var start    = performance.now();
			function tick(now) {
				var elapsed  = now - start;
				var progress = Math.min(elapsed / duration, 1);
				var eased    = 1 - Math.pow(1 - progress, 3); // ease-out cubic
				var current  = Math.round(eased * target);
				el.textContent = current.toLocaleString() + suffix;
				if (progress < 1) requestAnimationFrame(tick);
			}
			// Reset to 0 before animating (fallback value shown until IO fires)
			el.textContent = '0' + suffix;
			requestAnimationFrame(tick);
		}

		var stats = document.querySelectorAll('.al-stat__value[data-count]');
		if (stats.length && 'IntersectionObserver' in window) {
			var counterIO = new IntersectionObserver(function (entries) {
				entries.forEach(function (entry) {
					if (entry.isIntersecting) {
						animateCounter(entry.target);
						counterIO.unobserve(entry.target);
					}
				});
			}, { threshold: 0.6 });
			stats.forEach(function (el) { counterIO.observe(el); });
		}

	})();
	</script>
	<?php
}, 21 );

// ── Mobile nav JS ──────────────────────────────────────────────────────────────

add_action( 'wp_footer', function () {
	?>
	<script>
	(function () {
		var toggle = document.getElementById( 'al-menu-toggle' );
		var nav    = document.getElementById( 'al-primary-nav' );
		if ( ! toggle || ! nav ) return;

		toggle.addEventListener( 'click', function () {
			var open = this.getAttribute( 'aria-expanded' ) === 'true';
			this.setAttribute( 'aria-expanded', String( ! open ) );
			this.setAttribute( 'aria-label', open ? 'Open navigation menu' : 'Close navigation menu' );
			nav.classList.toggle( 'is-open', ! open );
			this.classList.toggle( 'is-active', ! open );
		} );

		document.querySelectorAll( '.al-nav-label' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				if ( window.innerWidth >= 900 ) return;
				var group  = this.closest( '.al-nav-group' );
				var isOpen = group.classList.contains( 'is-open' );
				document.querySelectorAll( '.al-nav-group' ).forEach( function ( g ) {
					g.classList.remove( 'is-open' );
					g.querySelector( '.al-nav-label' ).setAttribute( 'aria-expanded', 'false' );
				} );
				if ( ! isOpen ) {
					group.classList.add( 'is-open' );
					this.setAttribute( 'aria-expanded', 'true' );
				}
			} );
		} );
	})();
	</script>
	<?php
}, 20 );

// ── Desktop nav hover-delay ────────────────────────────────────────────────────

add_action( 'wp_footer', function () {
	?>
	<script>
	(function () {
		if ( ! window.matchMedia( '(min-width: 900px)' ).matches ) return;

		document.querySelectorAll( '.al-nav-group' ).forEach( function ( group ) {
			var timer;

			group.addEventListener( 'mouseenter', function () {
				clearTimeout( timer );
				group.classList.add( 'keep-open' );
			} );

			group.addEventListener( 'mouseleave', function () {
				timer = setTimeout( function () {
					group.classList.remove( 'keep-open' );
				}, 500 );
			} );
		} );
	})();
	</script>
	<?php
}, 19 );
