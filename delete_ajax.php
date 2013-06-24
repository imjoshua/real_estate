<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}

include("config.php");
if ($_POST['id']) {
    $id = mysql_escape_String($_POST['id']);
    $query = "SELECT property_photo from add_properties where property_id='" . $id . "'";
    $result = mysql_query($query) or die('MySql Error' . mysql_error());
    $row = mysql_fetch_array($result);
    $imagename = $row["property_photo"];
    echo $imagename;
    $target_path = 'uploadedImages/';
    $target_path = $target_path . $imagename;
    echo $target_path;

    if (file_exists($target_path)) {
        echo "The file exists.";
        $do = unlink("$target_path");
    } else {
        echo "file not found";
    }

    if ($do == "1") {
        echo "The file was deleted successfully.";
    }
    else {
        echo "There was an error trying to delete the file.";
    }

    $sql = "delete from add_properties where property_id='$id'";
    mysql_query($sql); 
}
?>