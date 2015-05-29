/*
 * Skeleton V1.1
 * Copyright 2011, Dave Gamache
 * www.getskeleton.com
 * Free to use under the MIT license.
 * http://www.opensource.org/licenses/mit-license.php
 * 8/17/2011
 */

(function () {
    $(document).ready(function () {
        $("area[rel^='prettyPhoto']").prettyPhoto();

        /* Gallery
         ================================================== */

        $('.photoset-grid').photosetGrid({
            gutter: '2px',
            highresLinks: true,
            rel: 'prettyPhoto',
            onComplete: function () {
                $('.photoset-grid').attr('style', '');

                $("a[rel^='prettyPhoto']").prettyPhoto({
                    animation_speed: 'fast',
                    slideshow: 10000,
                    hideflash: true,
                    theme: 'light_rounded'
                });
            }
        });

        /* Tooltip
         ================================================== */

        $("map area").tooltip({
            track: true,
            content: function () {
                var tooltipTitle = $(this).attr('data-tooltip');

                if ($(this).hasClass('vendu')) {
                    tooltipTitle += ' - VENDU'
                } else if ($(this).hasClass('disponible')) {
                    tooltipTitle += ' - DISPONIBLE'
                }

                return $("<div class='tooltipPlan'>" + tooltipTitle + "</div>");
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
    });

    /* Image Mapster plugin
     ================================================== */

    window.onload = function (e) {
        if (typeof $('img.mapster').length != 0) {
            var resizeTime = 100;     // total duration of the resize effect, 0 is instant
            var resizeDelay = 100;    // time to wait before checking the window size again
                                      // the shorter the time, the more reactive it will be.
                                      // short or 0 times could cause problems with old browsers.

            $('img.mapster').mapster({
                mapKey: 'data-status',
                fillColor: '8c201b',
                fillOpacity: .70,
                areas: [{
                    key: 'vendu',
                    fillColor: '777777',
                    staticState: true,
                    fillOpacity: 0.4
                }],
                onClick: function (data) {
                    data.e.preventDefault();
                    if (typeof $(this).attr('rel') === 'undefined' || $(this).attr('rel') === "") {
                        return true;
                    }

                    return false;
                }
            });

            //  Resizes the image map to fit within the boundaries provided
            function resize(maxWidth, maxHeight) {
                var image = $('img.mapster'),
                    imgWidth = image.width(),
                    imgHeight = image.height(),
                    newWidth = 0,
                    newHeight = 0;
                newWidth = maxWidth;

                image.mapster('resize', newWidth, newHeight, resizeTime);
            }

            //  Track window resizing events, but only actually call the map resize when the
            //  window isn't being resized any more
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

            //  Execute the first adjustment right after the page loads.
            var imageContainer = $('img.mapster').parents('div.columns')[0],
                initWidth = imageContainer.clientWidth,
                initHeight = imageContainer.clientHeight;

            resize(initWidth, initHeight);
        }
    };
}());
