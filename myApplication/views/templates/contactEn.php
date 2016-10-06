<div class="row main-navigation">
    <div class="large-3 columns">
        <a class="langBtn" href="<?php echo base_url(); ?>contact?lang=fa">Fa</a>
        <a class="langBtn" href="<?php echo base_url(); ?>contact/en?lang=en">En</a>
        <a class="langBtn" href="<?php echo base_url(); ?>contact/ar?lang=ar">Ar</a>
    </div>
    <div class="large-9 columns">

    </div>
</div>
</div>
</div>
<!-- Start Main Slider -->

<title><?php echo $site_title_en; ?> | Contact US</title>
    <div class="main-content-top">    
        <div class="main-wrapper">    
            <div class="row">
                <div class="large-6 columns" style="float: right; direction: ltr; text-align: right;">
                    <h2 class="yekan">Contact US</h2>
                </div>        
                <div class="large-6 columns" style="float: left; direction: ltr; text-align: left;">
                    <ul class="breadcrumbs left yekan">
                        <li>You are here</li>
                        <li><a href="<?php echo site_url(); ?>">home</a></li>
                        <li><a href="<?php echo site_url(); ?>contact/en?lang=en">Contact US</a></li>
                    </ul>
                </div>
            </div>
        </div>        
    </div>

<div id="map_canvas"></div> 
    <div class="main-wrapper">       
    <div class="content_wrapper">
        <div class="row">
            <div class="large-3 columns">
                <h3 class="contact_title yekan">Contact</h3>
                <div class="divider"><span></span></div>
                <div class="contact_info">
                    <ul class="about-info garnik">
                        <li><i class="icon-home"></i><span><?php echo $address_en; ?></span></li>
                        <li><i class="icon-phone"></i><span><?php echo $tel_en; ?></span></li>
                        <li><i class="icon-print"></i><span><?php echo $fax_en; ?></span></li>
                        <li><i class="icon-envelope"></i><?php echo $sms_en; ?></li>
                        <li><i class="icon-envelope"></i><a href="mailto:<?php echo $site_email; ?>"><?php echo $site_email; ?></a></li>
                    </ul>
                </div>
            </div>
                        <div class="large-3 columns">
                
                <h3 class="contact_title yekan">Our working hours</h3>
                <div class="divider yekan"><span></span></div>
                <p style="direction: ltr; text-align: justify;" class="yekan">
                    <span class="yekan">
                    <?php
                        echo $page['content'];
                    ?>
                    </span>
                </p>
            </div>

            <div class="large-6 columns">
                <h3 class="contact_title yekan" id="inquiry">Send Message</h3>
                <div class="divider"><span></span></div>
                    <div id="status"></div>
                    <div class="contact_form">
                        <div class="row">
                            <form method="POST" class="contactForm" name="contactForm" id="contactForm">
                                <div class="small-4 columns">
                                    <input type="text" placeholder="E-mail" id="txtContactEmail" class="radiusInput" tabindex="3" />
                                </div>
                                <div class="small-4 columns">
                                    <input type="text" placeholder="Website" id="txtContactSite" class="radiusInput" tabindex="2" />
                                </div>
                                <div class="small-4 columns yekan">
                                    <input type="text" placeholder="Name" id="txtContactName" class="yekan radiusInput" style="direction: ltr;" tabindex="1" />
                                </div>
                                <div class="small-12 columns">
                                    <textarea cols="10" rows="15" placeholder="Message" id="txtContactMsg" name="message" class="yekan radiusInput" style="direction: ltr; text-align: justify;" tabindex="4"></textarea>
                                </div>
                                <div class="small-4 columns yekan" style="margin: 0 auto; padding-right: 0px; padding-left: 15px;">
                                    <?php
                                        $contactQs = securityQuestion('y', NULL, FALSE, 'conPage1');
                                    ?>
                                    <input type="text" placeholder="Answer" id="txtContactQs" class="yekan radiusInput" style="direction: ltr; text-align: center;" tabindex="5" />
                                    <input type="hidden"  name="txtContactQsKey" id="txtContactQsKey" value="<?php echo $contactQs['key']; ?>" />
                                </div>
                                <div class="small-8 columns yekan" style="text-align: right;">
                                    <span style="direction: ltr; text-align: right; color: #2B2B2B; font-size: 12px; line-height: 30px;">Is 2 plus 8?</span>
                                </div>
                                <div class="small-12 columns yekan">
                                    <input type="button" class="button right yekan radiusInput" value="Send" name="send" id="contactSendBtn" style="float: right;" tabindex="6" onclick="contactFormQu();" />
                                    <img src="<?php echo assets_url(); ?>images/load1.gif" alt="loading" id="contactFormLoad" style="float: right; margin-right: 10px; margin-top: 30px; display: none;" >
                                    <span style="float: right; margin-right: 10px; margin-top: 27px; direction: ltr; display: none;" id="ContactFormStr"></span>
                                </div> 
                            </form>
                        </div>
                    </div>    
                </div>
            </div>
        </div>
    </div>