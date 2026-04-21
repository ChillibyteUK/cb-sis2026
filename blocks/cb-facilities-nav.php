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
		?>
		<a href="/services/motor/" class="cb-facilities-nav__row cb-facilities-nav__row--motor">
			<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/icon--motor.svg' ); ?>" class="cb-facilities-nav__icon">
			<div class="cb-facilities-nav__ftitle">Motor</div>
			<div class="cb-facilities-nav__fdesc">Add-on protection products for motor policies and drivers.</div>
		</a>
		<a href="/services/home/" class="cb-facilities-nav__row cb-facilities-nav__row--home">
			<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/icon--home.svg' ); ?>" class="cb-facilities-nav__icon">
			<div class="cb-facilities-nav__ftitle">Home</div>
			<div class="cb-facilities-nav__fdesc">Household protection products designed for residential policies.</div>
		</a>
		<a href="/services/property/" class="cb-facilities-nav__row cb-facilities-nav__row--property">
			<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/icon--property.svg' ); ?>" class="cb-facilities-nav__icon">
			<div class="cb-facilities-nav__ftitle">Property</div>
			<div class="cb-facilities-nav__fdesc">Insurance solutions for landlords and rental property risks.</div>
		</a>
		<a href="/services/commercial/" class="cb-facilities-nav__row cb-facilities-nav__row--commercial">
			<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/icon--commercial.svg' ); ?>" class="cb-facilities-nav__icon">
			<div class="cb-facilities-nav__ftitle">Commercial</div>
			<div class="cb-facilities-nav__fdesc">Specialist protection products for business and professional risks.</div>
		</a>
		<a href="/services/caravan/" class="cb-facilities-nav__row cb-facilities-nav__row--caravan">
			<img src="<?= esc_url( get_stylesheet_directory_uri() . '/img/icon--caravan.svg' ); ?>" class="cb-facilities-nav__icon">
			<div class="cb-facilities-nav__ftitle">Caravan</div>
			<div class="cb-facilities-nav__fdesc">Protection products for touring and static caravan owners.</div>
		</a>
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
				start: 'top bottom-=20vw',
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