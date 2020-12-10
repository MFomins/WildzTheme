(function ($) {
    $(document).ready(function () {

        $(".loadmore").on("click", function (e) {
            e.preventDefault();
            var button = $(this);
            var category =$(this).data('category');
            var wrap = '.' + category + '-wrap';

            $.ajax({
                url: blog.ajax_url,
                data: {
                    action: "more_post_ajax", // add your action to the data object
                    category: category
                },
                type: 'POST',

                beforeSend: function () {
                    button.hide();
                },

                success: function (data) {
                    console.log(data);
                    $(wrap).html(data);
                    button.hide();
                },
                error: function (data) {
                    // test to see what you get back on error
                    console.log(data);
                }
            });
        });
    });
})(jQuery);


jQuery(document).ready(function ($) {
        // Mobile menu - show on click
    $('.mobile-menu a').on('click', function(){
    $('nav.site-nav').toggle('fast');
    });
    // Mobile menu auto hide 
    var breakpoint = 1000;
    $(window).resize(function(){
    if($(document).width() >= breakpoint) {
        $('nav.site-nav').show();
    }else{
        $('nav.site-nav').hide();
    }
});
});




