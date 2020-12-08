(function ($) {
    $(document).ready(function () {
        ppp = 5;
        offset = 5;

        $(".loadmore").on("click", function (e) {
            e.preventDefault();
            var button = $(this);
            var loader = $(".loadmore");
            $.ajax({
                url: blog.ajax_url,
                data: {
                    action: "more_post_ajax", // add your action to the data object
                    ppp: ppp,
                    offset: offset,
                },

                beforeSend: function () {
                    button.hide();
                    loader.show();
                },

                success: function (data) {
                    loader.hide();
                    $('.games-info').append(data);

                    if (data == "") {
                        button.hide();
                    } else {
                        button.show();
                    }
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




