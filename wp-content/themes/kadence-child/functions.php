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

if ( ! function_exists( 'al_journal_url' ) ) {
	function al_journal_url(): string {
		$id = (int) get_option( 'page_for_posts' );
		return $id ? esc_url( get_permalink( $id ) ) : esc_url( home_url( '/journal/' ) );
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

// ── Gallery Photos: CPT + taxonomies + metaboxes + render helper ───────────────
//
// Gallery photos live in their own admin section ("Gallery Photos" sidebar item).
// They are NOT regular Media Library attachments — uploading a blog inline image
// has zero overlap with this. Each gallery photo carries:
//   - title          → the description shown under the image
//   - photo_category → which subpage it appears on (Research, People, Events)
//   - photo_bucket   → free-form tag (photographer / event name / context)
//   - captured date  → when the photo was taken (EXIF auto + manual override)
//   - featured image → the actual photo file
// Subpages auto-pull all photos in their category, newest captured-date first.

add_action( 'init', function () {

	register_post_type( 'gallery_photo', [
		'labels' => [
			'name'                  => 'Gallery Photos',
			'singular_name'         => 'Gallery Photo',
			'menu_name'             => 'Gallery Photos',
			'add_new'               => 'Add New',
			'add_new_item'          => 'Add New Gallery Photo',
			'edit_item'             => 'Edit Gallery Photo',
			'all_items'             => 'All Gallery Photos',
			'search_items'          => 'Search Gallery Photos',
			'featured_image'        => 'The Photo',
			'set_featured_image'    => 'Upload or pick the photo',
			'remove_featured_image' => 'Remove photo',
			'use_featured_image'    => 'Use as the photo',
		],
		'public'             => true,
		'publicly_queryable' => false,
		'exclude_from_search' => true,
		'has_archive'        => false,
		'show_in_rest'       => true,
		'show_in_nav_menus'  => false,
		'menu_position'      => 21,
		'menu_icon'          => 'dashicons-format-gallery',
		'supports'           => [ 'title', 'thumbnail', 'revisions' ],
		'rewrite'            => false,
	] );

	register_taxonomy( 'photo_category', 'gallery_photo', [
		'labels' => [
			'name'          => 'Photo Categories',
			'singular_name' => 'Photo Category',
			'menu_name'     => 'Categories',
			'all_items'     => 'All Categories',
		],
		'hierarchical'      => true,
		'public'            => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => false,
	] );

	register_taxonomy( 'photo_bucket', 'gallery_photo', [
		'labels' => [
			'name'          => 'Buckets',
			'singular_name' => 'Bucket',
			'menu_name'     => 'Buckets',
			'all_items'     => 'All Buckets',
			'add_new_item'  => 'Add New Bucket',
			'search_items'  => 'Search Buckets',
		],
		'hierarchical'      => false,
		'public'            => false,
		'show_ui'           => true,
		'show_admin_column' => true,
		'show_in_rest'      => true,
		'rewrite'           => false,
	] );

	// Seed the three required category terms once
	foreach ( [ 'Research', 'People', 'Events' ] as $name ) {
		if ( ! term_exists( $name, 'photo_category' ) ) {
			wp_insert_term( $name, 'photo_category', [ 'slug' => sanitize_title( $name ) ] );
		}
	}
} );

// Title-field placeholder: "Photo description …" instead of "Add title"
add_filter( 'enter_title_here', function ( $title, $post ) {
	if ( $post && $post->post_type === 'gallery_photo' ) {
		return 'Photo description (e.g. "Confocal microscopy of tumor margin")';
	}
	return $title;
}, 10, 2 );

// Replace default checkbox category metabox with a single-select radio metabox
add_action( 'add_meta_boxes_gallery_photo', function () {

	remove_meta_box( 'photo_categorydiv', 'gallery_photo', 'side' );

	add_meta_box(
		'al_photo_category_radio',
		'Photo Category',
		function ( $post ) {
			$current    = wp_get_object_terms( $post->ID, 'photo_category', [ 'fields' => 'ids' ] );
			$current_id = $current && ! is_wp_error( $current ) ? (int) $current[0] : 0;
			$terms      = get_terms( [ 'taxonomy' => 'photo_category', 'hide_empty' => false ] );
			wp_nonce_field( 'al_photo_category_save', 'al_photo_category_nonce' );
			echo '<p class="description" style="margin-bottom:.6rem;">Which media subpage this photo appears on.</p>';
			foreach ( $terms as $term ) {
				printf(
					'<label style="display:block; padding:.3rem 0; font-size:14px;"><input type="radio" name="al_photo_category" value="%d" %s style="margin-right:.4rem;" />%s</label>',
					(int) $term->term_id,
					checked( $current_id, $term->term_id, false ),
					esc_html( $term->name )
				);
			}
		},
		'gallery_photo',
		'side',
		'high'
	);

	add_meta_box(
		'al_photo_captured_date',
		'Captured Date',
		function ( $post ) {
			$date = get_post_meta( $post->ID, '_al_photo_captured_date', true );
			wp_nonce_field( 'al_photo_captured_date_save', 'al_photo_captured_date_nonce' );
			echo '<label for="al_photo_captured_date" style="display:block; margin-bottom:.4rem; font-size:13px;">When the photo was taken:</label>';
			printf(
				'<input type="date" id="al_photo_captured_date" name="al_photo_captured_date" value="%s" style="width:100%%;" />',
				esc_attr( $date )
			);
			echo '<p class="description" style="margin-top:.5rem;">Pre-filled from EXIF on upload when available. Defaults to today if neither EXIF nor manual is set.</p>';
		},
		'gallery_photo',
		'side',
		'default'
	);
} );

// Save: category (single), captured date (with EXIF + post_date fallback)
add_action( 'save_post_gallery_photo', function ( $post_id, $post ) {

	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) return;
	if ( ! current_user_can( 'edit_post', $post_id ) ) return;
	if ( wp_is_post_revision( $post_id ) ) return;

	// Category (single)
	if ( isset( $_POST['al_photo_category_nonce'] ) &&
	     wp_verify_nonce( $_POST['al_photo_category_nonce'], 'al_photo_category_save' ) ) {
		if ( ! empty( $_POST['al_photo_category'] ) ) {
			wp_set_object_terms( $post_id, [ (int) $_POST['al_photo_category'] ], 'photo_category', false );
		} else {
			wp_set_object_terms( $post_id, [], 'photo_category', false );
		}
	}

	// Captured date — manual input wins; else EXIF; else post_date
	if ( isset( $_POST['al_photo_captured_date_nonce'] ) &&
	     wp_verify_nonce( $_POST['al_photo_captured_date_nonce'], 'al_photo_captured_date_save' ) ) {

		$manual = isset( $_POST['al_photo_captured_date'] ) ? sanitize_text_field( wp_unslash( $_POST['al_photo_captured_date'] ) ) : '';

		if ( $manual ) {
			update_post_meta( $post_id, '_al_photo_captured_date', $manual );
		} else {
			$thumb_id = get_post_thumbnail_id( $post_id );
			$date     = '';
			if ( $thumb_id ) {
				$meta = wp_get_attachment_metadata( $thumb_id );
				if ( ! empty( $meta['image_meta']['created_timestamp'] ) ) {
					$date = gmdate( 'Y-m-d', (int) $meta['image_meta']['created_timestamp'] );
				}
			}
			if ( ! $date ) {
				$date = mysql2date( 'Y-m-d', $post->post_date ?: current_time( 'mysql' ) );
			}
			update_post_meta( $post_id, '_al_photo_captured_date', $date );
		}
	}
}, 10, 2 );

// Admin list view: add Captured Date + Featured Image columns
add_filter( 'manage_gallery_photo_posts_columns', function ( $cols ) {
	$new = [];
	foreach ( $cols as $k => $v ) {
		if ( $k === 'title' ) $new['thumb'] = 'Photo';
		$new[ $k ] = $v;
		if ( $k === 'title' ) $new['captured'] = 'Captured';
	}
	return $new;
} );

add_action( 'manage_gallery_photo_posts_custom_column', function ( $col, $post_id ) {
	if ( $col === 'thumb' ) {
		$thumb_id = get_post_thumbnail_id( $post_id );
		if ( $thumb_id ) {
			echo wp_get_attachment_image( $thumb_id, [ 60, 60 ], false, [ 'style' => 'border-radius:4px; object-fit:cover;' ] );
		} else {
			echo '<span style="color:#ccc;">—</span>';
		}
	} elseif ( $col === 'captured' ) {
		$date = get_post_meta( $post_id, '_al_photo_captured_date', true );
		echo $date ? esc_html( date_i18n( 'M j, Y', strtotime( $date ) ) ) : '<span style="color:#ccc;">—</span>';
	}
}, 10, 2 );

/**
 * Render gallery photos for a category, in our .al-media-figure markup.
 *
 * @param string $category_slug  One of: research, people, events.
 * @param int    $limit          -1 for all (subpages), positive int for hub rows.
 * @param string $shape          --square (default), --wide, --portrait, --featured.
 */
function al_render_gallery_photos( string $category_slug, int $limit = -1, string $shape = 'square' ): void {

	$q = new WP_Query( [
		'post_type'      => 'gallery_photo',
		'posts_per_page' => $limit,
		'post_status'    => 'publish',
		'tax_query'      => [ [
			'taxonomy' => 'photo_category',
			'field'    => 'slug',
			'terms'    => $category_slug,
		] ],
		'meta_key'       => '_al_photo_captured_date',
		'orderby'        => [ 'meta_value' => 'DESC', 'date' => 'DESC' ],
		'no_found_rows'  => true,
	] );

	if ( ! $q->have_posts() ) {
		echo '<div class="al-gallery-empty">';
		if ( current_user_can( 'edit_posts' ) ) {
			printf(
				'<p>No photos yet in this category. <a href="%s">Add the first one →</a></p>',
				esc_url( admin_url( 'post-new.php?post_type=gallery_photo' ) )
			);
		} else {
			echo '<p>Photos coming soon.</p>';
		}
		echo '</div>';
		return;
	}

	$shape_class = 'al-media-figure--' . sanitize_html_class( $shape );

	while ( $q->have_posts() ) {
		$q->the_post();
		$post_id  = get_the_ID();
		$thumb_id = get_post_thumbnail_id( $post_id );
		if ( ! $thumb_id ) continue;

		$buckets     = wp_get_object_terms( $post_id, 'photo_bucket', [ 'fields' => 'names' ] );
		$bucket_name = ( $buckets && ! is_wp_error( $buckets ) ) ? $buckets[0] : '';
		$date_raw    = get_post_meta( $post_id, '_al_photo_captured_date', true );
		$date_fmt    = $date_raw ? date_i18n( 'M Y', strtotime( $date_raw ) ) : '';
		$alt         = get_post_meta( $thumb_id, '_wp_attachment_image_alt', true );
		$desc        = get_the_title();
		$img         = wp_get_attachment_image( $thumb_id, 'large', false, [
			'alt'     => $alt ?: $desc,
			'loading' => 'lazy',
		] );
		?>
		<figure class="al-media-figure <?php echo esc_attr( $shape_class ); ?> al-media-figure--overlay" data-photo-id="<?php echo (int) $post_id; ?>">
			<?php echo $img; ?>
			<figcaption>
				<?php if ( $desc ) : ?><span class="al-media-figure__desc"><?php echo esc_html( $desc ); ?></span><?php endif; ?>
				<?php if ( $bucket_name || $date_fmt ) : ?>
				<span class="al-media-figure__meta">
					<?php if ( $bucket_name ) : ?><span class="al-media-figure__bucket"><?php echo esc_html( $bucket_name ); ?></span><?php endif; ?>
					<?php if ( $bucket_name && $date_fmt ) : ?><span class="al-media-figure__sep"> &middot; </span><?php endif; ?>
					<?php if ( $date_fmt ) : ?><span class="al-media-figure__date"><?php echo esc_html( $date_fmt ); ?></span><?php endif; ?>
				</span>
				<?php endif; ?>
			</figcaption>
		</figure>
		<?php
	}

	wp_reset_postdata();
}

// ── Mobile lightbox for gallery figures ────────────────────────────────────────
//
// On touch-primary devices, tapping a gallery figure opens a fixed lightbox
// with the photo and its metadata. Desktop is untouched (hover-overlay only).

add_action( 'wp_footer', function () {
	?>
	<div class="al-lightbox" aria-hidden="true" role="dialog" aria-modal="true" aria-label="Photo viewer">
		<div class="al-lightbox__backdrop" data-lightbox-close></div>
		<div class="al-lightbox__inner">
			<button class="al-lightbox__close" type="button" aria-label="Close" data-lightbox-close>&times;</button>
			<div class="al-lightbox__media"></div>
			<div class="al-lightbox__meta"></div>
		</div>
	</div>
	<script>
	(function () {
		// Only run on touch-primary devices (no hover capability)
		if ( window.matchMedia && window.matchMedia( '(hover: hover)' ).matches ) return;

		var lb       = document.querySelector( '.al-lightbox' );
		if ( ! lb ) return;
		var elMedia  = lb.querySelector( '.al-lightbox__media' );
		var elMeta   = lb.querySelector( '.al-lightbox__meta' );

		function open ( fig ) {
			var img = fig.querySelector( 'img' );
			var cap = fig.querySelector( 'figcaption' );
			if ( ! img ) return;
			elMedia.innerHTML = '';
			var clone = new Image();
			clone.src = img.currentSrc || img.src;
			clone.alt = img.alt || '';
			elMedia.appendChild( clone );
			elMeta.innerHTML = cap ? cap.innerHTML : '';
			lb.setAttribute( 'aria-hidden', 'false' );
			document.body.classList.add( 'al-lightbox-open' );
		}

		function close () {
			lb.setAttribute( 'aria-hidden', 'true' );
			document.body.classList.remove( 'al-lightbox-open' );
		}

		document.addEventListener( 'click', function ( e ) {
			var fig = e.target.closest( '.al-media-figure[data-photo-id]' );
			if ( fig ) {
				e.preventDefault();
				open( fig );
				return;
			}
			if ( e.target.closest( '[data-lightbox-close]' ) ) {
				close();
			}
		} );

		document.addEventListener( 'keydown', function ( e ) {
			if ( e.key === 'Escape' && lb.getAttribute( 'aria-hidden' ) === 'false' ) close();
		} );
	})();
	</script>
	<?php
}, 20 );
