<?php
/**
 * The Template for displaying all single posts
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>


	<div class="blog_post">
		<?php while ( have_posts() ) : the_post(); ?>	
		
		<div class="blog-post-left">
		<h3>
			<?php the_title(); ?>
		</h3>
			 <div class="post-author">
<div class="author_des">
      <?php if( get_field('author_image') ): ?>
    <img class="author-img" src="<?php the_field('author_image'); ?>" />
  <?php endif; ?>

<?php if( get_field('author') ): ?>
  <span>  <?php the_field('author'); ?> </span>
  <?php endif; ?>

</div>
<?php  $post_date = get_the_date( 'm/d/y', $posts->ID ); ?>
<div class="date"><img src="/wp-content/uploads/2023/07/clock-1.png"><?php echo $post_date; ?> </div>


            </div>
			<div class="post-img">
			<?php
			if ( has_post_thumbnail() ) { 
			the_post_thumbnail( 'full' );
			}
			?>
			</div>
			
			<?php if( get_field('description') ): ?>
			  <span>  <?php the_field('description'); ?> </span>
			  <?php endif; ?>
			
			
		</div>
		
		

		<?php endwhile; // end of the loop. ?>
		
		<div class="blog-post-right">
		<div class="search-form">
 <?php get_search_form(); ?>
</div>

<div class="sidebar-box">
<div class="sidebar-box-header">
<h5> Categories </h5>
</div>
<div class="sidebar-box-body">
 <ul>
  <?php
$args = array(  
    'hide_empty'               => 1,    
    'exclude'                  =>array(3) // desire id
); 

$categories = get_categories($args );
  foreach ($categories as $category){
    echo "<li><span>";
    echo $category->name;
echo "</span> <b>";
    echo $category->category_count;
    echo "</b></li>";
  } ?>
</ul>
</div>

</div>



<div class="sidebar-box recent-post">
<div class="sidebar-box-header">
<h5> Recent Post</h5>
</div>
<div class="sidebar-box-body">
<ul>
	<?php
	$recent_posts = wp_get_recent_posts(array(
		'numberposts' => 4, // Number of recent posts thumbnails to display
		'post_status' => 'publish' // Show only the published posts
	));
	foreach( $recent_posts as $post_item ) : ?>
		<li>
			<a href="<?php echo get_permalink($post_item['ID']) ?>">
				
									<?php echo get_the_post_thumbnail($post_item['ID'], 'full'); ?>

                           <div class="text">
				<p class="slider-caption-class"><?php echo $post_item['post_title'] ?></p>
                            <span> <?php k99_relative_time(); ?> </span>
                           </div>
			</a>
		</li>
	<?php endforeach; ?>
</ul>
</div>

</div>


<div class="sidebar-box tags">
<div class="sidebar-box-header">
<h5> Tags</h5>
</div>
<div class="sidebar-box-body">
 <?php
$posttags = get_tags();
if ($posttags) {
  echo '<ul>';
  foreach($posttags as $tag) {
    echo '<li>' .$tag->name. '</li>'; 
  }
  echo '</ul>';
}
?>
</div>

</div>

<div class="sidebar-subsribe text-center">
  <h2>Subscribe to KBZ Money Alerts </h2>
<?php echo do_shortcode( '[contact-form-7 id="305" title="Sidebar Subscribe"]' ); 
 ?></div>
		</div>
		
	</div>

<div class="related-post">
	<div class="related-title">
		<h3 class="text-center">
			Related Post
		</h3>
		
	</div>
	<?php showRelatedPosts(); ?>
	<div>
		
	</div>
</div>


<?php get_footer(); ?>