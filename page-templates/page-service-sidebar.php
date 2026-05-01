<?php
/**
 * Template Name: Service Sidebar Page
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

get_header();
the_post();

$blocks = parse_blocks( get_the_content() );

// Separate hero, cta, and body blocks.
$hero_block  = null;
$cta_block   = null;
$body_blocks = array();

foreach ( $blocks as $block ) {
	if ( 'acf/cb-hero' === $block['blockName'] && null === $hero_block ) {
		$hero_block = $block;
	} elseif ( 'acf/cb-cta' === $block['blockName'] ) {
		$cta_block = $block;
	} else {
		$body_blocks[] = $block;
	}
}
?>
<main id="main">

	<?php
	if ( $hero_block ) {
		echo apply_filters( 'the_content', serialize_block( $hero_block ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	?>

	<div class="container my-5">
		<div class="row g-5">
			<div class="col-lg-9">
				<?php
				foreach ( $body_blocks as $block ) {
					echo apply_filters( 'the_content', serialize_block( $block ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
				}
				?>
			</div>
			<div class="col-lg-3 service-sidebar">
				<?php
				$people_ids = get_field( 'associated_people' );
				if ( $people_ids ) {
					?>
				<h3 class="has-underline mb-4">Product contact</h3>
				<ul class="service-sidebar__people list-unstyled">
					<?php
					foreach ( $people_ids as $person_id ) {
						?>
					<div class="service-sidebar__person">
						<div class="d-flex align-items-center gap-2 mb-3">
							<?=
							get_the_post_thumbnail(
								$person_id,
								'thumbnail',
								array(
									'class' => 'service-sidebar__person-img rounded-circle mb-2',
									'width' => '80',
								)
							);
							?>
							<div class="service-sidebar__person-name"><?= esc_html( get_the_title( $person_id ) ); ?></div>
						</div>
						<div class="service-sidebar__person-contact d-flex flex-column mb-4">
							<?php
							$email = get_field( 'email_address', $person_id );
							if ( $email ) {
								?>
							<a href="mailto:<?= esc_attr( antispambot( $email ) ); ?>" class="service-sidebar__person-email">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
								<?= esc_html( antispambot( $email ) ); ?>
							</a>
								<?php
							}
							$phone = get_field( 'phone_number', $person_id );
							if ( $phone ) {
								?>
							<a href="tel:<?= esc_attr( parse_phone( $phone ) ); ?>" class="service-sidebar__person-phone">
								<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V21a1 1 0 0 1-1 1A17 17 0 0 1 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.56a1 1 0 0 1-.25 1.02l-2.2 2.21z"/></svg>
								<?= esc_html( $phone ); ?>
							</a>
								<?php
							}
							?>
						</div>
					</div>
						<?php
					}
					?>
				</ul>
					<?php
				}
				?>
			</div>
		</div>
	</div>

	<?php
	if ( $cta_block ) {
		echo apply_filters( 'the_content', serialize_block( $cta_block ) ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped
	}
	?>

</main>

<?php
add_action(
	'wp_footer',
	function () {
		?>
<script>
(function () {
	if ( window.matchMedia( '(prefers-reduced-motion: reduce)' ).matches ) return;

	const sidebar = document.querySelector( '.service-sidebar' );
	if ( ! sidebar ) return;

	gsap.from( sidebar, {
		y: 20,
		opacity: 0,
		duration: 0.6,
		ease: 'power2.out',
		delay: 0.3,
	} );
})();
</script>
		<?php
	},
	20
);

get_footer();
