<?php get_header(); ?>
<?php get_sidebar(); ?>
	<div id="main">

		<?php if (have_posts()) : ?>

		 <?php $post = $posts[0]; // Hack. Set $post so that the_date() works. ?>
<?php /* If this is a category archive */ if (is_category()) { ?>				
		<h1>Archive for the '<?php echo single_cat_title(); ?>' Category</h1>
		
 	  <?php /* If this is a daily archive */ } elseif (is_day()) { ?>
		<h1>Archive for <?php the_time('F jS, Y'); ?></h1>
		
	 <?php /* If this is a monthly archive */ } elseif (is_month()) { ?>
		<h1>Archive for <?php the_time('F, Y'); ?></h1>

		<?php /* If this is a yearly archive */ } elseif (is_year()) { ?>
		<h1>Archive for <?php the_time('Y'); ?></h1>
		
	  <?php /* If this is a search */ } elseif (is_search()) { ?>
		<h1>Search Results</h1>
		
	  <?php /* If this is an author archive */ } elseif (is_author()) { ?>
		<h1>Author Archive</h1>

		<?php /* If this is a paged archive */ } elseif (isset($_GET['paged']) && !empty($_GET['paged'])) { ?>
		<h1>Blog Archives</h1>

		<?php } ?>


		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>

		<?php while (have_posts()) : the_post(); ?>
			
				<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title(); ?>"><?php the_title(); ?></a></h1>
				<?php if (function_exists("the_bunny_tags")) {
						the_bunny_tags();
						}
					?>
				<p class="post-footer align-right">
					 Posted in <?php the_category(', ') ?> on <span class="date"><?php the_time('F jS, Y') ?></span> <!-- by <?php the_author() ?> --> <strong>|</strong>
				<?php edit_post_link('Edit','','<strong> |</strong>'); ?>  <?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?></p>
					<?php the_excerpt(); ?>
					<!--
						<?php trackback_rdf(); ?>
					-->
				</p>
				
				<p>[ <a href="#top">Back to top</a> ]</p>
				
			
	
		<?php endwhile; ?>

		<div class="navigation">
			<div class="alignleft"><?php next_posts_link('&laquo; Previous Entries') ?></div>
			<div class="alignright"><?php previous_posts_link('Next Entries &raquo;') ?></div>
		</div>
	
	<?php else : ?>

		<h1 class="center">Not Found</h1>
		<?php include (TEMPLATEPATH . '/searchform.php'); ?>

	<?php endif; ?>
		
	</div>
		
		<!-- content-wrap ends here -->	
		</div>
<?php get_footer(); ?>