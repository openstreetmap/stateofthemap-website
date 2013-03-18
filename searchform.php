<form class="search" method="get" id="searchform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
<input class="textbox" type="text" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" />
<input class="button" type="submit" id="searchsubmit" value="Search" />
</form>