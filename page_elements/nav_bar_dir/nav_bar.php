<div class="menu-btn-div before-load hide-on-small-only"  onclick="onMenuBtnClick()">
            <p class="menu-btn-text" style="transform-origin:left;display:inline-block"><span class="menu-btn-text-p">MENU</span>
                <span class="menu-btn-bar"></span>
            </p>
        </div>
        <div class="menu-btn-div before-load hide-on-med-and-up"  onclick="onMenuBtnClick()">
            <i class="small material-icons menu-btn-text">menu</i>
        </div>
        
        <div class="navbar-div before-load">
            <div style="width:100vw;height:100vh;position:relative">
                
                <div style="width:100vw;height:40px;position:absolute;bottom:66px">
                    <div class="container">
                    <p class="menu-option-h3" style="text-align:left;font-size:12px !important;color:#aaaaaa;font-weight:100">
                        Copyrights &copy;2017 | SBCC
                    </p>
                    </div>                    
                </div>
                
                <div class="menu-content-container-div" style="width:100vw">
                
                    <div class="container">
                        <div class="row">
                            <div class="col l6 m12 s12 menu-option-div" style="postion:relative;overflow-y:hidden">
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Work</a></h3>        
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Services</a></h3>        
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Clients</a></h3>        
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Affiliation</a></h3>        
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Careers</a></h3>        
                                <h3 class="menu-option-h3"><a class="hvr-underline-from-right" href="#">Start A Project</a></h3>        
                            </div>
                            <div class="col l6 m12 s12 hide-on-med-and-down" style="padding-top:100px; color: #e5e5e5">
                                <span class="menu-div-text-bar-span" style="background-color:#e5e5e5"></span>
                                <p style="font-weight:200 !important color:#e5e5e5; font-weight:300" class="menu-div-text-p">
                                    
                                    <?php
                                    
                                        $filename = "page_elements/nav_bar_dir/nav_bar_text_content.txt";
                                        $myfile = fopen($filename, "r");
                                        $theString = fread($myfile, filesize($filename));
                                        fclose($myfile);
                                        echo $theString;
                                    
                                    ?>
                                    
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                
                
                
                <div class="visible-navbar">
                    <div class="visible-navbar-content-div">
                        <div class="logo-div">
                            <p class="logo-p">
                                <span class="logo-p-span logo-p-span-S circle">S</span>
                                <span class="logo-p-span logo-p-span-B circle">B</span>
                                <span class="logo-p-span logo-p-span-C">C</span>
                                <span class="logo-p-span logo-p-span-C">C</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        