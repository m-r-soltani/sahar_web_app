$(document).ready(function () {
    DATEPICKER_YYYYMMDD('#tarikhe_sabt');
    DATEPICKER_YYYYMMDD('#tarikhe_payan');
    /* GetProvinces('wireless_station',function (data) {
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
    /*GetCities('wireless_station',function (data) {
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
        { "data": "tarikhe_sabt",
            title:'تاریخ ثبت'
        },
        { "data": "shenase_dakal",
            title:'شناسه دکل'
        },
        { "data": "tol_joghrafiai",
            title:'طول جغرافیایی'
        },
        { "data": "arz_joghrafiai",
            title:'عرض جغرافیایی'
        },
        { "data": "ertefae_dakal",
            title:'ارتفاع دکل'
        }

    ];
    DataTable('#view_table','/sahar/helpers/wireless_station.php','POST',cols,function (table) {
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
            Hard_Delete(td,'wireless_station',function (data) {
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
        console.log(td);
        Edit_Form('wireless_station',td,function (data) {

            $('#id').val(data[0]['id']);
            $('#tarikhe_sabt').val(data[0]['tarikhe_sabt']);
            $('#tarikh_payan').val(data[0]['tarikh_payan']);
            $('#shomashomare_link_sabt_samane').val(data[0]['shomashomare_link_sabt_samane']);
            $('#popsite').val(data[0]['popsite']);
            $('#shenase_dakal').val(data[0]['shenase_dakal']);
            $('#address').val(data[0]['address']);
            $('#ostan').val(data[0]['ostan']);
            $('#shahr').val(data[0]['shahr']);
            $('#ertefae_sakhteman').val(data[0]['ertefae_sakhteman']);
            $('#tol_joghrafiai').val(data[0]['tol_joghrafiai']);
            $('#arz_joghrafiai').val(data[0]['arz_joghrafiai']);
            $('#bahre_anten').val(data[0]['bahre_anten']);
            $('#shomare_seriale_dastgah').val(data[0]['shomare_seriale_dastgah']);
            $('#teke_bande_ferekansi').val(data[0]['teke_bande_ferekansi']);
            $('#hadeaxar_tavane_khoroji_ferestande').val(data[0]['hadeaxar_tavane_khoroji_ferestande']);
            $('#marke_dastgah').val(data[0]['marke_dastgah']);
            $('#modele_dastgah').val(data[0]['modele_dastgah']);
            $('#ip_address').val(data[0]['ip_address']);
            $('#port_winbox').val(data[0]['port_winbox']);
            $('#username').val(data[0]['username']);
            $('#password').val(data[0]['password']);
        });
    });
});