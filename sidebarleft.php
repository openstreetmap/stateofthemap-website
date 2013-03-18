<!-- begin sidebarleft -->

<div id="sidebarleft">


<div style="margin-left:10px;">


<!-- I N S E R T   Y O U R   A D   C O D E   H E R E
erase the following lines starting with <img ... and insert your adsense or other ad code here 
Works best with 160x600 px ads, formatted with white background and black text color
if you don't want to display ads, erase the following lines starting with <img ... and put some widgets (design/widgets) into the left sidebar!
-->

<img src="<?php bloginfo('url'); ?>/wp-content/themes/aerodrome/images/sidead.png" alt="Sidead" />
<img src="<?php bloginfo('url'); ?>/wp-content/themes/aerodrome/images/sidead.png" alt="Sidead" />



</div>


<ul>
<?php         /* Widgetized sidebar, if you have the plugin installed. */
                if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("Left Sidebar") ) : ?>



<?php endif; ?>





</ul>

</div><!-- end sidebarleft -->