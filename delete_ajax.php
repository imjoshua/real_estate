<?php
include("config.php");
if($_POST['id'])
{
$id=mysql_escape_String($_POST['id']);
$sql = "delete from add_properties where property_id='$id'";
mysql_query($sql);
}
?>