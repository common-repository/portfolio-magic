(function( $ ) {
	'use strict';

	/**
	 * All of the code for your public-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note that this assume you're going to use jQuery, so it prepares
	 * the $ function reference to be used within the scope of this
	 * function.
	 *
	 * From here, you're able to define handlers for when the DOM is
	 * ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * Or when the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and so on.
	 *
	 * Remember that ideally, we should not attach any more than a single DOM-ready or window-load handler
	 * for any particular page. Though other scripts in WordPress core, other plugins, and other themes may
	 * be doing this, we should try to minimize doing that in our own work.
	 */
	 jQuery(function() {		
	 	$('.takira_portfolio_item').hover(
	 		function() {
	 			$( this ).find('.takira_portfolio_title').css('line-height',$(this).height() + 'px' );
	 			var title_pos = ($(this).width() - $( this ).find('img').width())/2 + parseInt($(this).css("margin").replace("px", ""));
	 			$( this ).find('.takira_portfolio_title').css('width', $( this ).find('img').width() + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('height', $( this ).find('img').height() + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('left', title_pos + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('top', $(this).css("margin") );
	 			var top = $( this ).find('img').height()/2+17;
	 			var right = $( this ).find('img').width()/2-17;
	 			// $( this ).find('.takira_btn').css({'right':right + 'px','top':top + 'px'});
	 			$( this ).find('.takira_portfolio_title').fadeIn( 300 );
	 		}, function() {
	 			$( this ).find('.takira_portfolio_title').fadeOut( 300 );
	 		});
	 	$('#takira_mix_it_up .mix').hover(
	 		function() {
	 			top =  parseInt($( this ).find('img').css("margin").replace("px", "")) * 2 + parseInt($( this ).find('img').css("border-width").replace("px", ""));
	 			$( this ).find('.takira_portfolio_title').css('line-height',$(this).height() + 'px' );
	 			var title_pos = ($(this).width() - $( this ).find('img').width())/2;
	 			$( this ).find('.takira_portfolio_title').css('width', $( this ).find('img').width() + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('height', $( this ).find('img').height() + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('left', title_pos + 'px' );
	 			$( this ).find('.takira_portfolio_title').css('top', top + 'px' );
	 			var top = $( this ).find('img').height()/2+17;
	 			var right = $( this ).find('img').width()/2-17;
	 			$( this ).find('.takira_btn').css({'right':right + 'px','top':top + 'px'});
	 			$( this ).find('.takira_portfolio_title').fadeIn( 300 );
	 		}, function() {
	 			$( this ).find('.takira_portfolio_title').fadeOut( 300 );
	 		});
	 	jQuery('#takira_mix_it_up').mixItUp();
	 });

	 
	})( jQuery );
