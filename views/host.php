<!-- Content area -->
<div class="content">

    <!-- Form inputs -->
    <div class="card">
        <div class="card-body">
            <form action="" method="POST">
                <fieldset class="mb-3">
                    <div class="form-group row">
                        <legend class="text-uppercase font-size-sm font-weight-bold">میزبان</legend>
                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                        <div class="col-lg-4">
                            <input type="hidden" id="id" class="form-control" name="id" value="empty">
                            <input type="text" class="form-control" id="name_service_dahande" name="name_service_dahande" placeholder="مثال: " required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">شماره مجوز</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="shomare_mojavez" id="shomare_mojavez" placeholder="مثال: 123456" required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">آدرس</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address" id="address" placeholder="مثال: تهران-خیابان شریعتی ..." required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">شماره تماس</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="shomare_tamas" id="shomare_tamas" placeholder="مثال: 09121234567" required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تلفن پشتیبانی</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="shomare_poshtibani" id="shomare_poshtibani" placeholder="مثال: 88123456" required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">وب سایت</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="website" id="website" placeholder="مثال: wwww.saharertebat.net" required>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">آدرس شکایات</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address_shekayat" id="address_shekayat" placeholder="مثال: تهران-خیابان شریعتی ...">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">اولویت</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="olaviat" id="olaviat" placeholder="مثال: 2">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تصویر لوگو</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control-uniform" name="t_logo" id="t_logo">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">نام تعرفه</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name_tarefe" id="name_tarefe" placeholder="نام تعرفه">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-12">نوع سرویس : </label>
                        <label class="col-form-label col-lg-2">لایسنس DSL</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="dsl_license" id="dsl_license">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">بیت استریم DSL</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="dsl_bitstream" id="dsl_bitstream">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">لایسنس WLAN</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="wlan_license" id="wlan_license">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">بیت استریم WLAN</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="wlan_bitstream" id="wlan_bitstream">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">TD-LTE</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="td_lte" id="td_lte">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">NGN</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="ngn" id="ngn">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">Phone Orgination</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="phone_orgination" id="phone_orgination">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">domain</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="domain" id="domain">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">میزبان</label>
                        <div class="col-lg-4">
                            <select class="form-control form-control-lg" name="host" id="host">
                                <option value="yes">بلی</option>
                                <option value="no">خیر</option>
                            </select>
                        </div>

                    </div>
                </fieldset>
                <div class="text-right">
                    <button type="submit" name="send_host" class="btn btn-primary">ارسال <i
                                class="icon-paperplane ml-2"></i></button>
                </div>
            </form>
        </div>
    </div>
    <!-- /form inputs -->
    <div class="card">
        <div class="col-md-12">
            <button name="delete" class="btn btn-warning col-md-auto float-md-right"  id="delete">حذف<i class="icon-folder-remove ml-2"></i></button>
            <button name="edit" class="btn btn-primary col-md-auto float-md-right" id="edit">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
            <table id="view_table" class="table table-striped datatable-responsive table-hover">
            </table>
        </div>
    </div>
</div>
<!-- /content area -->
