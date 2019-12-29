$(document).ready(function () {
    $("#st_tab_boxes").hide();
    $("#sefareshejadid_tab").hide();
    $("#faktorha_tab").hide();
    DATEPICKER_YYYYMMDD('#sj_adsl_tarikhe_shoroe_service');
    DATEPICKER_YYYYMMDD('#sj_adsl_tarikhe_payane_service');
    DATEPICKER_YYYYMMDD('#sj_wireless_tarikhe_shoroe_service');
    DATEPICKER_YYYYMMDD('#sj_wireless_tarikhe_payane_service');
    DATEPICKER_YYYYMMDD('#sj_tdlte_tarikhe_shoroe_service');
    DATEPICKER_YYYYMMDD('#sj_tdlte_tarikhe_payane_service');
    DATEPICKER_YYYYMMDD('#sj_voip_tarikhe_shoroe_service');
    DATEPICKER_YYYYMMDD('#sj_voip_tarikhe_payane_service');
    /*===================++  DATA_TABLE  ++=========================*/


    var init_datatable_cols = [
        {
            "data": "id",
            title: 'شناسه'
        },
        {
            "data": "name",
            title: 'نام'
        },
        {
            "data": "f_name",
            title: 'نام خانوادگی'
        },
        {
            "data": "telephone",
            title: 'تلفن ثابت'
        },
        {
            "data": "telephone_hamrah",
            title: 'تلفن همراه'
        },
        {
            "data": "shenase_hoviati",
            title: 'کد ملی'
        }
    ];
    DataTable('#view_table', '/sahar/helpers/factors.php', 'POST', init_datatable_cols, function (table) {
        /*===================++  select table row ++=========================*/
        $('#view_table tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });
    ///confirm click
    $('#initconfirm').click(function () {
        let tr = $('#view_table tbody').find('tr.selected');
        let td = tr.find('td:first').text();
        Factors_Initialize('findbyid', td, function (data) {
            //console.log(data);

            $("#st_tab_boxes").show();
        });
    });
    $("#adsl_tab_link").on('click', function () {
        Factors_Initialize('adsl_services', false, function (data) {
            $("#sefareshe_jadid_serviceslist").empty();
            for (let i = 0; i < data.length; i++) {
                $("#sefareshe_jadid_serviceslist").append("<li class='sefareshe_jadid_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
            }
            //click on li
            $(".sefareshe_jadid_serviceslist_li").on('click', function () {
                let id = this.id;
                $(".sefareshe_jadid_serviceslist_li").each(function () {
                    $(this).css('background-color', '#fafafa');
                });
                $(this).css('background-color', '#26a69a');
                Factors_Initialize('sefareshe_jadid_serviceslist_li', id, function (data) {
                    //$('#sj_adsl_noe_service').val(data[0]['noe_service']);
                    $('#sj_adsl_terafik').val(data[0]['terafik']);
                    $('#sj_adsl_zamane_estefade').val(data[0]['zamane_estefade']);
                    $('#sj_adsl_tarikhe_shoroe_service').val(data[0]['tarikhe_shoroe_namayesh']);
                    $('#sj_adsl_tarikhe_payane_service').val(data[0]['tarikhe_payane_namayesh']);
                    $('#sj_adsl_gheymat').val(data[0]['gheymat']);
                    $('#sj_adsl_takhfif').val(data[0]['takhfif']);
                    $('#sj_adsl_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
                    $('#sj_adsl_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
                    $('#sj_adsl_abonmane_port').val(data[0]['port']);
                    $('#sj_adsl_abonmane_faza').val(data[0]['faza']);
                    $('#sj_adsl_abonmane_tajhizat').val(data[0]['tajhizat']);
                    //$('#sj_adsl_arzeshe_afzode').val(data[0]['arzeshe_afzode']);
                });
            });
        });
    });
    $("#wireless_tab_link").on('click', function () {
        Factors_Initialize('wireless_services', false, function (data) {
            $("#sefareshe_jadid_serviceslist").empty();
            for (let i = 0; i < data.length; i++) {
                $("#sefareshe_jadid_serviceslist").append("<li class='sefareshe_jadid_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
            }
            //click on li
            $(".sefareshe_jadid_serviceslist_li").on('click', function () {
                let id = this.id;
                $(".sefareshe_jadid_serviceslist_li").each(function () {
                    $(this).css('background-color', '#fafafa');
                });
                $(this).css('background-color', '#26a69a');
                Factors_Initialize('sefareshe_jadid_serviceslist_li', id, function (data) {
                    $('#sj_wireless_terafik').val(data[0]['terafik']);
                    $('#sj_wireless_zamane_estefade').val(data[0]['zamane_estefade']);
                    $('#sj_wireless_tarikhe_shoroe_service').val(data[0]['tarikhe_shoroe_namayesh']);
                    $('#sj_wireless_tarikhe_payane_service').val(data[0]['tarikhe_payane_namayesh']);
                    $('#sj_wireless_gheymat').val(data[0]['gheymat']);
                    $('#sj_wireless_takhfif').val(data[0]['takhfif']);
                    $('#sj_wireless_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
                    $('#sj_wireless_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
                    $('#sj_wireless_abonmane_port').val(data[0]['port']);
                    $('#sj_wireless_abonmane_faza').val(data[0]['faza']);
                    $('#sj_wireless_abonmane_tajhizat').val(data[0]['tajhizat']);
                });
            });
        });
    });
    $("#tdlte_tab_link").on('click', function () {
        Factors_Initialize('tdlte_services', false, function (data) {
            $("#sefareshe_jadid_serviceslist").empty();
            for (let i = 0; i < data.length; i++) {
                $("#sefareshe_jadid_serviceslist").append("<li class='sefareshe_jadid_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
            }
            //click on li
            $(".sefareshe_jadid_serviceslist_li").on('click', function () {
                let id = this.id;
                $(".sefareshe_jadid_serviceslist_li").each(function () {
                    $(this).css('background-color', '#fafafa');
                });
                $(this).css('background-color', '#26a69a');
                Factors_Initialize('sefareshe_jadid_serviceslist_li', id, function (data) {
                    $('#sj_tdlte_terafik').val(data[0]['terafik']);
                    $('#sj_tdlte_zamane_estefade').val(data[0]['zamane_estefade']);
                    $('#sj_tdlte_tarikhe_shoroe_service').val(data[0]['tarikhe_shoroe_namayesh']);
                    $('#sj_tdlte_tarikhe_payane_service').val(data[0]['tarikhe_payane_namayesh']);
                    $('#sj_tdlte_gheymat').val(data[0]['gheymat']);
                    $('#sj_tdlte_takhfif').val(data[0]['takhfif']);
                    $('#sj_tdlte_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
                    $('#sj_tdlte_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
                    $('#sj_tdlte_abonmane_port').val(data[0]['port']);
                    $('#sj_tdlte_abonmane_faza').val(data[0]['faza']);
                    $('#sj_tdlte_abonmane_tajhizat').val(data[0]['tajhizat']);
                });
            });
        });
    });
    $("#voip_tab_link").on('click', function () {
        Factors_Initialize('voip_services', false, function (data) {
            $("#sefareshe_jadid_serviceslist").empty();
            for (let i = 0; i < data.length; i++) {
                $("#sefareshe_jadid_serviceslist").append("<li class='sefareshe_jadid_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
            }
            //click on li
            $(".sefareshe_jadid_serviceslist_li").on('click', function () {
                let id = this.id;
                $(".sefareshe_jadid_serviceslist_li").each(function () {
                    $(this).css('background-color', '#fafafa');
                });
                $(this).css('background-color', '#26a69a');
                Factors_Initialize('sefareshe_jadid_serviceslist_li', id, function (data2) {
                    $('#sj_voip_terafik').val(data[0]['terafik']);
                    $('#sj_voip_zamane_estefade').val(data[0]['zamane_estefade']);
                    $('#sj_voip_tarikhe_shoroe_service').val(data[0]['tarikhe_shoroe_namayesh']);
                    $('#sj_voip_tarikhe_payane_service').val(data[0]['tarikhe_payane_namayesh']);
                    $('#sj_voip_gheymat').val(data[0]['gheymat']);
                    $('#sj_voip_takhfif').val(data[0]['takhfif']);
                    $('#sj_voip_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
                    $('#sj_voip_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
                    $('#sj_voip_abonmane_port').val(data[0]['port']);
                    $('#sj_voip_abonmane_faza').val(data[0]['faza']);
                    $('#sj_voip_abonmane_tajhizat').val(data[0]['tajhizat']);
                });
            });
        });
    });
    ///show or hide boxes
    $("#faktorha_box").click(function () {
        Factors_Initialize(this.id, false, function (data) {
            $("#faktorha_serviceslist").empty();
            for (let i = 0; i < data.length; i++) {
                $("#faktorha_serviceslist").append("<li class='faktorha_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
            }
            //click on li
            $(".faktorha_serviceslist_li").on('click', function () {
                let id = this.id;
                $(".faktorha_tab_serviceslist").each(function () {
                    $(this).css('background-color', '#fafafa');
                });
                $(this).css('background-color', '#26a69a');
                Factors_Initialize('faktorha_tab_serviceslist', id, function (data) {

                });
            });

        });
    });
    //click boxes
    $(".factors_tab1_box").on('click', function () {
        let id = this.id;
        $(".factors_tab1_box").each(function () {
            $(this).css('background-color', '#e0e0e0');
        });
        $(this).css('background-color', '#26a69a');
        switch (id) {
            case 'sefareshe_jadid_box':
                $("#sefareshejadid_tab").show();
                $("#faktorha_tab").hide();
                break;
            case 'faktorha_box':
                $("#sefareshejadid_tab").hide();
                $("#faktorha_tab").show();
                Factors_Initialize('factors', false, function (data) {
                    $("#factros_serviceslist").empty();
                    for (let i = 0; i < data.length; i++) {
                        $("#factros_serviceslist").append("<li class='factros_serviceslist_li' id='" + data[i]['id'] + "'>" + data[i]['noe_khadamat'] + "</li>");
                    }
                    //click on li
                    $(".factros_serviceslist_li").on('click', function () {
                        let id = this.id;
                        $(".factros_serviceslist_li").each(function () {
                            $(this).css('background-color', '#fafafa');
                        });
                        $(this).css('background-color', '#26a69a');
                        Factors_Initialize('factors_serviceslist_li', id, function (data2) {
                            //$('#f_noe_service').val(data[0]['noe_service']);
                            //$('#f_terafike_mahane').val(data[0]['terafike_mahane']);
                            // $('#sj_voip_tarikhe_shoroe_service').val(data[0]['tarikhe_shoroe_namayesh']);
                            // $('#sj_voip_tarikhe_payane_service').val(data[0]['tarikhe_payane_namayesh']);
                            // $('#sj_voip_gheymat').val(data[0]['gheymat']);
                            // $('#sj_voip_takhfif').val(data[0]['takhfif']);
                            // $('#sj_voip_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
                            // $('#sj_voip_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
                            // $('#sj_voip_abonmane_port').val(data[0]['port']);
                            // $('#sj_voip_abonmane_faza').val(data[0]['faza']);
                            // $('#sj_voip_abonmane_tajhizat').val(data[0]['tajhizat']);
                        });
                    });
                });
                break;
        }
    });
});