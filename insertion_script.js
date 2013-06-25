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

    (function($, W, D)
    {
        alert("hello");
        var JQUERY4U = {};

        JQUERY4U.UTIL =
                {
                    setupFormValidation: function()
                    {
                        //form validation rules
                        $("#insertion_form").validate({
                            rules: {
                                name: "required",
                                email: {
                                    required: true,
                                    email: true
                                },
                                currentcity: "required",
                                phoneno: {
                                    required: true,
                                    number: true
                                },
                                selectPropertyType: "required",
                                propertytitle: "required",
                                expectedprice: {
                                    required: true,
                                    number: true
                                },
                                selectPlotAreaType: "required",
                                plotAreaValue: {
                                    required: true,
                                    number: true
                                },
                                washroom: {
                                    required: true,
                                    number: true
                                },
                                propertyaddress: "required",
                                city: "required",
                                description: "required"
                            },
                            messages: {
                                name: "Please enter your firstname",
                                email: "Please enter a valid email address",
                                currentcity: "Please enter your current city",
                                phoneno: "Please enter a valid phone no:",
                                selectPropertyType: "Please select property type",
                                propertytitle: "Please enter a property title:",
                                expectedprice: "Please enter a valid expected price:",
                                selectPlotAreaType: "Please select plot area type",
                                washroom: "Please enter a valid number for washroom:",
                                plotAreaValue: "Please enter a valid plot area value",
                                propertyaddress: "Please enter property address:",
                                city: "Please enter city:",
                                description: "Please enter description:"
                            },
                            submitHandler: function(form) {
//                                form.submit();
                            }
                        });
                    }
                }

        //when the dom has loaded setup form validation rules
        $(D).ready(function($) {
            JQUERY4U.UTIL.setupFormValidation();
        });

    })(jQuery, window, document);
});