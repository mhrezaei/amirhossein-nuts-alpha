<div class="row main-navigation">
    <div class="large-3 columns">
        <a class="langBtn" href="<?php echo base_url(); ?>packing?lang=fa">Fa</a>
        <a class="langBtn" href="<?php echo base_url(); ?>packing/en?lang=en">En</a>
        <a class="langBtn" href="<?php echo base_url(); ?>packing/ar?lang=ar">Ar</a>
    </div>
    <div class="large-9 columns">

    </div>
</div>
</div>
</div>
<!-- Start Main Slider -->

<title><?php echo $site_title; ?> | بسته بندی</title>
    <div class="main-content-top">    
        <div class="main-wrapper">    
            <div class="row">
                <div class="large-6 columns" style="float: right; direction: rtl; text-align: right;">
                    <h2 class="yekan">بسته بندی</h2>
                </div>        
                <div class="large-6 columns" style="float: left; direction: rtl; text-align: left;">
                    <ul class="breadcrumbs left yekan">
                        <li>شما اینجا هستید</li>
                        <li><a href="<?php echo site_url(); ?>">خانه</a></li>
                        <li><a href="<?php echo site_url(); ?>/packing?lang=fa">بسته بندی</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="row main-content" style="margin-bottom: 40px;">
        <div class="large-12 columns" style="direction: rtl;">                            
            <div class="row">
                <div class="large-12 columns" style="direction: rtl;">
                    <h3 class="yekan" style="direction: rtl;">انواع بسته بندی محصولات ما</h3>
                    <div class="divider" style="direction: rtl;"><span></span></div>
                        <div style="font-family: Tahoma; font-size: 12px; direction: rtl; line-height: 16px;">
                        <?php
                            echo $content;
                        ?>
                        </div>
                        <br>
                        <span style="font-family: 'BNazanin'; direction: rtl; font-size: 14px; font-weight: bold;">آخرین بروزرسانی: <?php echo $update; ?></span>
                </div>
               
            </div>
        </div>
    </div>
    
</div>