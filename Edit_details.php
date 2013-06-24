<?php
$selectedPropertyType = array("select","Commercial Land", "Commercial Shops");
$selectedAreaType = array("select","Sq.Ft", "Sq.Yards", "Sq.Meter", "Acres", "Centes");

include('config.php');
$sql = "SELECT * FROM add_properties where property_id='" . $id . "'";
$result = mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);
$name = $row["name"];
$email = $row["email"];
$currentcity = $row["current_city"];
$phoneno = $row["phone_no"];
$propertytype = $row["type_of_property"];
$selectPropertyType = array_search($propertytype, $selectedPropertyType);
$propertytitle = $row["property_title"];
$expectedprice = $row["expected_price"];
$plotAreaValue = $row["plot_area_value"];
$plotareatype = $row["plot_area_type"];
$selectPlotAreaType = array_search($plotareatype, $selectedAreaType);
$washroom = $row["washroom"];
$buildupAreaValue = $row["buildup_area_value"];
$buildupareatype = $row["buildup_area_type"];
$selectBuildupAreaType = array_search($buildupareatype, $selectedAreaType);
$propertyaddress = $row["property_address"];
$city = $row["property_city"];
$description = $row["property_description"];
$imagename = $row["property_photo"];
$path = '/PhpProject2/uploadedImages/'.$imagename;
?>
