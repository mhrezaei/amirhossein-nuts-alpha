<!-- product list start -->
<div class="contentModel" id="productListContent" style="display: none;">
    <h2>لیست محصولات</h2>

    <div class="mainDiv" style="text-align: right; min-height: 100px;">

        <div style="width: 100%; margin: 0 auto; text-align: center;">
            <span style="color: green; display: none;" class="yekan" id="proListMsg">محصول مورد نظر با موفقیت حذف گردید.</span><br>
        </div>

        <div style="width: 60px; float: right; line-height: 35px;">
            <label for="txtCatFilter" style="line-height: 28px;">فیلتر کردن:</label>
        </div>
        <select class="fild" name="txtCatFilter" id="txtCatFilter" style="width: 250px;" onchange="productList(1, false);">
            <option value="0" >انتخاب کنید...</option>
        </select>

        <div style="clear: both; margin-bottom: 20px;"></div>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 95%;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="7">لیست محصولات</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 5%;">ردیف</th>
                <th style="text-align: center; width: 25%;">نام محصول</th>
                <th style="text-align: center; width: 15%; direction: rtl;">قیمت مصرف کننده <small>(ريال)</small></th>
                <th style="text-align: center; width: 15%; direction: rtl;">قیمت همکار<small>(ريال)</small></th>
                <th style="text-align: center; width: 15%; direction: rtl;">دسته بندی</th>
                <th style="text-align: center; width: 20%; direction: rtl;">توضیحات</th>
                <th style="text-align: center; width: 5%; direction: rtl;">عملیات</th>
            </tr>
            </thead>
            <tbody id="productListContentBody">
            <tr>
                <td style="text-align: center; width: 100%;" colspan="7" class="orang">تا کنون محصولی اضافه نگردیده است.</td>
            </tr>
            </tbody>
        </table>

        <div style="clear: both; margin-bottom: 20px;"></div>

        <div style="width: 100%; margin: 0 auto; text-align: center" id="productListPageNumber">

        </div>

    </div>
</div>
<!-- product list end -->