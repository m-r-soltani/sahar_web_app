        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">مراکز مخابراتی</legend>
                            <div class="form-group row">
                                <label class="col-form-label col-lg-2">نام مرکز مخابراتی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="name" id="name" placeholder="مثال: تهران">
                                    <input type="hidden" id="id" class="form-control" name="id" value="empty">
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
                                <label class="col-form-label col-lg-2">پیش شماره استان</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="pish_shomare" id="pish_shomare" placeholder="مثال: 021">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره تماس با مرکز</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shomare_tamas_markaz" id="shomare_tamas_markaz" placeholder="مثال: 1234567">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شماره تماس MDF مرکز</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="shomare_tamas_mdf" id="shomare_tamas_mdf" placeholder="مثال: 021">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نشانی مرکز</label>
                                <div class="col-lg-10">
                                    <input type="text" class="form-control" name="address" id="address" placeholder="مثال: 021">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">مسیر اول فاکتورهای مرکز</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="masire_avale_faktorha" id="masire_avale_faktorha" placeholder="مثال: 021">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">مسیر دوم فاکتورهای مرکز</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="masire_dovome_faktorha" id="masire_dovome_faktorha" placeholder="مثال: 021">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">میزبان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="mizban" id="mizban">

                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع قرار داد</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg custom_select" name="noe_gharardad" id="noe_gharardad">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_telecommunications_center" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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