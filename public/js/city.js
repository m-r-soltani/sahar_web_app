$(document).ready(function () {
    GetProvinces('city',function (data) {
        if (data){
            //has data
            console.log(data);
            var element=$('#mytestostan');
            if(element) {
                for (let i = 0;i<data.length ; i++) {
                    element.append('<option value='+data[i].id+'>'+data[i].name+'</option>')
                }
            }else{
                console.log(123);
            }
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });

    /*===================++  DATA_TABLE  ++=========================*/
var cols=[
    { "data": "shahr",title:'نام شهر' }
    //,{ "data": "ostan_id",title:'استان' }
    ];
    DataTable('#view_table','/sahar/helpers/city.php','POST',cols,function (table) {

        /*===================++  select  ++=========================*/
        $('#view_table tbody').on( 'click', 'tr', function () {
            if ( $(this).hasClass('selected') ) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        } );
        $('#view_table tbody').on( 'click', 'tr', function () {
            console.log( table.row( this ).data() );
        } );



        $('#edit').click( function () {
            //table.row('.selected').remove().draw( false );
            // var data = table.row( $(this).parents('tr') ).data();
            // alert( data[0]);
            console.log( table.row( this ).data() );
        } );
        // $('#delete').click( function () {
        //     alert('حذف');
        //     console.log(table.row);
        // } );
    });

});