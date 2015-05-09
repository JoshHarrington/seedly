/*jslint browser: true */
/*global $:false, jQuery:false, Modernizr:false, enquire:false, console:false */

/* ==========================================================================
 JS to run on every page
 ========================================================================== */

var PAGE;

(function($) {
    "use strict";
    PAGE = (function() {
        
    
        function masonryLoad() {
            
            if($('.front').length){
                
                var $container = $('.front');

                //check that everything's loaded before calling masonry
                $container.imagesLoaded( function() {
                    // initialize masonry
                    $container.masonry({
                      columnWidth: '.column',
                      gutter: '.gutter',
                      itemSelector: '.node'
                    });
                });

            }


        }

        function selectButtonClick() {
            /// stuff
        }
        
        
        return {
            // public members
            init: function() {
                
                masonryLoad();
//                PointerEventsPolyfill.initialize({});

            }
        };
    }());
    
    $(function() {
        PAGE.init();
    });



    
}(jQuery));
