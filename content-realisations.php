<section id="realisations">
	<div class="container">
		<h1>Réalisations</h1>
	</div>
	<?php 
		// The Query
		$args = array(
				'post_type' => 'realisations');
		$the_query = new WP_Query( $args );
		$i = 0;
	?>

		<?php if ( $the_query->have_posts() ): ?>
			
			<?php while ( $the_query->have_posts() ): ?>
				
				<?php $the_query->the_post(); ?>
				
					<?php if($i === 0): ?>
						<div class="container">
					<?php endif; ?>
							
							<?php if($i === 1){$center = 1;}else{$center = 0;} ?>
							
							<article <?php if($center): ?>class="center"<?php endif; ?>>
								<?php $image = wp_get_attachment_image_src(get_field('image'), 'thumbnail'); ?>
								<img src="<?php echo $image[0]; ?>" alt="<?php echo get_the_title(get_field('image')) ?>">
								
								<div class="infos icon-search">
									<h1><?php the_title(); ?></h1>
									<span><?php echo get_field('technologies') ?></span>
								</div>
							</article>		
					
					<?php if($i === 2): ?>
							<div class="clear"></div>
						</div>
						<?php $i = 0; ?>
					<?php else: ?>
						<?php $i++; ?>
					<?php endif; ?>
			
			<?php endwhile; ?>
		
		<?php endif; ?>
	<div class="clear"></div>
</section>