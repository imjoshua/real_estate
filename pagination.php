<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: index.php");
}
?>
<?php
include 'header.php';
?>
<!-- JavaScripts-->
                    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
                    <script type="text/javascript" src="script.js"></script>
                    <h2>Welcome</h2> 
            <ul id="mainNav">
                <li class="logout"><a href="logout.php">Logout</a></li>
                <li class="logout"><a href="addPropertiesUI.php">Add Properties</a></li>

            </ul>
            <!-- // #end mainNav -->

            <div id="containerHolder">
                <div id="sidebar">
                    <h3> &nbsp;Search</h3>
                    <p> &nbsp; Property Title: </p>
                    <p> &nbsp;&nbsp;<input type="text" style="width:120px;" name="searchtitle" id="searchtitle"/></p> 
                    <p> &nbsp; City: </p>
                    <p> &nbsp;&nbsp;<input type="text" style="width:120px;" name="searchcity" id="searchcity"/></p> 
                    <p> &nbsp;&nbsp;<input type="button" name="search" id="search" value="Search" /></p>
                </div>    
                <!-- // #sidebar -->

                <div id="main"> 
                    <h3>Display Property Details</h3>
                    <div id ="displaypage">
                    </div>
                    <div id="loading"></div>
                    <div id="container"></div>
                </div> 
                <!-- // #main -->

                <div class="clear"></div>
            </div>	
            <!-- // #containerHolder -->

            <?php
            include 'footer.php';
            ?>


