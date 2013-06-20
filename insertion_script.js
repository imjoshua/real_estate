$(document).ready(function() {
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