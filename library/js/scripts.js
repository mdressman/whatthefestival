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
        
        var wtf_player = new jPlayerPlaylist({
            jPlayer: "#wtf_player",
            cssSelectorAncestor: "#wtf_player_container"
        }, [
        {
            title:"Emancipator - First Snow",
            mp3:"http://whatthefestival.com/mp3/Emancipator_First_Snow.mp3"
        },
        {
            title:"Big Gigantic - Nocturnal",
            mp3:"http://whatthefestival.com/mp3/BigGigantic_Nocturnal.mp3"
        },
        {
            title:"Gold Panda - Same Dream China",
            mp3:"http://whatthefestival.com/mp3/GoldPanda_SameDreamChina.mp3"
        },
        {
            title:"Bonobo - Kiara",
            mp3:"http://whatthefestival.com/mp3/Bonobo_Kiara.mp3"
        },
        {
            title:"Ghostland Observatory - Sad Sad City",
            mp3:"http://whatthefestival.com/mp3/Ghostland_SadSadCity.mp3"
        },
        {
            title:"Dillon Francis - Falling Up",
            mp3:"http://whatthefestival.com/mp3/Dillon_Francis_Falling_Up.mp3"
        },
        {
            title:"Claude VonStroke - Who's Afraid of Detroit",
            mp3:"http://whatthefestival.com/mp3/ClaudeVonStoke_WhosAfraidofDetroit.mp3"
        },
        {
            title:"Beats Antique - Cat Skillz",
            mp3:"http://whatthefestival.com/mp3/Beats_Antique_Cat_Skillz.mp3"
        },
        {
            title:"MiM0SA - Last Night In Town",
            mp3:"http://whatthefestival.com/mp3/Mimosa_LastNightInTown.mp3"
        },
        {
            title:"Paper Diamond - Same Old Song (rmx of the Weeknd)",
            mp3:"http://whatthefestival.com/mp3/Paper_Diamond_Same_Old_Song.mp3"
        },
        {
            title:"Holy Fuck - Latin Ameria",
            mp3:"http://whatthefestival.com/mp3/HolyFuck_LatinAmerica.mp3"
        },
        {
            title:"Inspired Flight - We All Want To Fly (f. Inspectah Deck)",
            mp3:"http://whatthefestival.com/mp3/Inspired_Flight_We_All_Want_To_Fly.mp3"
        },
        {
            title:"Sinjin Hawke - Crimson Tides",
            mp3:"http://whatthefestival.com/mp3/SinjinHawke_CrimsonTides.mp3"
        },
        {
            title:"Sepalcure - Pencil Pimp",
            mp3:"http://whatthefestival.com/mp3/Sepalcure_Pencil_Pimp.mp3"
        },
        {
            title:"Scuba - Flash Addict",
            mp3:"http://whatthefestival.com/mp3/Scuba_FlashAddict.mp3"
        },
        {
            title:"Bluetech - Change",
            mp3:"http://whatthefestival.com/mp3/Bluetech_Change.mp3"
        },
        {
            title:"Ana Sia - International Profile",
            mp3:"http://whatthefestival.com/mp3/Ana_Sia_-_International_Profile.mp3"
        },
        {
            title:"Danny Corn - Peebles",
            mp3:"http://whatthefestival.com/mp3/DannyCorn_Peebles.mp3"
        },
        {
            title:"EPROM - Regis Chilbin",
            mp3:"http://whatthefestival.com/mp3/EPROM_RegisChilbin.mp3"
        },
        {
            title:"GRiZ - Rock N Roll",
            mp3:"http://whatthefestival.com/mp3/Griz_RockNRoll.mp3"
        },
        {
            title:"Jupit3r - Hold On (rmx of SBTRKT)",
            mp3:"http://whatthefestival.com/mp3/Jupit3r-SBTRKT_Hold On_Remix.mp3"
        },
        {
            title:"Star Slinger - Chain Dumbin",
            mp3:"http://whatthefestival.com/mp3/StarSlinger_ChainDumbin.mp3"
        },
        {
            title:"NastyNasty - No Names",
            mp3:"http://whatthefestival.com/mp3/nasty_nasty-no_names.mp3"
        },
        {
            title:"Adventure Club - Youth (rmx of Foxes)",
            mp3:"http://whatthefestival.com/mp3/AdventureClub_Youth_rmx_of_Foxes.mp3"
        },
        {
            title:"Natasha Kmeto - Belly",
            mp3:"http://whatthefestival.com/mp3/NatashaKmeto_Belly.mp3"
        },
        {
            title:"Reva DeVito - Should Have Known",
            mp3:"http://whatthefestival.com/mp3/RevaDeVito_ShouldHaveKnown.mp3"
        },
        {
            title:"Beat Connection - Silver Screen",
            mp3:"http://whatthefestival.com/mp3/BeatConnection_SilverScreen.mp3"
        },
        {
            title:"ill-esha - Purple Legacy",
            mp3:"http://whatthefestival.com/mp3/ill-esha_Purple_Legacy.mp3"
        },
        {
            title:"Mansions on the Moon - Desert Island",
            mp3:"http://whatthefestival.com/mp3/MOTM_-_Desert_Island.mp3"
        },
        {
            title:"Gladkill - Back Where We Started",
            mp3:"http://whatthefestival.com/mp3/Gladkill_BackWhereWeStarted.mp3"
        },
        {
            title:"Sugarpill - Cats Used To Harmonize",
            mp3:"http://whatthefestival.com/mp3/Sugarpill_CatsUsedtoHarmonize.mp3"
        },      
        {
            title:"Minnesota - Jetstream",
            mp3:"http://whatthefestival.com/mp3/Minnesota_Jetstream.mp3"
        },
        {
            title:"Phutureprimitive - Center of Gravity",
            mp3:"http://whatthefestival.com/mp3/Phutureprimitive_Center_of_Gravity.mp3"
        },
        {
            title:"MartyParty - Love Doctor",
            mp3:"http://whatthefestival.com/mp3/martyparty_love_doctor.mp3"
        },
        
        {
            title:"Laura Low - Bad Girls (rmx of M.I.A)",
            mp3:"http://whatthefestival.com/mp3/DJLaura_MIA_BADGIRLS.mp3"
        },
        {
            title:"DJ Shawna - Ssshake",
            mp3:"http://whatthefestival.com/mp3/Ssshake-Shawna.mp3"
        },
        {
            title:"Ruff Hauser - Lucid",
            mp3:"http://whatthefestival.com/mp3/Ruffhauser_Lucid.mp3"
        },
        {
            title:"Celoso - Keep Movin",
            mp3:"http://whatthefestival.com/mp3/Celoso_KeepMovin.mp3"
        },
        {
            title:"Halo Refuser - Breaking Into Step",
            mp3:"http://whatthefestival.com/mp3/HaloRefuser_BreakingIntoStep.mp3"
        },
        {
            title:"Tyler Tastemaker - I.D.G.A.F (x Quarry)",
            mp3:"http://whatthefestival.com/mp3/TylerTastemaker_IDGAF.mp3"
        },
        {
            title:"Kepi and Kat - Limelight",
            mp3:"http://whatthefestival.com/mp3/KepiandKat_Limelight.mp3"
        },
        {
            title:"Smokey and the Bandit - U Can't Fix",
            mp3:"http://whatthefestival.com/mp3/SmokeyandtheBandit_UCantFix.mp3"
        },
        {
            title:"Pussy Monster - Come Get It",
            mp3:"http://whatthefestival.com/mp3/Pussy_Monster-ComeGetIt.mp3"
        },
        {
            title:"Kitty-D - ReStitch",
            mp3:"http://whatthefestival.com/mp3/KittyD_restitch.mp3"
        },
        {
            title:"DJ Dials - Handle Riddim",
            mp3:"http://whatthefestival.com/mp3/DJDials_HandleRiddim.mp3"
        },
        {
            title:"Geno Cochino - The Landing",
            mp3:"http://whatthefestival.com/mp3/GenoCochino_TheLanding.mp3"
        },
        {
            title:"Shovelman - Riding High",
            mp3:"http://whatthefestival.com/mp3/Shovelman_RidingHigh.mp3"
        },  
        {
            title:"Sidestep - Fuck Dat Noize",
            mp3:"http://whatthefestival.com/mp3/Sidestep_FuckDatNoize.mp3"
        }
    ], {
        playlistOptions: {
            itemClass: "track_deets"
    },
        swfPath: "http://whatthefestival.com/_wp/wp-content/themes/wtf2012/js/",
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
                height: '32px'
            }, 'slow');
            $(this).removeClass('flip');
        });

        $('a.artist_mp3').live('click', function(event) {
            event.preventDefault();
            wtf_player.play(mp3map[$(this).attr('id')]);
            $("#track_info").text($(this).attr('name'));
        }); 
	
 
}); /* end of as page load scripts */


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