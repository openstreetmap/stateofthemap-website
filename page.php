<?php
get_header();
?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<div class="datecomrap">

<div class="date">
<?php the_time('M'); ?><br />
<span style="font-size:2em; font-weight:bold;"><?php the_time('d'); ?></span><br />
<?php the_time('Y'); ?>
</div><!-- end date -->


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


<?php comments_template(); ?>

     </div><!-- end storywrap -->

</div><!-- end post -->

<?php endwhile; else: ?>
<p style="margin:100px 0 0 100px; font-weight:bold;"><?php _e('Sorry, no posts matched your criteria.'); ?></p>
<?php endif; ?>

<div class="navlink">
<?php posts_nav_link(' &#8212; ', __('&laquo; Newer Posts'), __('Older Posts &raquo;')); ?>
</div><!-- end navlink -->


<?php get_footer(); ?>