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
    Get_Telecommunications_center('telecommunications_center',function (result) {
        let markaze_mokhaberati=$("#markaze_mokhaberati");
        if (result.length>0) {
            markaze_mokhaberati.find('option').remove().end().append('').val('');
            if (markaze_mokhaberati) {
                for (let i = 0; i < result.length; i++) {
                    markaze_mokhaberati.append('<option value=' + result[i]['id'] + '>' + result[i]['name'] + '</option>');
                }
            }else{
                markaze_mokhaberati.find('option').remove().end().append('').val('');
            }
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
});