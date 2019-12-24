<!-- Main content -->
<div class="content-wrapper">

    <!-- Page header -->
    <div class="page-header page-header-light">


        <div class="breadcrumb-line breadcrumb-line-light header-elements-md-inline">
            <div class="d-flex">
                <div class="breadcrumb">
                    <a href="#" class="breadcrumb-item"><i class="icon-home2 mr-2"></i> داشبورد</a>
                    <a href="#" class="breadcrumb-item">فاکتورها</a>
                    <!--<span class="breadcrumb-item active">Basic inputs</span>-->
                </div>

                <a href="#" class="header-elements-toggle text-default d-md-none"><i class="icon-more"></i></a>
            </div>
        </div>
    </div>
    <!-- /page header -->


    <!-- Content area -->
    <div class="content">
        <!--datatable-->
        <div class="card" style="padding: 2px;">
            <div class="col-md-12">
                <button name="initconfirm" class="btn btn-primary col-md-auto float-md-right" id="initconfirm">جستجو<i
                            class="icon-database-edit2 ml-2"></i></button>
                <table id="view_table" class="table table-striped datatable-responsive table-hover">
                </table>
            </div>
        </div>
        <!--/datatable-->
        <!--1st tabs-->
        <div class="card" id="st_tab_boxes">
            <div class="card-body factors_tab1 col-lg-12">
                <div class="factors_tab1_box" id="sefareshe_jadid_box">سفارش جدید</div>
                <div class="factors_tab1_box" id="faktorha_box">فاکتور ها</div>
                <div class="factors_tab1_box" id="ekhtesase_emkanat_box">اختصاص امکانات</div>
                <div class="factors_tab1_box" id="pardakhtha_box">پرداخت ها</div>
                <div class="factors_tab1_box" id="moshkelat_box">مشکلات</div>
                <div class="factors_tab1_box" id="tamasha_box">تماس</div>
            </div>
        </div>
        <!--1st tabs-->
        <!--2nd tabs-->

        <div class="card" id="sefareshejadid_tab">
            <div class="card-body">
                <div class="col-lg-2" style="position: relative;float: right;display: inline-block">
                    <label for="asd">انتخاب سرویس:</label>
                    <ul class="sefareshe_jadid_serviceslist" id="sefareshe_jadid_serviceslist">


                    </ul>
                </div>
                <div class="col-lg-10" style="position: relative;float: right;display: inline-block">
                    <!--                <legend class="text-uppercase font-size-sm font-weight-bold">سرویس ها</legend>-->
                    <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
                        <li class="nav-item services_tabs"><a href="#bottom-justified-divided-tab1"
                                                              class="nav-link active"
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
                                <input type="hidden" id="id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="adsl" class="form-control">

                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سروسی</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                        <div class="col-lg-4">
                                            <input name="hazine_ranzhe" id="hazine_ranzhe" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه درانژه</label>
                                        <div class="col-lg-4">
                                            <input name="hazine_dranzhe" id="hazine_dranzhe" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_adsl" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <!------------Wireless------------->
                        <div class="wireless_tab tab-pane fade" id="bottom-justified-divided-tab2">
                            <form action="#" method="POST">
                                <input type="hidden" id="id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="wireless" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سروسی</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_wireless" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>

                        </div>
                        <!------------TD-LTE/4G------------->
                        <div class="tdlte_tab tab-pane fade" id="bottom-justified-divided-tab3">
                            <form action="#" method="POST">
                                <input type="hidden" id="id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="tdlte" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سروسی</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_tdlte" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <!------------Voip------------->
                        <div class="voip_tab tab-pane fade" id="bottom-justified-divided-tab4">
                            <form action="#" method="POST">
                                <input type="hidden" id="id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="type" name="type" value="voip" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">از تاریخ</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تا تاریخ</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">Pin Code</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_services_voip" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--2nd tabs-->




        <div class="card" id="faktorha_tab">
            <div class="card-body">
                    <form action="#" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">فاکتورها</legend>
                            <div class="form-group row" style="position: relative;">
                                    <label class="col-form-label col-lg-2">نوع سرویس</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">ترافیک ماهانه</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">نام ویزیتور</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تاریخ فاکتور</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تاریخ شروع اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">آبونمان</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">عوارض</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه مودم</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">شماره اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">قیمت</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">مدت اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">username</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">password</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تاریخ پایان اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">ترافیک اضافه(مبلغ)</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه راه اندازی</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تخفیف</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" disabled>
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">ثبت کننده</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" disabled>
                                    </div>
                                    <br><br>
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_faktorha_tab" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>

            </div>
        </div>
        <!--3th tabs-->

    </div>
    <!-- /content area -->


    <!-- /main content -->