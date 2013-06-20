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

echo" <table>
 <tr>
 <th>Property ID:</th>
 <td>".$id."</td>
 </tr>
 <tr>
 <th>Name:</th>
 <td>".$name."</td>
 </tr>
 <tr>
 <th>Email:</th>
 <td>".$email."</td>
 </tr>
 <tr>
 <th>Current City:</th>
 <td>".$currentcity."</td>
 </tr>
 <tr>
 <th>Property Type:</th>
 <td>".$propertytype."</td>
 </tr>
 <tr>
 <th>Property Title:</th>
 <td>".$title."</td>
 </tr>
 <tr>
 <th>Expected Price:</th>
 <td>".$price."</td>
 </tr>
 <tr>
 <th>Plot Area:</th>
 <td>".$plotareavalue."".$plotareatype."</td>
 </tr>
 <tr>
 <th>Washrooms:</th>
 <td>".$washroom."</td>
 </tr>
 <tr>
 <th>Build Up Area:</th>
 <td>".$buildupareavalue."".$buildupareatype."</td>
 </tr>
 <tr>
 <th>Address:</th>
 <td>".$address."</td>
 </tr>
 <tr>
 <th>City:</th>
 <td>".$city."</td>
 </tr>
 <tr>
 <th>Description:</th>
 <td>".$description."</td>
 </tr>
     </table>";
?>
<div>
   <img border="0" src= "<?php echo $path;?>"  width="304" height="228">
    </div>-->
     


<!--    <p> <?echo "Property ID:". $id?> </p>
    <p> <?echo "Name:".$name?> </p>
    <p> <?echo "Email:".$email?> </p>
    <p> <?echo "Current City:".$currentcity?> </p>
    <p> <?echo "Property Type:".$propertytype?> </p>
    <p> <?echo "Property Title:".$title?> </p>
    <p> <?echo $price?> </p>
    <p> <?echo $plotareavalue?> </p>
    <p> <?echo $plotareatype?> </p>
    <p> <?echo $washroom?> </p>
    <p> <?echo $buildupareavalue?> </p>
    <p> <?echo $buildupareatype?> </p>
    <p> <?echo $address?> </p>
    <p> <?echo $description?> </p>
    <p> <?echo $path?> </p>
    <div>
   <img border="0" src= "<?php echo $path;?>"  width="304" height="228">
    </div>-->

