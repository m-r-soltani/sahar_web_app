        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <legend class="text-uppercase font-size-sm font-weight-bold">سرویس ها</legend>
                    <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab1" class="nav-link active"
                                                              data-toggle="tab">ADSL</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab2" class="nav-link"
                                                              data-toggle="tab">Wireless</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab3" class="nav-link"
                                                              data-toggle="tab">TD-LTE/4G</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab4" class="nav-link"
                                                              data-toggle="tab">Voip</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab5" class="nav-link"
                                                              data-toggle="tab">Domain</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab6" class="nav-link"
                                                              data-toggle="tab">Host</a></li>
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab7" class="nav-link"
                                                              data-toggle="tab">NGN</a></li>
                    </ul>
                    <div class="tab-content">
                        <!------------ADSL------------->
                        <div class="adsl_tab tab-pane fade show active" id="bottom-justified-divided-tab1">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="adsl" class="form-control">

                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <option value="ADSL(Share)">ADSL(Share)</option>
                                                <option value="ADSL(Transport)">ADSL(Transport)</option>
                                                <option value="VDSL(Share)">VDSL(Share)</option>
                                                <option value="VDSL(Transport)">VDSL(Transport)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>
                                        <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_ranzhe" id="hazine_ranzhe"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه درانژه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_dranzhe" id="hazine_dranzhe"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_adsl" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_adsl" class="btn btn-warning col-md-auto float-md-right"  id="delete_adsl">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_adsl" class="btn btn-primary col-md-auto float-md-right" id="edit_adsl">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_adsl" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------Wireless------------->
                        <div class="wireless_tab tab-pane fade" id="bottom-justified-divided-tab2">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="wireless" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <option value="Wireless(Share)">Wireless(Share)</option>
                                                <option value="Wireless(Transport)">Wireless(Transport)</option>
                                                <option value="Wireless(Hotspot)">Wireless(Hotspot)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>

                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_wireless" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_wireless" class="btn btn-warning col-md-auto float-md-right"  id="delete_wireless">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_wireless" class="btn btn-primary col-md-auto float-md-right" id="edit_wireless">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_wireless" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------TD-LTE/4G------------->
                        <div class="tdlte_tab tab-pane fade" id="bottom-justified-divided-tab3">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="tdlte" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع خدمات</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_khadamat" id="noe_khadamat">
                                                <<option value="TD-LTE(Share)">TD-LTE(Share)</option>
                                                <option value="TD-LTE(Transport)">TD-LTE(Transport)</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">وصل موقت
                                        </legend>
                                        <label class="col-form-label col-lg-2">ساعت وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="saat_vasle_movaghat" id="saat_vasle_movaghat"
                                                   placeholder="مثال : 2">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">روز وصل موقت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="roze_vasle_movaghat" id="roze_vasle_movaghat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک وصل موقت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="terafike_vasle_movaghat" id="terafike_vasle_movaghat"
                                                   placeholder="(مگابایت) مثال: 1024">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">ترافیک
                                        </legend>
                                        <label class="col-form-label col-lg-2">دوره به ماه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به روز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_mah" id="dore_be_mah"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">دوره به ساعت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="dore_be_saat" id="dore_be_saat"
                                                   placeholder="مثال : 5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="terafik" id="terafik"
                                                   placeholder="(مگابایت)">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">هزینه راه اندازی
                                        </legend>

                                        <label class="col-form-label col-lg-2">هزینه نصب</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_nasb" id="hazine_nasb"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه خرابی</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hazine_kharabi" id="hazine_kharabi"
                                                   placeholder="ریال">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">سرعت اتصال
                                        </legend>
                                        <label class="col-form-label col-lg-2">سرعت پایه دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorate_paye_daryaft" id="sorate_paye_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر سرعت دریافت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaxar_sorat_daryaft" id="hadeaxar_sorat_daryaft"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">سرعت پایه ارسال</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="sorat_paye_ersal" id="sorat_paye_ersal"
                                                   placeholder="مگابیت">
                                        </div>
                                        <br><br>

                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">آبونمان
                                        </legend>
                                        <label class="col-form-label col-lg-2">پورت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="port" id="port" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tajhizat" id="tajhizat" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">فضا</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="faza" id="faza" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_tdlte" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_tdlte" class="btn btn-warning col-md-auto float-md-right"  id="delete_tdlte">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_tdlte" class="btn btn-primary col-md-auto float-md-right" id="edit_tdlte">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_tdlte" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!------------Voip------------->
                        <div class="voip_tab tab-pane fade" id="bottom-justified-divided-tab4">
                            <form action="#" method="POST">
                                <input type="hidden" id="id"  name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="voip" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع پرداخت</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="noe_pardakht" id=""noe_pardakht"">
                                            <option value="carti">کارتی</option>
                                            <option value="etebari">اعتباری</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش سرویس</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_service" id="namayeshe_service">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نمایش در پروفایل</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="namayeshe_dar_profile" id="namayeshe_dar_profile">
                                                <option value="yes">بلی</option>
                                                <option value="no">خیر</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">عنوان سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="onvane_service"
                                                   placeholder="مثال: " id="onvane_service">
                                        </div>
                                        <label class="col-form-label col-lg-2">قيمت</label>
                                        <div class="col-lg-4">
                                            <input type="number" class="form-control" name="gheymat"
                                                   placeholder="به ریال" id="gheymat" required>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="zaname_estefade" id="zaname_estefade" placeholder="زمان به ماه مثال:6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفيف</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="takhfif" id="takhfif"
                                                   placeholder="به درصد مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام سرویس دهنده</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_service_dahande" id="name_service_dahande">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">پورسانت</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="porsant" id="porsant"
                                                   placeholder="مثال : 6.5">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_shoroe_namayesh" id="tarikhe_shoroe_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان نمایش</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="tarikhe_payane_namayesh" id="tarikhe_payane_namayesh"
                                                   placeholder="مثال: 1380/05/20">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">امتیاز جایزه</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="emtiaze_jayeze" id="emtiaze_jayeze"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداقل امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaghale_emtiaz" id="hadeaghale_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">حداکثر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="hadeaksare_emtiaz" id="hadeaksare_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ هر امتیاز</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="mablaghe_har_emtiaz" id="mablaghe_har_emtiaz"
                                                   placeholder="مثال : 6">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه مشتری</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" name="name_grohe_moshtari" id="name_grohe_moshtari">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">نام گروه</label>
                                        <div class="col-lg-4">
                                            <select class="form-control form-control-lg" id="name_groh" name="name_groh">
                                                <option value="1">1</option>
                                            </select>
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2"></label>
                                        <div class="col-lg-4">
                                        </div>
                                        <br><br>

                                        <label class="col-form-label col-lg-2">رنگ نمایش پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_namayeshe_profile" id="range_namayeshe_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <label class="col-form-label col-lg-2">رنگ ویژه سازی پروفایل</label>
                                        <div class="col-lg-4">
                                            <div class="card card-body border-top-success text-center">
                                                <div class="d-inline-block">
                                                    <input type="text" class="form-control colorpicker-palette-toggle"
                                                           name="range_vizhesazie_profile" id="range_vizhesazie_profile" value="#27ADCA" data-fouc>
                                                </div>
                                            </div>
                                        </div>
                                        <br><br>
                                        <legend class="text-uppercase font-size-sm font-weight-bold"
                                                style="color: #FB8C00">توضیحات
                                        </legend>
                                        <label class="col-form-label col-lg-2">توضیحات فاکتور</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_faktor" id="tozihate_faktor"
                                                   placeholder="توضیحات فاکتور">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">توضیحات وب سایت</label>
                                        <div class="col-lg-10">
                                            <input type="text" class="form-control" name="tozihate_website" id="tozihate_website"
                                                   placeholder="توضیحات وب سایت">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_voip" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                            <div class="card" style="margin-top: 10px">
                                <div class="col-md-12">
                                    <button name="delete_voip" class="btn btn-warning col-md-auto float-md-right"  id="delete_voip">حذف<i class="icon-folder-remove ml-2"></i></button>
                                    <button name="edit_voip" class="btn btn-primary col-md-auto float-md-right" id="edit_voip">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                                    <table id="view_table_voip" class="table table-striped datatable-responsive table-hover">
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /form inputs -->

        </div>
        <!-- /content area -->
