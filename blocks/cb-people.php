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
					if ( $bio ) {
						?>
					<div class="cb-people__bio"><?= esc_html( $bio ); ?></div>
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
