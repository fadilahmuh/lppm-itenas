(function($) { 
    "use strict";
        
    // Show modal
    $('#programmatically-show-modal').on('click', function() {
        $('#programmatically-modal').modal('show')
    })

    // Hide modal
    $('#programmatically-hide-modal').on('click', function() {
        $('#programmatically-modal').modal('hide')
    })

    // Toggle modal
    $('#programmatically-toggle-modal').on('click', function() {
        $('#programmatically-modal').modal('toggle')
    })

    $('.show-data').on('click', function(e) {
        e.preventDefault();
        var url = $(this).data("url");
        $.ajax({
            type: 'GET',
            url: url,
            dataType: "json",
            success: function(response) {
                // $('#large-modal-size-preview').html(response.modal);
                // $('#large-modal-size-preview').modal('show');
                console.log(response.modal);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status + "\n" + xhr.responseText + "\n" + thrownError);
            }
        });
    });

})($)