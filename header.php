<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head profile="http://gmpg.org/xfn/11">
        <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
        <title><?php bloginfo('name'); ?><?php wp_title(); ?></title>
        <link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
        <link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
        <link rel="alternate" type="application/atom+xml" title="Atom 1.0" href="<?php bloginfo('atom_url'); ?>" />
        <link rel="shortcut icon" type="image/x-icon" href="<?php bloginfo('url'); ?>/wp-content/themes/aerodrome/favicon.ico" />
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
        <?php wp_get_archives('type=monthly&format=link'); ?>
        <?php //comments_popup_script(); // off by default ?>
        <style type="text/css" media="screen">
                @import url( <?php bloginfo('stylesheet_url'); ?> );
        </style>
				
		<?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>	
        <?php wp_head(); ?>

<script src="http://twitterjs.googlecode.com/svn/trunk/src/twitter.min.js" type="text/javascript">
</script>

</head>

<body>

<div id="rap">

<div id="headernew">


<?php if (is_search() || is_404()) { ?>
<div id="headmenu">
        <ul>
		        <li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
        <?php wp_list_pages('depth=1&sort_column=menu_order&title_li='); ?>

        </ul>
		</div>
<?php } else { ?>
<div id="headmenu">
        <ul>
		<li><a href="<?php echo get_settings('home'); ?>/" title="Home">Home</a></li>
                <?php wp_list_pages('depth=1&sort_column=menu_order&title_li='); ?>
<?php
        if($post->post_parent)
                $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0"); else
                $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0"); ?>
				        
		</ul>
</div>				
<?php } ?>

<a href="<?php bloginfo('url'); ?>/"><img src="http://2011.stateofthemap.org/wp-content/uploads/2011/02/11logo.png" style="position:absolute; left: 12px; top: 15px; z-index:100;" /></a>

<a href="<?php bloginfo('url'); ?>/"><h1><?php bloginfo('name'); ?></h1></a>

<h2><?php bloginfo('description'); ?></h2>

<div style="position:absolute; left: 694px; top: 76px; color: #fff; width: 400px; font-size:12px; font-weight:bold; line-height:24px;" class="osmlinks">
OpenStreetMap links:<br />
<a href="http://www.openstreetmap.org/?lat=39.74566&lon=-105.00335&zoom=11&layers=B000FTF&mlat=39.74566&mlon=-105.00335" style="margin-right:12px; color: #fff;">The Map</a> <a href="http://wiki.openstreetmap.org/" style="margin-right:12px; color: #fff;">The Wiki</a> <a href="http://www.facebook.com/event.php?eid=156168987751967"><img src="http://2011.stateofthemap.org/wp-content/uploads/2011/05/2011_facebook.png" width="16" height="16" alt="Facebook" /></a> <a href="http://twitter.com/sotm"><img src="http://2011.stateofthemap.org/wp-content/uploads/2011/05/2011_twitter.png" width="16" height="16" alt="Twitter" /></a> <a href="http://2011.stateofthemap.org/rss"><img src="http://2011.stateofthemap.org/wp-content/uploads/2011/05/2011_rss.png" width="16" height="16" alt="RSS Feed" /></a>
</div>

</div><!-- end header -->

<div id="content">
