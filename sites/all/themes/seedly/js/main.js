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
                      itemSelector: '.views-row'
                    });
                    $('.masonryWrapper .views-row').css('margin-left','0');
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

        function conductMessageCookie() {
            $('.conductBtn').on('click', function(){
                Cookies.set('conduct', 'happy');     
                $('.conductCode').slideUp();
            });
            if (!Cookies.get('conduct') ) {
                $('body').addClass('conductFalse');
            }
        }
        
        
        return {
            // public members
            init: function() {
                
                masonryLoad();
//                PointerEventsPolyfill.initialize({});
                showAddComments();
                conductMessageCookie();

            }
        };
    }());
    
    $(function() {
        PAGE.init();
    });



    
}(jQuery));
