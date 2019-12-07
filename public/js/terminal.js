$(document).ready(function () {
    GetProvinces('terminal',function (data) {
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
    GetCities('terminal',function (data) {
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
        { "data": "id",
            title:'شناسه ترمینال'
        },
        { "data": "markaze_mokhaberati",
            title:'مرکز مخابراتی'
        },
        { "data": "noe_terminal",
            title:'نوع ترمینال'
        },
        { "data": "tighe",
            title:'تیغه'
        },
        { "data": "mizban",
            title:'میزبان'
        },
        { "data": "ip_ppoe_server",
            title:'ip ppoe server'
        },
        { "data": "user_ppoe_server",
            title:'user ppoe server'
        }
    ];
    DataTable('#view_table','/sahar/helpers/terminal.php','POST',cols,function (table) {
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
            Hard_Delete(td,'terminal',function (data) {
                if (data==='1') {
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
        Edit_Form('terminal',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#markaze_mokhaberati').val(data[0]['markaze_mokhaberati']);
            $('#noe_terminal').val(data[0]['noe_terminal']);
            $('#ostan').val(data[0]['ostan']);
            $('#shahr').val(data[0]['shahr']);
            $('#radif').val(data[0]['radif']);
            $('#tighe').val(data[0]['tighe']);
            $('#etesali').val(data[0]['etesali']);
            $('#az_port').val(data[0]['az_port']);
            $('#ta_port').val(data[0]['ta_port']);
            $('#mizban').val(data[0]['mizban']);
            $('#noe_gharardad').val(data[0]['noe_gharardad']);
            $('#ip_ppoe_server').val(data[0]['ip_ppoe_server']);
            $('#user_ppoe_server').val(data[0]['user_ppoe_server']);
            $('#password_ppoe_server').val(data[0]['password_ppoe_server']);
            $('#snmp_ppoe_server').val(data[0]['snmp_ppoe_server']);

            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');
            //$('#shahr option[value="'+data[0]['shahr_id']+'"]').attr('selected','selected');


            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });
    console.log($('#t_akharin_taghirat').val()); //.attr('value','ad.jpg')


});