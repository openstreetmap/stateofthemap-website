<?php
/*
Template Name: Archives
*/
?>

<?php get_header(); ?>
<?php get_sidebar(); ?>
<div id="main">

<h1>Archives by Month:</h1>
  <ul>
    <?php wp_get_archives('type=monthly'); ?>
  </ul>

<h1>Archives by Subject:</h1>
  <ul>
     <?php wp_list_cats('sort_column=name&optioncount=1&hierarchical=0'); ?>
  </ul>

</div>
		
		<!-- content-wrap ends here -->	
		</div>
<?php get_footer(); ?>
