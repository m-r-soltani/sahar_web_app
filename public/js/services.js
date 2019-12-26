$(document).ready(function () {
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
    DataTable('#view_table_adsl','/sahar/helpers/services_adsl.php','POST',cols_adsl,function (table) {
        /*===================++  hide first column ++=========================*/
        //table.column(0).visible(false);
        /*===================++  select table row ++=========================*/
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
            $('#id').val(data[0]['id']);
            $('#noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#onvane_service').val(data[0]['onvane_service']);
            $('#gheymat').val(data[0]['gheymat']);
            $('#zaname_estefade').val(data[0]['zaname_estefade']);
            $('#takhfif').val(data[0]['takhfif']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#porsant').val(data[0]['porsant']);
            $('#tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#name_groh').val(data[0]['name_groh']);
            $('#range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#dore_be_mah').val(data[0]['dore_be_mah']);
            $('#dore_be_saat').val(data[0]['dore_be_saat']);
            $('#terafik').val(data[0]['terafik']);
            $('#hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#hazine_nasb').val(data[0]['hazine_nasb']);
            $('#hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#tozihate_website').val(data[0]['tozihate_website']);
            $('#sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#port').val(data[0]['port']);
            $('#tajhizat').val(data[0]['tajhizat']);
            $('#faza').val(data[0]['faza']);
        });
    });
    /*===================++  ADSL  ++=========================*/
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
    DataTable('#view_table_wireless','/sahar/helpers/services_wireless.php','POST',cols_wireless,function (table) {
        /*===================++  hide first column ++=========================*/
        //table.column(0).visible(false);
        /*===================++  select table row ++=========================*/
        $('#view_table_wireless tbody').on( 'click', 'tr', function () {
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
            let tr=$('#view_table_wireless tbody').find('tr.selected');
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
            $('#id').val(data[0]['id']);
            $('#noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#onvane_service').val(data[0]['onvane_service']);
            $('#gheymat').val(data[0]['gheymat']);
            $('#zaname_estefade').val(data[0]['zaname_estefade']);
            $('#takhfif').val(data[0]['takhfif']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#porsant').val(data[0]['porsant']);
            $('#tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#name_groh').val(data[0]['name_groh']);
            $('#range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#dore_be_mah').val(data[0]['dore_be_mah']);
            $('#dore_be_saat').val(data[0]['dore_be_saat']);
            $('#terafik').val(data[0]['terafik']);
            $('#hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#hazine_nasb').val(data[0]['hazine_nasb']);
            $('#hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#tozihate_website').val(data[0]['tozihate_website']);
            $('#sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#port').val(data[0]['port']);
            $('#tajhizat').val(data[0]['tajhizat']);
            $('#faza').val(data[0]['faza']);
        });
    });
    /*===================++  WIRELESS  ++=========================*/
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
    DataTable('#view_table_tdlte','/sahar/helpers/services_tdlte.php','POST',cols_tdlte,function (table) {
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
            $('#id').val(data[0]['id']);
            $('#noe_khadamat option[value="'+data[0]["noe_khadamat"]+'"]').attr('selected', 'selected');
            $('#namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#onvane_service').val(data[0]['onvane_service']);
            $('#gheymat').val(data[0]['gheymat']);
            $('#zaname_estefade').val(data[0]['zaname_estefade']);
            $('#takhfif').val(data[0]['takhfif']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#porsant').val(data[0]['porsant']);
            $('#tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#name_groh').val(data[0]['name_groh']);
            $('#range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#dore_be_mah').val(data[0]['dore_be_mah']);
            $('#dore_be_saat').val(data[0]['dore_be_saat']);
            $('#terafik').val(data[0]['terafik']);
            $('#hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#hazine_nasb').val(data[0]['hazine_nasb']);
            $('#hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#tozihate_website').val(data[0]['tozihate_website']);
            $('#sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            $('#hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            $('#sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            $('#port').val(data[0]['port']);
            $('#tajhizat').val(data[0]['tajhizat']);
            $('#faza').val(data[0]['faza']);
        });
    });
    /*===================++  tdlte  ++=========================*/
    /*===================++  voip  ++=========================*/
    var cols_voip=[
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
    DataTable('#view_table_voip','/sahar/helpers/services_voip.php','POST',cols_voip,function (table) {
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
            $('#id').val(data[0]['id']);
            $('#noe_pardakht option[value="'+data[0]["noe_pardakht"]+'"]').attr('selected', 'selected');
            $('#namayeshe_service option[value="'+data[0]["namayeshe_service"]+'"]').attr('selected', 'selected');
            $('#namayeshe_dar_profile option[value="'+data[0]["namayeshe_dar_profile"]+'"]').attr('selected', 'selected');
            $('#onvane_service').val(data[0]['onvane_service']);
            $('#gheymat').val(data[0]['gheymat']);
            $('#zaname_estefade').val(data[0]['zaname_estefade']);
            $('#takhfif').val(data[0]['takhfif']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#porsant').val(data[0]['porsant']);
            $('#tarikhe_shoroe_namayesh').val(data[0]['tarikhe_shoroe_namayesh']);
            $('#tarikhe_payane_namayesh').val(data[0]['tarikhe_payane_namayesh']);
            $('#emtiaze_jayeze').val(data[0]['emtiaze_jayeze']);
            $('#hadeaghale_emtiaz').val(data[0]['hadeaghale_emtiaz']);
            $('#name_grohe_moshtari').val(data[0]['name_grohe_moshtari']);
            $('#name_groh').val(data[0]['name_groh']);
            $('#range_namayeshe_profile').val(data[0]['range_namayeshe_profile']);
            $('#range_vizhesazie_profile').val(data[0]['range_vizhesazie_profile']);
            $('#saat_vasle_movaghat').val(data[0]['saat_vasle_movaghat']);
            $('#roze_vasle_movaghat').val(data[0]['roze_vasle_movaghat']);
            $('#terafike_vasle_movaghat').val(data[0]['terafike_vasle_movaghat']);
            $('#dore_be_mah').val(data[0]['dore_be_mah']);
            $('#dore_be_saat').val(data[0]['dore_be_saat']);
            $('#terafik').val(data[0]['terafik']);
            $('#hazine_ranzhe').val(data[0]['hazine_ranzhe']);
            $('#hazine_nasb').val(data[0]['hazine_nasb']);
            $('#hazine_dranzhe').val(data[0]['hazine_dranzhe']);
            $('#hazine_kharabi').val(data[0]['hazine_kharabi']);
            $('#tozihate_faktor').val(data[0]['tozihate_faktor']);
            $('#tozihate_website').val(data[0]['tozihate_website']);
            // $('#sorate_paye_daryaft').val(data[0]['sorate_paye_daryaft']);
            // $('#hadeaxar_sorat_daryaft').val(data[0]['hadeaxar_sorat_daryaft']);
            // $('#sorat_paye_ersal').val(data[0]['sorat_paye_ersal']);
            // $('#port').val(data[0]['port']);
            // $('#tajhizat').val(data[0]['tajhizat']);
            // $('#faza').val(data[0]['faza']);
        });
    });
    /*===================++  voip  ++=========================*/
});