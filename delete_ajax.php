<?php

include("config.php");
if ($_POST['id']) {
    $id = mysql_escape_String($_POST['id']);
    $query = "SELECT property_photo from add_properties where property_id='".$id."'";
    $result = mysql_query($query) or die('MySql Error' . mysql_error());
    $row = mysql_fetch_array($result); 
    $imagename = $row["property_photo"];
      
    $target_path = 'uploadedImages/';
    $target_path = $target_path . $imagename;
    
    if (file_exists($target_path)) {
        echo "The file exists.";
        $do = unlink("$target_path");
    } else {
        echo "file not found";
    }

    if ($do == "1") {
        echo "The file was deleted successfully.";
        $sql = "delete from add_properties where property_id='$id'";
        mysql_query($sql);
    } else {
        echo "There was an error trying to delete the file.";
    }
}
?>