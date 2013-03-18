<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">

	<?php if (have_posts()) : ?>

		<h1>Search Results</h1>
		<a name="top">
		<?php while (have_posts()) : the_post(); ?>
				
			<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
								
					<?php the_excerpt(); ?>
					<!--
						<?php trackback_rdf(); ?>
					-->
				
				<p class="post-footer align-right">Posted in <?php the_category(', ') ?> on <span class="date"><?php the_time('F jS, Y') ?></span> <strong>|</strong> <?php edit_post_link('Edit','','<strong> | </strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
				[ <a href="#top">Back to top</a> ]
				<?php endwhile; ?>
			</div>
			<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	
	<?php else : ?>

		<h2 class="center">Not Found</h2>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
</div>

<?php get_footer(); ?>