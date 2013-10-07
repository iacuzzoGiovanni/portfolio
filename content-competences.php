<section id="competences">
	<div class="container">
		<h1>Compétences</h1>
		<?php 
			// The Query
			$args2 = array(
					'post_type' => 'competences',
					'posts_per_page' => -1,
					'orderby' => 'date',
					'order' => 'ASC');
			$the_query2 = new WP_Query( $args2 );
			$c = 0;
		?>

		<?php if ( $the_query2->have_posts() ): ?>
			
			<?php while ( $the_query2->have_posts() ): ?>
				
				<?php $the_query2->the_post(); ?>
				<div class="skill <?php if($c === 1): ?>center<?php endif; ?>">
					<h2><?php the_title() ?></h2>
					<div>
						<?php $post_id = get_the_ID();?>
						<span class="<?php the_title() ?> <?php echo get_post_meta($post_id, 'niveau', true);  ?>"><?php echo(substr(get_post_meta($post_id, 'niveau', true), 1));  ?>%</span>
					</div>
				</div>
				
				<?php if($c === 2): ?>
					<?php $c = 0 ?>
				<?php else: ?>
					<?php $c++; ?>
				<?php endif; ?>
			
			<?php endwhile; ?>
			
		<?php endif; ?>
	</div>
	<div class="clear"></div>
</section>