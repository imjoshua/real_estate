$(document).ready(function() {
    alert("hello load");
    div_shop_show();
    function div_shop_show()
    {
        var cid = $('#cid').val();
        alert(cid);
        if(cid==2){
        alert("div show");
        $("#shop").show();
        }

    }

    $('#selectPropertyType').change(function() {
// assign the value to a variable, so you can test to see if it is working
        var selectVal = $('#selectPropertyType :selected').val();
        switch (selectVal) {
            case "1":
                alert(selectVal);
                $("#land").show();
                $("#shop").hide();
                break;
            case "2":
                alert(selectVal);
                $("#shop").show();
                break;
        }
    });
});