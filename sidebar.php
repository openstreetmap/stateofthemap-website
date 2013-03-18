<!--Sidebar Starts here-->	
		<!-- content-wrap starts here -->
		<div id="content-wrap">
				
			<div id="sidebar">
					
				<h1>Categories</h1>
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
				
				<h1>Latest Links</h1>
                <div class="left-box">
			        <ul>
		    	      <?php get_links( -1, '<li>', '</li>', '', FALSE, '_id', FALSE, FALSE, 10, FALSE ); ?>
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
