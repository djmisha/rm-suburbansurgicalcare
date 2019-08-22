
<footer>
<div >

	<section class="upper-footer footer-parallax will-parallax parallax-welcome">
	<!-- <section class="upper-footer footer-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-footer.jpg"> -->
		<span class="the-headline">Request a Consultation</span>
		<div class="footer-form">
			<?php echo do_shortcode('[seaforms name="footer-contact-form"]'); ?>
		</div>
		<div class="footer-or-call">
			<i class="fas fa-mobile-alt"></i><br>
			or Call:<br>
			<?php if(have_rows('locations', 'option')): ?>
				<?php while(have_rows('locations', 'option')): the_row(); ?>
				<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
					<?php the_sub_field('phone', 'option'); ?></a>
				<?php endwhile; ?>
			<?php endif; ?>
		</div>
	</section>
	<div class="footer-logos">
		<?php if(have_rows('footer_logos', 'option')): ?>
			<ul>
				<?php while(have_rows('footer_logos', 'option')): the_row(); ?>
					<li>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<section class="footer-map">
		<div class="footer-splitter">
			 <div class="footer-address">
				<?php if(have_rows('locations', 'option')): ?>
					<?php while(have_rows('locations', 'option')): the_row(); ?>
						<div class="the-loc">
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-name" data-label="Address - Footer" target="_blank"  rel="noopener">
								<span><?php the_sub_field('name', 'option'); ?></span><br>
								<?php the_sub_field('address', 'option'); ?><br /> <?php the_sub_field('city', 'option'); ?>
							</a>
							<div class="loc-phone">
								<a href="<?php the_sub_field('phone_link', 'option'); ?>" class="track-outbound" data-label="Phone - Footer">
									Phone: <?php the_sub_field('phone', 'option'); ?></a>
									<br>
									<span>Fax: <?php the_sub_field('fax', 'option'); ?></span>
							</div>
							<a href="<?php the_sub_field('map_link', 'option'); ?>" class="track-outbound loc-map-directions" data-label="Address - Footer" target="_blank" rel="noopener">
								<i class="fas fa-map-marker-alt"></i>Map & Directions
							</a>
						</div>
					<?php endwhile; ?>
				<?php endif; ?>
			</div>
			<div class="footer-social">
				<!-- <div class="footer-social-connect">Follow Us</div> -->
				<a href="<?php the_field('facebook','options'); ?>" target="_blank" rel="noopener" title="facebook" aria-label="facebook"><i class="fab fa-facebook"></i></a>
				<a href="<?php the_field('twitter','options'); ?>" target="_blank" rel="noopener" title="twitter" aria-label="twitter"><i class="fab fa-twitter"></i></a>
				<a href="<?php the_field('instagram','options'); ?>" target="_blank" rel="noopener" title="instagram" aria-label="instagram"><i class="fab fa-instagram"></i></a>
				<a href="<?php the_field('youtube','options'); ?>" target="_blank" rel="noopener" title="youtube" aria-label="youtube"><i class="fab fa-youtube"></i></a>
			</div>
		</div>
	</section>

	<section class="lower-footer">
		<div class="reviews_markup"><?php do_action('reviews_markup'); ?></div>
		<div class="disclaimer">Stock model images are used throughout this website and are for illustrative purposes only. All before-and-after photos and patient testimonials on our site are from actual patients, and have been published with permission. Individual results may vary.</div>
		<div class="copyright">Copyright &copy; <?=date("Y")?> <?php bloginfo('title');?>. All rights reserved | <a href="<?php bloginfo('url'); ?>/privacy-policy">Privacy Policy</a> | <a href="<?php bloginfo('url'); ?>/sitemap/" title="Sitemap">Sitemap</a> </div>
		<div class="rm-sig"><span> | </span><a href="<?php the_field('rm_footer_link', 'options'); ?>" target="_blank" rel="noopener" title="<?php the_field('rm_footer_text', 'options'); ?>"><?php the_field('rm_footer_text', 'options'); ?></a> by <a href="https://www.rosemontmedia.com/" title="Rosemont Media" target="_blank" rel="noopener"><?php inline_svg('rm-logo'); ?></a></div>
	</section>

	<?php if(!is_front_page()): // Inside Page Logo ?>
	<div class="footer-warning">
		Any surgical or invasive procedure carries risks. Before proceeding, you should seek a second opinion from an appropriately qualified practitioner.
	</div>
	<?php endif; ?>

</footer>


<?php wp_footer();?>


<script id="__bs_script__">//<![CDATA[
    document.write("<script async src='http://HOST:35732/browser-sync/browser-sync-client.js?v=2.26.7'><\/script>".replace("HOST", location.hostname));
//]]></script>


</body>
</html>
