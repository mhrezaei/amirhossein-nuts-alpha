<?php

if ($this->input->get('lang'))
{
    if ($this->input->get('lang') == 'fa')
    {
        ?>
        <title><?php echo $site_title; ?> | صفحه نخست</title>
        <?php
    }
    elseif ($this->input->get('lang') == 'en')
    {
        ?>
        <title><?php echo $site_title_en; ?> | Home Page</title>
        <?php
    }
    elseif ($this->input->get('lang') == 'ar')
    {
        ?>
        <title><?php echo $site_title_ar; ?> | الصفحة الرئيسية</title>
        <?php
    }
}
else
{
    ?>
    <title><?php echo $site_title; ?> | صفحه نخست</title>
    <?php
}

?>

    <!-- Main Content -->
<div class="main-wrapper" id="Product">
       <div class="row main-content">
        <div class="large-12 columns" style="margin-top: 20px; margin-bottom: 30px;">
            <div class="row">        
                <div class="large-3 columns">
                    <div class="featured-block">
                        <a href="<?php echo base_url(); ?>product/plist/4/شیرینی-و-سوغات.html">
<!--                            <span class="icon-beaker fblock-icon"></span>-->
                            <img src="<?php echo assets_url(); ?>images/sur.png">
                            <div class="fblock-content">
                                <p class="fblock-main"><span class="yekan" style="line-height: 20px; font-size: 15px;">.</span></p>
                                <?php
                                if ($this->input->get('lang'))
                                {
                                    if ($this->input->get('lang') == 'fa')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع شیرینی و سوغات</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'en')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">Confectionery and souvenirs</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'ar')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">الحلويات والهدايا التذكارية</span></p>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع شیرینی و سوغات</span></p>
                                <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="large-3 columns">
                    <div class="featured-block">
                        <a href="<?php echo base_url(); ?>product/plist/3/شکلات.html">
<!--                            <span class="icon-magic fblock-icon"></span>-->
                            <img src="<?php echo assets_url(); ?>images/choco.png">
                            <div class="fblock-content">
                                <p class="fblock-main"><span class="yekan" style="line-height: 20px; font-size: 15px;">.</span></p>
                                <?php
                                if ($this->input->get('lang'))
                                {
                                    if ($this->input->get('lang') == 'fa')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع شکلات</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'en')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">Candies</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'ar')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">الحلوى</span></p>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع شکلات</span></p>
                                    <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="large-3 columns">
                    <div class="featured-block">
                        <a href="<?php echo base_url(); ?>product/plist/2/میوه-خشک.html">
<!--                            <span class="icon-hdd fblock-icon"></span>-->
                            <img src="<?php echo assets_url(); ?>images/fruit.png">
                            <div class="fblock-content">
                                <p class="fblock-main"><span class="yekan" style="line-height: 20px; font-size: 15px;">.</span></p>
                                <?php
                                if ($this->input->get('lang'))
                                {
                                    if ($this->input->get('lang') == 'fa')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع میوه خشک</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'en')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">Dried Fruit</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'ar')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">الفاكهة المجففة</span></p>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع میوه خشک</span></p>
                                    <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="large-3 columns">
                    <div class="featured-block">
                        <a href="<?php echo base_url(); ?>product/plist/1/خشکبار.html">
<!--                            <span class="icon-laptop fblock-icon"></span>-->
                            <img src="<?php echo assets_url(); ?>images/nuts.png">
                            <div class="fblock-content">
                                <p class="fblock-main"><span class="yekan" style="line-height: 20px; font-size: 15px;">.</span></p>
                                <?php
                                if ($this->input->get('lang'))
                                {
                                    if ($this->input->get('lang') == 'fa')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع خشکبار</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'en')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">Nuts</span></p>
                                        <?php
                                    }
                                    elseif ($this->input->get('lang') == 'ar')
                                    {
                                        ?>
                                        <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">أنواع المكسرات</span></p>
                                        <?php
                                    }
                                }
                                else
                                {
                                    ?>
                                    <p class="fblock-sub"><span class="yekan" style="line-height: 20px; font-size: 13px;">انواع خشکبار</span></p>
                                    <?php
                                }
                                ?>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <!--
        
        <div class="large-12 columns">    
            <div class="title-block">
                <h3>Our Doctors</h3>
                <div class="divider"><span></span></div>  
            </div>        
            <div class="work_slide">
                <ul id="work_slide">
                    <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/1.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>Colon and rectal surgery, Dental surgery, Oral and maxillofacial surgery.</p>
                                <a class="button btn-icon icon-2" href="portfolio-single.html"><i class="icon-external-link icon-large"></i></a> 
                            </div>
                        </div>
                        <div class="doctor-name">John Smith</div>
                    </li>
                    <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/2.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>Pediatric surgery, Plastic surgery, Podiatric surgery.</p>
                                <a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a> 
                            </div>
                        </div>
                        <div class="doctor-name">Adriana Lima</div>
                    </li>
                     <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/3.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>Trauma surgery, Thoracic surgery, Urology, Veterinary surgery.</p>
                                <a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a> 
                            </div>
                        </div>
                        <div class="doctor-name">M.D. House</div>
                    </li>
                    <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/4.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>All in one master, the genius, the man behind the curtain.</p>
                                <a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a> 
                            </div>
                        </div>
                        <div class="doctor-name">Lonely Shepherd</div>
                    </li>
                     <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/5.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>Aenean eget mauris nibh, eu pellentesque ipsum. The lorem is totally site amet.</p>
                                <a class="button btn-icon icon-2" href="#"><i class="icon-external-link icon-large"></i></a> 
                            </div>
                        </div>
                        <div class="doctor-name">Lisa Minelly</div>
                    </li>
                     <li>
                        <div class="view view-two"> 
                            <img src="<?php echo assets_url(); ?>images/demo/doctors/6.jpg" alt="" /> 
                            <div class="mask"> 
                                <h3>Specialties</h3>
                                <p>Aenean eget mauris nibh, eu pellentesque ipsum. The lorem is totally site amet.</p>
                                <a class="button btn-icon" href="#"><i class="icon-zoom-in icon-large"></i></a>
                            </div>
                        </div>
                        <div class="doctor-name">Enzo Ferrari</div>
                    </li>
                </ul>
        
                <div class="clearfix"></div>
                <a class="prev" id="slide_prev" href="#"><img src="<?php echo assets_url(); ?>images/arrow_left.png" alt="Previous" /></a>
                <a class="next" id="slide_next" href="#"><img src="<?php echo assets_url(); ?>images/arrow_right.png" alt="Next" /></a>
            </div>
        </div>
        <div class="clearfix"></div>
        
        
        <div class="large-12 columns">
             <div class="title-block">                    
                <h3>Latest News</h3>
                <div class="clearfix"></div>                        
            </div>    
            <div class="divider"><span></span></div>                                   
            <div class="row">
                <article class="large-3 columns">                           
                    <div class="mod_con_img">
                         <img src="<?php echo assets_url(); ?>images/demo/news/1.jpg" alt="" /> 
                        <ul class="meta">
                            <li><i class="icon-time"></i>Apr 22, 2013</li>
                        </ul>
                    </div>
                    <div class="mod_con_text">
                        <h5>Will 2013 be the year of the smartwatch?</h5>
                        <div class="divline"><span></span></div>            
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec </p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </article>
                <article class="large-3 columns">                          
                    <div class="mod_con_img">
                            <img src="<?php echo assets_url(); ?>images/demo/news/2.jpg" alt="" /> 
                        <ul class="meta">
                            <li><i class="icon-time"></i>Apr 22, 2013</li>
                        </ul>
                    </div>

                    <div class="mod_con_text">
                        <h5>Will 2013 be the year of the smartwatch?</h5>
                        <div class="divline"><span></span></div> 
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec </p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </article>
                <article class="large-3 columns">
                    <div class="mod_con_img">
                          <img src="<?php echo assets_url(); ?>images/demo/news/3.jpg" alt="" /> 
                        <ul class="meta">
                            <li><i class="icon-time"></i>Apr 22, 2013</li>
                        </ul>
                    </div>

                    <div class="mod_con_text">
                        <h5>Will 2013 be the year of the smartwatch?</h5>
                        <div class="divline"><span></span></div> 
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec </p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </article>
                <article class="large-3 columns">
                    <div class="mod_con_img">
                           <img src="<?php echo assets_url(); ?>images/demo/news/4.jpg" alt="" /> 
                        <ul class="meta">
                            <li><i class="icon-time"></i>Apr 22, 2013</li>
                        </ul>
                    </div>
                    <div class="mod_con_text">
                        <h5>Will 2013 be the year of the smartwatch?</h5>
                        <div class="divline"><span></span></div> 
                        <p>Lorem quis bibendum auctor, nisi elit consequat ipsum, nec </p>
                        <a href="#" class="button">Read More</a>
                    </div>
                </article>
            </div>
        </div>
        -->
    </div>
</div>