<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="datecomrap">
         <div class="date">
         <?php the_time('M'); ?><br />
         <span style="font-size:2em; font-weight:bold;"><?php the_time('d'); ?></span><br />
         <?php the_time('Y'); ?>
         </div><!-- end date -->


         <!-- if you don't want the comment count left of the post, erase from here ... -->
         <div class="commy">
         <?php comments_popup_link(__('0'), __('1'), __('%'), '', __('--')); ?>    
         </div><!-- end commy -->
         <!-- to here -->


</div><!-- end datecomrap -->

     <div class="storywrap">

<div class="post" id="post-<?php the_ID(); ?>">
         <h3 class="storytitle"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>

        <div class="storycontent">
                <?php the_content(__('(more...)')); ?>
        </div><!-- end storycontent -->

        <div class="meta">

Written by <?php the_author() ?><?php _e(" in:"); ?> <?php the_category(',') ?> | <?php the_tags(__('Tags: '), ', ', ' '); ?><?php edit_post_link(__('Edit This')); ?>
<?php wp_link_pages(); ?><br />

        </div><!-- end meta -->

     </div><!-- end storywrap -->

</div><!-- end post -->

<?php endwhile; else: ?>

<div class="notfound"><?php _e('Sorry, no posts matched your criteria.<br />Maybe try another search?'); ?><br /><br />
<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
                <input type="text" name="s" id="s" size="25" />
                <input type="submit" value="Search">
</form><br />
Or visit <a href="<?php bloginfo('url'); ?>">Home?</a><br /><br />

Or read the latest news?<br /><br />
<div style="font-size:12px; margin-left:40px; font-weight:normal; text-align:left;">
<?php $lastposts = get_posts('numberposts=10');
foreach($lastposts as $post) :
   setup_postdata($post);
   ?>
   <?php the_title(); ?><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"> (read)</a><br />
<?php endforeach; ?>
</div>
</div>



<?php endif; ?>


<div class="navlink">
<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div><!-- end navlink -->


<?php get_footer(); ?>
