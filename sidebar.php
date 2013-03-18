<!--Sidebar Starts here-->	
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			<div id="sidebar">
					
<!--				<h1>Categoriest</h1>
				<div class="left-box">
					<ul class="sidemenu">				
					  <?php wp_list_cats('sort_column=name&optioncount=1'); ?>
					</ul>	
				</div>
			
				<h1>Archives</h1>
				<div class="left-box">
					<ul class="sidemenu">
   					  <?php wp_get_archives('type=monthly'); ?>
  					</ul>	
				</div>
		-->

    <h1>Conference</h1>
    <div class="left-box">
      <ul class="sidemenu">
        <a href="http://2007.stateofthemap.org/?page_id=16">Conference Schedule</a>
      </ul>
    </div>

   <h1>Further Information</h1>
    <div class="left-box">
      <ul class="sidemenu">
        <a href="http://wiki.openstreetmap.org/index.php/State_of_the_map">OpenStreetMap Wiki</a>
      </ul>
    </div>

   <h1>Sponsors</h1>
    <div class="left-box">
      <ul class="sidemenu">

<a href='http://www.sed.manchester.ac.uk/' title='manchester uni logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/logomanchester.thumbnail.gif' alt='manchester uni logo' /></a>

<a href='http://www.yahoo.com/' title='Yahoo Logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/y3.thumbnail.gif' alt='Yahoo Logo' /></a>

<a href='http://www.geocommons.com/' title='GeoCommons logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/nlogo.thumbnail.png' alt='GeoCommons logo' /></a>

<a href='http://www.google.com/' title='Google logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/logo.thumbnail.gif' alt='Google logo' /></a>

<a href='http://www.multimap.com/' title='multimap logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/logo.thumbnail.png' alt='multimap logo' /></a>

<a href='http://www.nestoria.co.uk/' title='Nestoria logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/nestoria.thumbnail.png' alt='Nestoria logo' /></a>

<a href='http://www.and.com/' title='AND logo'><img src='http://2007.stateofthemap.org/wp-content/uploads/2007/07/and-automotive-navigation-data-logo-blauw-groot.thumbnail.jpg' alt='AND logo' /></a>

      <a href="http://2007.stateofthemap.org/?page_id=5">Information for potential sponsors</a></li>
      </ul>
    </div>

   <h1>Contact</h1>
    <div class="left-box">
      <ul class="sidemenu">
      <li><a href="mailto:info@stateofthemap.org">General Enquiries</a></li>
      <li><a href="mailto:media@stateofthemap.org">Media Enquiries</a></li>
      <li><a href="mailto:sponsors@stateofthemap.org">Sponsorship</a></li>
      </ul>
    </div>

   <h1>Search the Site</h1>
    <div class="left-box">
      <ul class="sidemenu">
    <?php include (TEMPLATEPATH . "/searchform.php"); ?> 
     </ul>
    </div>

				<h1>Meta</h1>
				<div class="left-box">
				    <ul class="sidemenu">
					  <?php wp_register(); ?>
			          <li><?php wp_loginout(); ?></li>
			          <?php wp_meta(); ?>
					  <li><a href="<?php bloginfo('rss2_url'); ?>" title="<?php _e('Syndicate this site using RSS 2.0'); ?>"><?php _e('Entries <abbr title="Really Simple Syndication">RSS</abbr>'); ?></a></li>
					</ul>
				</div>			
				
			</div>
<!--Sidebar Ends here-->
