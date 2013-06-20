<?php

include('config.php');
$sql = "SELECT * FROM add_properties where property_id='" . $id . "'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
$name = $row["name"];
$email = $row["email"];
$currentcity = $row["current_city"];
$phone = $row["phone_no"];
$propertytype = $row["type_of_property"];
$title = $row["property_title"];
$price = $row["expected_price"];
$plotareavalue = $row["plot_area_value"];
$plotareatype = $row["plot_area_type"];
$washroom = $row["washroom"];
$buildupareavalue = $row["buildup_area_value"];
$buildupareatype = $row["buildup_area_type"];
$address = $row["property_address"];
$city = $row["property_city"];
$description = $row["property_description"];
$imagename = $row["property_photo"];
$path = '/PhpProject2/uploadedImages/' . $imagename;
?>
