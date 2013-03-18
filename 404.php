<?php get_header(); ?>


<div class="notfound"><?php _e('Uups, not found. Sorry!<br />Maybe use our search?'); ?><br /><br />
<form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
                <input type="text" name="s" id="s" size="25" />
                <input type="submit" value="Search">
</form><br />
Or visit <a href="<?php bloginfo('url'); ?>">Home?</a><br /><br />

Or read the latest news?<br /><br />
<div style="font-size:12px; margin-left:30px; font-weight:normal; text-align:left;">
<?php $lastposts = get_posts('numberposts=10');
foreach($lastposts as $post) :
   setup_postdata($post);
   ?>
   <?php the_title(); ?><a href="<?php the_permalink(); ?>" id="post-<?php the_ID(); ?>"> (read)</a><br />
<?php endforeach; ?>
</div>
</div>

<?php get_footer(); ?>