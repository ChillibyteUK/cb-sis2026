<?php
/**
 * Block template for CB Hero.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;

$block_id      = $block['anchor'] ?? $block['id'] ?? wp_unique_id( 'cb-hero-' );
$background_id = get_field( 'background' );
$cta_1         = get_field( 'cta_1' );
$cta_2         = get_field( 'cta_2' );
?>

<section id="<?= esc_attr( $block_id ); ?>" class="cb-hero">
	<?php
	if ( $background_id ) {
		?>
	<div class="cb-hero__bg" aria-hidden="true">
		<?= wp_get_attachment_image( $background_id, 'full', false, array( 'class' => 'cb-hero__img' ) ); ?>
	</div>
		<?php
	}
	?>
	<div class="cb-hero__overlay" aria-hidden="true"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-8 has-white-color">
				<h1 class="mb-2"><?= esc_html( get_field( 'title' ) ); ?></h1>
				<div class="font-lead mb-2"><?= esc_html( get_field( 'subtitle' ) ); ?></div>
				<div class="cb-hero__intro mb-4"><?= wp_kses_post( get_field( 'intro' ) ); ?></div>
				<?php
				if ( $cta_1 || $cta_2 ) {
					?>
				<div class="cb-hero__ctas">
						<?php
						if ( $cta_1 ) {
							?>
					<a href="<?= esc_url( $cta_1['url'] ); ?>" class="button button--primary"<?= $cta_1['target'] ? ' target="' . esc_attr( $cta_1['target'] ) . '"' : ''; ?>><?= esc_html( $cta_1['title'] ); ?></a>
							<?php
						}
						if ( $cta_2 ) {
							?>
					<a href="<?= esc_url( $cta_2['url'] ); ?>" class="button button--secondary"<?= $cta_2['target'] ? ' target="' . esc_attr( $cta_2['target'] ) . '"' : ''; ?>><?= esc_html( $cta_2['title'] ); ?></a>
							<?php
						}
						?>
				</div>
					<?php
				}
				?>
			</div>
		</div>
	</div>
</section>

<?php if ( $background_id ) { ?>
<script>
document.addEventListener('DOMContentLoaded', function () {
	var section = document.getElementById(<?= wp_json_encode( $block_id ); ?>);
	if (!section) return;

	var ticking = false;

	function update() {
		var rect = section.getBoundingClientRect();
		var windowHeight = window.innerHeight;

		if (rect.bottom > 0 && rect.top < windowHeight) {
			var percent = (windowHeight - rect.top) / (windowHeight + rect.height);
			percent = Math.max(0, Math.min(1, percent));
			var translateY = (percent - 0.5) * 240;
			section.style.setProperty('--cb-hero-parallax-y', translateY.toFixed(1) + 'px');
		}

		ticking = false;
	}

	function onScroll() {
		if (!ticking) {
			window.requestAnimationFrame(update);
			ticking = true;
		}
	}

	window.addEventListener('scroll', onScroll, { passive: true });
	window.addEventListener('resize', onScroll);
	onScroll();
});
</script>
<?php } ?>

<?php
if ( is_front_page() ) {
	?>
<div class="cb-hero--srg">
	<div class="container py-3">
		<div class="row">
			<div class="col-md-8 has-white-color">
				<h2>Part of Specialist Risk Group</h2>
				<div>Supporting UK brokers with specialist insurance facilities</div>
			</div>
			<div class="col-md-4 ls-40">
				FCA regulated &#8226; UK &amp; Cyprus
			</div>
		</div>
	</div>
</div>
	<?php
}
