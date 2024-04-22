$(document).ready(function() {
    $('#search-input').on('keyup', function() {
        var query = $(this).val();
        
        if (query.length > 0) {
            $.ajax({
                url: 'search.php',
                method: 'POST',
                data: { query: query },
                success: function(data) {
                    $('#search-results').html(data);
                }
            });
        } else {
            $('#search-results').empty();
        }
    });
    
    $(document).on('click', '#search-results li', function() {
        var result = $(this).text();
        $('#search-input').val(result);
        $('#search-results').empty();
    });
});