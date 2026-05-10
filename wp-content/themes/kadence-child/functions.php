<?php
/**
 * Kadence Child — functions.php
 * Enqueues child stylesheet after Kadence's global CSS.
 */

defined( 'ABSPATH' ) || exit;

add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style(
		'al-dm-sans',
		'https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&display=swap',
		[],
		null
	);

	wp_enqueue_style(
		'kadence-child',
		get_stylesheet_uri(),
		[ 'kadence-global', 'al-dm-sans' ],  // loads after Kadence's CSS so our overrides win
		wp_get_theme()->get( 'Version' )
	);
} );

// ── Nav helpers (used in header.php) ──────────────────────────

if ( ! function_exists( 'al_page_url' ) ) {
	/**
	 * Return the permalink for a page by slug, or '#' if the page doesn't exist yet.
	 */
	function al_page_url( string $slug ): string {
		$page = get_page_by_path( $slug );
		return $page ? esc_url( get_permalink( $page ) ) : '#';
	}
}

if ( ! function_exists( 'al_blog_url' ) ) {
	/**
	 * Return the blog URL, honouring Settings > Reading if a Posts page is set.
	 */
	function al_blog_url(): string {
		$id = (int) get_option( 'page_for_posts' );
		return $id ? esc_url( get_permalink( $id ) ) : esc_url( home_url( '/blog/' ) );
	}
}

// ── Pillars accordion JS (front page only) ────────────────────

add_action( 'wp_footer', function () {
	if ( ! is_front_page() ) return;
	?>
	<script>
	(function () {
		var items = document.querySelectorAll( '.al-accordion-item' );
		if ( ! items.length ) return;

		items.forEach( function ( item ) {
			var trigger = item.querySelector( '.al-accordion-trigger' );
			if ( ! trigger ) return;

			trigger.addEventListener( 'click', function () {
				var isActive = item.classList.contains( 'is-active' );

				// Close all
				items.forEach( function ( i ) {
					i.classList.remove( 'is-active' );
					var t = i.querySelector( '.al-accordion-trigger' );
					if ( t ) t.setAttribute( 'aria-expanded', 'false' );
				} );

				// Open the clicked one (unless it was already open)
				if ( ! isActive ) {
					item.classList.add( 'is-active' );
					trigger.setAttribute( 'aria-expanded', 'true' );
				}
			} );
		} );
	})();
	</script>
	<?php
}, 21 );

// ── Mobile nav JS ─────────────────────────────────────────────

add_action( 'wp_footer', function () {
	?>
	<script>
	(function () {
		var toggle = document.getElementById( 'al-menu-toggle' );
		var nav    = document.getElementById( 'al-primary-nav' );
		if ( ! toggle || ! nav ) return;

		// Hamburger open/close
		toggle.addEventListener( 'click', function () {
			var open = this.getAttribute( 'aria-expanded' ) === 'true';
			this.setAttribute( 'aria-expanded', String( ! open ) );
			this.setAttribute( 'aria-label', open ? 'Open navigation menu' : 'Close navigation menu' );
			nav.classList.toggle( 'is-open', ! open );
			this.classList.toggle( 'is-active', ! open );
		} );

		// Dropdown toggles — only active on mobile (desktop uses CSS :hover)
		document.querySelectorAll( '.al-nav-label' ).forEach( function ( btn ) {
			btn.addEventListener( 'click', function () {
				if ( window.innerWidth >= 900 ) return;
				var group  = this.closest( '.al-nav-group' );
				var isOpen = group.classList.contains( 'is-open' );
				// Collapse all siblings first
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
