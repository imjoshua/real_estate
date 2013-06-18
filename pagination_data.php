<?php
include('config.php');
$per_page = 9;
if ($_GET) {
    $page = $_GET['page'];
}

$start = ($page - 1) * $per_page;
$sql = "select * from add_properties order by property_id limit $start,$per_page";
$result = mysql_query($sql);
$rows = mysql_num_rows($result);
echo 'pagination data result:';
echo $result;
?>

<table width="100%">
    <tr>
        <th scope="col">Property Title</th>
        <th scope="col">Property Type</th>
        <th scope="col">City</th>
        <th scope="col">Price</th>
        <th scope="col">View Details</th>
        <th scope="col">Edit Details</th>
        <th scope="col">Delete Details</th>

    </tr>

    <?php
//    Print the contents
    while ($row = mysql_fetch_array($result)) {

        $title = $row['property_title'];
        $propertytype = $row['type_of_property'];
        $city = $row['property_city'];
        $price = $row['expected_price'];
        $id = $row['property_id'];
        ?>
        <tr>
            <td height="40">
                <?php echo $title; ?></td>
            <td><?php echo $propertytype; ?></td>
            <td><?php echo $city; ?></td>
            <td><?php echo $price; ?></td>
            <td><?php echo "<a href='"."View_details.php?id=".$id."'>Details</a>";?></td>
            <td><?php echo "<a href='"."Edit_details.php?id=".$id."'>Edit Details</a>";?></td>
            
        </tr>
        <?php
    }
    ?>
</table>




<?
//while($row = mysql_fetch_array($result))
//    {
//    //this will combine all the results into one string
//    $string += '<img src="'.$row['name'].'" />
//                <div>'.$row['name'].'</div>
//                <div>'.$row['title'].'</div>
//                <div>'.$row['description'].'</div>
//                <div>'.$row['link'].'</div><br />';
//
//    //or this will add the individual result in an array
// /*
//     $yourHtml[] = $row;
//*/
//    }
 ?>
