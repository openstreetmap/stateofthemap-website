<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">
				
  <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	
			
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
						<?php if (function_exists("the_bunny_tags")) {
						the_bunny_tags();
						}
					?>
									<?php the_content('Read the rest of this entry &raquo;'); ?>
					<!--
						<?php trackback_rdf(); ?>
					-->
			
			<p class="post-footer align-right">
				Posted in <?php the_category(', ') ?> on <span class="date"><?php the_time('F jS, Y') ?></span> <!-- by <?php the_author() ?> --> <?php edit_post_link('Edit this entry.','',''); ?>
						
						<?php if (('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Both Comments and Pings are open ?>
							<br />You can <a href="#respond">leave a response</a>, or <a href="<?php trackback_url(true); ?>" rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (!('open' == $post-> comment_status) && ('open' == $post->ping_status)) {
							// Only Pings are Open ?>
							<br />Responses are currently closed, but you can <a href="<?php trackback_url(true); ?> " rel="trackback">trackback</a> from your own site.
						
						<?php } elseif (('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Comments are open, Pings are not ?>
							<br />You can skip to the end and leave a response. Pinging is currently not allowed.
			
						<?php } elseif (!('open' == $post-> comment_status) && !('open' == $post->ping_status)) {
							// Neither Comments, nor Pings are open ?>
							<br />Both comments and pings are currently closed.			
						
						<?php } ?>
				
			</p>
		
	<?php comments_template(); ?>
	
	    <div>
			<div class="alignleft"><small><?php previous_post_link('&laquo; %link') ?></small></div>
			<div class="alignright"><small><?php next_post_link('Next: %link &raquo;') ?></small></div>
		</div>
	
	<?php endwhile; else: ?>
	<p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
</div>
		
		<!-- content-wrap ends here -->	
		</div>
<?php get_footer(); ?>