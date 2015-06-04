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
            $('.conductBtn').on('click', function(e){
                Cookies.set('conduct', 'happy');     
                $('.conductCode').slideUp();
                e.preventDefault();
            });
            if (!Cookies.get('conduct') ) {
                $('body').addClass('conductFalse');
            }
        }
        
        function whichThumb() {
            if ($('.rate-widget').length) {
                if ($('.rate-info').length) {
                    var rateInfoText = $('.rate-info').text();
                    if (rateInfoText.indexOf('yes') >= 0){
                        /// add class to thumbs up to show it's already been picked
                        $('.thumbUp').addClass('picked');
                        $('.thumbDown').removeClass('picked');
                    } else {
                        /// add class to thumbs down to show it's already been picked
                        $('.thumbDown').addClass('picked');
                        $('.thumbUp').removeClass('picked');
                    }
                } else {
                    $('.thumb-vote').removeClass('picked');
                }
            }
        }
        
        
        return {
            // public members
            init: function() {
                
                masonryLoad();
//                PointerEventsPolyfill.initialize({});
                showAddComments();
                conductMessageCookie();
                whichThumb();

            }
        };
    }());
    
    $(function() {
        PAGE.init();
    });



    
}(jQuery));
