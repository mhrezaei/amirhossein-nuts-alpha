<div class="row main-navigation">
    <div class="large-3 columns">
        <a class="langBtn" href="<?php echo base_url(); ?>about?lang=fa">Fa</a>
        <a class="langBtn" href="<?php echo base_url(); ?>about/en?lang=en">En</a>
        <a class="langBtn" href="<?php echo base_url(); ?>about/ar?lang=ar">Ar</a>
    </div>
    <div class="large-9 columns">

    </div>
</div>
</div>
</div>
<!-- Start Main Slider -->

<title><?php echo $site_title_ar; ?> | معلومات عنا</title>
    <div class="main-content-top">    
        <div class="main-wrapper">    
            <div class="row">
                <div class="large-6 columns" style="float: right; direction: rtl; text-align: right;">
                    <h2 class="yekan">معلومات عنا</h2>
                </div>        
                <div class="large-6 columns" style="float: left; direction: rtl; text-align: left;">
                    <ul class="breadcrumbs left yekan">
                        <li>أنت هنا</li>
                        <li><a href="<?php echo site_url(); ?>">الصفحة الرئيسية</a></li>
                        <li><a href="<?php echo site_url(); ?>/about/ar?lang=ar">معلومات عنا</a></li>
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
                    <h3 class="yekan" style="direction: rtl;">من نحن؟</h3>
                    <div class="divider" style="direction: rtl;"><span></span></div>
                        <div style="font-family: Tahoma; font-size: 12px; direction: rtl; line-height: 16px;">
                        <?php
                            echo $content;
                        ?>
                        </div>
                        <br>
                    <span style="font-family: 'BNazanin'; direction: rtl; font-size: 14px; font-weight: bold;">آخر تحديث لل: <?php echo date('Y/m/d', $date); ?></span>
                </div>
               
            </div>
        </div>
    </div>
    
</div>