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
			<div class="overlay"></div>
		</div>
	</section>
</div> 

<section class="welcome-bottom">
	<div class="top-recognition">
		<span>Top National Recognition</span>
		<div class="reco">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-asmbs.png" alt="Recognition icon">
			Bariatric Surgery Center of Excellence (American Society for Metabolic & Bariatric Surgery)
		</div>
		<div class="reco">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-bluecross.png" alt="Recognition icon">
			Designated Center for Bariatric Surgery (Blue Cross Blue Shield of Illinois)
		</div>
	</div>
	<div class="icon-video">
		<a href="<?php the_field('button_video'); ?>">
			<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/icon-video.png" alt="video icon">
		</a>
	</div>
</section>


<section id="aboutus" class="home-aboutus">
	<div>
		<h2><?php the_field('about_headline'); ?></h2>
		<span class="about-sub-head"><?php the_field('about_subheadline'); ?></span>
		<?php the_field('about_content'); ?>
		<a href="<?php the_field('about_button'); ?>" rel="nofollow" class="button">More About Us</a>
	</div>
	<div>
		<h2><?php the_field('about_headline_2'); ?></h2>
		<span class="about-sub-head"><?php the_field('about_sub_headline_2'); ?></span>
		<?php the_field('about_content_2'); ?>
		<a href="<?php the_field('learn_more_button'); ?>" rel="nofollow" class="button">Learn More</a>
		<a href="<?php the_field('view_patient_gallery_button'); ?>" rel="nofollow" class="button">View Patient Gallery</a>
	</div>
</section>

<div class="home-doctors b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-doctors.jpg">
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy our-docs" data-src="<?php bloginfo('template_directory'); ?>/images/bg-thedocs.png" alt="docs">

	<div class="the-docs b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-our-docs.png">
		<h3>Meet Our Doctors</h3>
		<?php if(have_rows('our_docs')): ?>
			<ul>
				<?php while(have_rows('our_docs')): the_row(); ?>
					<li>
						<a href="<?php the_sub_field('link'); ?>" rel="nofollow">
							<?php the_sub_field('name'); ?>
						</a>
					</li>
				<?php endwhile; ?>
			</ul>
		<?php endif; ?>
	</div>
</div>


<section class="home-weight b-lazy" data-src="<?php bloginfo('template_directory'); ?>/images/bg-weight.jpg">
	<h2><span>The Weight</span> is Over</h2>
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-scale" data-src="<?php bloginfo('template_directory'); ?>/images/icon-scale.png" alt="docs">
	<img src="data:image/gif;base64,R0lGODlhAQABAAAAACH5BAEKAAEALAAAAAABAAEAAAICTAEAOw==" class="b-lazy icon-patient" data-src="<?php bloginfo('template_directory'); ?>/images/icon-patient.png" alt="docs">
	<a href="<?php the_field('view_patient_gallery_button'); ?>" rel="nofollow" class="button">View Patient Gallery</a>
</section>


<?php get_footer()?>