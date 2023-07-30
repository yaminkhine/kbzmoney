<?php
/**
 * The template for displaying posts in the Aside post format
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	

	 <?php while (have_posts()) : the_post(); ?>
		<ul>
		<li class="Products row">

		<div class="col-sm-4">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<div class="col-sm-8">
			<h5> <?php echo get_the_title(); ?></h5>
			<?php $des =  get_field('description'); ?>
		   <p> <?php echo   $des; ?> </p>
			<div class="Products_link">
				<a href="<?php the_permalink()?>" class="a_link"> Product Detail</a>
			</div>
			
		</div>
					
			</li>	
			</ul>
  <?php endwhile; ?>
