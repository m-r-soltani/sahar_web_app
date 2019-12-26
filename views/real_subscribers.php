        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">


                <div class="card-body">

                    <form action="#" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">مشترکین حقیقی</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">نام</label>
                                <div class="col-lg-4">
                                    <input type="hidden" id="id" class="form-control" name="id" value="empty">
                                    <input type="hidden" id="type" name="type" class="form-control"  value="real" >
                                    <input type="text" class="form-control" name="name" id="name" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نام خانوادگی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="f_name" id="f_name" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نام پدر</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="name_pedar" id="name_pedar" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">ملیت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="meliat" id="meliat" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تابعیت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="tabeiat" id="tabeiat" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع شناسه هویتی</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="noe_shenase_hoviati" id="noe_shenase_hoviati">
                                        <option value="opt1">کد ملی</option>
                                        <option value="opt2">پاسپورت</option>
                                        <option value="opt3">کارت دو تابعیتی</option>
                                        <option value="opt4">کارت پاهندگی</option>
                                        <option value="opt5">کارت هویت</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شناسه هویتی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="shenase_hoviati" id="shenase_hoviati" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره شناسنامه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="shomare_shenasname" id="shomare_shenasname" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تاریخ تولد</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="tarikhe_tavalod" id="tarikhe_tavalod" placeholder="مثال: 12/12/1350">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">جنسیت</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" id="jensiat" name="jensiat">
                                        <option value="mard">مرد</option>
                                        <option value="zan">زن</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">استان محل تولد</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="ostane_tavalod" id="ostane_tavalod" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شهر محل تولد</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control usage" name="shahre_tavalod" id="shahre_tavalod" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تلفن</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="telephone" id="telephone" placeholder="مثال: 02112345678">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تلفن همراه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="telephone_hamrah" id="telephone_hamrah" placeholder="مثال: 09121234567">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">پست الکترونیک</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" id="email" name="email" placeholder="مثال: abcd@gmail.com">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">فکس</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="fax" id="fax" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">وب سایت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="website" id="website" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">کد پستی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="code_posti" id="code_posti" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">آدرس</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شغل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shoghl" id="shoghl" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">رشته تحصیلی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="reshteye_tehsili" id="reshteye_tehsili" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">آخرین مدرک تحصیلی</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" id="akharin_madrake_tahsili" name="akharin_madrake_tahsili">
                                        <option value="diplom">دیپلم</option>
                                        <option value="foghdiplom">فوق دیپلم</option>
                                        <option value="lisanse">لیسانس</option>
                                        <option value="foghlisanse">فوق لیسانس</option>
                                        <option value="doktora">دکتری</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نحوه آشنایی کمپین</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="nahve_ashnai_campain" id="nahve_ashnai_campain">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">گروه مشترک</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="gorohe_moshtarak" id="gorohe_moshtarak">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">معرف</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="moaref" id="moaref" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">توضیحات</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="tozihat" id="tozihat" placeholder="مثال: www.saharertebat.net">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر کارت ملی</label>
                                <div class="col-lg-4">
                                    <input type="file" name="r_t_karte_meli" id="r_t_karte_meli"  class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر ثبض تلفن</label>
                                <div class="col-lg-4">
                                    <input type="file" name="r_t_ghabze_telephone" id="r_t_ghabze_telephone" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر اجاره نامه / مالکیت</label>
                                <div class="col-lg-4">
                                    <input type="file" name="r_t_ejare_malekiat" id="r_t_ejare_malekiat" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر قرارداد</label>
                                <div class="col-lg-4">
                                    <input type="file" name="r_t_gharardad" id="r_t_gharardad" class="form-control-uniform">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تصویر سایر</label>
                                <div class="col-lg-4">
                                    <input type="file" name="r_t_sayer" id="r_t_sayer" class="form-control-uniform">
                                </div>
                                <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_real_subscribers" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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