$(document).ready(function() {
    $('#selectPropertyType').change(function() {
        var selectVal = $('#select1 :selected').val();

        switch (selectVal) {
            case "1":
                alert('hello');
                $("#land").show();
                $("#shop").hide();
                break;
            case "2":
                alert('case2');
                $("#shop").show();
                break;
        }
    });
//Display Loading Image
    function Display_Load()
    {
        $('#loading').html("<img src='images/loading.gif'/>").fadeIn('fast');
        alert('hello display load');
    }
//Hide Loading Image
    function Hide_Load()
    {
        $('#loading').fadeOut();
        alert('hello hide display load');
    }

//Default Starting Page Results
$("#pagination li:first").css({'color' : '#FF0084'}).css({'border' : 'none'});
	
	Display_Load();
	
	$("#content").load("pagination_data.php?page=1", Hide_Load());



	//Pagination Click
	$("#pagination li").click(function(){
			
		Display_Load();
		
		//CSS Styles
		$("#pagination li")
		.css({'border' : 'solid #dddddd 1px'})
		.css({'color' : '#0063DC'});
		
		$(this)
		.css({'color' : '#FF0084'})
		.css({'border' : 'none'});

		//Loading Data
		var pageNum = this.id;
		
		$("#content").load("pagination_data.php?page=" + pageNum, Hide_Load());
	});
});







