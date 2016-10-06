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

<title><?php echo $site_title_en; ?> | About US</title>
    <div class="main-content-top">    
        <div class="main-wrapper">    
            <div class="row">
                <div class="large-6 columns" style="float: right; direction: ltr; text-align: right;">
                    <h2 class="yekan">About US</h2>
                </div>
                <div class="large-6 columns" style="float: left; direction: ltr; text-align: left;">
                    <ul class="breadcrumbs left yekan">
                        <li>You are here</li>
                        <li><a href="<?php echo site_url(); ?>">Home</a></li>
                        <li><a href="<?php echo site_url(); ?>/about/en?lang=en">About US</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

<div class="main-wrapper">
    <!-- Main Content -->
    <div class="row main-content" style="margin-bottom: 40px;">
        <div class="large-12 columns" style="direction: ltr;">
            <div class="row">
                <div class="large-12 columns" style="direction: ltr;">
                    <h3 class="yekan" style="direction: ltr;">Who we are?</h3>
                    <div class="divider" style="direction: ltr;"><span></span></div>
                        <div style="font-family: Tahoma; font-size: 12px; direction: ltr; line-height: 16px;">
                        <?php
                            echo $content;
                        ?>
                        </div>
                        <br>
                    <span style="direction: ltr; font-size: 14px; font-weight: bold;">Last update: <?php echo date('Y/m/d', $date); ?></span>
                </div>
               
            </div>
        </div>
    </div>
    
</div>