<!-- slider list start -->
<div class="contentModel" id="sliderListContent" style="display: none;">
    <h2>تصاویر اسلایدر</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center;">
            <span style="color: green; display: none;" class="yekan" id="sliderListMsg">تصویر مورد نظر با موفقیت حذف گردید.</span><br>
            <span style="color: green; display: none;" class="yekan" id="sliderAddMsg">تصویر مورد نظر با موفقیت اضافه گردید.</span><br>
        </div>

        <div style="width: 100%; height: 180px; margin: 0 auto; text-align: center; margin-top: 25px; display: none; margin-bottom: 25px;" id="addSlideForm">
            <input type="text" class="fild" style="width: 400px; height: 26px;" name="addSlideFile" id="addSlideFile" placeholder="نام فایل"><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

            <br>

            <input type="text" class="fild" style="width: 400px; height: 26px;" name="addSlideTitle" id="addSlideTitle" placeholder="توضیحات کوتاه"><small style="line-height: 20px; color: #D13939;">(اختیاری)</small>

            <br>

            <input type="text" class="fild" style="width: 400px; height: 26px;" name="addSlideLink" id="addSlideLink" placeholder="لینک تصویر"><small style="line-height: 20px; color: #D13939;">(اختیاری)</small>

            <br>

            <span class="yekan" style="color: #ad6704;" >توجه: سایز تصویر اسلاید می بایست 1920x690 px باشد.</span>

            <br style="margin-bottom: 20px;">

            <button class="btn b3" type="button" name="submit" value="submit" style="" id="addCatBtn" onclick="addNewSlide();">افزودن تصویر</button>
            <button class="btn" type="button" name="submit" value="submit" style="" xmlns="http://www.w3.org/1999/xhtml" onclick="window.open('<?php echo site_url() . 'admin/uploadImages'; ?>','popup','width=550,height=250,scrollbars=no,resizable=no,toolbar=no,directories=no,location=no,menubar=no,status=no,left=50,top=0'); return false">آپلود تصویر</button>
            <button class="btn b4" type="button" name="submit" value="submit" style="" onclick="closeAddSlide();">انصراف</button>
        </div>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 95%;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="5">تصاویر اسلایدر</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 5%;">ردیف</th>
                <th style="text-align: center; width: 20%;">تصویر </th>
                <th style="text-align: center; width: 40%; direction: rtl; text-align: right;">توضیحات</th>
                <th style="text-align: center; width: 25%; direction: ltr;">لینک</th>
                <th style="text-align: center; width: 10%;">عملیات</th>
            </tr>
            </thead>
            <tbody id="sliderListContentBody">
            <tr>
                <td style="text-align: center; width: 100%;" colspan="5" class="orang">تا کنون تصویری درج نشده است.</td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; margin-bottom: 20px;"></div>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" onclick="closeAddSlide();">افزودن اسلاید</button>
        <div style="clear: both; margin-bottom: 20px;"></div>

    </div>
</div>
<!-- slider list end -->