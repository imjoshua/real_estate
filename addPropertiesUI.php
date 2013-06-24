<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}
?>
<?php
        if ($id = $_GET["id"]) {
            include "Edit_details.php";
            $cid = $_GET["cid"];
        }
        ?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Real Estate 360</title>
    <!-- CSS -->
    <link href="style/css/layout.css" rel="stylesheet" type="text/css" media="screen"/>
      <script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
    <script type="text/javascript" src="/PhpProject2/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="insertion_script.js"></script>
</head>

<body>

    <div id="wrapper">
       
        <h1><span>Real Estate 360</span></h1>
       
        <ul id="mainNav">
            <li class="logout"><a href="logout.php">Logout</a></li>
            <li class="logout"><a href="pagination.php">Display</a></li>
        </ul>
        <!-- // #end mainNav -->
        
        <div id="containerHolder">
            <div id="main">
                <form method="POST" action="addProperties.php" enctype = "multipart/form-data">
                    <h3>Add Property Details</h3>
                    <fieldset>
                        <input type="hidden" name="cid" id="cid" value="<?=$cid ?>" />
                        <input type="hidden" name="id" id="id" value="<?=$id ?>" />
                        <input type="hidden" name="imagepath" id="imagepath" value="<?=$path ?>" />
                        <label>Name:</label>
                        <?php if (isset($errors) && in_array('name', $errors)) { ?>
                            <div class="red">Please Enter Name</div>
                        <?php } ?> 
                        <input type="text" name="name" id="name" value="<?= $name ?>"/>

                        <label>Email:</label>
                        <?php if (isset($errors) && in_array('email', $errors)) { ?>
                            <div class="red">Please Enter Email</div>
                        <?php } ?>
                        <input type="email" name="email" id="email" value="<?= $email ?>"/>

                        <label>Current City:</label>
                        <?php if (isset($errors) && in_array('currentcity', $errors)) { ?>
                            <div class="red">Please Enter Current City</div>
                        <?php } ?>
                        <input type="text" name="currentcity" id="currentcity" value="<?= $currentcity ?>"/>

                        <label>Phone No:</label>
                        <?php if (isset($errors) && in_array('phoneno', $errors)) { ?>
                            <div class="red">Please Enter Phone Number</div>
                        <?php } ?>
                        <input type="text" name="phoneno" id="phoneno" value="<?= $phoneno ?>"/>

                        <label>Type of Property:</label>
                        <?php if (isset($errors) && in_array('selectPropertyType', $errors)) { ?>
                            <div class="red">Please select a Property Type</div>
                        <?php } ?>

                        <select id="selectPropertyType" name="selectPropertyType">
                            <? if ($id = $_GET["id"]) {
                                ?>
                                <option value="<? $selectPropertyType ?>" selected="selected"><? echo $propertytype ?></option>
                                <?
                            } else {
                                ?>
                                <option value = "" >Select</option>
                                <option value = "1">Commercial Land</option>
                                <option value = "2">Commercial Shops</option>
                            <? } ?>

                        </select> 
                        <div id= "land">
                            <label>Property Title:</label>
                            <?php if (isset($errors) && in_array('propertytitle', $errors)) { ?>
                                <div class="red">Please Enter property Title</div>
                            <?php } ?>
                            <input type="text" name="propertytitle" id="landpropertytitle" value="<?= $propertytitle ?>"/>
                            <label>Expected Price (Rs) :</label>
                            <?php if (isset($errors) && in_array('expectedprice', $errors)) { ?>
                                <div class="red">Please Enter Expected Price</div>
                            <?php } ?>
                            <input type="text" name="expectedprice" id="expectedprice" value="<?= $expectedprice ?>"/>
                            <?php if (isset($errors) && in_array('selectPlotAreaType', $errors)) { ?>
                                <div id ='unit'class="red"> Please Select Unit </div>
                            <?php } ?>
                            <div>
                                <select class="area"id="selectPlotAreaType" name="selectPlotAreaType">

                                    <option value = "" <?php if ($selectPlotAreaType == 0) echo "selected='selected'"; ?>>Select Unit</option>
                                    <option value = "1" <?php if ($selectPlotAreaType == 1) echo "selected='selected'"; ?>>Sq.Ft</option>
                                    <option value = "2" <?php if ($selectPlotAreaType == 2) echo "selected='selected'"; ?>>Sq.Yards</option>
                                    <option value = "3" <?php if ($selectPlotAreaType == 3) echo "selected='selected'"; ?>>Sq.Meter</option>
                                    <option value = "4" <?php if ($selectPlotAreaType == 4) echo "selected='selected'"; ?>>Acres</option>
                                    <option value = "5" <?php if ($selectPlotAreaType == 5) echo "selected='selected'"; ?>>Centes</option>

                                </select> 
                                <label>Plot Area:</label>
                                <?php if (isset($errors) && in_array('plotAreaValue', $errors)) { ?>
                                    <div class="red">Please Enter Plot Area </div>
                                <?php } ?>
                                <input type="text" name="plotAreaValue" id="plotAreaValue"value="<?= $plotAreaValue ?>"/>
                            </div>
                            <div id = "shop">
                                <label>Washroom:</label>
                                <?php if (isset($errors) && in_array('washroom', $errors)) { ?>
                                    <div class="red">Please Enter Number of Washrooms </div>
                                <?php } ?>
                                <input type="text" name="washroom" id="washroom" value ="<?= $washroom ?>"/>
                                <?php if (isset($errors) && in_array('selectBuildupAreaType', $errors)) { ?>
                                    <div id ='unit' class="red">Please Select Unit </div>
                                <?php } ?>
                                <div>
                                    <select class="area"id="selectBuildupAreaType" name="selectBuildupAreaType">

                                        <option value = "" <?php if ($selectBuildupAreaType == 0) echo "selected='selected'"; ?>>Select Unit</option>
                                        <option value = "1" <?php if ($selectBuildupAreaType == 1) echo "selected='selected'"; ?>>Sq.Ft</option>
                                        <option value = "2" <?php if ($selectBuildupAreaType == 2) echo "selected='selected'"; ?>>Sq.Yards</option>
                                        <option value = "3" <?php if ($selectBuildupAreaType == 3) echo "selected='selected'"; ?>>Sq.Meter</option>
                                        <option value = "4" <?php if ($selectBuildupAreaType == 4) echo "selected='selected'"; ?>>Acres</option>
                                        <option value = "5" <?php if ($selectBuildupAreaType == 5) echo "selected='selected'"; ?>>Centes</option>

                                    </select> 
                                    <label>Build Up Area:</label>
                                    <?php if (isset($errors) && in_array('buildupAreaValue', $errors)) { ?>
                                        <div class="red">Please Enter Buildup Area </div>
                                    <?php } ?>
                                    <input type="text" name="buildupAreaValue" id="buildupAreaValue"value="<?= $buildupAreaValue ?>"/>
                                </div>
                            </div>
                            <label>Property Address:</label>
                            <?php if (isset($errors) && in_array('propertyaddress', $errors)) { ?>
                                <div class="red">Please Enter Property Address </div>
                            <?php } ?>
                            <input type="text" name="propertyaddress" id="propertyaddress" value="<?= $propertyaddress ?>"/>
                            <label>City:</label>
                            <?php if (isset($errors) && in_array('city', $errors)) { ?>
                                <div class="red">Please Enter City </div>
                            <?php } ?>
                            <input type="text" name="city" id="city" value="<?= $city ?>"/>
                            <label>Property Description:</label>
                            <?php if (isset($errors) && in_array('description', $errors)) { ?>
                                <div class="red">Please Enter Description </div>
                            <?php } ?>
                            <div id="editor">
                                <textarea name ="description" id ="description" rows="10" cols="40"><?= $description ?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace('description');
                                </script>
                            </div>
                            <label>Property Photo:</label>
                            <input type="file" name="image" />
                            <? if ($_GET["id"]) {
                                ?>
                            <div> 
                                <label>Current Property Photo:</label>
                                <img border="0" src= "<?php echo $path; ?>"  width="304" height="228"></div>
                            <? } ?>
                        </div>
                        <input type="submit" name="submit" id="submit" value="Submit Details" />
                        <input type="submit" name ="reset" id ="reset" value="Reset Form"/>
                    </fieldset>
                </form>
            </div>
            <!-- // #main -->

            <div class="clear"></div>
        </div>	
        <!-- // #containerHolder -->

        <?php
        include 'footer.php';
        ?>

