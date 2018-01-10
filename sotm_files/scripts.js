




/*
     FILE ARCHIVED ON 5:04:59 Apr 7, 2015 AND RETRIEVED FROM THE
     INTERNET ARCHIVE ON 10:26:40 May 3, 2015.
     JAVASCRIPT APPENDED BY WAYBACK MACHINE, COPYRIGHT INTERNET ARCHIVE.

     ALL OTHER CONTENT MAY ALSO BE PROTECTED BY COPYRIGHT (17 U.S.C.
     SECTION 108(a)(3)).
*/

function hideothers(){
	$('.touchmenu').each(function(){
		$(this).parents().eq(0).removeClass('open');
	});
}

function hidesubothers(){
	$('.dropdown-sub').parent().each(function(){
		$(this).removeClass('open');
	});
}

function zoom(){}

$(function() {
	touch_screen=false;
	// touch device detect
	var isCoarsePointer = (window.matchMedia && matchMedia("(pointer: coarse)").matches);
	if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {touch_screen=true;}

if (isCoarsePointer||touch_screen) {
	//switching the non-touch menu to touch menu
	$('#notouch').addClass('hidden');
	$('#touch').removeClass('hidden');
}

$('.touchmenu').click(function (){
	var parent__= $(this).parents().eq(0);
	if (parent__.hasClass('open')){hideothers();parent__.removeClass('open');}else{hideothers();parent__.addClass('open');}
}); 


$('.touchd').click( function (){
	var parent_= $(this).parents().eq(2);
	var parent = $(this).parent();
	if (parent.hasClass('open')){parent.removeClass('open');}
	else{hidesubothers();parent.addClass('open');parent_.addClass('open');}

});

	$('.image-link img').each(function() {$(this).addClass('img-rounded');});
	$('#page img').each(function() {$(this).addClass('img-rounded');});
	$('.main input:submit').each(function() {$(this).addClass('btn btn-primary');});
	$('.pagination').children().addClass('btn btn-small');

	/*Nav Search block*/
	$('.navbar-wrapper .navbar-inner > .nav-collapse > .ccm-search-block-form > input:submit').addClass('btn');
	$('.navbar-wrapper .navbar-inner > .nav-collapse > .ccm-search-block-form').addClass('navbar-search form-search pull-right');
	$('.navbar-wrapper .navbar-inner > .nav-collapse > .ccm-search-block-form').each(function(){
		var a = $(this).html();
		var inputbox = "<input type=\"text\" name=\"query\" class=\"search-query\" value=\"\" placeholder=\""+$(this).children('h3').text()+"\">";
		var submit = "<input type='submit' name='submit' class=\"btn btn-inverse btn-primary\" value=\""+$(this).children('input:submit').val()+"\">";			
		$(this).html('');	
		$(this).html('<div class="input-append">'+inputbox+submit+'</div>');
	});	
	
	/*Nav Search block - Edit mode */
	$('.navbar-wrapper .navbar-inner > .nav-collapse > .ccm-global-area > .ccm-block > .ccm-search-block-form > input:submit').addClass('btn btn-inverse');
	$('.navbar-wrapper .navbar-inner > .nav-collapse > .ccm-global-area > .ccm-block > .ccm-search-block-form').addClass('navbar-search form-search pull-right');
	$('.navbar-wrapper.navbar-inner > .nav-collapse >.ccm-global-area > .ccm-block >  .ccm-search-block-form').each(function(){
		var a = $(this).html();
		var inputbox = "<input type=\"text\" name=\"query\" class=\"search-query\" value=\"\" placeholder=\""+$(this).children('h3').text()+"\">";
		var submit = "<input type='submit' name='submit' class=\"btn btn-inverse btn-primary\" value=\""+$(this).children('input:submit').val()+"\">";
			
		$(this).html('');	
		$(this).html('<div class="input-append">'+inputbox+submit+'</div>');
	});


	$('#page').show(); // show the page after do jQuery modify
	
  });
  
 