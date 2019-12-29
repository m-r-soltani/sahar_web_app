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
                    <!--<legend class="text-uppercase font-size-sm font-weight-bold">سرویس ها</legend>-->
                    <ul class="nav nav-tabs nav-tabs-bottom border-bottom-0 nav-justified">
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab1" id="adsl_tab_link" class="nav-link"
                               data-toggle="tab">ADSL</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab2" id="wireless_tab_link" class="nav-link"
                               data-toggle="tab">Wireless</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab3" id="tdlte_tab_link" class="nav-link"
                               data-toggle="tab">TD-LTE/4G</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab4" id="voip_tab_link" class="nav-link"
                               data-toggle="tab">Voip</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab5" class="nav-link"
                               data-toggle="tab">Domain</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab6" class="nav-link"
                               data-toggle="tab">Host</a>
                        </li>
                        <li class="nav-item services_tabs">
                            <a href="#bottom-justified-divided-tab7" class="nav-link"
                               data-toggle="tab">NGN</a>
                        </li>

                    </ul>

                    <div class="tab-content">
                        <!------------ADSL------------->
                        <div class="adsl_tab sefareshe_jadid_tabs tab-pane fade" data-flag="adsl" id="bottom-justified-divided-tab1">
                            <form action="#" method="POST">
                                <input type="hidden" id="sj_adsl_id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="sj_adsl_type" name="type" value="adsl" class="form-control">

                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="sj_adsl_noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="sj_adsl_terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="sj_adsl_zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="sj_adsl_tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="sj_adsl_tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="sj_adsl_gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="sj_adsl_takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                        <div class="col-lg-4">
                                            <input name="hazine_ranzhe" id="sj_adsl_hazine_ranzhe" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">هزینه درانژه</label>
                                        <div class="col-lg-4">
                                            <input name="hazine_dranzhe" id="sj_adsl_hazine_dranzhe" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="sj_adsl_abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="sj_adsl_abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="sj_adsl_abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="sj_adsl_arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="sj_adsl_mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="" disabled>
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_sefareshe_jadid_adsl" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <!------------Wireless------------->
                        <div class="wireless_tab sefareshe_jadid_tabs tab-pane fade" data-flag="wireless" id="bottom-justified-divided-tab2">
                            <form action="#" method="POST">
                                <input type="hidden" id="sj_wireless_id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="sj_wireless_type" name="type" value="wireless" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="sj_wireless_noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="sj_wireless_terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="sj_wireless_zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="sj_wireless_tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="sj_wireless_tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="sj_wireless_gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="sj_wireless_takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="sj_wireless_abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="sj_wireless_abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="sj_wireless_abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="sj_wireless_arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="sj_wireless_mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_sefareshe_jadid_wireless" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <!------------TD-LTE/4G------------->
                        <div class="tdlte_tab sefareshe_jadid_tabs tab-pane fade" data-flag="tdlte" id="bottom-justified-divided-tab3">
                            <form action="#" method="POST">
                                <input type="hidden" id="sj_tdlte_id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="sj_tdlte_type" name="type" value="tdlte" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input type="text" class="form-control" name="noe_service" id="sj_tdlte_noe_service"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ترافیک</label>
                                        <div class="col-lg-4">
                                            <input name="terafik" id="sj_tdlte_terafik" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="zamane_estefade" id="sj_tdlte_zamane_estefade" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="sj_tdlte_tarikhe_shoroe_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="sj_tdlte_tarikhe_payane_service" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="sj_tdlte_gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="sj_tdlte_takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان پورت</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_port" id="sj_tdlte_abonmane_port" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان فضا</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_faza" id="sj_tdlte_abonmane_faza" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">آبونمان تجهیزات</label>
                                        <div class="col-lg-4">
                                            <input name="abonmane_tajhizat" id="sj_tdlte_abonmane_tajhizat" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="sj_tdlte_arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="sj_tdlte_mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_sefareshe_jadid_tdlte" class="btn btn-primary">ارسال <i
                                                class="icon-paperplane ml-2"></i></button>
                                </div>
                            </form>
                        </div>
                        <!------------Voip------------->
                        <div class="voip_tab sefareshe_jadid_tabs tab-pane fade" data-flag="voip" id="bottom-justified-divided-tab4">
                            <form action="#" method="POST">
                                <input type="hidden" id="sj_voip_id" name="id" value="empty" class="form-control">
                                <input type="hidden" id="sj_voip_type" name="type" value="voip" class="form-control">
                                <fieldset class="mb-3">
                                    <div class="form-group row">
                                        <label class="col-form-label col-lg-2">نوع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="sj_voip_noe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">زمان استفاده</label>
                                        <div class="col-lg-4">
                                            <input name="noe_service" id="sj_voip_zamane_estefade" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ شروع سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_shoroe_service" id="sj_voip_tarikhe_shoroe_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تاریخ پایان سرویس</label>
                                        <div class="col-lg-4">
                                            <input name="tarikhe_payane_service" id="sj_voip_tarikhe_payane_service" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">Pin Code</label>
                                        <div class="col-lg-4">
                                            <input name="pin_code" id="sj_voip_pin_code" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">قیمت</label>
                                        <div class="col-lg-4">
                                            <input name="gheymat" id="sj_voip_gheymat" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">تخفیف</label>
                                        <div class="col-lg-4">
                                            <input name="takhfif" id="sj_voip_takhfif" type="text" class="form-control"
                                                   placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">ارزش افزوده</label>
                                        <div class="col-lg-4">
                                            <input name="arzeshe_afzode" id="sj_voip_arzeshe_afzode" type="text"
                                                   class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                        <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                        <div class="col-lg-4">
                                            <input name="mablaghe_ghabele_pardakht" id="sj_voip_mablaghe_ghabele_pardakht"
                                                   type="text" class="form-control" placeholder="">
                                        </div>
                                        <br><br>
                                    </div>
                                </fieldset>
                                <div class="text-right">
                                    <button type="submit" name="send_sefareshe_jadid_voip" class="btn btn-primary">ارسال <i
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
                <div class="col-lg-2" style="position: relative;float: right;display: inline-block">
                    <label for="asd">انتخاب سرویس:</label>
                    <ul class="factros_serviceslist" id="factros_serviceslist">
                    </ul>
                </div>
                    <form action="#" method="POST">
                        <fieldset class="mb-3">
                            <legend class="text-uppercase font-size-sm font-weight-bold">فاکتورها</legend>
                            <div class="form-group row" style="position: relative;">
                                    <label class="col-form-label col-lg-2">نوع سرویس</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_noe_service" class="form-control" name="noe_service" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">ترافیک ماهانه</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_terafike_mahane" class="form-control" name="terafike_mahane" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">نام ویزیتور</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_name_visitor" class="form-control" name="name_visitor" placeholder="">
                                    </div>
                                    <br><br>
                                    <!--<label class="col-form-label col-lg-2">تاریخ فاکتور</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" placeholder="">
                                    </div>
                                    <br><br>-->
                                    <label class="col-form-label col-lg-2">تاریخ شروع اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" name="tarikhe_shoroe_eshterak" id="f_tarikhe_shoroe_eshterak" class="form-control" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">آبونمان</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_abonman" class="form-control" name="abonman" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">عوارض</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_avarez" class="form-control" name="avarez" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه مودم</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_hazine_modem" class="form-control" name="hazine_modem" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه رانژه</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_hazine_ranzhe" class="form-control" name="hazine_ranzhe" placeholder="">
                                    </div>
                                    <br><br>
                                    <!--<label class="col-form-label col-lg-2">شماره اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shomare_eshterak" placeholder="">
                                    </div>
                                    <br><br>-->
                                    <label class="col-form-label col-lg-2">قیمت</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_gheymat" class="form-control" name="gheymat" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">مدت اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_modate_eshterak" name="modate_eshterak" class="form-control"  placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">username</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_username" class="form-control" name="username" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">password</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_password" class="form-control" name="password" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تاریخ پایان اشتراک</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_tarikhe_payane_eshterak" class="form-control" name="tarikhe_payane_eshterak" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">ترافیک اضافه(مبلغ)</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_terafike_ezafe" class="form-control" name="terafike_ezafe" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">هزینه راه اندازی</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_hazine_rahandazi" class="form-control" name="hazine_rahandazi" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">تخفیف</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_takhfif" class="form-control" name="takhfif" placeholder="">
                                    </div>
                                    <br><br>
                                    <label class="col-form-label col-lg-2">مبلغ قابل پرداخت</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="f_mablaghe_ghabele_pardakht" class="form-control" name="mablaghe_ghabele_pardakht" disabled>
                                    </div>
                                    <br><br><!--
                                    <label class="col-form-label col-lg-2">ثبت کننده</label>
                                    <div class="col-lg-4">
                                        <input type="text" id="shahr" class="form-control" name="shahr" disabled>
                                    </div>
                                    <br><br>-->
                            </div>
                        </fieldset>
                        <div class="text-right">
                            <button type="submit" name="send_faktorha" class="btn btn-primary">ارسال <i class="icon-paperplane ml-2"></i></button>
                        </div>
                    </form>

            </div>
        </div>
        <!--3th tabs-->

    </div>
    <!-- /content area -->