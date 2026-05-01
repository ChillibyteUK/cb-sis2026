<?php
/**
 * Block template for CB People.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

$people = get_posts(
	array(
		'post_type'      => 'person',
		'posts_per_page' => -1,
		'orderby'        => 'menu_order',
		'order'          => 'ASC',
	)
);

if ( ! $people ) {
	return;
}

?>
<section class="cb-people">
	<div class="container py-5">
		<h2>Who we are</h2>
		<hr>
		<div class="cb-people__grid mt-5">
			<?php
			foreach ( $people as $person ) {
				$thumbnail = get_the_post_thumbnail( $person->ID, 'thumbnail', array( 'class' => 'cb-people__img' ) );
				$bio       = get_the_excerpt( $person->ID );
				$prole     = get_field( 'role', $person->ID );
				?>
			<div class="cb-people__card">
				<?php
				if ( $thumbnail ) {
					?>
				<div class="cb-people__img-wrap">
					<?= wp_kses_post( $thumbnail ); ?>
				</div>
					<?php
				}
				?>
				<div class="cb-people__body">
					<h3 class="cb-people__name"><?= esc_html( get_the_title( $person->ID ) ); ?></h3>
					<?php
					if ( $prole ) {
						?>
					<div class="cb-people__role"><?= esc_html( $prole ); ?></div>
						<?php
					}
					if ( $bio ) {
						?>
					<div class="cb-people__bio"><?= esc_html( $bio ); ?></div>
						<?php
					}
					$phone    = get_field( 'phone_number', $person->ID );
					$email    = get_field( 'email_address', $person->ID );
					$linkedin = get_field( 'linkedin_url', $person->ID );
					if ( $phone || $email || $linkedin ) {
						?>
					<div class="cb-people__contact">
						<?php
						if ( $email ) {
							?>
						<a href="mailto:<?= esc_attr( antispambot( $email ) ); ?>" class="cb-people__contact-link">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20 4H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2zm0 4-8 5-8-5V6l8 5 8-5v2z"/></svg>
							<?= esc_html( antispambot( $email ) ); ?>
						</a>
							<?php
						}
						if ( $phone ) {
							?>
						<a href="tel:<?= esc_attr( parse_phone( $phone ) ); ?>" class="cb-people__contact-link">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M6.62 10.79a15.05 15.05 0 0 0 6.59 6.59l2.2-2.2a1 1 0 0 1 1.02-.24 11.36 11.36 0 0 0 3.56.57 1 1 0 0 1 1 1V21a1 1 0 0 1-1 1A17 17 0 0 1 3 5a1 1 0 0 1 1-1h3.5a1 1 0 0 1 1 1c0 1.25.2 2.45.57 3.56a1 1 0 0 1-.25 1.02l-2.2 2.21z"/></svg>
							<?= esc_html( $phone ); ?>
						</a>
							<?php
						}
						if ( $linkedin ) {
							?>
						<a href="<?= esc_url( $linkedin ); ?>" class="cb-people__contact-link cb-people__contact-link--linkedin" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn profile">
							<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" aria-hidden="true" focusable="false"><path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.037-1.852-3.037-1.853 0-2.136 1.445-2.136 2.939v5.667H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433a2.062 2.062 0 0 1-2.063-2.065 2.064 2.064 0 1 1 2.063 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/></svg>
							LinkedIn
						</a>
							<?php
						}
						?>
					</div>
						<?php
					}
					?>
				</div>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
