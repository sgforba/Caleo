(function(){
    var hamburger = $('.hamburger');

    if( /Android|webOS|iPhone|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
        var isMobile = true;

    }
    
    $(document).ready(function() {
        $('.homepage-posts').masonry({
            // options
            itemSelector: '.homepage-post',
            columnWidth: 259,
            percentPosition: true,
            gutter: 12     

        });
    });

    $('.hamburger').on('click', function() {
        $(this).toggleClass('open');
        $('body').toggleClass('mobile-modal');
    })
})();