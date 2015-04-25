/*
 * Skeleton V1.1
 * Copyright 2011, Dave Gamache
 * www.getskeleton.com
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 8/17/2011
 */

$(document).ready(function () {

    $("area[rel^='prettyPhoto']").prettyPhoto();

    /* Gallery
     ================================================== */
    $("a[rel^='prettyPhoto']").prettyPhoto({
        animation_speed: 'fast',
        slideshow: 10000,
        hideflash: true,
        theme: 'light_rounded'
    });

    /* Image Map Tooltip
     ================================================== */


    // Affiche le plan en tooltip
    $("map *").tooltip({
        delay: '0',
        showURL: false,
        bodyHandler: function () {
            var uniteInfo = $(this).attr('id').split('|');
            var modeleId = uniteInfo[5];
            if (uniteInfo[4] == 1) {
                return $("<div class='tooltipPlan'>" + uniteInfo[0] + "</div>");
            } else if (uniteInfo[1] == "nonDispo") {
                return $("<div class='tooltipPlan' style='background:#f8e517;color:#000;'>Bient�t disponible</div>");
            }

            else {
                return $("<div class='tooltipPlan'>" + uniteInfo[0] + "</div>");
            }
        }
    });

    /* External Links
     ================================================== */
    $(function () {
        $('a[rel*=external]').click(function () {
            window.open(this.href);
            return false;
        });
    });

    /* Full screen gallery
     ================================================== */
    //First time resizing
    //resizeScreen();

    //$(window).resize(function () {
    //    resizeScreen();
    //});

    //function resizeScreen() {
    //
    //    var maxSize = $(".fullwidth").width();
    //    var screenWidth = $(window).width();
    //
    //    if (maxSize > screenWidth) {
    //        var newPos = Math.floor((maxSize - screenWidth) / 2);
    //        $(".fullwidth").css({ 'margin-left': -newPos + 'px' });
    //    } else {
    //        $(".fullwidth").css({ 'margin-left': '0' });
    //    }
    //}

});

/* Image Mapster plugin
 ================================================== */
window.onload = function (e) {
    var resizeTime = 100;     // total duration of the resize effect, 0 is instant
    var resizeDelay = 100;    // time to wait before checking the window size again
                              // the shorter the time, the more reactive it will be.
                              // short or 0 times could cause problems with old browsers.

    $('img.mapster').mapster({
        fillColor: '8c201b',
        fillOpacity: .75,
        clickNavigate: true
    });

// Resize the map to fit within the boundaries provided
    function resize(maxWidth, maxHeight) {
        var image = $('img.mapster'),
            imgWidth = image.width(),
            imgHeight = image.height(),
            newWidth = 0,
            newHeight = 0;

        //if (imgWidth / maxWidth > imgHeight / maxHeight) {
        newWidth = maxWidth;
        //} else {
        //    newHeight = maxHeight;
        //}
        image.mapster('resize', newWidth, newHeight, resizeTime);
    }

// Track window resizing events, but only actually call the map resize when the
// window isn't being resized any more
    function onWindowResize() {
        var imageContainer = $('img.mapster').parents('div.columns')[0],
            curWidth = imageContainer.clientWidth,
            curHeight = imageContainer.clientHeight,
            checking = false;

        if (checking) {
            return;
        }
        checking = true;
        window.setTimeout(function () {
            var newWidth = imageContainer.clientWidth,
                newHeight = imageContainer.clientHeight;
            if (newWidth === curWidth &&
                newHeight === curHeight) {

                resize(newWidth, newHeight);
            }
            checking = false;
        }, resizeDelay);
    }

    $(window).bind('resize', onWindowResize);

};