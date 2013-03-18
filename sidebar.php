<!-- begin sidebar -->

<div id="sidebar">
 <div style="text-align: center; padding:10px; background-color:#fff;"><a href="/register-now/register"><img title="Register Now!" width="162" src="http://2009.stateofthemap.org/wp-content/uploads/2009/02/register_now_2.gif" alt="Register Now!" height="28" /></a></div>
<br />

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


        <?php wp_list_bookmarks('title_after=</h3>&title_before=<h3>'); ?>

<h3 style="margin-left:20px;">Latest tweets</h3>
<div id="tweet" style="margin-left:10px;margin-right:10px;">
 <p>Please wait while sotm tweets load...</p>
 <p><a href="http://twitter.com/sotm">twitter.com/sotm</a></p>
</div>

<?php endif; ?>

</ul>

</div><!-- end sidebar -->