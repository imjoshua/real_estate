<?php

$selectedPropertyType = array("select", "Commercial Land", "Commercial Shops");
$selectedAreaType = array("select", "Sq.Ft", "Sq.Yards", "Sq.Meter", "Acres", "Centes");

//submit button clicked 
if (isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $currentcity = trim($_POST['currentcity']);
    $phoneno = trim($_POST['phoneno']);
    $selectPropertyType = $_POST['selectPropertyType'];
    $propertytype = $selectedPropertyType[$selectPropertyType];
    $propertytitle = trim($_POST['propertytitle']);
    $expectedprice = trim($_POST['expectedprice']);
    $selectPlotAreaType = $_POST['selectPlotAreaType'];
    $plotareatype = $selectedAreaType[$selectPlotAreaType];
    $plotAreaValue = trim($_POST['plotAreaValue']);
    $washroom = trim($_POST['washroom']);
    $selectBuilupAreaType = $_POST['selectBuilupAreaType'];
    $buildupareatype = $selectedAreaType[$selectBuilupAreaType];
    $buildupAreaValue = trim($_POST['buildupAreaValue']);
    $propertyaddress = trim($_POST['propertyaddress']);
    $city = trim($_POST['city']);
    $description = trim($_POST['description']);
    $image = $_FILES['image']['name'];
    
    if ($image) {
        $image_name = $_FILES['image']['name'];
        $image_size = $_FILES['image']['size'];
        $image_temp = $_FILES['image']['tmp_name'];
        $allowed_ext = array('jpg', 'jpeg', 'png', 'gif');
        $image_ext = strtolower(end(explode('.', $image_name)));
        $image_new_name = time() . '.' . $image_ext;
        $target_path = 'uploadedImages/';
        $target_path = $target_path . $image_new_name;
    }
    if (move_uploaded_file($image_temp, $target_path)) {
        echo "The file has been uploaded";
        echo"hello id:";
        $id = $_POST['id'];

        include('config.php');
        if($id)
        {
             $propertytype = $_POST['cid'];
            
            $sql = "UPDATE add_properties SET name = '$name', email= '$email', current_city= '$currentcity', phone_no= '$phoneno', type_of_property= '$propertytype', property_title = '$propertytitle', expected_price = '$expectedprice', plot_area_value = '$plotAreaValue', plot_area_type = '$plotareatype', washroom = '$washroom', buildup_area_value = '$buildupAreaValue', buildup_area_type = '$buildupareatype', property_address = '$propertyaddress', property_city = '$city', property_description = '$description', property_photo = '$image_new_name' where property_id = '$id'";
        }
        else
        {
        $sql = "INSERT INTO add_properties(name, email, current_city, phone_no, type_of_property, property_title, expected_price, plot_area_value, plot_area_type, washroom, buildup_area_value, buildup_area_type, property_address, property_city, property_description, property_photo) VALUES ('$name','$email','$currentcity','$phoneno','$propertytype','$propertytitle','$expectedprice','$plotAreaValue','$plotareatype','$washroom','$buildupAreaValue','$buildupareatype','$propertyaddress','$city','$description','$image_new_name')";
        }
        if (!mysql_query($sql, $bd)) {

            die('Error: ' . mysql_error());
        }

        echo "sucessfully inserted ", "\n";
    } else {

        echo "There was an error uploading the file, please try again!";
    }
}
?>