
        <div class="about-us-div" id="about-us-div-id">
            
            <div class="row" style="margin:0px;padding:0px;z-index:4 !important">
            
                <div class="col l9 m10 s12">
                    <div class="about-us-div-imag-div-container before-load">
                        <div class="about-us-div-imag-div" style="background-image: url(http://www.classycareergirl.com/wp-content/uploads/freshizer/52775eec4500eb4957fff098a347681a_8-Steps-to-Conquer-Your-Workplace-814-363-c.png);"></div>
                        <div class="about-us-div-imag-curtain"></div>
                    </div>
                </div>
                <div class="col l3 m2 s12 hide-on-small-only div-for-about-us-text-div-animation">
                    <div class="about-us-div-imag-div-container" style="opacity:0"></div>
                </div>
            </div>
        
            
            <div class="row" style="z-index:1">
                <div class="col l3 m2 s12 hide-on-small-only">
                
                    <div class="about-us-complay-name-div hide-on-med-and-down">
                        <h5 class="about-us-complay-name-div-heading">
                            <span>We are</span><br>
                            Syed Brothers<br> Construction Co.
                        </h5>
                    </div>
                
                </div>
                <div class="col l9 m10 s12 about-us-div-text-div-row" style="">
                    <div class="about-us-div-text-div">
                        <div class="container">
                            <div class="row ">
                                <div class="col l2 m2 s2">
                                    <p class="about-us-div-heading"> 
                                        <span class="about-us-div-heading-bar-span"></span>
                                        ABOUT US
                                    </p>
                                </div>
                                <div class="col l10 m10 s9">
                                    <h5 class="about-us-div-text-content">
                                        <?php
                                            $filename = "page_elements/index_about_us_div_dir/index_about_us_div_text_content.txt";
                                            $myfile = fopen($filename, "r");
                                            $theString = fread($myfile, filesize($filename));
                                            fclose($myfile);
                                            echo $theString;
                                        ?>
                                    </h5>
                                </div>
                            </div>
                            
                        </div>    
                    </div>
                </div>
            </div>
            
            
            
            
        </div>
        
        