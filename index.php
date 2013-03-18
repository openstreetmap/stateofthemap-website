<?php get_header(); ?>
<?php get_sidebar(); ?>
<!--Content Starts here-->
			<div id="main">
				<?php if (have_posts()) : ?>
				<?php while (have_posts()) : the_post(); ?>
				
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
					<?php if (function_exists("the_bunny_tags")) {
						the_bunny_tags();
						}
					?>	
	   <?php the_content('Read the rest of this entry &raquo;'); ?>
	   <p class="post-footer align-right">
	   Posted in <?php the_category(', ') ?> on <span class="date"><?php the_time('F jS, Y') ?></span> <!-- by <?php the_author() ?> --> <strong>|</strong>
       <?php edit_post_link('Edit','','<strong> | </strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
	<?php endwhile; ?>
	<div>
			<div class="alignleft"><small><?php previous_post_link('&laquo; %link') ?></small></div>
			<div class="alignright"><small><?php next_post_link('Next: %link &raquo;') ?></small></div>
	</div>
	<?php else : ?>

		<h1>Not Found</h1>
		<p>Sorry, but you are looking for something that isn't here.</p>
		<?php include (TEMPLATEPATH . "/searchform.php"); ?>

	<?php endif; ?>
								
				
			</div>
		
		<!-- content-wrap ends here -->	
		</div>
<!--Content Ends here-->		
<?php get_footer(); ?>			
