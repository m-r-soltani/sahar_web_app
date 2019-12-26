$(document).ready(function () {
   /* GetProvinces('host',function (data) {
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
    /*GetCities('host',function (data) {
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
    });*/

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
    DataTable('#view_table','/sahar/helpers/host.php','POST',cols,function (table) {
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
        console.log(td);
        Edit_Form('host',td,function (data) {
            $('#olaviat').val(data[0]['olaviat']);
            $('#id').val(data[0]['id']);
            $('#name_service_dahande').val(data[0]['name_service_dahande']);
            $('#shomare_mojavez').val(data[0]['name_service_dahande']);
            $('#name_tarefe').val(data[0]['name_tarefe']);
            $('#address').val(data[0]['name_service_dahande']);
            $('#shomare_tamas').val(data[0]['name_service_dahande']);
            $('#shomare_poshtibani').val(data[0]['name_service_dahande']);
            $('#website').val(data[0]['name_service_dahande']);
            $('#address_shekayat').val(data[0]['name_service_dahande']);
            ////////////////tasvire logo dorost shavad
            //$('#t_logo').val(data[0]['name_service_dahande']);
            if(data[0]['dsl_license']==="on") {
                $('#dsl_license').prop('checked', true);
            }else{
                $('#dsl_license').prop('checked', false);
            }
            if(data[0]['dsl_license']==="on") {
                $('#dsl_license').prop('checked', true);
            }else{
                $('#dsl_license').prop('checked', false);
            }
            if(data[0]['dsl_bitstream']==="on") {
                $('#dsl_bitstream').prop('checked', true);
            }else{
                $('#dsl_bitstream').prop('checked', false);
            }
            if(data[0]['wlan_license']==="on") {
                $('#wlan_license').prop('checked', true);
            }else{
                $('#wlan_license').prop('checked', false);
            }
            if(data[0]['wlan_bitstream']==="on") {
                $('#wlan_bitstream').prop('checked', true);
            }else{
                $('#wlan_bitstream').prop('checked', false);
            }
            if(data[0]['td_lte']==="on") {
                $('#td_lte').prop('checked', true);
            }else{
                $('#td_lte').prop('checked', false);
            }
            if(data[0]['ngn']==="on") {
                $('#ngn').prop('checked', true);
            }else{
                $('#ngn').prop('checked', false);
            }
            if(data[0]['phone_orgination']==="on") {
                $('#phone_orgination').prop('checked', true);
            }else{
                $('#phone_orgination').prop('checked', false);
            }
            if(data[0]['domain']==="on") {
                $('#domain').prop('checked', true);
            }else{
                $('#domain').prop('checked', false);
            }
            if(data[0]['host']==="on") {
                $("#host").prop('checked',true);
            }else{
                $("#host").prop('checked',false);
            }

        });
    });
});