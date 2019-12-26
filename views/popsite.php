
        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">تعریف پاپ سایت</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">نام دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="name_dakal" id="name_dakal" placeholder="نام دکل">
                                    <input type="hidden" id="id" class="form-control" name="id" value="empty">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع دکل</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="noe_dakal" id="noe_dakal">
                                        <option value="faghededakal">فاقد دکل</option>
                                        <option value="mahari">مهاری</option>
                                        <option value="khodista">خود ایستا</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">استان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ostan" id="ostan" placeholder="مثال: تهران">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شهر</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shahr" id="shahr" placeholder="مثال: تهران">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نشانی</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="مثال: تهران">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">ارتفاع ساختمان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ertefa_sakhteman" id="ertefa_sakhteman" placeholder="مثال: 20 متر(عدد بدون اعشار)">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">ارتفاع دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ertefa_dakal" id="ertefa_dakal" placeholder="مثال: 10 متر(عدد بدون اعشار)">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">مجموع ارتفاع</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="majmoe_ertefa" id="majmoe_ertefa" placeholder="مثال: 10 متر(عدد بدون اعشار)">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">طول جغرافیایی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="tol_joghrafiai" id="tol_joghrafiai" placeholder="مثال: [ثانیه][دقیقه]N[ساعت]">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">عرض جغرافیایی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="arz_joghrafiai" id="arz_joghrafiai" placeholder="مثال: [ثانیه][دقیقه]E[ساعت]">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره ثبت دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shomare_sabt" id="shomare_sabt" placeholder="مثال: 12345">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">کد پستی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="code_posti" id="code_posti" placeholder="10 رقمی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">مالک دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="maleke_dakal" id="maleke_dakal" placeholder="10 رقمی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره تماس مالک</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shomare_tamas_malek" id="shomare_tamas_malek" placeholder="10 رقمی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع مالکیت</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="noe_malekiat" id="noe_malekiat">
                                        <option value="estijari">استیجاری</option>
                                        <option value="malekiat">مالکیت</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">رتبه دکل</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="rotbe_dakal" id="rotbe_dakal">
                                        <option value="A">A</option>
                                        <option value="B">B</option>
                                        <option value="C">C</option>
                                        <option value="D">D</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">میزبان دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="mizbane_dakal" id="mizbane_dakal" placeholder="مثال: سحر ارتباط">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نام پشتیبان دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="name_poshtiban" id="name_poshtiban" placeholder="مثال: محمد">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نام خانوادگی پشتیبان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="family_poshtiban" id="family_poshtiban" placeholder="مثال: محمدی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره تماس پشتیبان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shoamre_tamas_poshtiban" id="shoamre_tamas_poshtiban" placeholder="مثال: محمدی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">اجاره ماهیانه نصب آنتن بر روی دکل</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ejare_mahiane_nasbe_anten_roye_dakal" id="ejare_mahiane_nasbe_anten_roye_dakal" placeholder="قیمت به ریال">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">مسیر اول فاکتورهای دکل</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="masire_avale_faktorha" id="masire_avale_faktorha" placeholder="">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-12">امکانات دکل:</label>


                                <label class="col-form-label col-lg-2">بیمه دکل</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="bime_dakal" id="bime_dakal">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">برق اضطراری</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="barghe_ezterari" id="barghe_ezterari">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">باطری پشتیبان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="batrie_poshtiban" id="batrie_poshtiban">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">چراغ دکل</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="cheraghe_dakal" id="cheraghe_dakal">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>

                                <label class="col-form-label col-lg-2">ارت</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="ert" id="ert">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">امکان استفاده از دکل برای نصب آنتن</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="emkane_nasbe_anten" id="emkane_nasbe_anten">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">اجازه دسترسی 24 ساعته به دکل</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="ejaze_dastresi_24_saate" id="ejaze_dastresi_24_saate">
                                        <option value="yes">بلی</option>
                                        <option value="no">خیر</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_popsite" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /form inputs -->
            <!--datatable-->
            <!--datatable-->
            <div class="card">
                <div class="col-md-12">
                    <button name="delete" class="btn btn-warning col-md-auto float-md-right"  id="delete">حذف<i class="icon-folder-remove ml-2"></i></button>
                    <button name="delete" class="btn btn-primary col-md-auto float-md-right" id="edit">ویرایش<i class="icon-database-edit2 ml-2"></i></button>
                    <table id="view_table" class="table table-striped datatable-responsive">
                    </table>
                </div>
            </div>
        </div>
        <!-- /content area -->