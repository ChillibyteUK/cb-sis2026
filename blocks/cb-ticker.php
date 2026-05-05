<?php
/**
 * Block template for CB Ticker.
 *
 * Three count-up statistics (title / prefix / number / suffix / post-title)
 * shown side by side. Numbers animate from 0 to their target value when the
 * block scrolls into view (count-up handler keyed off the
 * `.cb-ticker__stat-value` class and `data-stat-target` attribute).
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

$block_id = $block['anchor'] ?? $block['id'] ?? wp_unique_id( 'cb-ticker-' );

$stats = array();

for ( $index = 1; $index <= 3; $index++ ) {
	$stats[] = array(
		'title'     => get_field( 'title_' . $index ),
		'prefix'    => get_field( 'prefix_' . $index ),
		'value'     => get_field( 'number_' . $index ),
		'suffix'    => get_field( 'suffix_' . $index ),
		'posttitle' => get_field( 'post_title_' . $index ),
	);
}

// Bail if nothing has been entered in any stat.
$has_content = array_reduce(
	$stats,
	function ( $carry, $stat ) {
		return $carry
			|| '' !== (string) $stat['title']
			|| '' !== (string) $stat['prefix']
			|| '' !== (string) $stat['value']
			|| '' !== (string) $stat['suffix']
			|| '' !== (string) $stat['posttitle'];
	},
	false
);

if ( ! $has_content ) {
	return;
}
?>
<section id="<?= esc_attr( $block_id ); ?>" class="cb-ticker">
	<div class="container-xl">
		<div class="row justify-content-center">
			<?php
			foreach ( $stats as $stat ) {
				?>
			<div class="col-lg-4 p-4">
				<div class="cb-ticker__item text-center">
					<?php if ( '' !== (string) $stat['title'] ) : ?>
						<div class="cb-ticker__title"><?= esc_html( $stat['title'] ); ?></div>
					<?php endif; ?>
					<div class="cb-ticker__stat">
						<?php if ( '' !== (string) $stat['prefix'] ) : ?>
							<span class="cb-ticker__stat-prefix"><?= esc_html( $stat['prefix'] ); ?></span>
						<?php endif; ?>
						<span class="cb-ticker__stat-value" data-stat-target="<?= esc_attr( is_numeric( $stat['value'] ) ? $stat['value'] : 0 ); ?>">0</span>
						<?php if ( '' !== (string) $stat['suffix'] ) : ?>
							<span class="cb-ticker__stat-suffix"><?= esc_html( $stat['suffix'] ); ?></span>
						<?php endif; ?>
					</div>
					<?php if ( '' !== (string) $stat['posttitle'] ) : ?>
						<div class="cb-ticker__posttitle"><?= esc_html( $stat['posttitle'] ); ?></div>
					<?php endif; ?>
				</div>
			</div>
				<?php
			}
			?>
		</div>
	</div>
</section>
