<?php
/**
 * Footer template for the Identity Coda 2026 theme.
 *
 * This file contains the footer section of the theme, including navigation menus,
 * office addresses, and colophon information.
 *
 * @package cb-sis2026
 */

defined( 'ABSPATH' ) || exit;
?>
<div id="footer-top"></div>

<footer class="footer pt-5 pb-4">
    <div class="id-container px-4 px-md-5">
        <div class="row pb-4 g-4">
			<div class="col-12 col-md-6 col-lg-4 order-9 order-md-1">
				<strong>
					<?= do_shortcode( '[contact_email]' ); ?>
				</strong>
				<?= do_shortcode( '[social_icons class="fa-2x"]' ); ?>
			</div>
			<div class="col-12 col-sm-6 col-md-4 col-lg-2 order-2 order-md-3 order-lg-2">
				<div class="footer-title"><a href="/business-travel/">Business Travel</a></div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_business',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
				<div class="footer-title mt-4"><a href="/about/">About</a></div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_about',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
			</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 order-4 order-md-4 order-lg-3">
				<div class="footer-title"><a href="/solutions/">Solutions</a></div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_solutions',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
				<div class="footer-title mt-4"><a href="/specialist-travel/">Specialist Travel</a></div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_specialist',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
			</div>
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 order-6 order-md-7 order-lg-4">
				<div class="footer-title">Identity Companies</div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_identity',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
			</div>
			<!-- 5. Legal -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-2 order-6 order-md-7 order-lg-4">
				<div class="footer-title"><a href="/insights/">Resources</a></div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_resources',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
				<div class="footer-title mt-4">Legal &amp; info</div>
				<?=
				wp_nav_menu(
					array(
						'theme_location' => 'footer_menu_legal',
						'menu_class'     => 'footer__menu',
					)
				);
				?>
			</div>
		</div>
	</div>
	<div class="footer__logo">
		<div class="id-container py-5 px-4 px-md-5">
			<div id="footer-logo-clip" class="footer__logo-clip">
				<div id="footer-logo-inner" class="footer__logo-inner">
					<!-- Inline logo SVG (long form) so we can animate precisely -->
					<svg id="footer_1" data-name="Footer 1" xmlns="http://www.w3.org/2000/svg" viewBox="-1760 0 3520 214.02">
						<defs>
							<style>
							.cls-f1 {
								fill: #fff;
							}
							</style>
						</defs>
						<g id="footer_1-1" data-name="Footer 1">
							<polygon class="cls-f1" points="820.6 0 820.6 149.05 660.67 0 619.6 0 619.6 214.02 665.99 214.02 665.99 65.92 825.91 214.02 866.98 214.02 866.98 0 820.6 0"/>
							<path class="cls-f1" d="M1546.92,0c26.79,34.23,79.23,106.06,79.23,106.06L1704.44,0h55.56l-111.13,143.79v70.22h-46.38v-69.27L1490.39,0h56.53Z"/>
							<polygon class="cls-f1" points="1240.37 0 1240.37 39.17 1335.07 39.17 1335.07 214.02 1381.46 214.02 1381.46 39.17 1476.16 39.17 1476.16 0 1240.37 0"/>
							<polygon class="cls-f1" points="897.39 0 897.39 39.17 992.09 39.17 992.09 214.02 1038.47 214.02 1038.47 39.17 1133.17 39.17 1133.17 0 897.39 0"/>
							<rect class="cls-f1" width="47.35" height="214.01"/>
							<polygon class="cls-f1" points="361.14 0 361.14 214.01 400.7 214.01 578.08 214.01 578.08 174.84 400.7 174.84 400.7 126.59 578.08 126.59 578.08 87.42 400.7 87.42 400.7 39.17 578.08 39.17 578.08 0 361.14 0"/>
							<path class="cls-f1" d="M142.1,39.35h65.01c23.37,0,41.15,5.45,52.84,16.2,12.07,11.1,18.18,28.36,18.18,51.32,0,45.62-23.24,67.8-71.03,67.8h-65.01V39.35ZM295.48,27.97C275.76,9.41,247.04,0,210.1,0h-114.02v214.01s114.01,0,114.01,0c74.03,0,114.8-38.06,114.8-107.16,0-33.97-9.9-60.52-29.42-78.89"/>
							<rect class="cls-f1" x="1163.58" width="46.38" height="214.01"/>
						</g>
					</svg>
				</div>
			</div>
			<div id="footer-logo-clip-2" class="footer__logo-clip-2">
				<svg id="footer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 932.78 185.99">
					<defs>
						<style>
						.cls-f1 {
							fill: #fff;
						}
						</style>
					</defs>
					<g id="footer_1-2" data-name="Layer 2">
						<polygon class="cls-f1" points="40.74 42.61 40.74 57.97 91.01 57.97 91.01 185.99 108.8 185.99 108.8 57.97 159.07 57.97 159.07 42.61 40.74 42.61"/>
						<path class="cls-f1" d="M242.64,126.38h-37.03V57.97h37.03c13.79,0,24.27,2.97,31.44,8.91,7.17,5.94,10.75,14.37,10.75,25.3s-3.59,19.19-10.75,25.19c-7.17,6.01-17.66,9.01-31.44,9.01M275.12,135.6c8.96-3.96,15.82-9.63,20.58-17,4.76-7.37,7.14-16.18,7.14-26.42,0-15.57-5.31-27.72-15.93-36.46-10.62-8.74-25.24-13.11-43.86-13.11h-55.23v143.38h17.79v-44.45h37.44c3.63,0,7.07-.22,10.4-.56l32.21,45.01h19.65l-34.99-48.62c1.62-.56,3.27-1.09,4.79-1.77"/>
						<path class="cls-f1" d="M394.99,60.73l33.11,73.84h-66.1l32.99-73.84ZM386.2,42.61l-65.78,143.38h18.62l16.56-37.07h78.93l16.62,37.07h18.82l-65.99-143.38h-17.79Z"/>
						<polygon class="cls-f1" points="587.71 42.61 533.63 163.85 479.73 42.61 460.28 42.61 524.2 185.99 541.99 185.99 605.71 42.61 587.71 42.61"/>
						<polygon class="cls-f1" points="630.74 42.61 630.74 185.99 734.37 185.99 734.37 170.63 648.53 170.63 648.53 120.85 722.37 120.85 722.37 105.49 648.53 105.49 648.53 57.97 731.48 57.97 731.48 42.61 630.74 42.61"/>
						<polygon class="cls-f1" points="775.2 42.61 775.2 185.99 872.84 185.99 872.84 170.63 792.99 170.63 792.99 42.61 775.2 42.61"/>
						<rect class="cls-2" style="fill:transparent" width="932.78" height="185.99"/>
					</g>
				</svg>
			</div>
		</div>
	</div>
	<div class="id-container px-4 px-md-5 pt-4 footer__colophon">
		EQD Travel Ltd. Registered in Northern Ireland: NI602037 | VAT Number - GB 175 2550 07
	</div>
</footer>
<script>
(function(){
    const clip = document.getElementById('footer-logo-clip');
    const inner = document.getElementById('footer-logo-inner');
	const clip2 = document.getElementById('footer-logo-clip-2');
    if (!clip || !inner) return;

    const prefersReduced = window.matchMedia && window.matchMedia('(prefers-reduced-motion: reduce)').matches;
    let triggered = false;

	// Set initial state immediately to avoid a pre-animation flash at natural size.
	clip.style.width = '100%';
	inner.style.transformOrigin = 'left center';
	inner.style.width = '200%';
	inner.style.display = 'block';
	inner.style.transform = 'translateX(0)';
	inner.style.transition = 'none';

    function prepareAndAnimate() {
        clip.style.width = '100%';
        inner.style.transformOrigin = 'left center';
        inner.style.width = '200%';
        inner.style.display = 'block';
        inner.style.transform = 'translateX(0)';

		if (clip2) {
			clip2.style.opacity = '0';
			clip2.style.transform = 'translateY(12px)';
			clip2.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
		}

		const revealClip2 = () => {
			if (!clip2) return;
			clip2.style.opacity = '1';
			clip2.style.transform = 'translateY(0)';
		};

        if (prefersReduced) {
            inner.style.transform = 'translateX(-50%)';
			revealClip2();
            return;
        }
        const animDuration = 1.6;
        const gsapEase = 'power3.out';
        if (window.gsap && typeof window.gsap.to === 'function') {
			if (clip2) {
				window.gsap.set(clip2, { autoAlpha: 0, y: 12 });
			}
			window.gsap.to(inner, {
				xPercent: -50,
				duration: animDuration,
				ease: gsapEase,
				onComplete: () => {
					if (clip2) {
						window.gsap.to(clip2, { autoAlpha: 1, y: 0, duration: 0.6, ease: 'power2.out' });
					}
				}
			});
        } else {
            inner.style.transition = 'transform ' + animDuration + 's cubic-bezier(.22,.9,.32,1)';
            requestAnimationFrame(() => { inner.style.transform = 'translateX(-50%)'; });
			setTimeout(revealClip2, animDuration * 1000);
        }
    }

    function triggerIfVisible(el) {
        const rect = el.getBoundingClientRect();
        const vh = window.innerHeight || document.documentElement.clientHeight;
        return rect.top < vh && rect.bottom > 0;
    }

    const triggerEl = document.querySelector('.footer__colophon') || document.querySelector('.footer__logo') || clip;

    if (triggerEl) {
        const observer = new IntersectionObserver((entries, obs) => {
            entries.forEach(entry => {
                if (triggered) return;
                if (entry.isIntersecting && entry.intersectionRatio > 0) {
                    triggered = true;
                    prepareAndAnimate();
                    obs.disconnect();
                }
            });
        }, { rootMargin: '0px 0px -10px 0px', threshold: [0.1] });

        observer.observe(triggerEl);

        // Immediately check if already visible (e.g., on fast loads or short pages)
        if (triggerIfVisible(triggerEl)) {
            triggered = true;
            prepareAndAnimate();
            observer.disconnect();
        }
    }

    let resizeTimer = null;
    window.addEventListener('resize', () => {
        if (triggered) return;
        clearTimeout(resizeTimer);
        resizeTimer = setTimeout(() => {
            clip.style.width = '100%';
            inner.style.width = '200%';
        }, 120);
    });
})();
</script>

<?php wp_footer(); ?>
</body>

</html>