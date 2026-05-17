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

// ── Hero molecule field — density-driven dot generator + cursor excitation ────

add_action( 'wp_footer', function () {
	if ( ! is_front_page() ) return;
	?>
	<script>
	(function () {
		var hero = document.querySelector( '.al-hero' );
		if ( ! hero ) return;
		var field = hero.querySelector( '.al-hero__molecules' );
		if ( ! field ) return;

		var cursorOk = window.matchMedia( '(hover: hover) and (pointer: fine)' ).matches
		            && ! window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches;
		var isTouch  = ! window.matchMedia( '(hover: hover) and (pointer: fine)' ).matches;

		// Target density: hero area (px²) per dot. Lower = denser.
		var DENSITY  = isTouch ? 9000 : 6500;
		var MIN_DOTS = isTouch ? 28 : 40;
		var MAX_DOTS = isTouch ? 65 : 340;

		var molecules = [];
		var molPos    = [];
		var maxDist   = 240;
		var maxDistSq = maxDist * maxDist;
		var mouseX    = -9999;
		var mouseY    = -9999;
		var rafId     = null;

		// Touch blink keyframes — used by Web Animations API for per-dot timing.
		// Flash duration randomizes per dot (2–4s); gap between flashes is 8s.
		var BLINK_DIM_OPACITY  = 0.20;
		var BLINK_PEAK_OPACITY = 0.98;
		var BLINK_DIM_SHADOW   = '0 0 8px 0 rgba(135, 188, 222, 0.45)';
		var BLINK_PEAK_SHADOW  = '0 0 30px 7px rgba(135, 188, 222, 0.90)';
		var BLINK_GAP_SEC      = 8;
		var BLINK_FLASH_MIN    = 2;
		var BLINK_FLASH_MAX    = 4;

		function attachBlink ( el ) {
			if ( typeof el.animate !== 'function' ) return;
			var flashSec  = BLINK_FLASH_MIN + Math.random() * ( BLINK_FLASH_MAX - BLINK_FLASH_MIN );
			var totalSec  = BLINK_GAP_SEC + flashSec;
			var dimEnd    = BLINK_GAP_SEC / totalSec;
			var peakAt    = ( BLINK_GAP_SEC + flashSec / 2 ) / totalSec;
			el.animate( [
				{ offset: 0,      opacity: BLINK_DIM_OPACITY,  boxShadow: BLINK_DIM_SHADOW  },
				{ offset: dimEnd, opacity: BLINK_DIM_OPACITY,  boxShadow: BLINK_DIM_SHADOW  },
				{ offset: peakAt, opacity: BLINK_PEAK_OPACITY, boxShadow: BLINK_PEAK_SHADOW },
				{ offset: 1,      opacity: BLINK_DIM_OPACITY,  boxShadow: BLINK_DIM_SHADOW  }
			], {
				duration:       totalSec * 1000,
				iterations:     Infinity,
				easing:         'ease-in-out',
				iterationStart: Math.random()
			} );
		}

		function generate () {
			var rect   = hero.getBoundingClientRect();
			var area   = rect.width * rect.height;
			var target = Math.max( MIN_DOTS, Math.min( MAX_DOTS, Math.round( area / DENSITY ) ) );

			field.textContent = '';
			var frag = document.createDocumentFragment();
			var created = [];
			for ( var i = 0; i < target; i++ ) {
				var span = document.createElement( 'span' );
				span.className = 'al-molecule';
				var r    = Math.random();
				var size = r < 0.15 ? 5 : ( r < 0.70 ? 3 : 4 );
				var breatheDelay = ( Math.random() * 7 ).toFixed( 2 );
				span.style.cssText =
					'left:'    + ( Math.random() * 99 + 0.5 ).toFixed( 2 ) + '%;' +
					'top:'     + ( Math.random() * 99 + 0.5 ).toFixed( 2 ) + '%;' +
					'width:'   + size + 'px;' +
					'height:'  + size + 'px;' +
					'animation-delay:' + breatheDelay + 's;';
				frag.appendChild( span );
				created.push( span );
			}
			field.appendChild( frag );
			if ( isTouch ) created.forEach( attachBlink );
			molecules = Array.prototype.slice.call( field.children );
			cachePositions();
		}

		function cachePositions () {
			molPos = molecules.map( function ( m ) {
				return {
					x: m.offsetLeft + m.offsetWidth  / 2,
					y: m.offsetTop  + m.offsetHeight / 2,
				};
			} );
		}

		function update () {
			rafId = null;
			for ( var i = 0; i < molecules.length; i++ ) {
				var p = molPos[ i ];
				var dx = mouseX - p.x;
				var dy = mouseY - p.y;
				var distSq = dx * dx + dy * dy;
				var intensity = 0;
				if ( distSq < maxDistSq ) {
					var t = 1 - Math.sqrt( distSq ) / maxDist;
					intensity = t * t;
				}
				molecules[ i ].style.setProperty( '--cursor-intensity', intensity.toFixed( 3 ) );
			}
		}

		function schedule () {
			if ( rafId === null ) rafId = requestAnimationFrame( update );
		}

		generate();

		if ( cursorOk ) {
			hero.addEventListener( 'mousemove', function ( e ) {
				var rect = hero.getBoundingClientRect();
				mouseX = e.clientX - rect.left;
				mouseY = e.clientY - rect.top;
				schedule();
			}, { passive: true } );

			hero.addEventListener( 'mouseleave', function () {
				mouseX = -9999;
				mouseY = -9999;
				schedule();
			} );
		}

		// Debounced resize: regenerate the field so density stays consistent.
		var resizeTimer = null;
		window.addEventListener( 'resize', function () {
			if ( resizeTimer ) clearTimeout( resizeTimer );
			resizeTimer = setTimeout( generate, 180 );
		} );

		window.addEventListener( 'load', cachePositions );
	})();
	</script>
	<?php
}, 22 );

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
