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
            
            .loader-div{
                position: fixed;
                z-index: 1000;
                background: #242424;
                top : 0;
                left: 0;
                height: 100vh;
                width: 100vw;
                transition-property: all;
                transition-duration: 0.2s;
                transition-delay: 0.6s;
                transition-timing-function: ease-out;
            }
            
            .loader-div-end{
                transform: translateY(-100vh);
            }
            
            .loader-div-inner-div{
                height: 100%;
                width: 100%;
                background: #000000;
                transition-property: all;
                transition-duration: 0.3s;
                transition-delay: 0.3s;
                transition-timing-function: ease-out;
                display: flex;
                align-items: center;
            }
            
            .loader-div-end .loader-div-inner-div{
                transform: translateY(-100vh);
            }
            
            .loader-div-inner-div div{
                font-weight: 400;
                margin: auto;
                text-align: center;
                padding: 10px;
                opacity: 1;
                transition-property: all;
                transition-duration: 0.3s;
                transition-timing-function: ease-out;
            }
            
            .loader-div-end .loader-div-inner-div div{
                opacity: 0;
                transform: translateY(30px);
            }
            
            .loader-div-inner-div div h4{
                font-weight: 300;
            }
            
            .loader-div-inner-div div h5{
                font-weight: 300;
            }
            
            .loader-div-inner-div div p{
                text-align: left;
                font-weight: 300;
            }
            
            .loader-div-inner-div div p span{
                width: 20px;
                background: white;
                height: 2px;
                display: inline-block;
                margin: 4px;
                margin-left: 0px;
            }
            
            
.loader {
    
    border: 2px solid white; /* Light grey */
    border-top: 2px solid  black; /* Blue */
    border-radius: 50%;
    width: 20px;
    height: 20px;
    animation: spin 1s linear infinite;
}

@keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
}
            
            @media screen and (max-width:350px){
                .loader-div-inner-div div p span{
                    display: none;
                }
                
                .loader-div-inner-div div p{
                    text-align: center;
                    font-weight: 300;
                }
            
                .loading-div-text-loading-p{
                    display: none;
                }
                
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
    <body class="the-body body-no-scroll">
    
        
        <div class="loader-div">
            <div class="loader-div-inner-div">
                <div>
                    <p class="white-text">
                        <span></span>
                        Welcome to</p>
                    <h4 class="white-text hide-on-small-only" style="margin-bottom:30px;">Syed Brothers Construction Co.</h4>
                    <h5 class="white-text hide-on-med-and-up" style="margin-bottom:30px;">Syed Brothers Construction Co.</h5>
                    <div class="loader"></div>
                </div>
            </div>
        </div>
        
        
        <?php
            include("page_elements/nav_bar_dir/nav_bar.php");    
            include("page_elements/index_hero_div_dir/index_hero_div.php");
            include("page_elements/index_about_us_div_dir/aboutUsDiv.php");
        ?>

        
        <div class="our-work-div">
            <div class="container our-word-div-heading-div">
                <p class="hide-on-small-only"><span>Our Recent</span></p>
                <p class="hide-on-med-and-up center"><span>Our Recent</span></p>
                <h1 class="hide-on-small-only">PROJECTS</h1>
                <h3 class="hide-on-med-and-up center">PROJECTS</h3>
            </div>
            <div style="height:1000px" class=""></div>
        </div>
        
        
        
        
        <script type="text/javascript" src="theWebAPI/jQuery.min.js"></script>
        <script type="text/javascript" src="theWebAPI/materialize/js/materialize.min.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/template-1.js"></script>
        <script type="text/javascript" src="theWebAPI/Open_webDSL/Open_webDSL_index.js"></script>
        <script type="text/javascript" src="js/index.js"></script>
        <script>
            window.onload = function(){
                windowOnLoad();
                $(".loader-div").addClass("loader-div-end");
                $(".the-body").removeClass("body-no-scroll");
            }
        
        </script>
        
    </body>
</html>