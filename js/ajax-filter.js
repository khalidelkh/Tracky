jQuery(document).ready(function($) {
    $('.category-button').on('click', function(e) {
        e.preventDefault();
        
        var categorie_id = $(this).data('id');
        $(this).addClass('active');
        $.ajax({
            url: ajax_filter_params.ajax_url,
            type: 'POST',
            data: {
                action: 'filter_produits',
                categorie_id: categorie_id,
            },
            success: function(response) {
                console.log(response);
                $('#products-container').html(response);
            },
            error: function(error) {
                console.log('Error:', error);
            }
        });
    });
});
