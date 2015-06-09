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
        
        function collapseBtn() {
            if ($('.seedlyFilter').length){
                var newIdeaCollapseBtn = $('.newIdea-form .collapseBtn');
                var filterFormCollapseBtn = $('.filter-form .collapseBtn');
                
//                newIdeaCollapseBtn.each(function(){
//                    $(this).siblings('form').slideToggle();
//                    $(this).toggleClass('down');
//                });
                filterFormCollapseBtn.each(function(){
                    $(this).siblings('.fieldBtnWrap').slideToggle();
                    $(this).toggleClass('down');                    
                });
                
                newIdeaCollapseBtn.click(function(){
                    $(this).siblings('form').slideToggle();
                    $(this).toggleClass('down');
                });
                filterFormCollapseBtn.click(function(){
                    $(this).siblings('.fieldBtnWrap').slideToggle();
                    $(this).toggleClass('down');                    
                });
            }
        }        
        
        return {
            // public members
            init: function() {
                
                masonryLoad();
//                PointerEventsPolyfill.initialize({});
                showAddComments();
                conductMessageCookie();
                collapseBtn();

            }
        };
    }());
    
    $(function() {
        PAGE.init();
    });



    
}(jQuery));
