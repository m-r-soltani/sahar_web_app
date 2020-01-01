<!-- Content area -->
<div class="content">

    <!-- Form inputs -->
    <div class="card">


        <div class="card-body">

            <form action="#" method="POST">
                <fieldset class="mb-3">
                    <legend class="text-uppercase font-size-sm font-weight-bold">اپراتور</legend>
                    <div class="form-group row">
                        <label class="col-form-label col-lg-2">نام نمایندگی/موسسه</label>
                        <input type="hidden" id="id" class="form-control" name="id" value="empty">
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name_namayandegi" id="name_namayandegi" placeholder="مثال: سحر ارتباط">
                        </div>
                        <label class="col-form-label col-lg-2">نام</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name" id="name" placeholder="مثال: محمد">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">نام خانوادگی</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name_khanevadegi" id="name_khanevadegi" placeholder="مثال: محمدی">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">کد ملی</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="code_meli" id="code_meli" placeholder="مثال: 0013302033">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">شماره شناسنامه</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="shomare_shenasname" id="shomare_shenasname" placeholder="مثال: اگر کد ملی و شناسنامه تان یکیست این فیلد را خالی بگذارید.">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">نام پدر</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="name_pedar" id="name_pedar" placeholder="مثال: اکبر">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تاریخ تولد</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="tarikhe_tavalod" id="tarikhe_tavalod" placeholder="مثال: 1380/05/20">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">مدرک تحصیلی</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="madrake_tahsili" id="madrake_tahsili" placeholder="مثال: لیسانس">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">رشته نحصیلی</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="reshteye_tahsili" id="reshteye_tahsili" placeholder="مثال: کامپیوتر">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">استان محل تولد</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="ostan_tavalod" id="ostan_tavalod" placeholder="مثال: تهران">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">شهر محل تولد</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="shahr_tavalod" id="shahr_tavalod" placeholder="مثال: تهران">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تلفن همراه</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="telephone_hamrah" id="telephone_hamrah" placeholder="مثال: 0912123456789">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">شماره تماس محل سکونت</label>
                        <div class="col-lg-4">
                            <input type="text" class="form-control" name="telephone_mahale_sokonat" id="telephone_mahale_sokonat" placeholder="مثال: 021-123456789">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">آدرس محل سکونت</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="address" id="address" placeholder="مثال: تهران خیابان شریعتی کوچه ...">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">پست الکترونیک</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="email" id="email" placeholder="مثال: abcd@gmail.com">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2" >سمت</label>
                        <div class="col-lg-10">
                            <select class="form-control form-control-lg custom_select" name="level_id" id="level_id">

                            </select>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">نام کاربری</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" name="name_karbari" id="name_karbari" placeholder="نام کاربری">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">رمز عبور</label>
                        <div class="col-lg-10">
                            <input type="password" class="form-control" name="ramze_obor" id="ramze_obor" placeholder="رمز عبور">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تصویر کارت ملی</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control-uniform" id="t_karte_meli" name="t_karte_meli">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تصویر شناسنامه</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control-uniform" name="t_shenasname" id="t_shenasname">
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تصویر مدرک نحصیلی</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control-uniform" name="t_madrake_tahsili" id="t_madrake_tahsili" data-fouc>
                        </div>
                        <br><br>
                        <label class="col-form-label col-lg-2">تصویر چهره</label>
                        <div class="col-lg-4">
                            <input type="file" class="form-control-uniform" name="t_chehre" id="t_chehre" data-fouc>
                        </div>
                        <br><br>


                    </div>
                </fieldset>
                <div class="text-right">
                    <button type="submit" name="send_modir" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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