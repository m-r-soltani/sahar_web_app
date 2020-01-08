$(document).ready(function () {
    $(".custom_select").select2();
    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name_service_dahande",
            title:'نام سرویس دهنده'
        },
        { "data": "shomare_tamas",
            title:'تلفن تماس'
        },
        { "data": "shomare_poshtibani",
            title:'تلفن پشتیبانی'
        }
    ];
    DataTable('#view_table','/helpers/host.php','POST',cols,function (table) {
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
            Hard_Delete(td,'host',function (data) {
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
        Edit_Form('host',td,function (data) {
            console.log(data[0]['dsl_license']);
            $('#id').val(data[0]['id']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#shomare_mojavez').val(data[0]['shomare_mojavez']);
            $('#address').val(data[0]['address']);
            $('#shomare_tamas').val(data[0]['shomare_tamas']);
            $('#shomare_poshtibani').val(data[0]['shomare_poshtibani']);
            $('#website').val(data[0]['website']);
            $('#address_shekayat').val(data[0]['address_shekayat']);
            $('#olaviat').val(data[0]['olaviat']);
            $('#t_logo').val(data[0]['t_logo']);
            $('#name_tarefe').val(data[0]['name_tarefe']);
            $('#dsl_license option[value="'+data[0]['dsl_license']+'"]').attr('selected', 'selected');
            $('#dsl_bitstream option[value="'+data[0]['dsl_bitstream']+'"]').attr('selected', 'selected');
            $('#wlan_license option[value="'+data[0]['wlan_license']+'"]').attr('selected', 'selected');
            $('#wlan_bitstream option[value="'+data[0]['wlan_bitstream']+'"]').attr('selected', 'selected');
            $('#td_lte option[value="'+data[0]['td_lte']+'"]').attr('selected', 'selected');
            $('#phone_orgination option[value="'+data[0]['phone_orgination']+'"]').attr('selected', 'selected');
            $('#ngn option[value="'+data[0]['ngn']+'"]').attr('selected', 'selected');
            $('#host option[value="'+data[0]['host']+'"]').attr('selected', 'selected');
            $('#domain option[value="'+data[0]['domain']+'"]').attr('selected', 'selected');


        });
    });
});