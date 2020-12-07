    var posts_per_page = -1;
    jQuery(function($) {
        $('.site-primary').on('click', '.loadmore', function() {
            var data = {
                'action': 'more_post_ajax',
                'posts_per_page': posts_per_page,
                'security': blog.security
            };
     
            $.post(blog.ajaxurl, data, function(response) {
                if($.trim(response) != '') {
                    $('.loadmore').append(response);
                    posts_per_page=6;
                } else {
                    $('.loadmore').hide();
                }
            });
        });
    }); 
