$(document).ready(function () {
    DATEPICKER_YYYYMMDD('#tarikhe_tavalod');

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name",
            title:'نام سرویس دهنده'
        },
        { "data": "shenase_hoviati",
            title:'تلفن تماس'
        },
        { "data": "gorohe_moshtarak",
            title:'تلفن تماس'
        },
        { "data": "telephone",
            title:'تلفن پشتیبانی'
        }
    ];
    DataTable('#view_table','/sahar/helpers/real_subscribers.php','POST',cols,function (table) {
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
            Hard_Delete(td,'real_subscribers',function (data) {
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
        Edit_Form('real_subscribers',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name').val(data[0]['name']);
            $('#noe_moshtarak').val(data[0]['noe_moshtarak']);
            $('#shomare_mojavez').val(data[0]['shomare_mojavez']);
            $('#f_name').val(data[0]['f_name']);
            $('#name_pedar').val(data[0]['name_pedar']);
            $('#meliat').val(data[0]['meliat']);
            $('#tabeiat').val(data[0]['tabeiat']);
            $('#shenase_hoviati').val(data[0]['tabeiat']);
            $('#shomare_shenasname').val(data[0]['shomare_shenasname']);
            $('#tarikhe_tavalod').val(data[0]['tarikhe_tavalod']);
            $('#ostane_tavalod').val(data[0]['ostane_tavalod']);
            $('#shahre_tavalod').val(data[0]['shahre_tavalod']);
            $('#telephone').val(data[0]['telephone']);
            $('#telephone_hamrah').val(data[0]['telephone_hamrah']);
            $('#email').val(data[0]['email']);
            $('#fax').val(data[0]['fax']);
            $('#website').val(data[0]['website']);
            $('#code_posti').val(data[0]['code_posti']);
            $('#address').val(data[0]['address']);
            $('#shoghl').val(data[0]['shoghl']);
            $('#reshteye_tehsili').val(data[0]['reshteye_tehsili']);
            $('#moaref').val(data[0]['moaref']);
            $('#tozihat').val(data[0]['tozihat']);
            $('#r_t_karte_meli').val(data[0]['r_t_karte_meli']);
            //aks
            $('#r_t_ghabze_telephone').val(data[0]['r_t_ghabze_telephone']);
            $('#r_t_ejare_malekiat').val(data[0]['r_t_ejare_malekiat']);
            $('#r_t_gharardad').val(data[0]['r_t_ejare_malekiat']);
            $('#r_t_sayer').val(data[0]['r_t_ejare_malekiat']);
            //aks
            $('#gorohe_moshtarak option[value="'+data[0]["gorohe_moshtarak"]+'"]').attr('selected', 'selected');
            $('#nahve_ashnai_campain option[value="'+data[0]["nahve_ashnai_campain"]+'"]').attr('selected', 'selected');
            $('#akharin_madrake_tahsili option[value="'+data[0]["akharin_madrake_tahsili"]+'"]').attr('selected', 'selected');
            $('#noe_shenase_hoviati option[value="'+data[0]["noe_shenase_hoviati"]+'"]').attr('selected', 'selected');
            $('#jensiat option[value="'+data[0]["jensiat"]+'"]').attr('selected', 'selected');
            ////////////////tasvire logo dorost shavad
            //$('#t_logo').val(data[0]['name_service_dahande']);


        });
    });
});