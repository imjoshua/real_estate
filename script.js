$(document).ready(function() {
    var query = 0;
    var searchstring = "";
    $(".delete").live('click', function()
    {
        var id = $(this).attr('id');
        var b = $(this).parent().parent();
        var dataString = 'id=' + id;
        if (confirm("Sure you want to delete this record ? There is NO undo!"))
        {
            $.ajax({
                type: "POST",
                url: "delete_ajax.php",
                data: dataString,
                cache: false,
                success: function(e)
                {
                    b.hide();
                    e.stopImmediatePropagation();
                }
            });
            return false;
        }
    });

//Pagination			
    function loading_show() {
        $('#loading').html("<img src='images/loading.gif'/>").fadeIn('fast');
    }
    function loading_hide() {
        $('#loading').fadeOut('fast');
    }

    function loadData(page, query, searchstring) {
        loading_show();
        $.ajax
                ({
                    type: "POST",
                    url: "pagination_data.php",
                    data: 'page=' + page + '&query=' + query + '&searchstring=' + searchstring,
                    success: function(msg)
                    {
                        $("#container").ajaxComplete(function(event, request, settings)
                        {
                            loading_hide();
                            $("#container").html(msg);
                        });
                    }
                });
    }

    loadData(1, query, searchstring);  // For first time page load default results

    $('#container .pagination li.active').live('click', function() {
        var page = $(this).attr('p');
        loadData(page, query, searchstring);
    });


    $('#go_btn').live('click', function() {
        var page = parseInt($('.goto').val());
        var no_of_pages = parseInt($('.total').attr('a'));
        if (page != 0 && page <= no_of_pages) {
            loadData(page, query, searchstring);
        } else {
            alert('Enter a PAGE between 1 and ' + no_of_pages);
            $('.goto').val("").focus();
            return false;
        }
    });

    $('#search').click(function() {
        var city = $('#searchcity').val();
        query = 1;
        searchstring = city;
        loadData(1, query, searchstring);


    });

});






