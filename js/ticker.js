/***************************************************
 * jQuery Infinite Side-Scrolling News Ticker
 * Author: Bryan Mytko bryanmytko@gmail.com
 * Version: 0.1 (3-09-11)
 * Dual licensed under the MIT and GPL licenses:
 * http://www.opensource.org/licenses/mit-license.php
 * http://www.gnu.org/licenses/gpl.html
 * Requires:
 * jQuery v1.2.x or later
****************************************************/

$(document).ready(function(){
	
	var ul = 'ul#ticker';
	var container = $('div#ticker_container');
	var speed = 100000;//ms to complete animation
	
	var real_ul_width = 0;
	var ul_html = $(ul).parent().html();
	
	$(ul + ' li').each(function(){
		
		real_ul_width += ($(this).width() + parseInt($(this).css('padding-right')));
		
	});
	
	var scroll_amount = real_ul_width + container.width();

	function first_to_last(ul_x,w){

		$(ul_x).remove();
	    container.append(ul_html);
	    container.children().css({left: container.width()});
		a_scroll(container.children());

	}
	
	function a_scroll(ul,w){

		$(ul).animate({
			left: '-='+scroll_amount},
			speed,
			'linear',
			function(){
				first_to_last(ul);
			}
		);
		
	}
	
	$(ul).css({left:container.width()});
	
	a_scroll(ul);
	
});