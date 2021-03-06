$(document).ready(function () {
    Get_Branch_Info('modir',function (data) {
        if (data){
            //has data
            var element=$('#name_namayandegi');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i]['id']+'>'+data[i]['name_sherkat']+'</option>')
                }
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });
    $(".custom_select").select2();
    DATEPICKER_YYYYMMDD('#tarikhe_tavalod');
    Get_organization_levels('modir',function (data) {
        if (data){
            //has data
            var element=$('#level_id');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i]['id']+'>'+data[i]['semat']+'</option>')
                }
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name",
            title:'نام'
        },
        { "data": "name_namayandegi",
            title:'نام نمایندگی'
        },
        { "data": "semat",
            title:'سمت'
        },
        { "data": "telephone_hamrah",
            title:'تلفن همراه'
        },
        { "data": "telephone_mahale_sokonat",
            title:'تلفن محل سکونت'
        },
        { "data": "email",
            title:'ایمیل'
        },
        { "data": "name_karbari",
            title:'نام کاربری'
        }
    ];
    DataTable('#view_table','/helpers/modir.php','POST',cols,function (table) {
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
            Hard_Delete(td,'modir',function (data) {
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
        Edit_Form('modir',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name_namayandegi option[value="'+data[0]['namayandegi_id']+'"]').attr('selected','selected');
            $("#name_namayandegi").attr('disabled','disabled');
            $('#name').val(data[0]['name']);
            $('#name_khanevadegi').val(data[0]['name_khanevadegi']);
            $('#code_meli').val(data[0]['code_meli']);
            $('#shomare_shenasname').val(data[0]['shomare_shenasname']);
            $('#name_pedar').val(data[0]['name_pedar']);
            $('#tarihke_tavalod').val(data[0]['tarihke_tavalod']);
            $('#madrake_tahsili option[value="'+data[0]['madrake_tahsili']+'"]').attr('selected','selected');
            $('#reshteye_tahsili').val(data[0]['reshteye_tahsili']);
            $('#ostan_tavalod').val(data[0]['ostan_tavalod']);
            $('#shahr_tavalod').val(data[0]['shahr_tavalod']);
            $('#telephone_hamrah').val(data[0]['telephone_hamrah']);
            $('#telephone_mahale_sokonat').val(data[0]['telephone_mahale_sokonat']);
            $('#address').val(data[0]['address']);
            $('#email').val(data[0]['email']);
            $('#level_id option[value="'+data[0]['level_id']+'"]').attr('selected','selected');
            //$('#level_id').val(data[0]['semat']);
            $('#name_karbari').val(data[0]['name_karbari']);
            $('#ramze_obor').val(data[0]['ramze_obor']);
            $('#t_karte_meli').val(data[0]['t_karte_meli']);
            $('#t_shenasname').val(data[0]['t_shenasname']);
            $('#t_madrake_tahsili').val(data[0]['t_madrake_tahsili']);
            $('#t_chehre').val(data[0]['t_chehre']);

            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });


});