$(document).ready(function () {
    $(".custom_select").select2();
    DATEPICKER_YYYYMMDD('#adsl_tarikhe_shoroe_namayesh');
    DATEPICKER_YYYYMMDD('#wireless_tarikhe_shoroe_namayesh');
    DATEPICKER_YYYYMMDD('#tdlte_tarikhe_shoroe_namayesh');
    DATEPICKER_YYYYMMDD('#voip_tarikhe_shoroe_namayesh');
    DATEPICKER_YYYYMMDD('#adsl_tarikhe_payane_namayesh');
    DATEPICKER_YYYYMMDD('#wireless_tarikhe_payane_namayesh');
    DATEPICKER_YYYYMMDD('#tdlte_tarikhe_payane_namayesh');
    DATEPICKER_YYYYMMDD('#voip_tarikhe_payane_namayesh');
    var services_tabs=$('a[data-toggle="tab"]');
    /*===================++  ADSL  ++=========================*/
    var cols_adsl=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "noe_khadamat",
            title:'نوع خدمات'
        },
        { "data": "onvane_service",
            title:'عنوان سرویس'
        },
        { "data": "tarikhe_shoroe_namayesh",
            title:'تاریخ شروع نمایش'
        },
        { "data": "tarikhe_payane_namayesh",
            title:'تاریخ پایان نمایش'
        }
    ];
    DataTable('#view_table_adsl','/helpers/services_adsl.php','POST',cols_adsl,function (table) {
        $('#view_table_adsl tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete_adsl').click( function () {
            //shenase avalin soton dt mibashad
            let tr=$('#view_table_adsl tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'services_adsl',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit_adsl').click( function () {
        let tr=$('#view_table_adsl tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('services_adsl',td,function (data) {
            $('#adsl_id').val(data[0]['id']);
            $('#adsl_noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#adsl_namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#adsl_namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#adsl_onvane_service').val(data[0]['onvane_service']);
            $('#adsl_hadeaksare_emtiaz').val(data[0]['hadeaksare_emtiaz']);
            $('#adsl_mablaghe_har_emtiaz').val(data[0]['mablaghe_har_emtiaz']);
            $('#adsl_gheymat').val(data[0]['gheymat']);
            $('#adsl_zaname_estefade').val(data[0]['zaname_estefade']);
            $('#adsl_takhfif').val(data[0]['takhfif']);
            $('#adsl_name_service_dahande').val(data[0]['name_service_dahande']);
            $('#adsl_porsant').val(data[0]['porsant']);
            $('#adsl_tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#adsl_tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#adsl_emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#adsl_hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#adsl_name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#adsl_name_groh').val(data[0]['name_groh']);
            $('#adsl_range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#adsl_range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#adsl_saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#adsl_roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#adsl_terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#adsl_dore_be_mah').val(data[0]['dore_be_mah']);
            $('#adsl_dore_be_rooz').val(data[0]['dore_be_rooz']);
            $('#adsl_dore_be_saat').val(data[0]['dore_be_saat']);
            $('#adsl_terafik').val(data[0]['terafik']);
            $('#adsl_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#adsl_hazine_nasb').val(data[0]['hazine_nasb']);
            $('#adsl_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#adsl_hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#adsl_tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#adsl_tozihate_website').val(data[0]['tozihate_website']);
            $('#adsl_sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#adsl_hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#adsl_sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#adsl_port').val(data[0]['port']);
            $('#adsl_tajhizat').val(data[0]['tajhizat']);
            $('#adsl_faza').val(data[0]['faza']);
        });
    });
    /*===================++  WIRELESS  ++=========================*/
    var cols_wireless=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "noe_khadamat",
            title:'نوع خدمات'
        },
        { "data": "onvane_service",
            title:'عنوان سرویس'
        },
        { "data": "tarikhe_shoroe_namayesh",
            title:'تاریخ شروع نمایش'
        },
        { "data": "tarikhe_payane_namayesh",
            title:'تاریخ پایان نمایش'
        }
    ];
    DataTable('#view_table_wireless','/helpers/services_wireless.php','POST',cols_wireless,function (table) {
        services_tabs.on('shown.bs.tab', function(e){
            var link = $(e.target).attr("href");
            if(link==='#bottom-justified-divided-tab2'){
                table.columns.adjust().draw();
            }
        });
        $('#view_table_adsl tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete_wireless').click( function () {
            //shenase avalin soton dt mibashad
            let tr=$('#view_table_adsl tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'services_wireless',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit_wireless').click( function () {
        let tr=$('#view_table_wireless tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('services_wireless',td,function (data) {
            $('#wireless_id').val(data[0]['id']);
            $('#wireless_noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#wireless_namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#wireless_namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#wireless_onvane_service').val(data[0]['onvane_service']);
            $('#wireless_gheymat').val(data[0]['gheymat']);
            $('#wireless_hadeaksare_emtiaz').val(data[0]['hadeaksare_emtiaz']);
            $('#wireless_mablaghe_har_emtiaz').val(data[0]['mablaghe_har_emtiaz']);
            $('#wireless_zaname_estefade').val(data[0]['zaname_estefade']);
            $('#wireless_takhfif').val(data[0]['takhfif']);
            $('#wireless_name_service_dahande').val(data[0]['name_service_dahande']);
            $('#wireless_porsant').val(data[0]['porsant']);
            $('#wireless_tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#wireless_tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#wireless_emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#wireless_hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#wireless_name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#wireless_name_groh').val(data[0]['name_groh']);
            $('#wireless_range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#wireless_range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#wireless_saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#wireless_roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#wireless_terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#wireless_dore_be_mah').val(data[0]['dore_be_mah']);
            $('#wireless_dore_be_saat').val(data[0]['dore_be_saat']);
            $('#wireless_terafik').val(data[0]['terafik']);
            $('#wireless_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#wireless_hazine_nasb').val(data[0]['hazine_nasb']);
            $('#wireless_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#wireless_hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#wireless_tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#wireless_tozihate_website').val(data[0]['tozihate_website']);
            $('#wireless_sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#wireless_hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#wireless_sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#wireless_port').val(data[0]['port']);
            $('#wireless_tajhizat').val(data[0]['tajhizat']);
            $('#wireless_faza').val(data[0]['faza']);
        });
    });
    /*===================++  tdlte  ++=========================*/
    var cols_tdlte=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "noe_khadamat",
            title:'نوع خدمات'
        },
        { "data": "onvane_service",
            title:'عنوان سرویس'
        },
        { "data": "tarikhe_shoroe_namayesh",
            title:'تاریخ شروع نمایش'
        },
        { "data": "tarikhe_payane_namayesh",
            title:'تاریخ پایان نمایش'
        }
    ];
    DataTable('#view_table_tdlte','/helpers/services_tdlte.php','POST',cols_tdlte,function (table) {
        services_tabs.on('shown.bs.tab', function(e){
            var link = $(e.target).attr("href");
            if(link==='#bottom-justified-divided-tab3'){
                table.columns.adjust().draw();
            }
        });
        $('#view_table_tdlte tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete_tdlte').click( function () {
            //shenase avalin soton dt mibashad
            let tr=$('#view_table_tdlte tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'services_tdlte',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit_tdlte').click( function () {
        let tr=$('#view_table_tdlte tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('services_tdlte',td,function (data) {
            $('#tdlte_id').val(data[0]['id']);
            $('#tdlte_noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#tdlte_namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#tdlte_namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#tdlte_onvane_service').val(data[0]['onvane_service']);
            $('#tdlte_hadeaksare_emtiaz').val(data[0]['hadeaksare_emtiaz']);
            $('#tdlte_mablaghe_har_emtiaz').val(data[0]['mablaghe_har_emtiaz']);
            $('#tdlte_gheymat').val(data[0]['gheymat']);
            $('#tdlte_zaname_estefade').val(data[0]['zaname_estefade']);
            $('#tdlte_takhfif').val(data[0]['takhfif']);
            $('#tdlte_name_service_dahande').val(data[0]['name_service_dahande']);
            $('#tdlte_porsant').val(data[0]['porsant']);
            $('#tdlte_tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#tdlte_tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#tdlte_emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#tdlte_hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#tdlte_name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#tdlte_name_groh').val(data[0]['name_groh']);
            $('#tdlte_range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#tdlte_range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#tdlte_saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#tdlte_roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#tdlte_terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#tdlte_dore_be_mah').val(data[0]['dore_be_mah']);
            $('#tdlte_dore_be_saat').val(data[0]['dore_be_saat']);
            $('#tdlte_terafik').val(data[0]['terafik']);
            $('#tdlte_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#tdlte_hazine_nasb').val(data[0]['hazine_nasb']);
            $('#tdlte_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#tdlte_hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#tdlte_tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#tdlte_tozihate_website').val(data[0]['tozihate_website']);
            $('#tdlte_sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#tdlte_hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#tdlte_sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#tdlte_port').val(data[0]['port']);
            $('#tdlte_tajhizat').val(data[0]['tajhizat']);
            $('#tdlte_faza').val(data[0]['faza']);
        });
    });
    /*===================++  voip  ++=========================*/
    var cols_voip=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "noe_khadamat",
            title:'نوع پرداخت'
        },
        { "data": "onvane_service",
            title:'عنوان سرویس'
        },
        { "data": "tarikhe_shoroe_namayesh",
            title:'تاریخ شروع نمایش'
        },
        { "data": "tarikhe_payane_namayesh",
            title:'تاریخ پایان نمایش'
        }
    ];
    DataTable('#view_table_voip','/helpers/services_voip.php','POST',cols_voip,function (table) {
        services_tabs.on('shown.bs.tab', function(e){
            var link = $(e.target).attr("href");
            if(link==='#bottom-justified-divided-tab4'){
                table.columns.adjust().draw();
            }
        });
        $('#view_table_voip tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete_voip').click( function () {
            //shenase avalin soton dt mibashad
            let tr=$('#view_table_voip tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'services_voip',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit_voip').click( function () {
        let tr=$('#view_table_voip tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('services_voip',td,function (data) {
            $('#voip_id').val(data[0]['id']);
            $('#voip_noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#voip_namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#voip_namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#voip_onvane_service').val(data[0]['onvane_service']);
            $('#voip_onvane_service').val(data[0]['onvane_service']);
            $('#voip_hadeaksare_emtiaz').val(data[0]['hadeaksare_emtiaz']);
            $('#voip_gheymat').val(data[0]['gheymat']);
            $('#voip_zaname_estefade').val(data[0]['zaname_estefade']);
            $('#voip_takhfif').val(data[0]['takhfif']);
            $('#voip_name_service_dahande').val(data[0]['name_service_dahande']);
            $('#voip_porsant').val(data[0]['porsant']);
            $('#voip_tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#voip_tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#voip_emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#voip_hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#voip_name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#voip_name_groh').val(data[0]['name_groh']);
            $('#voip_range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#voip_range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#voip_saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#voip_roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#voip_terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#voip_dore_be_mah').val(data[0]['dore_be_mah']);
            $('#voip_dore_be_saat').val(data[0]['dore_be_saat']);
            $('#voip_terafik').val(data[0]['terafik']);
            $('#voip_hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#voip_hazine_nasb').val(data[0]['hazine_nasb']);
            $('#voip_hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#voip_hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#voip_tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#voip_tozihate_website').val(data[0]['tozihate_website']);
            // $('#voip_sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            // $('#voip_hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            // $('#voip_sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            // $('#voip_port').val(data[0]['port']);
            // $('#voip_tajhizat').val(data[0]['tajhizat']);
            // $('#voip_faza').val(data[0]['faza']);
        });
    });
    /*===================++  voip  ++=========================*/
});