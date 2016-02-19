var ww = document.body.clientWidth;
$(document).ready(function() {$(".nav li a").each(function() {if ($(this).next().length > 0) {$(this).addClass("parent");};})
$(".toggleMenu").click(function(e) {e.preventDefault();$(this).toggleClass("active");$(".nav").toggle();});adjustMenu();})
$(window).bind('resize orientationchange', function() {ww = document.body.clientWidth;adjustMenu();});
var adjustMenu = function() {
	if (ww < 768) {
		$(".toggleMenu").css("display", "inline-block");if (!$(".toggleMenu").hasClass("active")) {$(".nav").hide();} else {$(".nav").show();}
		$(".nav li").unbind('mouseenter mouseleave');$(".nav li a.parent").unbind('click').bind('click', function(e) {e.preventDefault();$(this).parent("li").toggleClass("hover");});
	} 
	else if (ww >= 768) {
		$(".toggleMenu").css("display", "none");$(".nav").show();$(".nav li").removeClass("hover");
		$(".nav li a").unbind('click');$(".nav li").unbind('mouseenter mouseleave').bind('mouseenter mouseleave', function() {
		 	// must be attached to li so that mouseleave is not triggered when hover over submenu
		$(this).toggleClass('hover');});}
}
$(document).ready(function() {RESPONSIVEUI.responsiveTabs();})
function initMenus() {
	$('ul.menu ul').hide();$.each($('ul.menu'), function(){$('#' + this.id + '.expandfirst ul:first').show();});
	$('ul.menu li a').click(function() {
			var checkElement = $(this).next();var parent = this.parentNode.parentNode.id;
if($('#' + parent).hasClass('noaccordion')) {$(this).next().slideToggle('normal');return false;}
if((checkElement.is('ul')) && (checkElement.is(':visible'))) {if($('#' + parent).hasClass('collapsible')) {$('#' + parent + ' ul:visible').slideUp('normal');}
				return false;}
if((checkElement.is('ul')) && (!checkElement.is(':visible'))) {$('#' + parent + ' ul:visible').slideUp('normal');checkElement.slideDown('normal');return false;
}});}$(document).ready(function() {initMenus();});
$(document).ready(function(){
    $('.slide-trigger').collapsable();
});
/* MOBILE COLLAPSE MENU */
(function($) {
  $.fn.collapsable = function(options) {
    // iterate and reformat each matched element
    return this.each(function() {
      // cache this:
      var obj = $(this);
      var tree = obj.next('.navigation');
      obj.click(function(){
        if( obj.is(':visible') ){ tree.toggle();}
      });
      $(window).resize(function(){
        if ( $(window).width() <= 570 ){tree.attr('style','');};
      });
    });
  };
})(jQuery);

jQuery(document).ready(function(){
    jQuery(window).scroll(function(){
        if (jQuery(this).scrollTop() > 100) {
            jQuery('.scrollup').fadeIn();
        } else {
            jQuery('.scrollup').fadeOut();
    }
});
jQuery('.scrollup').click(function(){
    jQuery("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});