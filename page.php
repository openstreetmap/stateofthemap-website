<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div id="main">

    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
		  <h1><?php the_title(); ?></h1>
			<p>
				<?php the_content('<p>Read the rest of this page &raquo;</p>'); ?>
	
				<?php link_pages('<p><strong>Pages:</strong> ', '</p>', 'number'); ?>
	
			</p>
		
	    <?php edit_post_link('Edit this Entry','<p class="post-footer align-right">','</p>'); ?>
	  
	  <?php endwhile; endif; ?>
	  
	  <!-- content-wrap ends here -->	
		</div>
</div>
<?php get_footer(); ?>