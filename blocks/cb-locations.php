<?php
/**
 * Block template for CB Locations.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="cb-locations">
	<div class="container py-5">
		<h2>Our locations</h2>
		<div class="mb-4">Operating across the United Kingdom and Cyprus</div>
		<div class="row">
			<div class="col-md-6 d-flex flex-column gap-1">
				<div class="cb-locations__subtitle">United Kingdom</div>
				<div class="cb-locations__address mb-3">
					<?= wp_kses_post( get_field( 'address_uk', 'option' ) ); ?>
				</div>
				<div class="cb-locations__contact mt-auto">
					<a href="tel:<?= esc_attr( parse_phone( get_field( 'phone_uk', 'option' ) ) ); ?>" class="cb-locations__phone"><?= esc_html( get_field( 'phone_uk', 'option' ) ); ?></a><br>
					<a href="mailto:<?= esc_attr( antispambot( get_field( 'email_uk', 'option' ) ) ); ?>" class="cb-locations__email"><?= esc_html( antispambot( get_field( 'email_uk', 'option' ) ) ); ?></a>
				</div>
			</div>
			<div class="col-md-6 d-flex flex-column gap-1">
				<div class="cb-locations__subtitle">Cyprus</div>
				<div class="cb-locations__address mb-3">
					<?= wp_kses_post( get_field( 'address_cy', 'option' ) ); ?>
				</div>
				<div class="cb-locations__contact justify-self-end mt-auto">
					<a href="tel:<?= esc_attr( parse_phone( get_field( 'phone_cy', 'option' ) ) ); ?>" class="cb-locations__phone"><?= esc_html( get_field( 'phone_cy', 'option' ) ); ?></a><br>
					<a href="mailto:<?= esc_attr( antispambot( get_field( 'email_cy', 'option' ) ) ); ?>" class="cb-locations__email"><?= esc_html( antispambot( get_field( 'email_cy', 'option' ) ) ); ?></a>
				</div>
			</div>
		</div>
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

	const section = document.querySelector( '.cb-locations' );
	if ( ! section ) return;

	const cols = section.querySelectorAll( '.col-md-6' );
	if ( cols.length < 2 ) return;

	const opts = { opacity: 0, duration: 0.9, ease: 'power2.out' };

	gsap.timeline({
		scrollTrigger: {
			trigger: section,
			start: 'top 85%',
			once: true,
		}
	})
	.from( cols[0], { ...opts, x: -50 } )
	.from( cols[1], { ...opts, x:  50 }, '<' );
})();
</script>
		<?php
	},
	20
);