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
    // FindCityByProvince()
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
    GetHost('telecommunications_center',function (result) {
        let mizban=$("#mizban");
        if (result.length>0) {
            mizban.find('option').remove().end().append('').val('');
            if (mizban) {
                for (let i = 0; i < result.length; i++) {
                    mizban.append('<option value=' + result[i]['id'] + '>' + result[i]['name_service_dahande'] + '</option>');
                }
            }else{
                mizban.find('option').remove().end().append('').val('');
            }
        }
    });
    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name",
            title:'نام مرکز'
        },
        { "data": "pish_shomare",
            title:'پیش شماره'
        },
        { "data": "shomare_tamas_markaz",
            title:'شماره تماس مرکز'
        },
        { "data": "masire_avale_faktorha",
            title:'مسیر اول فاکتورها'
        },
        { "data": "masire_dovome_faktorha",
            title:'مسیر دوم فاکتورها'
        },
        { "data": "noe_gharardad",
            title:'نوع قرارداد'
        }
    ];
    DataTable('#view_table','/helpers/telecommunications_center.php','POST',cols,function (table) {
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
            Hard_Delete(td,'telecommunications_center',function (data) {
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
        Edit_Form('telecommunications_center',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name').val(data[0]['name']);
            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');
            //$('#shahr option[value="'+data[0]['shahr_id']+'"]').attr('selected','selected');
            $('#pish_shomare').val(data[0]['pish_shomare']);
            $('#shomare_tamas_markaz').val(data[0]['shomare_tamas_markaz']);
            $('#shomare_tamas_mdf').val(data[0]['shomare_tamas_mdf']);
            $('#address').val(data[0]['address']);
            $('#masire_avale_faktorha').val(data[0]['masire_avale_faktorha']);
            $('#masire_dovome_faktorha').val(data[0]['masire_dovome_faktorha']);
            $('#mizban').val(data[0]['mizban']);
            $('#noe_gharardad').val(data[0]['noe_gharardad']);


            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });
});