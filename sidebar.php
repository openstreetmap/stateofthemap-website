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
        <a href="/schedule">Conference Schedule</a>
      </ul>
    </div>

   <h1>Further Information</h1>
    <div class="left-box">
      <ul class="sidemenu">
      </ul>
    </div>

   <h1>Sponsors</h1>
    <div class="left-box">
      <ul class="sidemenu">
Gold:<br>
<a href="http://www.cloudmade.com"><img src="/wp-content/uploads/2008/07/cloudmade_small_logo.png" border="0"></a>
<br><br>Silver:<br>
<a href="http://www.itoworld.com/"><img src="/wp-content/uploads/2008/04/ito.jpg" border="0"></a>
<br />
<br />
<a href="http://www.and.com/"><img src="/wp-content/uploads/2008/04/and.jpg" border="0"></a>
<br />
<br />
<a href="http://www.geocommons.com/"><img src="/wp-content/uploads/2008/05/geocommons.jpg" border="0"></a>
<br />
<br />
<a href="http://www.multimap.com/"><img src="/wp-content/uploads/2008/05/multimap_logo-scaled2.jpg" border="0"></a>
<br><br>Bronze:<br>
<a href="http://www.nestoria.co.uk"><img src="http://2007.stateofthemap.org/wp-content/uploads/2007/07/nestoria.thumbnail.png" border="0"></a>
<br />
<br />
<a href="http://www.mapufacture.com"><img src="/wp-content/uploads/2008/04/mapufacture_logo.png" border="0"></a>


      <a href="/sponsors/">Information for potential sponsors</a></li>
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
