<?php

if ($query == 0) {
    $query_pag_data = "SELECT property_id,property_title,type_of_property,property_city,property_photo from add_properties ORDER BY property_id DESC LIMIT $start, $per_page";
}
if ($query == 1) {
    if ($searchcity == "" && $searchtitle != "") {
        $query_pag_data = "SELECT property_id,property_title,type_of_property,property_city,expected_price from add_properties WHERE property_title LIKE '%$searchtitle%'ORDER BY property_id DESC LIMIT $start, $per_page";
    } else if ($searchcity != "" && $searchtitle == "") {
        $query_pag_data = "SELECT property_id,property_title,type_of_property,property_city,expected_price from add_properties WHERE property_city LIKE '%$searchcity%'ORDER BY property_id DESC LIMIT $start, $per_page";
    } else {
        $query_pag_data = "SELECT property_id,property_title,type_of_property,property_city,expected_price from add_properties WHERE property_city LIKE '%$searchcity%' AND property_title LIKE '%$searchtitle%'ORDER BY property_id DESC LIMIT $start, $per_page";
    }
}
$result_pag_data = mysql_query($query_pag_data) or die('MySql Error' . mysql_error());
$finaldata = "";
$tablehead = "<tr><th>Property Title</th><th>Property Type</th><th>City</th><th>Photo</th><th>Details</th><th>Edit</th><th>Delete</th></tr>";
while ($row = mysql_fetch_array($result_pag_data)) {

    $id = $row['property_id'];
    $title = htmlentities($row['property_title']);
    $type = htmlentities($row['type_of_property']);
    $city = htmlentities($row['property_city']);
    $imagename = htmlentities($row['property_photo']);
    $path = '/PhpProject2/uploadedImages/' . $imagename;
    if ($type == "Commercial Shops") {
        $cid = 2;
    }
    if ($type == "Commercial Land") {
        $cid = 1;
    }

    $tabledata.="<tr id='$id' class='edit_tr'>

<td class='edit_td' >
<span id='one_$id' class='text'>$title</span>
</td>

<td class='edit_td' >
<span id='two_$id' class='text'>$type</span> 
</td>

<td class='edit_td' >
<span id='three_$id' class='text'>$city</span> 
</td>

<td class='edit_td' >
<span id='four_$id' class='text'> <img src= " . $path . " height='65' width='50'></span> 
</td>


<td class='edit_td'>
<span id='five_$id'><a href='View_details.php?id=" . $id . "'>View Details</a></span>
</td>
 
<td class='edit_td'>
<span id='six_$id'><a href='addPropertiesUI.php?id=" . $id . "&cid=" . $cid . "'>Edit Details</a></span>
</td>

<td><a href='#' class='delete' id='$id'> Delete </a></td>

</tr>";
}
$finaldata = "<table width='100%'>" . $tablehead . $tabledata . "</table>"; // Content for Data


/* Total Count */
if ($query == 0) {
    $query_pag_num = "SELECT COUNT(*) AS count FROM add_properties";
}

if ($query == 1) {
    if ($searchcity == "" && $searchtitle != "") {
        $query_pag_num = "SELECT COUNT(*) AS count FROM from add_properties WHERE property_title LIKE '%$searchtitle%'ORDER BY property_id DESC LIMIT $start, $per_page";
    } else if ($searchcity != "" && $searchtitle == "") {
        $query_pag_data = "SELECT COUNT(*) AS count FROM from add_properties WHERE property_city LIKE '%$searchcity%'ORDER BY property_id DESC LIMIT $start, $per_page";
    } else {
        $query_pag_data = "SELECT COUNT(*) AS count FROM from add_properties WHERE property_city LIKE '%$searchcity%' AND property_title LIKE '%$searchtitle%'ORDER BY property_id DESC LIMIT $start, $per_page";
    }
}
$result_pag_num = mysql_query($query_pag_num);
$row = mysql_fetch_array($result_pag_num);
$count = $row['count'];
$no_of_paginations = ceil($count / $per_page);
?>
