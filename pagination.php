<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Real Estate 360</title>

    <!-- CSS -->
    <link href="style/css/layout.css" rel="stylesheet" type="text/css" media="screen" />
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script> 
    <script type="text/javascript" src="script.js"></script>


    <!-- JavaScripts-->

</head>

<?php
include('config.php');
$per_page = 9; 

//Calculating no of pages
$sql = "select * from add_properties";
$result = mysql_query($sql);
$count = mysql_num_rows($result);
echo 'helo total rows is';
echo $count;
$pages = ceil($count/$per_page)
?>


<body>
    <div id="wrapper">
        <!-- h1 tag stays for the logo, you can use the a tag for linking the index page -->
        <h1><span>Real Estate 360</span></h1>

        <!-- You can name the links with lowercase, they will be transformed to uppercase by CSS, we prefered to name them with uppercase to have the same effect with disabled stylesheet -->
        <ul id="mainNav">
            <li class="logout"><a href="#">LOGOUT</a></li>
            <li class="logout"><a href="pagination.php">display</a></li>

        </ul>
        <!-- // #end mainNav -->

        <div id="containerHolder">
            <div id="container">
                <div id="sidebar">
                    <ul class="sideNav">
                        <!-- <li><a href="#">Exchange</a></li>
                        <li><a href="#" class="active">Print resources</a></li>
                        <li><a href="#">Training &amp; Support</a></li>
                        <li><a href="#">Books</a></li>
                        <li><a href="#">Safari books online</a></li>
                        <li><a href="#">Events</a></li> -->
                    </ul>
                    <!-- // .sideNav -->
                </div>    
                <!-- // #sidebar -->

                <div id="main"> 
                        <h3>Display Property Details</h3>
                        <div id ="displaypage">
                        </div>
                        <div id="loading" ></div>
                        <div id="content" ></div>
                        <ul id="pagination">
                            <?php
//Pagination Numbers
                            for ($i = 1; $i <= $pages; $i++) {
                                echo '<li id="' . $i . '">' . $i . '</li>';
                            }
                            ?>
                        </ul>
                </div> 
                <!-- // #main -->

                <div class="clear"></div>
            </div>
            <!-- // #container -->
        </div>	
        <!-- // #containerHolder -->

        <p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>
    </div>
    <!-- // #wrapper -->
</body>
</html>


