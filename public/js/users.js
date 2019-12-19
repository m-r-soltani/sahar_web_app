$(document).ready(function () {
    /*GetProvinces('users',function (data) {
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
        { "data": "username",
            title:'نام کاربری',
        },
        { "data": "password",
            title:'رمز',
        }
        //,{ "data": "ostan_id",title:'استان' }
    ];
    DataTable('#view_table','/sahar/helpers/users.php','POST',cols,function (table) {
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
            Hard_Delete(td,'users',function (data) {
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
        Edit_Form('users',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#username').val(data[0]['username']);
            $('#password').val(data[0]['password']);


            //$('.form-group').each(function(i) {

            //});

        });
    });


});