<!-- edit product start -->
<div class="contentModel" id="editProductContent" style="display: none;">
    <h2>ویرایش محصول</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center; padding-bottom: 10px;">
            <span style="color: green; display: none;" class="yekan" id="editProMsg">محصول مورد نظر با موفقیت ویرایش گردید.</span><br>
        </div>

        <div style="width: 100px; float: right;">
            <label for="txtProNameEdit" style="line-height: 28px;">نام محصول:</label>
        </div>
        <input type="text" class="fild" name="txtProNameEdit" id="txtProNameEdit" style="width: 500px; float: right;" placeholder="نام محصول"><small style="line-height: 30px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtProPriceEdit" style="line-height: 28px;">قیمت مصرف کننده:</label>
        </div>
        <input type="text" class="fild" name="txtProPriceEdit" id="txtProPriceEdit" style="width: 500px;" placeholder="قیمت مصرف کننده (ریال)"><small style="line-height: 20px; color: #D13939;"></small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtProCPriceEdit" style="line-height: 28px;">قیمت همکار:</label>
        </div>
        <input type="text" class="fild" name="txtProCPriceEdit" id="txtProCPriceEdit" style="width: 500px;" placeholder="قیمت همکار (ریال)"><small style="line-height: 20px; color: #D13939;"></small>

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtProDetailEdit" style="line-height: 28px;">توضیحات:</label>
        </div>
        <input type="text" class="fild" name="txtProDetailEdit" id="txtProDetailEdit" style="width: 500px;" placeholder="توضیحات محصول">

        <div style="clear: both;"></div>

        <div style="width: 100px; float: right;">
            <label for="txtProCatEdit" style="line-height: 28px;">دسته بندی:</label>
        </div>
        <select class="fild" name="txtProCatEdit" id="txtProCatEdit" style="width: 510px;">
            <option value="0" >انتخاب کنید...</option>
        </select><small style="line-height: 20px; color: #D13939;">(اجباری)</small>

        <div style="clear: both;"></div>


        <button class="btn b4" type="button" name="submit" value="submit" style="float: left;" onclick="productList(1, false);">انصراف</button>
        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" id="proEdit">ویرایش محصول</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- edit product end -->