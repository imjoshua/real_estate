<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Real Estate 360</title>

    <!-- CSS -->
    <link href="style/css/layout.css" rel="stylesheet" type="text/css" media="screen" />
    <!-- JavaScripts -->
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript" src="/PhpProject2/ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="insertion_script.js"></script>
</head>

<body>

    <?php
    if ($id = $_GET["id"]) {
        include "Edit_details.php";
        $cid = $_GET["cid"];
        echo"hello angry";
        echo $cid;
    }
    ?>

    <div id="wrapper">
        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
        <h1><span>Real Estate 360</span></h1>

        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
            <li class="logout"><a href="#">LOGOUT</a></li>
            <li class="logout"><a href="pagination.php">Display</a></li>

        </ul>
        <!-- // #end mainNav -->

        <div id="containerHolder">
            <div id="main">
                <form method="POST" action="addProperties.php" enctype = "multipart/form-data">
                    <h3>Add Property Details</h3>
                    <fieldset>
                        <input type="hidden" name="cid" id="cid" value="<?= $cid ?>" />
                        <input type="hidden" name="id" id="id" value="<?= $id ?>" />

                        <label>Name:</label>
                        <input type="text" name="name" id="name" value="<?= $name ?>"/>
                        <label>Email:</label>
                        <input type="text" name="email" id="email" value="<?= $email ?>"/>
                        <label>Current City:</label>
                        <input type="text" name="currentcity" id="currentcity" value="<?= $currentcity ?>"/>
                        <label>Phone No:</label>
                        <input type="text" name="phoneno" id="phoneno" value="<?= $phone ?>"/>
                        <label>Type of Property:</label>
                        <select id="selectPropertyType" name="selectPropertyType">
                            <? if ($id = $_GET["id"]) {
                                ?>
                                <option value="<? $selectPropertyType ?>" selected="selected"><? echo $propertytype ?></option>
                                <?
                            } else {
                                ?>
                                <option value = "0" >Select</option>
                                <option value = "1">Commercial Land</option>
                                <option value = "2">Commercial Shops</option>
                            <? } ?>

                        </select> 
                        <div id= "land">
                            <label>Property Title:</label>
                            <input type="text" name="propertytitle" id="landpropertytitle" value="<?= $title ?>"/>
                            <label>Expected Price (Rs) :</label>
                            <input type="text" name="expectedprice" id="expectedprice" value="<?= $price ?>"/>
                            <select class="area"id="selectPlotAreaType" name="selectPlotAreaType">

                                <option value = "0" <?php if ($selectPlotAreaType == 0) echo "selected='selected'"; ?>>Select</option>
                                <option value = "1" <?php if ($selectPlotAreaType == 1) echo "selected='selected'"; ?>>Sq.Ft</option>
                                <option value = "2" <?php if ($selectPlotAreaType == 2) echo "selected='selected'"; ?>>Sq.Yards</option>
                                <option value = "3" <?php if ($selectPlotAreaType == 3) echo "selected='selected'"; ?>>Sq.Meter</option>
                                <option value = "4" <?php if ($selectPlotAreaType == 4) echo "selected='selected'"; ?>>Acres</option>
                                <option value = "5" <?php if ($selectPlotAreaType == 5) echo "selected='selected'"; ?>>Centes</option>

                            </select> 
                            <label>Plot Area:</label>
                            <input type="text" name="plotAreaValue" id="plotAreaValue"value="<?= $plotareavalue ?>"/>
                            <div id = "shop">
                                <label>Washroom:</label>
                                <input type="text" name="washroom" id="washroom"<?= $washroom ?>/>
                                <select class="area"id="selectBuilupAreaType" name="selectBuilupAreaType">
                                    <option value = "0" <?php if ($selectPlotAreaType == 0) echo "selected='selected'"; ?>>Select</option>
                                    <option value = "1" <?php if ($selectPlotAreaType == 1) echo "selected='selected'"; ?>>Sq.Ft</option>
                                    <option value = "2" <?php if ($selectPlotAreaType == 2) echo "selected='selected'"; ?>>Sq.Yards</option>
                                    <option value = "3" <?php if ($selectPlotAreaType == 3) echo "selected='selected'"; ?>>Sq.Meter</option>
                                    <option value = "4" <?php if ($selectPlotAreaType == 4) echo "selected='selected'"; ?>>Acres</option>
                                    <option value = "5" <?php if ($selectPlotAreaType == 5) echo "selected='selected'"; ?>>Centes</option>
                                </select> 
                                <label>Build Up Area:</label>
                                <input type="text" name="buildupAreaValue" id="buildupAreaValue"value="<?= $buildupareavalue ?>"/>
                            </div>
                            <label>Property Address:</label>
                            <input type="text" name="propertyaddress" id="propertyaddress" value="<?= $address ?>"/>
                            <label>City:</label>
                            <input type="text" name="city" id="city" value="<?= $city ?>"/>
                            <label>Property Description:</label>
                            <div id="editor">
                                <textarea name ="description" id ="description" rows="10" cols="40"><?= $description ?></textarea>
                                <script type="text/javascript">
                                    CKEDITOR.replace('description');
                                </script>
                            </div>
                            <label>Property Photo:</label>
                            <input type="file" name="image" />
                        </div>

                        <input type="submit" name="submit" id="submit" value="Submit Details" />
                    </fieldset>
                </form>
            </div>
            <!-- // #main -->

            <div class="clear"></div>
        </div>	
        <!-- // #containerHolder -->

        <p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>


