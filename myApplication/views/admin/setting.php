<!-- setting start -->
<div class="contentModel" id="settingContent" style="display: none;">
    <h2>تنظیمات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="settingProMsg">تنظیمات جدید با موفقیت ذخیره گردید.</span><br>
        </div>

        <div style="width: 100px; float: right;">
            <label for="txtSite" style="line-height: 28px;">عنوان سایت:</label>
        </div>
        <input type="text" class="fild" name="txtSite" id="txtSite" style="width: 500px; float: right;" placeholder="عنوان سایت"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtEmail" style="line-height: 28px;">ایمیل سایت:</label>
        </div>
        <input type="text" class="fild" name="txtEmail" id="txtEmail" style="width: 500px; direction: ltr;" placeholder="E-mail"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAdminEmail" style="line-height: 28px;">ایمیل مدیریت:</label>
        </div>
        <input type="text" class="fild" name="txtAdminEmail" id="txtAdminEmail" style="width: 500px; direction: ltr;" placeholder="E-mail"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAddress" style="line-height: 28px;">آدرس:</label>
        </div>
        <input type="text" class="fild" name="txtAddress" id="txtAddress" style="width: 500px;" placeholder="آدرس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtTel" style="line-height: 28px;">شماره تماس:</label>
        </div>
        <input type="text" class="fild" name="txtTel" id="txtTel" style="width: 500px;" placeholder="شماره تماس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtFax" style="line-height: 28px;">شماره فکس:</label>
        </div>
        <input type="text" class="fild" name="txtFax" id="txtFax" style="width: 500px;" placeholder="شماره فکس"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtAbout" style="line-height: 28px;">درباره ما:</label>
        </div>
        <input type="text" class="fild" name="txtAbout" id="txtAbout" style="width: 500px;" placeholder="درباره ما"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtPass" style="line-height: 28px;">رمزعبور:</label>
        </div>
        <input type="password" class="fild" name="txtPass" id="txtPass" style="width: 500px;" placeholder="رمز عبور"><small style="line-height: 20px;">(درصورت وارد نمودن رمز، جایگزین رمز عبور قبلی می گردد.)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtPassA" style="line-height: 28px;">تکرار رمزعبور:</label>
        </div>
        <input type="password" class="fild" name="txtPassA" id="txtPassA" style="width: 500px;" placeholder="تکرار رمز عبور">

        <div style="clear: both;"></div>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="settingBtn">ذخیره تنظیمات</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- setting end -->