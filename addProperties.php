<?php

$selectedPropertyType = array("select", "Commercial Land", "Commercial Shops");
$selectedAreaType = array("select", "Sq.Ft", "Sq.Yards", "Sq.Meter", "Acres", "Centes");
$id = $_POST['id'];
$cid = $_POST['cid'];
//submit button clicked 
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $currentcity = trim($_POST['currentcity']);
    $phoneno = trim($_POST['phoneno']);
    $selectPropertyType = $_POST['selectPropertyType'];
    $propertytype = $selectedPropertyType[$selectPropertyType];
    if ($id) {
        $propertytype = $selectedPropertyType[$cid];
    }
    $propertytitle = trim($_POST['propertytitle']);
    $expectedprice = trim($_POST['expectedprice']);
    $selectPlotAreaType = $_POST['selectPlotAreaType'];
    $plotareatype = $selectedAreaType[$selectPlotAreaType];
    $plotAreaValue = trim($_POST['plotAreaValue']);
    $washroom = trim($_POST['washroom']);
    $selectBuildupAreaType = $_POST['selectBuildupAreaType'];
    $buildupAreatype = $selectedAreaType[$selectBuildupAreaType];
    $buildupAreaValue = trim($_POST['buildupAreaValue']);
    $propertyaddress = trim($_POST['propertyaddress']);
    $city = trim($_POST['city']);
    $description = trim($_POST['description']);
    $image = $_FILES['image']['name'];
    if ($image == "") {
        if ($id) {
            $image = $_POST['imagepath'];
        }
    }

    // Fields that are on form
    $expected = array('name', 'email', 'currentcity', 'phoneno', 'selectPropertyType', 'propertytitle', 'expectedprice', 'selectPlotAreaType', 'plotAreaValue', 'propertyaddress', 'city', 'description', 'washroom', 'selectBuildupAreaType', 'buildupAreaValue');
    // Set required fields 
    $required = array('name', 'email', 'currentcity', 'phoneno', 'selectPropertyType', 'propertytitle', 'expectedprice', 'selectPlotAreaType', 'plotAreaValue', 'propertyaddress', 'city', 'description');
    if ($selectPropertyType == "2") {
        $required = array('name', 'email', 'currentcity', 'phoneno', 'selectPropertyType', 'propertytitle', 'expectedprice', 'selectPlotAreaType', 'plotAreaValue', 'propertyaddress', 'city', 'description', 'washroom', 'selectBuildupAreaType', 'buildupAreaValue');
    }
    if ($id) {
        $required = array('name', 'email', 'currentcity', 'phoneno', 'propertytitle', 'expectedprice', 'selectPlotAreaType', 'plotAreaValue', 'propertyaddress', 'city', 'description');
        if (cid == "2") {
            $required = array('name', 'email', 'currentcity', 'phoneno', 'propertytitle', 'expectedprice', 'selectPlotAreaType', 'plotAreaValue', 'propertyaddress', 'city', 'description', 'washroom', 'selectBuildupAreaType', 'buildupAreaValue');
        }
    }

    $numeric = array('phoneno', 'expectedprice', 'plotAreaValue');
    if ($selectPropertyType == "2") {
        $numeric = array('phoneno', 'expectedprice', 'plotAreaValue', 'washroom', 'buildupAreaValue');
    }


// Initialize array for errors 
    $errors = array();


    foreach ($_POST as $field => $value) {
        // Assign to $temp and trim spaces if not array 
        $temp = is_array($value) ? $value : trim($value);
        // If field is empty and required, tag onto $errors array 
        if (empty($temp) && in_array($field, $required)) {
            array_push($errors, $field);
        }
    }
    foreach ($_POST as $field => $value) {
        // Assign to $temp and trim spaces if not array 
        $temp = is_array($value) ? $value : trim($value);
        // If field is empty and required, tag onto $errors array 
        if (!is_numeric($temp) && in_array($field, $numeric)) {
            array_push($errors, $field);
        }
    }

    if ($image) {
        $image_name = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_temp = $_FILES['image']['tmp_name'];
        $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
        $image_ext = strtolower(end(explode('.', $image_name)));
        $image_new_name = time() . '.' . $image_ext;
        $target_path = 'uploadedImages/';
        $target_path = $target_path . $image_new_name;
        if(in_array($image_ext,$allowed_ext)==false){
            array_push($errors, 'image');
        }
    }
    
    //If good to go
    if (empty($errors)) {
        if (move_uploaded_file($image_temp, $target_path)) {
            echo "The file has been uploaded";
        }

        include('config.php');

        if ($id) {
            $sql = "UPDATE add_properties SET name = '$name', email= '$email', current_city= '$currentcity', phone_no= '$phoneno', type_of_property= '$propertytype', property_title = '$propertytitle', expected_price = '$expectedprice', plot_area_value = '$plotAreaValue', plot_area_type = '$plotareatype', washroom = '$washroom', buildup_area_value = '$buildupAreaValue', buildup_area_type = '$buildupAreatype', property_address = '$propertyaddress', property_city = '$city', property_description = '$description', property_photo = '$image_new_name' where property_id = '$id'";
        } else {
            $sql = "INSERT INTO add_properties(name, email, current_city, phone_no, type_of_property, property_title, expected_price, plot_area_value, plot_area_type, washroom, buildup_area_value, buildup_area_type, property_address, property_city, property_description, property_photo) VALUES ('$name','$email','$currentcity','$phoneno','$propertytype','$propertytitle','$expectedprice','$plotAreaValue','$plotareatype','$washroom','$buildupAreaValue','$buildupAreatype','$propertyaddress','$city','$description','$image_new_name')";
        }
        if (!mysql_query($sql, $bd)) {

            die('Error: ' . mysql_error());
        }

        header("Location: insertedSucessfully.php");
    } else {

        echo "There was an error in inserting";
    }

    if (!empty($errors)) {
        include 'addPropertiesUI.php';
    }
}

if (isset($_POST['reset'])) {
    $errors = "";
    include 'addPropertiesUI.php';
}
?>