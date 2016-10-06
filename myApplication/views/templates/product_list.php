<title><?php echo $site_title; ?> | لیست محصولات | <?php echo $cat['title']; ?></title>     

<style type="text/css">
    table tbody tr:hover{
        background: #e9fbfd;
    }

    li.childList{
        direction: rtl; 
        margin-right: 25px; 
        font-size: 15px !important;
        list-style: disc;
    }

    a.childListA{
        font-size: 15px !important;
    }

</style>

<div class="main-content-top">    
    <div class="main-wrapper">    
        <div class="row">
            <div class="large-6 columns" style="float: right; direction: rtl; text-align: right;">
                <h2 class="yekan"></h2>
            </div>        
            <div class="large-6 columns" style="float: left; direction: rtl; text-align: left;">
                <ul class="breadcrumbs left yekan">
                    <li>شما اینجا هستید</li>
                    <li><a href="<?php echo site_url(); ?>">خانه</a></li>
                    <li><a href="<?php echo site_url(); ?>">محصولات</a></li>
                    <li><a href="<?php echo site_url(); ?>product/plist/<?php echo $cat['id']; ?>/<?php echo $cat['title']; ?>.html"><?php echo $cat['title']; ?></a></li>
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
                    <h3 class="yekan" style="direction: rtl;">لیست محصولات » <?php echo $cat['title']; ?></h3>
                    <div class="divider" style="direction: rtl;"><span></span></div>
                    <div class="large-12 columns">
                        <div class="row" style="direction: rtl;">
                            <div class="large-9 push-3 columns">
                                <div class="row">
                                    <div class="large-12 columns">
                                        <?php
                                            if($child)
                                            {
                                                for($i = 0; $i < count($child); $i++)
                                                {
                                                    if($cooperator)
                                                    {
                                                    ?>

                                                    <table class="yekan" style="direction: rtl; font-size: 12px;">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="5" style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" id="subProduct<?php echo $child[$i]['id']; ?>"><?php echo $child[$i]['title']; ?></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="text-align: center; width: 5%;">ردیف</th>
                                                                <th style="text-align: center; width: 32%;">نام کالا</th>
                                                                <th style="text-align: center; width: 16%; direction: rtl;">قیمت مصرف کننده <small>(ريال)</small></th>
                                                                <th style="text-align: center; width: 15%; direction: rtl;">قیمت همکار <small>(ريال)</small></th>
                                                                <th style="text-align: center; width: 32%;">توضیحات / تعداد</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if($child[$i]['products'])
                                                                {
                                                                    for($a = 0, $n = 1; $a < count($child[$i]['products']); $a++)
                                                                    {
                                                                    ?>
                                                                    <tr>
                                                                        <td style="text-align: center; width: 5%; font-size: 16px;" class="nazanin"><?php echo $n++; ?></td>
                                                                        <td style="text-align: center; width: 32%; direction: rtl;"><?php echo $child[$i]['products'][$a]['name']; ?></td>
                                                                        <td style="text-align: center; width: 16%; font-size: 16px;" class="nazanin"><?php echo $child[$i]['products'][$a]['price'] = $child[$i]['products'][$a]['price'] ? number_format($child[$i]['products'][$a]['price']) : '-'; ?></td>
                                                                        <td style="text-align: center; width: 15%; font-size: 16px;" class="nazanin"><?php echo $child[$i]['products'][$a]['cPrice'] = $child[$i]['products'][$a]['cPrice'] ? number_format($child[$i]['products'][$a]['cPrice']) : '-'; ?></td>
                                                                        <td style="text-align: center; width: 32%;"><?php echo $child[$i]['products'][$a]['detail']; ?></td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                <tr>
                                                                    <td colspan="5" style="text-align: center; width: 100%; font-size: 16px; color: #ff6f21; direction: rtl;" class="nazanin">تاکنون محصولی ثبت نگردیده است.</td>
                                                                </tr>
                                                                <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>

                                                    <?php

                                                    }
                                                    else
                                                    {
                                                    ?>
                                                    <table class="yekan" style="direction: rtl; font-size: 12px;">
                                                        <thead>
                                                            <tr>
                                                                <th colspan="5" style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" id="subProduct<?php echo $child[$i]['id']; ?>"><?php echo $child[$i]['title']; ?></th>
                                                            </tr>
                                                            <tr>
                                                                <th style="text-align: center; width: 5%;">ردیف</th>
                                                                <th style="text-align: center; width: 32%;">نام کالا</th>
                                                                <th style="text-align: center; width: 16%; direction: rtl;">قیمت مصرف کننده <small>(ريال)</small></th>
                                                                <th style="text-align: center; width: 15%; direction: rtl;">استعلام قیمت همکار</th>
                                                                <th style="text-align: center; width: 32%;">توضیحات / تعداد</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php
                                                                if($child[$i]['products'])
                                                                {
                                                                    for($a = 0, $n = 1; $a < count($child[$i]['products']); $a++)
                                                                    {
                                                                    ?>
                                                                    <tr>
                                                                        <td style="text-align: center; width: 5%; font-size: 16px;" class="nazanin"><?php echo $n++; ?></td>
                                                                        <td style="text-align: center; width: 32%; direction: rtl;"><?php echo $child[$i]['products'][$a]['name']; ?></td>
                                                                        <td style="text-align: center; width: 16%; font-size: 16px;" class="nazanin"><?php echo $child[$i]['products'][$a]['price'] = $child[$i]['products'][$a]['price'] ? number_format($child[$i]['products'][$a]['price']) : '-'; ?></td>
                                                                        <td style="text-align: center; width: 15%; font-size: 16px;" class="nazanin">
                                                                            <a href="<?php echo site_url(); ?>contact/index/<?php echo $child[$i]['products'][$a]['id']; ?>#inquiry" target="_blank"><span class="icon-search" style="color: #FF6F21;"></span></a>
                                                                        </td>
                                                                        <td style="text-align: center; width: 32%;"><?php echo $child[$i]['products'][$a]['detail']; ?></td>
                                                                    </tr>
                                                                    <?php
                                                                    }
                                                                }
                                                                else
                                                                {
                                                                ?>
                                                                <tr>
                                                                    <td colspan="5" style="text-align: center; width: 100%; font-size: 16px; color: #ff6f21; direction: rtl;" class="nazanin">تاکنون محصولی ثبت نگردیده است.</td>
                                                                </tr>
                                                                <?php
                                                                }
                                                            ?>
                                                        </tbody>
                                                    </table>
                                                    <?php
                                                    }
                                                }
                                            }
                                            else
                                            {
                                            ?>
                                            <p style="direction: rtl; margin: 0 auto; text-align: center; color: #ff6f21;" class="yekan">تا کنون محصولی اضافه نشده است.</p>
                                            <?php
                                            }
                                        ?>
                                    </div>        
                                </div>               
                            </div>


                            <div class="large-3 pull-9 columns widgets side-widgets" id="productCategories" style="z-index: 1000;">
                                <!-- Sidebar Navigation -->
                                <div data-section="" class="section-container accordion" style="min-height: 36px;" data-section-resized="true">
                                    <section class="section active" style="padding-top: 36px;">
                                        <p class="title yekan" style="left: 0px; height: 36px; direction: rtl; text-align: right;"><a href="#"><span style="color: black;">دسته بندی محصولات</span></a></p>
                                        <div class="content" style="direction: rtl; text-align: right;">
                                            <ul class="side-nav yekan" style="font-size: 12px; padding-top: 10px;">
                                                <li>
                                                    <a href="<?php echo site_url(); ?>product/plist/1/خشکبار.html" style="font-size: 13px; color: black;"><span style="color: black;">خشکبار</span></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url(); ?>product/plist/2/میوه-خشک.html" style="font-size: 13px; color: black;"><span style="color: black;">میوه های خشک</span></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url(); ?>product/plist/3/شکلات.html" style="font-size: 13px; color: black;"><span style="color: black;">شکلات</span></a>
                                                </li>
                                                <li>
                                                    <a href="<?php echo site_url(); ?>product/plist/4/شیرینی-و-سوغات.html" style="font-size: 13px;"><span style="color: black;">شیرینی و سوغات</span></a>
                                                </li>
                                            </ul>
                                        </div>
                                    </section>
                                </div>
                                <!-- End Sidebar Navigation -->
                            </div>
                            <div style="clear: both;"></div>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>

</div>