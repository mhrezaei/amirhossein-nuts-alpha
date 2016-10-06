<!-- edit page start -->
<div class="contentModel" id="editPageContent" style="display: none;">
    <h2>ویرایش صفحات اصلی</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">
        <input type="text" class="fild" name="txtTitle" id="txtTitle" style="width: 500px;" disabled="disabled">
        <input type="hidden" class="fild" name="txtId" id="txtId" value="">
        <br> <br>
        <textarea class="fild" rows="15" style="height: 800px;" id="editPage" name="txtContent"></textarea>
        <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>" style="font-size:14px;">افزودن تصویر</a>
        <br><br>

        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" onclick="editPage();">ثبت اطلاعات</button>
        <span style="font-family: BYekan; color: green; display: none;" id="editPageContentMsg">اطلاعات با موفقیت ذخیره گردید.</span>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- edit page end -->