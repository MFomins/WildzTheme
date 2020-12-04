jQuery(function($){ 
    $('.loadmore').click(function(){

        var button = $(this),
            data = {
            'action': 'loadmore',
            'query': loadmore_params.posts, 
            'page' : loadmore_params.current_page
        };

        $.ajax({ 
            url : '/wp-admin/admin-ajax.php',
            data : data,
            type : 'games',
            beforeSend : function ( xhr ) {
                button.text('Loading...'); 
                $('.loadmore').addClass('newcomment');
            },
            success : function( data ){
                if( data ) { 
                    button.text( 'More posts' ).prev().before(data); 
                    $('.loadmore').removeClass('newcomment');
                    loadmore_params.current_page++;

                    if ( loadmore_params.current_page == loadmore_params.max_page ) 
                        button.remove(); 

                } else {
                    button.remove();
                }
            }
        });
    });
});