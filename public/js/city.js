$(document).ready(function () {
    $(".custom_select").select2();
    GetProvinces('city',function (data) {
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

    /*===================++  DATA_TABLE  ++=========================*/
    var ostan={
        findostan:function (data) {
            return 'asd';
        }
    };
    var cols=[
        /*        { "data": "id",title:'id',
                    //"targets": [ 0 ],
                    //"visible": false,
                    //"searchable": false
                },*/
        { "data": "shahr",
            title:'نام شهر'
        },
        { "data": "ostan_id",
            title:'شناسه استان',
        }
        //,{ "data": "ostan_id",title:'استان' }
    ];
    let origin=window.location.origin;
    //http://localhost:8000
    let pathname=window.location.pathname;
    pathname=pathname.split('/');
    var dt_url='';
    if (pathname[0]!=""){
        dt_url=pathname[0];
    }else{
        dt_url=pathname[1];
    }
    //console.log(window.location.origin+'/'+dt_url+'/helpers/city.php');
    //sahar/city
    DataTable('#view_table','/helpers/city.php','POST',cols,function (table) {
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
        //onclick log row data
        /*$('#view_table tbody').on( 'click', 'tr', function () {
            console.log( table.row( this ).data() );
        } );*/
        $('#delete').click( function () {
            let tr=$('#view_table tbody').find('tr.selected');
            let td=tr.find('td:first').text();
            Hard_Delete(td,'city',function (data) {
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
        Edit_Form('city',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#shahr').val(data[0]['name']);
            $('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });


});