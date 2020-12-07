    var posts_per_page = 6;
    var cat = 'category';

    jQuery(function($) {
        $('.site-primary').on('click', '.loadmore', function() {
            var data = {
                'action': 'more_post_ajax',
                'category': cat,
                'posts_per_page': posts_per_page,
                'security': blog.security
            };
     
            $.post(blog.ajaxurl, data, function(response) {
                if($.trim(response) != '') {
                    $('.loadmore').append(response);
                    posts_per_page=-1;
                } else {
                    $('.loadmore').hide();
                }
            });
        });

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
