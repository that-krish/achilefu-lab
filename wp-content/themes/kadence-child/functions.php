<?php
/**
 * Kadence Child — functions.php
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	// DM Sans: 300–800 weights, italic — single Google Fonts request
	wp_enqueue_style(
		'al-fonts',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,300;0,9..40,400;0,9..40,500;0,9..40,600;0,9..40,700;0,9..40,800;1,9..40,400&display=swap',
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
