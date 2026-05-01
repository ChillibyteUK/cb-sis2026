<?php
/**
 * Block template for CB Facilities Nav.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="cb-facilities-nav">
	<div class="container">
		<?php
		if ( get_field( 'title' ) ) {
			?>
		<h2 class="cb-facilities-nav__title"><?= esc_html( get_field( 'title' ) ); ?></h2>
			<?php
		}
		if ( get_field( 'intro' ) ) {
			?>
		<div class="cb-facilities-nav__intro w-constrained-md mb-4"><?= wp_kses_post( get_field( 'intro' ) ); ?></div>
			<?php
		}
		$facilities = get_field( 'facilities', 'option' );
		if ( is_array( $facilities ) ) {
			foreach ( $facilities as $facility_row ) {
				$flink = $facility_row['link'] ?? '';
				if ( ! $flink ) {
					continue;
				}
				// get $facility from the link URL, e.g. /services/motor/ => motor.
				$facility = trim( wp_parse_url( $flink, PHP_URL_PATH ), '/' );
				$facility = str_replace( 'services/', '', $facility );
				?>
		<a href="<?= esc_url( $flink ); ?>" class="cb-facilities-nav__row cb-facilities-nav__row--<?= esc_attr( $facility ); ?>">
			<img src="<?= esc_url( $facility_row['icon'] ?? '' ); ?>" class="cb-facilities-nav__icon" alt="<?= esc_attr( ucfirst( $facility ) ); ?> icon">
			<div class="cb-facilities-nav__ftitle"><?= esc_html( $facility_row['title'] ?? '' ); ?></div>
			<div class="cb-facilities-nav__fdesc"><?= wp_kses_post( $facility_row['description'] ?? '' ); ?></div>
		</a>
			    <?php
			}
		}
		?>
	</div>
</section>
<?php
add_action(
	'wp_footer',
	function () {
		static $printed = false;
		if ( $printed ) {
			return;
		}
		$printed = true;
		?>
<script>
	(function () {
		if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) return;

		gsap.registerPlugin( ScrollTrigger );

		const section = document.querySelector( '.cb-facilities-nav' );
		if ( ! section ) return;

		const tl = gsap.timeline({
			scrollTrigger: {
				trigger: section,
				start: 'top 85%',
				once: true,
			}
		});

		section.querySelectorAll( '.cb-facilities-nav__row' ).forEach( ( row, i ) => {
			const icon  = row.querySelector( '.cb-facilities-nav__icon' );
			const title = row.querySelector( '.cb-facilities-nav__ftitle' );
			const desc  = row.querySelector( '.cb-facilities-nav__fdesc' );
			const pos   = i === 0 ? 0 : '>-=0.4';

			tl.from( [ icon, title ], { x: -40, opacity: 0, duration: 0.5, ease: 'power2.out' }, pos )
			.from( desc,            { x:  40, opacity: 0, duration: 0.5, ease: 'power2.out' }, '<' );
		} );
	})();
</script>
		<?php
	},
	20
);