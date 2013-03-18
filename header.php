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



</head>

<body>

<div id="rap">



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
				<?php
        if ($children) { ?>
<div id="headsubmenu">
				<ul>
                <?php echo $children; ?>
				</ul>
</div>
                <?php } ?>





<div id="header">

<div id="headerleft">
<h1><a href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a></h1>
<h2><?php bloginfo('description'); ?></h2>
</div><!-- end headerleft -->

<div id="headerright">
<a href="<?php bloginfo('rss_url'); ?>" title="GET MY FEED"></a>
</div><!-- end headerright -->



<!-- H E A D E R   A D   S E C T I O N -->
<div id="headad">

<!-- ERASE THE FOLLOWING LINE AND INSERT YOUR HEAD AD CODE FROM HERE -->

<img src="<?php bloginfo('url'); ?>/wp-content/themes/aerodrome/images/headad.png" alt="Headad" />

<!-- TO HERE -->
</div>

</div><!-- end header -->


<div id="headmenu2">
        <ul>

<!-- ******************** C U S T O M   L I N K   S E C T I O N   H E A D E R   B O T T O M *************** -->
<!-- INSERT YOUR CUSTOM LINKS AND LINK DESCRIPTIONS LIKE <li><a href="http://thebuckmaker.com" title="The Buckmaker is great">TheBuckmaker</a></li> -->



<li class="headlip">Custom Links:</li>

<li><a href="http://" title="">Link1</a></li>

<li><a href="http://" title="">Link2</a></li>

<li><a href="http://" title="">Link3</a></li>

<li><a href="http://" title="">Link4</a></li>

	</ul>


</div><!-- end headmenu2 -->

<div id="content">