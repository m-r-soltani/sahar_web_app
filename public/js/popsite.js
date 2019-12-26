$(document).ready(function () {
    /*GetProvinces('popsite',function (data) {
        if (data){
            //has data
            var element=$('#ostan');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i].id+'>'+data[i].name+'</option>')
                }
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });*/

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه دکل'
        },
        { "data": "name_dakal",
            title:'نام دکل'
        },
        { "data": "noe_dakal",
            title:'نوع دکل',
        },
        { "data": "ertefa_dakal",
            title:'ارتفاع دکل'
        },
        { "data": "tol_joghrafiai",
            title:'طول جغرافیایی'
        },
        { "data": "arz_joghrafiai",
            title:'عرض جغرافیایی'
        },
        { "data": "shomare_sabt",
            title:'آدرس'
        },
        { "data": "maleke_dakal",
            title:'مالک دکل'
        },
        { "data": "shomare_tamas_malek",
            title:'شماره تماس مالک'
        },
        { "data": "name_poshtiban",
            title:'نام پشتیبان'
        },
    ];
    DataTable('#view_table','/sahar/helpers/popsite.php','POST',cols,function (table) {
        /*===================++  hide first column ++=========================*/

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
            Hard_Delete(td,'popsite',function (data) {
                if (data) {
                    table.ajax.reload();
                }else{
                    alert('عملیات ناموفق');
                }
            });
        } );
    });
    $('#edit').click( function () {
        // $(".form-group").find("input").each(function () {
        //     console.log(123);
        // });
        let tr=$('#view_table tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Edit_Form('popsite',td,function (data) {

            $('#id').val(data[0]['id']);
            $('#name_dakal').val(data[0]['name_dakal']);
            if(data[0]['noe_dakal']=='faghededakal') {
                $('#noe_dakal option[value="فاقد دکل"]').attr('selected', 'selected');
            }else if(data[0]['noe_dakal']=='mahari'){
                $('#noe_dakal option[value="مهاری"]').attr('selected', 'selected');
            }else if(data[0]['noe_dakal']=='khodista'){
                $('#noe_dakal option[value="خودایستا"]').attr('selected', 'selected');
            }
            $('#ostan').val(data[0]['ostan']);
            $('#shahr').val(data[0]['shahr']);
            $('#address').val(data[0]['address']);
            $('#ertefa_sakhteman').val(data[0]['ertefa_sakhteman']);
            $('#ertefa_dakal').val(data[0]['ertefa_dakal']);
            $('#majmoe_ertefa').val(data[0]['majmoe_ertefa']);
            $('#tol_joghrafiai').val(data[0]['tol_joghrafiai']);
            $('#arz_joghrafiai').val(data[0]['arz_joghrafiai']);
            $('#shomare_sabt').val(data[0]['shomare_sabt']);
            $('#code_posti').val(data[0]['code_posti']);
            $('#maleke_dakal').val(data[0]['maleke_dakal']);
            $('#shomare_tamas_malek').val(data[0]['shomare_tamas_malek']);
            // console.log(data[0]['noe_malekiat']);
            // if(data[0]['noe_malekiat']==='estijari') {
            //     $('#noe_malekiat option[value="'+data[0]['noe_malekiat']+'"]').attr('selected', 'selected');
            // }else if(data[0]['noe_malekiat']==='malekiat'){
            //$('#noe_malekiat option[value="'+data[0]['noe_malekiat']+'"]').attr('selected', 'selected');
            // }
            $('#noe_malekiat option[value="'+data[0]['noe_malekiat']+'"]').attr('selected', 'selected');
            $('#rotbe_dakal option[value="'+data[0]['rotbe_dakal']+'"]').attr('selected', 'selected');
            $('#mizbane_dakal').val(data[0]['mizbane_dakal']);
            $('#name_poshtiban').val(data[0]['name_poshtiban']);
            $('#family_poshtiban').val(data[0]['family_poshtiban']);
            $('#shoamre_tamas_poshtiban').val(data[0]['shoamre_tamas_poshtiban']);
            $('#ejare_mahiane_nasbe_anten_roye_dakal').val(data[0]['ejare_mahiane_nasbe_anten_roye_dakal']);
            $('#masire_avale_faktorha').val(data[0]['masire_avale_faktorha']);
            $('#shomare_tamas_malek').val(data[0]['shomare_tamas_malek']);



            $('#bime_dakal option[value="'+data[0]['bime_dakal']+'"]').attr('selected', 'selected');
            $('#barghe_ezterari option[value="'+data[0]['barghe_ezterari']+'"]').attr('selected', 'selected');
            $('#batrie_poshtiban option[value="'+data[0]['batrie_poshtiban']+'"]').attr('selected', 'selected');
            $('#cheraghe_dakal option[value="'+data[0]['cheraghe_dakal']+'"]').attr('selected', 'selected');
            $('#ert option[value="'+data[0]['ert']+'"]').attr('selected', 'selected');
            $('#emkane_nasbe_anten option[value="'+data[0]['emkane_nasbe_anten']+'"]').attr('selected', 'selected');
            $('#ejaze_dastresi_24_saate option[value="'+data[0]['ejaze_dastresi_24_saate']+'"]').attr('selected', 'selected');


            // if(data[0]['batrie_poshtiban']==="on") {
            //     $('#batrie_poshtiban').prop('checked', true);
            // }else{
            //     $('#batrie_poshtiban').prop('checked', false);
            // }


            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });

});