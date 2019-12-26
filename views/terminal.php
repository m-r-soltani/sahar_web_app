        <!-- Content area -->
        <div class="content">

            <!-- Form inputs -->
            <div class="card">
                <div class="card-body">
                    <form action="" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">ثبت ترمینال</legend>
                            <div class="form-group row">
                                <input type="hidden" id="id" class="form-control" name="id" value="empty">
                                <label class="col-form-label col-lg-2">مرکز مخابراتی</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="markaze_mokhaberati" id="markaze_mokhaberati">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع ترمینال</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="noe_terminal" id="noe_terminal">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">استان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="ostan" id="ostan">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">شهر</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="shahr" id="shahr">
                                        <option value="faghededakal">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">ردیف</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="radif" id="radif" placeholder="ردیف">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تیغه</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="tighe" id="tighe" placeholder="تیغه">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">اتصالی</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="etesali" id="etesali" placeholder="اتصالی">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">از پورت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="az_port" id="az_port" placeholder="از پورت">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">تا پورت</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ta_port" id="ta_port" placeholder="تا پورت">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">میزبان</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="mizban" id="mizban">
                                        <option value="faghededakal">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">نوع قرارداد</label>
                                <div class="col-lg-4">
                                    <select class="form-control form-control-lg" name="noe_gharardad" id="noe_gharardad">
                                        <option value="1">1</option>
                                    </select>
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">ip ppoe server</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="ip_ppoe_server" id="ip_ppoe_server" placeholder="ip ppoe server">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">user ppoe server</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="user_ppoe_server" id="user_ppoe_server" placeholder="user ppoe server">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">password ppoe server</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="password_ppoe_server" id="password_ppoe_server" placeholder="password ppoe server">
                                </div>
                                <br><br>
                                <label class="col-form-label col-lg-2">snmp ppoe server</label>
                                <div class="col-lg-4">
                                    <input type="text" class="form-control" name="snmp_ppoe_server" id="snmp_ppoe_server" placeholder="snmp ppoe server">
                                </div>
                                <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_terminal" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
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