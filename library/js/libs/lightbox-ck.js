/*
Lightbox v2.51
by Lokesh Dhakar - http://www.lokeshdhakar.com

For more information, visit:
http://lokeshdhakar.com/projects/lightbox2/

Licensed under the Creative Commons Attribution 2.5 License - http://creativecommons.org/licenses/by/2.5/
- free for use in both personal and commercial projects
- attribution requires leaving author name, author link, and the license info intact
	
Thanks
- Scott Upton(uptonic.com), Peter-Paul Koch(quirksmode.com), and Thomas Fuchs(mir.aculo.us) for ideas, libs, and snippets.
- Artemy Tregubenko (arty.name) for cleanup and help in updating to latest proto-aculous in v2.05.


Table of Contents
=================
LightboxOptions

Lightbox
- constructor
- init
- enable
- build
- start
- changeImage
- sizeContainer
- showImage
- updateNav
- updateDetails
- preloadNeigbhoringImages
- enableKeyboardNav
- disableKeyboardNav
- keyboardAction
- end

options = new LightboxOptions
lightbox = new Lightbox options
*/(function(){var e,t,n;e=jQuery;n=function(){function e(){this.fileLoadingImage="http://whatthefestival.com/_wp/wp-content/themes/md_wtf2013/library/images/loading.gif";this.fileCloseImage="http://whatthefestival.com/_wp/wp-content/themes/md_wtf2013/library/images/close.png";this.resizeDuration=700;this.fadeDuration=500;this.labelImage="Image";this.labelOf="of"}return e}();t=function(){function t(e){this.options=e;this.album=[];this.currentImageIndex=void 0;this.init()}t.prototype.init=function(){this.enable();return this.build()};t.prototype.enable=function(){var t=this;return e("body").on("click","a[rel^=lightbox], area[rel^=lightbox]",function(n){t.start(e(n.currentTarget));return!1})};t.prototype.build=function(){var t,n=this;e("<div>",{id:"lightboxOverlay"}).after(e("<div/>",{id:"lightbox"}).append(e("<div/>",{"class":"lb-outerContainer"}).append(e("<div/>",{"class":"lb-container"}).append(e("<img/>",{"class":"lb-image"}),e("<div/>",{"class":"lb-nav"}).append(e("<a/>",{"class":"lb-prev"}),e("<a/>",{"class":"lb-next"})),e("<div/>",{"class":"lb-loader"}).append(e("<a/>",{"class":"lb-cancel"}).append(e("<img/>",{src:this.options.fileLoadingImage}))))),e("<div/>",{"class":"lb-dataContainer"}).append(e("<div/>",{"class":"lb-data"}).append(e("<div/>",{"class":"lb-details"}).append(e("<span/>",{"class":"lb-caption"}),e("<span/>",{"class":"lb-number"})),e("<div/>",{"class":"lb-closeContainer"}).append(e("<a/>",{"class":"lb-close"}).append(e("<img/>",{src:this.options.fileCloseImage}))))))).appendTo(e("body"));e("#lightboxOverlay").hide().on("click",function(e){n.end();return!1});t=e("#lightbox");t.hide().on("click",function(t){e(t.target).attr("id")==="lightbox"&&n.end();return!1});t.find(".lb-outerContainer").on("click",function(t){e(t.target).attr("id")==="lightbox"&&n.end();return!1});t.find(".lb-prev").on("click",function(e){n.changeImage(n.currentImageIndex-1);return!1});t.find(".lb-next").on("click",function(e){n.changeImage(n.currentImageIndex+1);return!1});t.find(".lb-loader, .lb-close").on("click",function(e){n.end();return!1})};t.prototype.start=function(t){var n,r,i,s,o,u,a,f,l;e(window).on("resize",this.sizeOverlay);e("select, object, embed").css({visibility:"hidden"});e("#lightboxOverlay").width(e(document).width()).height(e(document).height()).fadeIn(this.options.fadeDuration);this.album=[];o=0;if(t.attr("rel")==="lightbox")this.album.push({link:t.attr("href"),title:t.attr("title")});else{l=e(t.prop("tagName")+'[rel="'+t.attr("rel")+'"]');for(s=0,f=l.length;s<f;s++){i=l[s];this.album.push({link:e(i).attr("href"),title:e(i).attr("title")});e(i).attr("href")===t.attr("href")&&(o=s)}}r=e(window);a=r.scrollTop()+r.height()/10;u=r.scrollLeft();n=e("#lightbox");n.css({top:a+"px",left:u+"px"}).fadeIn(this.options.fadeDuration);this.changeImage(o)};t.prototype.changeImage=function(t){var n,r,i,s=this;this.disableKeyboardNav();r=e("#lightbox");n=r.find(".lb-image");this.sizeOverlay();e("#lightboxOverlay").fadeIn(this.options.fadeDuration);e(".loader").fadeIn("slow");r.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide();r.find(".lb-outerContainer").addClass("animating");i=new Image;i.onload=function(){n.attr("src",s.album[t].link);n.width=i.width;n.height=i.height;return s.sizeContainer(i.width,i.height)};i.src=this.album[t].link;this.currentImageIndex=t};t.prototype.sizeOverlay=function(){return e("#lightboxOverlay").width(e(document).width()).height(e(document).height())};t.prototype.sizeContainer=function(t,n){var r,i,s,o,u,a,f,l,c,h,p,d=this;i=e("#lightbox");s=i.find(".lb-outerContainer");p=s.outerWidth();h=s.outerHeight();r=i.find(".lb-container");f=parseInt(r.css("padding-top"),10);a=parseInt(r.css("padding-right"),10);o=parseInt(r.css("padding-bottom"),10);u=parseInt(r.css("padding-left"),10);c=t+u+a;l=n+f+o;c!==p&&l!==h?s.animate({width:c,height:l},this.options.resizeDuration,"swing"):c!==p?s.animate({width:c},this.options.resizeDuration,"swing"):l!==h&&s.animate({height:l},this.options.resizeDuration,"swing");setTimeout(function(){i.find(".lb-dataContainer").width(c);i.find(".lb-prevLink").height(l);i.find(".lb-nextLink").height(l);d.showImage()},this.options.resizeDuration)};t.prototype.showImage=function(){var t;t=e("#lightbox");t.find(".lb-loader").hide();t.find(".lb-image").fadeIn("slow");this.updateNav();this.updateDetails();this.preloadNeighboringImages();this.enableKeyboardNav()};t.prototype.updateNav=function(){var t;t=e("#lightbox");t.find(".lb-nav").show();this.currentImageIndex>0&&t.find(".lb-prev").show();this.currentImageIndex<this.album.length-1&&t.find(".lb-next").show()};t.prototype.updateDetails=function(){var t,n=this;t=e("#lightbox");typeof this.album[this.currentImageIndex].title!="undefined"&&this.album[this.currentImageIndex].title!==""&&t.find(".lb-caption").html(this.album[this.currentImageIndex].title).fadeIn("fast");this.album.length>1?t.find(".lb-number").html(this.options.labelImage+" "+(this.currentImageIndex+1)+" "+this.options.labelOf+"  "+this.album.length).fadeIn("fast"):t.find(".lb-number").hide();t.find(".lb-outerContainer").removeClass("animating");t.find(".lb-dataContainer").fadeIn(this.resizeDuration,function(){return n.sizeOverlay()})};t.prototype.preloadNeighboringImages=function(){var e,t;if(this.album.length>this.currentImageIndex+1){e=new Image;e.src=this.album[this.currentImageIndex+1].link}if(this.currentImageIndex>0){t=new Image;t.src=this.album[this.currentImageIndex-1].link}};t.prototype.enableKeyboardNav=function(){e(document).on("keyup.keyboard",e.proxy(this.keyboardAction,this))};t.prototype.disableKeyboardNav=function(){e(document).off(".keyboard")};t.prototype.keyboardAction=function(e){var t,n,r,i,s;t=27;n=37;r=39;s=e.keyCode;i=String.fromCharCode(s).toLowerCase();s===t||i.match(/x|o|c/)?this.end():i==="p"||s===n?this.currentImageIndex!==0&&this.changeImage(this.currentImageIndex-1):(i==="n"||s===r)&&this.currentImageIndex!==this.album.length-1&&this.changeImage(this.currentImageIndex+1)};t.prototype.end=function(){this.disableKeyboardNav();e(window).off("resize",this.sizeOverlay);e("#lightbox").fadeOut(this.options.fadeDuration);e("#lightboxOverlay").fadeOut(this.options.fadeDuration);return e("select, object, embed").css({visibility:"visible"})};return t}();e(function(){var e,r;r=new n;return e=new t(r)})}).call(this);