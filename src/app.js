    var posts_per_page = 4;
    jQuery(function($) {
        $('body').on('click', '.loadmore', function() {
            var data = {
                'action': 'load_posts_by_ajax',
                'posts_per_page': posts_per_page,
                'security': blog.security
            };
     
            $.post(blog.ajaxurl, data, function(response) {
                if($.trim(response) != '') {
                    $('.shortcode-title').append(response);
                    page++;
                } else {
                    $('.loadmore').hide();
                }
            });
        });
    }); 
