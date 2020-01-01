$(document).ready(function () {
    $(".custom_select").select2();
    // GetProvinces('ostan',function (data) {
    //     if (data){
    //         //has data
    //         var element=$('#name');
    //         if(element) {
    //             for (let i = 0;i<data.length ; i++) {
    //                 element.append('<option value='+data[i].id+'>'+data[i].name+'</option>')
    //             }
    //         }
    //     }else{
    //         //data az db gerefte nashod
    //         alert('درخواست ناموفق');
    //     }
    // });

    /*===================++  DATA_TABLE  ++=========================*/
    var cols=[
        /*        { "data": "id",title:'id',
                    //"targets": [ 0 ],
                    //"visible": false,
                    //"searchable": false
                },*/
        { "data": "id",
            title:'شناسه'
        },
        { "data": "name",
            title:'نام استان',
        }
    ];
    DataTable('#view_table','/sahar/helpers/province.php','POST',cols,function (table) {
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
            Hard_Delete(td,'ostan',function (data) {
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
        Edit_Form('ostan',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name').val(data[0]['name']);


            //$('.form-group').each(function(i) {

            //});

        });
    });


});