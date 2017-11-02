<!DOCTYPE html>
<html>
    <head>
        <title>
            SBCC | Construction Company
        </title>
        <!--METADATA-->
        <meta charset="UTF-32">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="discription" content="SBCC Website">
        <meta name="keywords" content="SBCC">
        <meta name="author" content="Saad Ahmad">
        <!-- Chrome, Firefox and Opera -->
        <meta name="theme-color" content="#191919">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#191919">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!--INLINE STYLES-->
        <style>
            body{
                background-color: #ffffff;
                overflow-x: hidden;
                cursor: url(assets/cursor.png), auto;
            }

            .body-no-scroll{
                overflow-y: hidden;
            }
        </style>

        <!--FONTS-->
        <!--<script src="https://use.fontawesome.com/d904ece77e.js"></script>-->
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,500|Merriweather:200,700,400" rel="stylesheet">
        <link rel="stylesheet" href="theWebAPI/font-awesome/css/font-awesome.min.css">
        <!--STYLESHEETS-->
        <!--<link rel="icon" href="assets/images/NFAC-Logo%201.png">-->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    </head>
    <body class="the-body">
    
        <?php
            include("page_elements/nav_bar.php");    
            include("page_elements/index_hero_div.php");
            include("page_elements/aboutUsDiv.php");
        ?>

        
        
        <div style="height:1000px"></div>
        
        <script type="text/javascript" src="theWebAPI/jQuery.min.js"></script>
        <script type="text/javascript" src="theWebAPI/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/template-1.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/Open_webDSL_index.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script>
            window.onload = function(){
                windowOnLoad();
                setTimeout(function(){
                    
                },1000);
            }
        
        </script>
        
    </body>
</html>