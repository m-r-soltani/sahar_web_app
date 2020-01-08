$(document).ready(function () {
    $(".custom_select").select2();
    GetProvinces('popsite',function (data) {
        if (data.length>0){
            let provinceid=data[0]['id'];
            let shahr=$("#shahr");
            GetCityByProvince(provinceid,function (result) {
                if (result) {
                    if (shahr) {
                        for (let i = 0; i < result.length; i++) {
                            shahr.append('<option value=' + result[i].id + '>' + result[i].name + '</option>');
                        }
                    }
                }
            });
            //has data
            var element=$('#ostan');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i].id+'>'+data[i].name+'</option>');
                }
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });
    $('#ostan').on('change', function() {
        //alert( this.value );
        let provinceid=this.value;
        let shahr=$("#shahr");
        GetCityByProvince(provinceid,function (result) {
            if (result.length>0) {
                shahr.find('option').remove().end().append('').val('');
                if (shahr) {
                    for (let i = 0; i < result.length; i++) {
                        shahr.append('<option value=' + result[i].id + '>' + result[i].name + '</option>');
                    }
                }
            }else{
                shahr.find('option').remove().end().append('').val('');
            }
        });
    });

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name_sherkat",
            title:'نام شرکت'
        },
        { "data": "shomare_sabt",
            title:'شماره ثبت',
        },
        { "data": "telephone1",
            title:'تلفن1'
        },
        { "data": "telephone2",
            title:'تلفن2'
        },
        { "data": "name_sherkat",
            title:'نام شرکت'
        },
        { "data": "address",
            title:'آدرس'
        },
        { "data": "noe_sherkat",
            title:'نوع شرکت'
        },

    ];
    DataTable('#view_table','/helpers/branch.php','POST',cols,function (table) {
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
            Hard_Delete(td,'branch',function (data) {
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
        Edit_Form('branch',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name_sherkat').val(data[0]['name_sherkat']);
            $('#shomare_sabt').val(data[0]['shomare_sabt']);
            $('#shenase_meli').val(data[0]['shenase_meli']);
            $('#code_eghtesadi').val(data[0]['code_eghtesadi']);
            $('#noe_sherkat').val(data[0]['noe_sherkat']);
            $('#website').val(data[0]['website']);
            $('#email').val(data[0]['email']);
            $('#telephone1').val(data[0]['telephone1']);
            $('#telephone2').val(data[0]['telephone2']);
            $('#dornegar').val(data[0]['dornegar']);

            $('#code_posti').val(data[0]['code_posti']);
            $('#address').val(data[0]['address']);
            $('#t_logo').val(data[0]['t_logo']);
            $('#t_mohiti').val(data[0]['t_mohiti']);
            $('#t_tablo').val(data[0]['t_tablo']);
            $('#t_code_eghtesadi').val(data[0]['t_code_eghtesadi']);
            $('#t_shenase_meli').val(data[0]['t_shenase_meli']);

            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });


});