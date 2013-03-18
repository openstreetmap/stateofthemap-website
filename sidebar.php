<!-- begin sidebar -->

<div id="sidebar">

<ul>
<?php         /* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Sidebar") ) : ?>

<?php endif; ?>

</ul>
<br /><br /><br />
<div id="search">
<ul>
 <li style="margin-top:0px;">
   <form id="searchform" method="get" action="<?php bloginfo('home'); ?>">
        <div>
                <input type="text" name="s" id="s" size="11" />
                <input type="image" src="<?php bloginfo('url'); ?>/wp-content/themes/aerodrome/images/lens.png" title="search" alt="S" style="margin:0 0 -5px 3px;" />
        </div>
        </form>
 </li>
</ul>
</div><!-- end search -->

<ul>
<?php         /* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Right Sidebar") ) : ?>


        <?php wp_list_pages('title_li=<h3>' . __('Pages:') . '</h3>' ); ?>



        <?php wp_list_categories('title_li=<h3>' . __('Categories:') . '</h3>' ); ?>



 <li id="archives"><h3><?php _e('Archives:'); ?></h3>
        <ul>
         <?php wp_get_archives('type=monthly'); ?>
        </ul>
 </li>

 <li id="meta"><h3><?php _e('Meta:'); ?></h3>
        <ul>
                <?php wp_register(); ?>
                <li><?php wp_loginout(); ?></li>
                <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS'); ?>"><?php _e('RSS'); ?></a></li>
                <li><a href="<?php bloginfo('comments_rss2_url'); ?>" title="<?php _e('The latest comments to all posts in RSS'); ?>"><?php _e('Comments RSS'); ?></a></li>
                <li><a href="http://validator.w3.org/check/referer" title="<?php _e('This page validates as XHTML 1.0 Transitional'); ?>"><?php _e('Valid XHTML'); ?></a></li>
                <li><a href="http://gmpg.org/xfn/">XFN</a></li>
                <li><a href="http://wordpress.org/" title="<?php _e('Powered by WordPress, state-of-the-art semantic personal publishing platform.'); ?>">WP</a></li>
                <?php wp_meta(); ?>
        </ul>
 </li>

        <?php wp_list_bookmarks('title_after=</h3>&title_before=<h3>'); ?>


<?php endif; ?>





</ul>

</div><!-- end sidebar -->