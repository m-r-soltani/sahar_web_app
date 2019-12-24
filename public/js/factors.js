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
    // $('#edit').click( function () {
    //     let tr = $('#view_table tbody').find('tr.selected');
    //     let td = tr.find('td:first').text();
    //      Edit_Form('factors', td, function (data) {
    //         //console.log(data);
    //     });
    // });
    $('#initconfirm').click( function () {
        let tr=$('#view_table tbody').find('tr.selected');
        let td=tr.find('td:first').text();
        Factors_Initialize('findbyid', td, function (data) {
            //console.log(data);
        });
    });
    ///click on box
    $("#sefareshe_jadid_box").click(function () {
        Factors_Initialize(this.id, false, function (data) {
            $("#sefareshe_jadid_serviceslist").empty();
            for (let i=0;i<data.length;i++) {
                $("#sefareshe_jadid_serviceslist").append("<li class='sefareshe_jadid_serviceslist_li' id='"+data[i]['id']+"'>"+data[i]['noe_khadamat']+"</li>");
            }
            //click on li
            $(".sefareshe_jadid_serviceslist_li").on('click',function () {
                let id=this.id;
                $(".sefareshe_jadid_serviceslist_li").each(function () {
                    $(this).css('background-color','#fafafa');
                });
                $(this).css('background-color','#26a69a');
                Factors_Initialize('sefareshe_jadid_serviceslist_li', id, function (data) {

                });
            });

        });
    });
    //range box ha
    $(".factors_tab1_box").on('click',function () {
        $(".factors_tab1_box").each(function () {
            $(this).css('background-color','#e0e0e0');
        });
        $(this).css('background-color','#26a69a');
    });
});