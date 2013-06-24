$(document).ready(function() {
    div_shop_show();
    function div_shop_show()
    {
        var cid = $('#cid').val();
        if (cid == 2) {
            $("#shop").show();
        }

    }

    $('#selectPropertyType').change(function() {
        var selectVal = $('#selectPropertyType :selected').val();
        switch (selectVal) {
            case "1":

                $("#land").show();
                $("#shop").hide();
                break;
                
            case "2":

                $("#shop").show();
                break;
        }
    });
});