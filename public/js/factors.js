$(document).ready(function () {
    /* GetProvinces('factors',function (data) {
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
            title:'شناسه'
        },
        { "data": "name",
            title:'نام'
        },
        { "data": "f_name",
            title:'نام خانوادگی'
        },
        { "data": "telephone",
            title:'تلفن ثابت'
        },
        { "data": "telephone_hamrah",
            title:'تلفن همراه'
        },
        { "data": "shenase_hoviati",
            title:'کد ملی'
        }
    ];
    DataTable('#view_table','/sahar/helpers/factors.php','POST',cols,function (table) {
        /*===================++  select table row ++=========================*/
        $('#view_table tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
    });
    $('#edit').click( function () {
        let tr = $('#view_table tbody').find('tr.selected');
        let td = tr.find('td:first').text();
        Edit_Form('factors', td, function (data) {
            //console.log(data);
        });
    });
    // $('#confirm').click( function () {
    //     let tr=$('#view_table tbody').find('tr.selected');
    //     let td=tr.find('td:first').text();
    //     Fuctors('fuctors', td, function (data) {
    //         console.log(data[0]['type']);
    //     });
    // });
});