$(document).ready(function () {
    DATEPICKER_YYYYMMDD('#tarikh_sabt');
    DATEPICKER_YYYYMMDD('#tarikhe_tavalode_modir_amel');

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name",
            title:'نام'
        },
        { "data": "name_sherkat",
            title:'نام شرکت'
        },
        { "data": "telephone",
            title:'تلفن تماس'
        },
        { "data": "shenase_meli",
            title:'شناسه ملی'
        }
    ];
    DataTable('#view_table','/sahar/helpers/legal_subscribers.php','POST',cols,function (table) {
        /*===================++  hide first column ++=========================*/
        //table.column(0).visible(false);
        /*===================++  select table row ++=========================*/
        $('#view_table tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#delete').click( function () {
            //shenase avalin soton dt mibashad
            let tr=$('#view_table tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'legal_subscribers',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit').click( function () {
        let tr=$('#view_table tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('legal_subscribers',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name_en').val(data[0]['name']);
            $('#noe_moshtarak').val(data[0]['noe_moshtarak']);
            $('#name_sherkat').val(data[0]['name_sherkat']);
            $('#shomare_sabt').val(data[0]['shomare_sabt']);
            $('#tarikhe_sabt').val(data[0]['tarikhe_sabt']);
            $('#name_modir_amel').val(data[0]['name_modir_amel']);
            $('#fname_modir_amel').val(data[0]['fname_modir_amel']);
            $('#name_en_modir_amel').val(data[0]['name_en_modir_amel']);
            $('#meliat_modir_amel').val(data[0]['meliat_modir_amel']);
            $('#tabeiat_modir_amel').val(data[0]['tabeiat_modir_amel']);
            $('#ostan').val(data[0]['ostan']);
            $('#shahr').val(data[0]['shahr']);
            $('#telephone').val(data[0]['telephone']);
            $('#shomare_dakheli').val(data[0]['shomare_dakheli']);
            $('#telephone_hamrah').val(data[0]['telephone_hamrah']);
            $('#email').val(data[0]['email']);
            $('#fax').val(data[0]['fax']);
            $('#website').val(data[0]['website']);
            $('#code_posti').val(data[0]['code_posti']);
            $('#address').val(data[0]['address']);
            $('#code_eghtesadi').val(data[0]['code_eghtesadi']);
            $('#shenase_meli').val(data[0]['shenase_meli']);
            $('#shomare_shenasname').val(data[0]['shomare_shenasname']);
            $('#tarikhe_tavalode_modir_amel').val(data[0]['tarikhe_tavalode_modir_amel']);
            $('#name_pedare_modir_amel').val(data[0]['name_pedare_modir_amel']);
            $('#tarikhe_tavalode_modir_amel').val(data[0]['tarikhe_tavalode_modir_amel']);
            $('#reshte_tahsili_modir_amel').val(data[0]['reshte_tahsili_modir_amel']);
            $('#reshteye_faaliat').val(data[0]['reshteye_faaliat']);
            $('#moaref').val(data[0]['moaref']);
            $('#tozihat').val(data[0]['tozihat']);
            $('#l_t_agahie_tasis').val(data[0]['l_t_agahie_tasis']);
            $('#l_t_akharin_taghirat').val(data[0]['l_t_akharin_taghirat']);
            $('#l_t_saheb_kartemeli_emzaye_aval').val(data[0]['l_t_kartemeli_namayande']);
            $('#l_t_saheb_kartemeli_emzaye_dovom').val(data[0]['l_t_kartemeli_namayande']);
            $('#l_t_kartemeli_namayande').val(data[0]['l_t_kartemeli_namayande']);
            $('#l_t_moarefiname_namayande').val(data[0]['l_t_moarefiname_namayande']);
            $('#l_t_ghabze_telephone').val(data[0]['l_t_ghabze_telephone']);
            $('#l_t_gharardad').val(data[0]['l_t_gharardad']);
            $('#l_t_ejarename_malekiat').val(data[0]['l_t_ejarename_malekiat']);
            $('#l_t_sayer').val(data[0]['l_t_sayer']);
            //aks
            $('#jensiat option[value="'+data[0]["jensiat"]+'"]').attr('selected', 'selected');
            $('#nahve_moarefi option[value="'+data[0]["nahve_moarefi"]+'"]').attr('selected', 'selected');
            $('#nahve_ashnai_campain option[value="'+data[0]["nahve_ashnai_campain"]+'"]').attr('selected', 'selected');
            $('#madrake_daneshgahi_modir_amel option[value="'+data[0]["madrake_daneshgahi_modir_amel"]+'"]').attr('selected', 'selected');
            $('#gorohe_moshtarak option[value="'+data[0]["gorohe_moshtarak"]+'"]').attr('selected', 'selected');
            $('#noe_shenase_hoviati option[value="'+data[0]["noe_shenase_hoviati"]+'"]').attr('selected', 'selected');
            ////////////////tasvire logo dorost shavad
            //$('#t_logo').val(data[0]['name_service_dahande']);
            if(data[0]['dsl_license']==="on") {
                $('#dsl_license').prop('checked', true);
            }else{
                $('#dsl_license').prop('checked', false);
            }


        });
    });
});