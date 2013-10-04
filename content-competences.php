<section id="competences">
	<div class="container">
		<h1>Compétences</h1>
		<?php 
			// The Query
			$args2 = array(
					'post_type' => 'competences',
					'posts_per_page' => -1);
			$the_query2 = new WP_Query( $args2 );
		?>

		<?php if ( $the_query2->have_posts() ): ?>
			
			<?php while ( $the_query2->have_posts() ): ?>
				
				<?php $the_query2->the_post(); ?>
				<div>
					<h2><?php the_title() ?></h2>
				</div>
			<?php endwhile; ?>
			
		<?php endif; ?>
	</div>
</section>