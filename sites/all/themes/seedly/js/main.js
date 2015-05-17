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
            
            if($('.masonryWrapper').length){
                
                var $container = $('.masonryWrapper');

                //check that everything's loaded before calling masonry
                $container.imagesLoaded( function() {
                    // initialize masonry
                    $container.masonry({
                      columnWidth: '.column',
                      gutter: '.gutter',
                      itemSelector: '.masonryBlock'
                    });
                });

            }


        }
        
        function showAddComments() {
            if ($('.addComment').length){
                $('.addCommentBar').click(function(){
                    $(this).parent().toggleClass('open');
                    $('.addComment .toggleAddComment').toggleClass('open');
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
                showAddComments();

            }
        };
    }());
    
    $(function() {
        PAGE.init();
    });



    
}(jQuery));
