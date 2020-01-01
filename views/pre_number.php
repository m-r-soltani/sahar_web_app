        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <input type="hidden" id="id" class="form-control" name="id" value="empty">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">ثبت پیش شماره</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">مرکز مخابراتی</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="name_markaz" id="name_markaz">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تعداد پیش شماره</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="tedade_pishshomare" id="tedade_pishshomare" placeholder="نام مرکز">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">منطقه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="mantaghe" id="mantaghe" placeholder="مثال: 14">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">استان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="ostan" id="ostan">
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شهر</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="shahr" id="shahr">
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">میزبان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="mizban" id="mizban">
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">سر شماره ها</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="sarshomare" id="sarshomare" placeholder="سر شماره ها">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع قرارداد</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="noe_gharardad" id="noe_gharardad" placeholder="نام مرکز">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">توضیحات</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="tozihat" id="tozihat" placeholder="نام مرکز">
                                </div>
                                <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_pre_number" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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