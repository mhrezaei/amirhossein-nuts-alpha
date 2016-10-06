<div style="width: 100%; height: 40px; margin: 0 auto; text-align: center; margin-top: 25px;">
    <span id="ajaxLoad" style="display: none;">
        شکیبا باشید...
        <br>
        <img src="<?php echo assets_url(); ?>images/load.gif" alt="load">
    </span>
</div>

<div class="contentModel" id="welcomeMsg">
    <h2>اطلاعات ورود</h2>

    <div class="mainDiv nazanin" style="text-align: right; min-height: 100px; font-size: 14px;">
        به بخش مدیریت خوش آمدید.
        <br>
        آخرین ورود موفق شما به سامانه: <span style="font-weight: bold;"><?php echo pdate('l، j F Y', time()); ?></span>
    </div>
</div>

<?php
    $this->load->view('admin/pages');
    $this->load->view('admin/categories');
    $this->load->view('admin/addProduct');
    $this->load->view('admin/productList');
    $this->load->view('admin/editProduct');
    $this->load->view('admin/setting');
    $this->load->view('admin/contacts');
    $this->load->view('admin/slider');
?>
