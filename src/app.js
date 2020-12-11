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


                success: function (data) {
                    console.log(data);
                    $(wrap).html(data);
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
    $('.nav-toggle').on('click', function(){
    $('nav.mobile-nav').toggle('opened');
    });
    // Mobile menu auto hide 
    var breakpoint = 1020;
    $(window).resize(function(){
    if($(document).width() >= breakpoint) {
        $('nav.mobile-nav').show();
    }else{
        $('nav.mobile-nav').hide();
    }
});
});




