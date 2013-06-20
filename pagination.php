<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Real Estate 360</title>

        <!-- CSS -->
        <link href="style/css/layout.css" rel="stylesheet" type="text/css" media="screen" />
        <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5/jquery.min.js"></script>
        <script type="text/javascript" src="script.js"></script>


        <!-- JavaScripts-->

    </head>
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
                    <div id="sidebar">
                     <h3>Search</h3>
                    <p>City:<input type="text" style="width:120px;" name="searchcity" id="searchcity"/></p> 
                    <p><input type="button" name="search" id="search" value="Search" /></p>
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

            <p id="footer">Feel free to use and customize it. <a href="http://www.perspectived.com">Credit is appreciated.</a></p>
        </div>
        <!-- // #wrapper -->
    </body>
</html>


