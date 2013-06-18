<?php
include 'header.php';
include('config.php');
$id=$_GET["id"];
$sql="SELECT * FROM add_properties where property_id='".$id."'";
$result=mysql_query($sql) or die(mysql_error());
$row = mysql_fetch_array($result);

    $name = $row["name"];
    $email = $row["email"];
    $currentcity = $row["current_city"];
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
    $imagename =  $row["property_photo"];
    $path = '/PhpProject2/uploadedImages/'.$imagename;
   
            
 ?>
    <p> <?echo $id?> </p>
    <p> <?echo $name?> </p>
    <p> <?echo $email?> </p>
    <p> <?echo $currentcity?> </p>
    <p> <?echo $propertytype?> </p>
    <p> <?echo $title?> </p>
    <p> <?echo $price?> </p>
    <p> <?echo $plotareavalue?> </p>
    <p> <?echo $plotareatype?> </p>
    <p> <?echo $washroom?> </p>
    <p> <?echo $buildupareavalue?> </p>
    <p> <?echo $buildupareatype?> </p>
    <p> <?echo $address?> </p>
    <p> <?echo $city?> </p>
    <p> <?echo $description?> </p>
    <p> <?echo $path?> </p>
    <div>
   <img border="0" src= "<?php echo $path;?>"  width="304" height="228">
    </div>

