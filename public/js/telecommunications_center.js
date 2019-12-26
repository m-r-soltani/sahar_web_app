$(document).ready(function () {
    GetProvinces('telecommunications_center',function (data) {
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
    });
    GetCities('telecommunications_center',function (data) {
        if (data){
            //has data
            var element=$('#shahr');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i].id+'>'+data[i].name+'</option>')
                }
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
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
    DataTable('#view_table','/sahar/helpers/telecommunications_center.php','POST',cols,function (table) {
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