<?php
/**
 * Block template for CB Contact.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

$form_shortcode = get_field( 'form_shortcode' );

?>
<section class="cb-contact">
	<div class="container">
		<div class="row g-5">
			<div class="col-md-8">
				<h2 class="has-underline">Enquiry Form</h2>
				<?= do_shortcode( $form_shortcode ); ?>
			</div>
			<div class="col-md-4">
				<h2 class="mb-4">Our offices</h2>
				<div class="cb-locations__subtitle">United Kingdom</div>
				<div class="cb-locations__address mb-3">
					<?= wp_kses_post( get_field( 'address_uk', 'option' ) ); ?>
				</div>
				<div class="cb-locations__contact mb-5">
					<a href="tel:<?= esc_attr( parse_phone( get_field( 'phone_uk', 'option' ) ) ); ?>" class="cb-locations__phone"><?= esc_html( get_field( 'phone_uk', 'option' ) ); ?></a><br>
					<a href="mailto:<?= esc_attr( antispambot( get_field( 'email_uk', 'option' ) ) ); ?>" class="cb-locations__email"><?= esc_html( antispambot( get_field( 'email_uk', 'option' ) ) ); ?></a>
				</div>

				<div class="cb-locations__subtitle">Cyprus</div>
				<div class="cb-locations__address mb-3">
					<?= wp_kses_post( get_field( 'address_cy', 'option' ) ); ?>
				</div>
				<div class="cb-locations__contact">
					<a href="tel:<?= esc_attr( parse_phone( get_field( 'phone_cy', 'option' ) ) ); ?>" class="cb-locations__phone"><?= esc_html( get_field( 'phone_cy', 'option' ) ); ?></a><br>
					<a href="mailto:<?= esc_attr( antispambot( get_field( 'email_cy', 'option' ) ) ); ?>" class="cb-locations__email"><?= esc_html( antispambot( get_field( 'email_cy', 'option' ) ) ); ?></a>
				</div>
			</div>
		</div>
	</div>
</section>