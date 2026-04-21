<?php
/**
 * Block template for CB CTA.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

?>
<section class="cb-cta">
	<div class="container mt-5">
		<div class="row py-5">
			<div class="col-md-6 offset-md-3">
				<h2><?= esc_html( get_field( 'title' ) ); ?></h2>
				<div class="w-constrained"><?= wp_kses_post( get_field( 'content' ) ); ?></div>
				<?php
				$button = get_field( 'link' );
				if ( $button ) {
					?>
				<div class="text-center">
					<a href="<?= esc_url( $button['url'] ); ?>" class="button button--primary mt-4"><?= esc_html( $button['title'] ); ?></a>
				</div>
					<?php
				}

				$post_text = get_field( 'post_text' );
				if ( $post_text ) {
					?>
				<div class="cb-cta__post-text text-center w-constrained mx-auto mt-4"><?= wp_kses_post( $post_text ); ?></div>
					<?php
				}
				?>
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

	const section = document.querySelector( '.cb-cta' );
	if ( ! section ) return;

	const targets = [
		section.querySelector( 'h2' ),
		section.querySelector( '.w-constrained' ),
		section.querySelector( '.button' ),
		section.querySelector( '.cb-cta__post-text' ),
	].filter( Boolean );

	gsap.from( targets, {
		y: 20,
		opacity: 0,
		duration: 0.6,
		ease: 'power2.out',
		stagger: 0.15,
		scrollTrigger: {
			trigger: section,
			start: 'top 85%',
			once: true,
		},
	} );
})();
</script>
		<?php
	},
	20
);