<!-- add product start -->
<div class="contentModel" id="addProductContent" style="display: none;">
    <h2>افزودن محصول</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="addProMsg">محصول مورد نظر با موفقیت ثبت گردید.</span><br>
        </div>

        <div style="width: 130px; float: right;">
            <label for="txtProNameFa" style="line-height: 28px;">نام فارسی محصول:</label>
        </div>
        <input type="text" class="fild" name="txtProNameFa" id="txtProNameFa" style="width: 500px; float: right;" placeholder="نام فارسی محصول"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 130px; float: right;">
            <label for="txtProNameEn" style="line-height: 28px;">نام انگلیسی محصول:</label>
        </div>
        <input type="text" class="fild" name="txtProNameEn" id="txtProNameEn" style="width: 500px; float: right;" placeholder="نام انگلیسی محصول"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 130px; float: right;">
            <label for="txtProNameAr" style="line-height: 28px;">نام عربی محصول:</label>
        </div>
        <input type="text" class="fild" name="txtProNameAr" id="txtProNameAr" style="width: 500px; float: right;" placeholder="نام عربی محصول"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 130px; float: right;">
            <label for="txtProCat" style="line-height: 28px;">دسته بندی:</label>
        </div>
        <select class="fild" name="txtProCat" id="txtProCat" style="width: 510px; height: 30px;">
            <option value="0" >انتخاب کنید...</option>
        </select><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 130px; float: right;">
            <label for="txtImageUrl" style="line-height: 28px;">آدرس تصویر:</label>
        </div>
        <input type="text" class="fild" name="txtImageUrl" id="txtImageUrl" style="width: 500px; float: right;" placeholder="آدرس تصویر">
        <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>" style="font-size:12px; text-decoration: none;">افزودن تصویر</a>

        <div style="clear: both;"></div>

        <div style="width: 100%; float: right; padding-right: 5px;">
            <label for="txtDetailFa" style="line-height: 28px;">توضیحات فارسی:</label>
        </div>
        <textarea class="fild" rows="15" style="height: 800px;" id="txtDetailFa" name="txtContent"></textarea>
        <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>" style="font-size:14px;">افزودن تصویر</a>
        <br><br>

        <div style="width: 100%; float: right; padding-right: 5px;">
            <label for="txtDetailEn" style="line-height: 28px;">توضیحات انگلیسی:</label>
        </div>
        <textarea class="fild" rows="15" style="height: 800px;" id="txtDetailEn" name="txtContent"></textarea>
        <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>" style="font-size:14px;">افزودن تصویر</a>
        <br><br>

        <div style="width: 100%; float: right; padding-right: 5px;">
            <label for="txtDetailAr" style="line-height: 28px;">توضیحات عربی:</label>
        </div>
        <textarea class="fild" rows="15" style="height: 800px;" id="txtDetailAr" name="txtContent"></textarea>
        <a xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false" href="<?php echo site_url() . 'admin/uploadImages'; ?>" style="font-size:14px;">افزودن تصویر</a>
        <br><br>

        <div style="clear: both;"></div>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="changeUrl('<?php echo site_url(); ?>admin');">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" onclick="addNewProduct();">افزودن محصول</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- add product end -->