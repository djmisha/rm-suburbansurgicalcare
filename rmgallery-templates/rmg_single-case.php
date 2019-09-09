<?php get_header();?>


<main class="interior">
<section class="gallery-nav">
	<div class="backtogal">
		<a href="<?php bloginfo('url'); ?>/gallery/" class="button gallery-button"><i class="fas fa-th"></i> Gallery</a>
	</div>
	<!-- <div class="single-case-title">
		<?php the_title(); ?>
	</div> -->
	<div class="gal-prev-next">
		<?php

		/**
		* accepts an array
		* keys : 'class' , 'title' , 'hash'
		* if 'title' key is not present then default will be
		* - prev : &laquo; Previous
		* - next : Next &raquo;
		*/

	$rmg_case::prev( array(
		'class' => 'button-rmg button-gallery-prev button' ,
		'title'  => '<i class="fal fa-angle-left"></i> <span>Prev</span>') );

	$rmg_case::next( array(
		'class' => 'button-rmg button-gallery-next button' ,
		'title' => '<span>Next</span> <i class="fal fa-angle-right"></i>') );
		?>
	</div>
</section>
	<div class="single-case-content">
		<div class="case-wrap">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post();?>
			<div class="img-wrap">
				<?php foreach ( $post->rmg_case_imgs as $img ): ?>
					<div class="before-img img-frame">
						<img class="first "src="<?php echo $rmg_case::get_image($img['before_image_path']); ?>" alt="before image" />
						<div class="bna-label">Before</div>
					</div>
					<div class="after-img img-frame">
						<img class=""src="<?php echo $rmg_case::get_image($img['after_image_path']); ?>" alt="after image" />
						<div class="bna-label">After</div>
					</div>
				<?php endforeach; ?>
			</div>
			<?php if(!empty(get_the_content())): ?>
				<div class="patient-details">
					<span><?php the_title(); ?></span>
					<?php the_content();?>
				</div>
			<?php endif; ?>
			<?php endwhile; endif;?>
		</div>
	</div>
</main>

<?php get_footer();?>