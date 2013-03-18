<?php
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Left Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));
if ( function_exists('register_sidebar') )
register_sidebar(array(
'name' => 'Right Sidebar',
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
        'after_widget' => '</li>',
'before_title' => '<h3>',
'after_title' => '</h3>',
));

///////////////////////////////////////////////////////////////////////////////////////////////////
/* Begin background image select admin page. Created by Aaron Edwards - http://MissionsPlace.com */
/* It should work with Wordpress/WordpressMU 2.1+ */

// Image Sources (all Creative Commons License):
// Vector Landscape: http://www.flickr.com/photos/24471966@N04/2851251413/
// Africa: http://www.flickr.com/photos/mdorn/2168347/ 
// Temple: http://www.flickr.com/photos/stuckincustoms/527078736/
// Great Wall: http://www.flickr.com/photos/smokingpermitted/1952627233/
// Foggy Mountains: http://www.flickr.com/photos/davelau/1061671042/
// Antique Map: http://www.flickr.com/photos/normanbleventhalmapcenter/2674855383/
// Parchment Map: http://www.sxc.hu/photo/938403
// all other images taken from http://sxc.hu -- standard restrictions

//inserts new image url css in header
function aero_style() {
  ?>
  <style type="text/css">
  <?php if (get_theme_mod('aero_background_image') == "Default") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/default.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "ParchmentMap") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/parchment-map.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "OldMap") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/old-map.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Africa") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/africa.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Autumn") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/autumn.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Winter") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/winter.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Desert") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/desert.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Sunflowers") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/sunflowers.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "ChinaMountains") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/yellow-mountains.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "GreatWall") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/china-wall.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "VectorLandscape") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/vector-landscape.jpg) no-repeat fixed center bottom #eb7034; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Temple") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/temple.jpg) no-repeat fixed center center #fff; }
  <?php } elseif (get_theme_mod('aero_background_image') == "Christmas") { ?>
    body { background: url(<?php echo bloginfo('template_directory'); ?>/images/christmas.jpg) no-repeat fixed center center #fff; }
	<?php } ?>
  
  </style>
<?php
}
if (get_theme_mod('aero_background_image')) //add css hook if option is set
  add_action('wp_head', 'aero_style');



//admin menu process options
function aero_add_admin() {		
	if ( 'save' == $_POST['aero_action'] ) {

		// Update Options
		$aero_background_image = preg_replace( '|[^a-z]|i', '', $_POST['aero_background_image'] );
		set_theme_mod('aero_background_image', $aero_background_image );

		// Go back to the options
		header("Location: themes.php?page=aero-options&saved=true");
		die;
	}
	add_submenu_page('themes.php', __('Change Background Image'), __('Change Background Image'), 5, 'aero-options', 'aero_admin');
}

//actual menu to select background image
function aero_admin() {

	if ( $_GET['saved'] ) echo '<div id="message" class="updated fade"><p>Aero background image option saved. <a href="'. get_bloginfo('url') .'">View Site &raquo;</a></strong></p></div>';
	
?>

<div class="wrap">
<h2>Select a Background Image:</h2>
	<form id='aero_options' method="post">
		<p>
			<label><input type="radio" name="aero_background_image" value="Default" <?php if (get_theme_mod('aero_background_image') == "Default" || !get_theme_mod('aero_background_image')) { echo "checked='checked'"; } ?> /> Default<img src="<?php bloginfo('template_directory'); ?>/images/option-default.jpg" alt="Default" /></label>
      <label><input type="radio" name="aero_background_image" value="ParchmentMap" <?php if (get_theme_mod('aero_background_image') == "ParchmentMap") { echo "checked='checked'"; } ?> /> Parchment Map<img src="<?php bloginfo('template_directory'); ?>/images/option-parchment-map.jpg" alt="Parchment Map" /></label>
      <label><input type="radio" name="aero_background_image" value="OldMap" <?php if (get_theme_mod('aero_background_image') == "OldMap") { echo "checked='checked'"; } ?> /> Antique Map<img src="<?php bloginfo('template_directory'); ?>/images/option-old-map.jpg" alt="Old Map" /></label>
      <label><input type="radio" name="aero_background_image" value="Africa" <?php if (get_theme_mod('aero_background_image') == "Africa") { echo "checked='checked'"; } ?> /> Africa<img src="<?php bloginfo('template_directory'); ?>/images/option-africa.jpg" alt="Africa" /></label>
      <label><input type="radio" name="aero_background_image" value="Autumn" <?php if (get_theme_mod('aero_background_image') == "Autumn") { echo "checked='checked'"; } ?> /> Autumn<img src="<?php bloginfo('template_directory'); ?>/images/option-autumn.jpg" alt="Autumn" /></label>
      <label><input type="radio" name="aero_background_image" value="Winter" <?php if (get_theme_mod('aero_background_image') == "Winter") { echo "checked='checked'"; } ?> /> Winter<img src="<?php bloginfo('template_directory'); ?>/images/option-winter.jpg" alt="Winter" /></label>
      <label><input type="radio" name="aero_background_image" value="Desert" <?php if (get_theme_mod('aero_background_image') == "Desert") { echo "checked='checked'"; } ?> /> Desert<img src="<?php bloginfo('template_directory'); ?>/images/option-desert.jpg" alt="Desert" /></label>
      <label><input type="radio" name="aero_background_image" value="Sunflowers" <?php if (get_theme_mod('aero_background_image') == "Sunflowers") { echo "checked='checked'"; } ?> /> Sunflowers<img src="<?php bloginfo('template_directory'); ?>/images/option-sunflowers.jpg" alt="Sunflowers" /></label>
      <label><input type="radio" name="aero_background_image" value="ChinaMountains" <?php if (get_theme_mod('aero_background_image') == "ChinaMountains") { echo "checked='checked'"; } ?> /> Foggy Mountains<img src="<?php bloginfo('template_directory'); ?>/images/option-yellow-mountains.jpg" alt="China Mountains" /></label>
      <label><input type="radio" name="aero_background_image" value="GreatWall" <?php if (get_theme_mod('aero_background_image') == "GreatWall") { echo "checked='checked'"; } ?> /> Great Wall<img src="<?php bloginfo('template_directory'); ?>/images/option-china-wall.jpg" alt="Great Wall" /></label>
      <label><input type="radio" name="aero_background_image" value="VectorLandscape" <?php if (get_theme_mod('aero_background_image') == "VectorLandscape") { echo "checked='checked'"; } ?> /> Vector Landscape<img src="<?php bloginfo('template_directory'); ?>/images/option-vector-landscape.jpg" alt="Vector Landscape" /></label>
      <label><input type="radio" name="aero_background_image" value="Temple" <?php if (get_theme_mod('aero_background_image') == "Temple") { echo "checked='checked'"; } ?> /> Temple<img src="<?php bloginfo('template_directory'); ?>/images/option-temple.jpg" alt="Temple" /></label>
      <label><input type="radio" name="aero_background_image" value="Christmas" <?php if (get_theme_mod('aero_background_image') == "Christmas") { echo "checked='checked'"; } ?> /> Christmas<img src="<?php bloginfo('template_directory'); ?>/images/option-christmas.jpg" alt="Christmas" /></label>
	  </p>
		<input type="hidden" name="aero_action" value="save" />
	<p class="submit" style="clear: both"><input name="save" id="save" type="submit" value="Save Options &raquo;" /></p>
	</form>

</div>
<?php
}

//css for option list
function aero_admin_header() { ?>
<style media="screen" type="text/css">
  form#aero_options label { 
    width:150px;
    margin-left:10px;
    margin-bottom:20px;
  	display: block;
  	float: left;
  }
</style>
<?php }

add_action('admin_head', 'aero_admin_header');
add_action('admin_menu', 'aero_add_admin');

?>
<?php
add_filter('comments_template', 'legacy_comments');
function legacy_comments($file) {
	if(!function_exists('wp_list_comments')) 	$file = TEMPLATEPATH . '/legacy.comments.php';
	return $file;
}
?>