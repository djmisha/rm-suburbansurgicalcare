<?php
	// Template Name: Home
?>

<?php get_header()?>

<div class="welcome-parallax will-parallax parallax-welcome b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-welcome.jpg">
	<section class="welcome" id="skiptomaincontent">
		<div class="welcome-logo">
			<h1>
				<a href="<?php bloginfo('url'); ?>"><img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/logo-header.png" alt=""></a>
			</h1> 
		</div>
		<div class="welcome-cta">
			<h2><?php the_field('welcome_headline'); ?></h2>
			<?php the_field('welcome_content'); ?>
			<a href="<?php the_field('learn_more_button'); ?>" class="button" rel="nofollow">Learn More</a>
			<a href="schedule_a_consultation_button" class="button" rel="nofollow">Schedule a Consultation</a>
		</div>
	</section>
</div> 

<!-- 
<section id="aboutus" class="home-aboutus b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-about.jpg">
	<h2><?php the_field('about_headline'); ?></h2>
	<?php the_field('about_content'); ?>
	<a href="<?php the_field('gallery_button'); ?>" rel="nofollow" class="button">View Our Patient Gallery</a>
</section>

<div class="home-doctor">
	<div class="doc-image b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-doctor.jpg"></div>
	<div class="doc-content"> 
		<h2><?php the_field('doctor_headline'); ?></h2>
		<?php the_field('doctor_cont'); ?>
		<a href="<?php the_field('doctor_button'); ?>" rel="nofollow" class="button">Learn More</a>
	</div>
</div>

<div class="home-featured-procedures">
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-1.jpg">
		<h2>Breast</h2>
		<?php if(have_rows('featured_breast')): ?>
			<ul>
				<?php while(have_rows('featured_breast')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-2.jpg">
		<h2>Body</h2>
		<?php if(have_rows('featured_body')): ?>
			<ul>
				<?php while(have_rows('featured_body')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
	<div class="the-procedure b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-featured-3.jpg">
		<h2>Face</h2>
		<?php if(have_rows('featured_face')): ?>
			<ul>
				<?php while(have_rows('featured_face')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('procedure_link'); ?>">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>	
	<div class="the-overlay"></div>
</div> -->

<?php get_footer()?>