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
        <meta name="theme-color" content="#efefef">
        <!-- Windows Phone -->
        <meta name="msapplication-navbutton-color" content="#efefef">
        <!-- iOS Safari -->
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-status-bar-style" content="black">
        <!--INLINE STYLES-->
        <style>
            body{
                background-color: #efefef;
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
        
        <link rel="stylesheet" href="theWebAPI/font-awesome/css/font-awesome.min.css">
        <!--STYLESHEETS-->
        <!--<link rel="icon" href="assets/images/NFAC-Logo%201.png">-->
        <link rel="stylesheet" href="css/index.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.99.0/css/materialize.min.css">
    </head>
    <body class="the-body">
    
        <?php
             include("page_elements/nav_bar.php");    
        
        ?>
        
        <div class="hero-div white">
            <div class="container">
                <div class="center-row-div">
                    <div class="hero-div-center-row-div-underlay">
                        <h1 class="hero-div-center-row-div-underlay-text">Welcome</h1>
                    </div>
                    <div class="hero-div-center-row-div-overlay">
                        <h1 class="hero-div-center-row-div-overlay-text">We provide <strong>solutions</strong>, <br>robust and exquisit
                            <span class="hero-div-overlay-text-bar-span"></span>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        
        <div style="height:1000px"></div>
        
        <script type="text/javascript" src="theWebAPI/jQuery.min.js"></script>
        <script type="text/javascript" src="theWebAPI/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/template-1.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/Open_webDSL_index.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script>
            window.onload = function(){
                windowOnLoad();
            
            }
        
        </script>
        
    </body>
</html>