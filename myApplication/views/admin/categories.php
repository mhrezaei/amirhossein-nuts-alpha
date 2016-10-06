<!-- edit categories start -->
<div class="contentModel" id="editCatContent" style="display: none;">
    <h2>دسته بندی ها</h2>

    <div class="mainDiv" style="text-align: center; min-height: 100px;">

        <span style="color: green; display: none;" class="yekan" id="editCatMsg">دسته بندی مورد نظر با موفقیت حذف گردید.</span>
        <span style="color: green; display: none;" class="yekan" id="editCatMsg2">دسته بندی مورد نظر با موفقیت ویرایش گردید.</span>
        <span style="color: green; display: none;" class="yekan" id="editCatMsg3">دسته بندی مورد نظر با موفقیت اضافه گردید.</span>

        <div style="width: 100%; height: 80px; margin: 0 auto; text-align: center; margin-top: 25px; display: none;" id="catForm">
            <input type="text" class="fild" style="width: 300px; height: 26px;" name="editCatTitle" id="editCatTitle" placeholder="نام دسته بندی">
            <button class="btn b3" type="button" name="submit" value="submit" style="" id="editCatBtn">ثبت اطلاعات</button>
            <button class="btn b4" type="button" name="submit" value="submit" style="" onclick="editClose();">انصراف</button>
        </div>

        <div style="width: 100%; height: 80px; margin: 0 auto; text-align: center; margin-top: 25px; display: none;" id="addCatForm">
            <input type="text" class="fild" style="width: 260px; height: 26px;" name="addCatTitle" id="addCatTitle" placeholder="نام دسته بندی">
            <select class="fild" style="width: 150px; height: 36px;" id="addCatSub">
                <option value="0">دسته بندی...</option>
                <option value="4">شیرینی و سوغات</option>
                <option value="3">شکلات</option>
                <option value="2">میوه خشک</option>
                <option value="1">خشکبار</option>
            </select>
            <button class="btn b3" type="button" name="submit" value="submit" style="" id="addCatBtn" onclick="addNewCat();">افزودن دسته بندی</button>
            <button class="btn b4" type="button" name="submit" value="submit" style="" onclick="addClose();">انصراف</button>
        </div>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; width: 600px;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="4">شیرینی و سوغات</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 10%;">ردیف</th>
                <th style="text-align: center; width: 35%;">نام دسته بندی</th>
                <th style="text-align: center; width: 25%; direction: rtl;">تعداد محصولات</th>
                <th style="text-align: center; width: 30%; direction: rtl;">عملیات</th>
            </tr>
            </thead>
            <tbody id="deviceCont">

            </tbody>
        </table>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; margin-top: 15px; width: 600px;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="4">شکلات</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 10%;">ردیف</th>
                <th style="text-align: center; width: 35%;">نام دسته بندی</th>
                <th style="text-align: center; width: 25%; direction: rtl;">تعداد محصولات</th>
                <th style="text-align: center; width: 30%; direction: rtl;">عملیات</th>
            </tr>
            </thead>
            <tbody id="kitCont">

            </tbody>
        </table>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; margin-top: 15px; width: 600px;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="4">میوه خشک</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 10%;">ردیف</th>
                <th style="text-align: center; width: 35%;">نام دسته بندی</th>
                <th style="text-align: center; width: 25%; direction: rtl;">تعداد محصولات</th>
                <th style="text-align: center; width: 30%; direction: rtl;">عملیات</th>
            </tr>
            </thead>
            <tbody id="consumableCont">

            </tbody>
        </table>

        <table style="direction: rtl; font-size: 12px; margin: 0 auto; margin-top: 15px; width: 600px;" class="yekan">
            <thead>
            <tr>
                <th style="text-align: center; background: #cecece; font-size: 14px; direction: rtl;" colspan="4">خشکبار</th>
            </tr>
            <tr>
                <th style="text-align: center; width: 10%;">ردیف</th>
                <th style="text-align: center; width: 35%;">نام دسته بندی</th>
                <th style="text-align: center; width: 25%; direction: rtl;">تعداد محصولات</th>
                <th style="text-align: center; width: 30%; direction: rtl;">عملیات</th>
            </tr>
            </thead>
            <tbody id="chemicalCont">

            </tbody>
        </table>

        <button class="btn b3" type="button" name="submit" value="submit" style="float: left;" onclick="addClose();">دسته بندی جدید</button>

        <div style="clear: both;"></div>
    </div>
</div>
<!-- edit categories stop -->