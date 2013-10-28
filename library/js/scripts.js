/*
Bones Scripts File
Author: Eddie Machado

This file should contain any js scripts you want to add to the site.
Instead of calling it in the header or throwing it inside wp_head()
this file will be called automatically in the footer so as not to
slow the page load.

*/

// IE8 ployfill for GetComputed Style (for Responsive Script below)
if (!window.getComputedStyle) {
    window.getComputedStyle = function(el, pseudo) {
        this.el = el;
        this.getPropertyValue = function(prop) {
            var re = /(\-([a-z]){1})/g;
            if (prop == 'float') prop = 'styleFloat';
            if (re.test(prop)) {
                prop = prop.replace(re, function () {
                    return arguments[2].toUpperCase();
                });
            }
            return el.currentStyle[prop] ? el.currentStyle[prop] : null;
        }
        return this;
    }
}

// as the page loads, call these scripts
jQuery(document).ready(function($) {

    /*
    Responsive jQuery is a tricky thing.
    There's a bunch of different ways to handle
    it, so be sure to research and find the one
    that works for you best.
    */
    
    /* getting viewport width */
    var responsive_viewport = $(window).width();
    
    /* if is below 481px */
    if (responsive_viewport < 481) {
    
    } /* end smallest screen */
    
    /* if is larger than 481px */
    if (responsive_viewport > 481) {
        
    } /* end larger than 481px */
    
    /* if is above or equal to 768px */
    if (responsive_viewport >= 768) {
    
        /* load gravatars */
        $('.comment img[data-gravatar]').each(function(){
            $(this).attr('src',$(this).attr('data-gravatar'));
        });
        
    }
    
    /* off the bat large screen actions */
    if (responsive_viewport > 1030) {
        
    }
    
	
	// add all your scripts here

    /* WTF Music Player */

    var mp3map = new Array();
    /* Removed artist specifics to prevent public GitHub consumption */

    
    
    
    var wtf_player = new jPlayerPlaylist({
        jPlayer: "#wtf_player",
        cssSelectorAncestor: "#wtf_player_container"
        }, [
   /* Removed artist specifics to prevent public GitHub consumption */   
    ], {
        playlistOptions: {
            itemClass: "track_deets"
    },
        swfPath: "http://2012.whatthefestival.com/_wp/wp-content/themes/wtf2012/js/",
        supplied: "mp3",
        wmode: "window",
        loop: true
    });

    $("#wtf_player").bind($.jPlayer.event.play, function() {
        var track_deets = $('.jp-playlist-current div a.track_deets').html().split(' -')[0];
        $("#track_info").text(track_deets);
    });

    $("#expand_collapse").toggle(
        function(event) {
            event.preventDefault();
            $('#persistent-bar').animate({
                height: '400px'
            }, 'slow');
            $(this).addClass('flip');
        }, function(event) {
            event.preventDefault();
            $('#persistent-bar').animate({
                height: '45px'
            }, 'slow');
            $(this).removeClass('flip');
        });

        $('a.artist_mp3').live('click', function(event) {
            event.preventDefault();
            wtf_player.play(mp3map[$(this).attr('id')]);
            $("#track_info").text($(this).attr('name'));
        }); 
	
    $(".wtf-tweets").liveTweets({operator: "from:whatthefestival", showThumbnails: false});

 
}); /* end of as page load scripts */


$(window).load(function() {  

    var $container = $('#gallery-1');
    $container.isotope({
        layoutMode : 'fitRows'
    });

});


/*! A fix for the iOS orientationchange zoom bug.
 Script by @scottjehl, rebound by @wilto.
 MIT License.
*/
(function(w){
	// This fix addresses an iOS bug, so return early if the UA claims it's something else.
	if( !( /iPhone|iPad|iPod/.test( navigator.platform ) && navigator.userAgent.indexOf( "AppleWebKit" ) > -1 ) ){ return; }
    var doc = w.document;
    if( !doc.querySelector ){ return; }
    var meta = doc.querySelector( "meta[name=viewport]" ),
        initialContent = meta && meta.getAttribute( "content" ),
        disabledZoom = initialContent + ",maximum-scale=1",
        enabledZoom = initialContent + ",maximum-scale=10",
        enabled = true,
		x, y, z, aig;
    if( !meta ){ return; }
    function restoreZoom(){
        meta.setAttribute( "content", enabledZoom );
        enabled = true; }
    function disableZoom(){
        meta.setAttribute( "content", disabledZoom );
        enabled = false; }
    function checkTilt( e ){
		aig = e.accelerationIncludingGravity;
		x = Math.abs( aig.x );
		y = Math.abs( aig.y );
		z = Math.abs( aig.z );
		// If portrait orientation and in one of the danger zones
        if( !w.orientation && ( x > 7 || ( ( z > 6 && y < 8 || z < 8 && y > 6 ) && x > 5 ) ) ){
			if( enabled ){ disableZoom(); } }
		else if( !enabled ){ restoreZoom(); } }
	w.addEventListener( "orientationchange", restoreZoom, false );
	w.addEventListener( "devicemotion", checkTilt, false );
})( this );