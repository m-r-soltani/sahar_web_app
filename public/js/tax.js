$(document).ready(function () {
    $(".custom_select").select2();
    //baraye edit_form estefade mishe
$(".form-group").append("<input type='hidden' id='id' class='form-control' name='id' value='empty'>");
    /*GetProvinces('tax',function (data) {
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
    var cols = [
        {
            "data": "id",
            title: 'شناسه',
        },
        {
            "data": "darsade_arzeshe_afzode",
            title: 'درصد ارزش افزوده'
        },
        {
            "data": "darsade_maliate_arzeshe_afzode",
            title: 'درصد مالیات ارزش افزوده',
        },
        {
            "data": "darsade_avarez_arzeshe_afzode",
            title: 'درصد عوارض ارزش افزوده',
        }
    ];
    DataTable('#view_table', '/sahar/helpers/tax.php', 'POST', cols, function (table) {
        /*===================++  hide first column ++=========================*/
        //table.column(0).visible(false);
        /*===================++  select table row ++=========================*/
        $('#view_table tbody').on('click', 'tr', function () {
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
            }
            else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
            }
        });
        //onclick log row data
        /*$('#view_table tbody').on( 'click', 'tr', function () {
            console.log( table.row( this ).data() );
        } );*/
        $('#delete').click(function () {
            let tr = $('#view_table tbody').find('tr.selected');
            let td = tr.find('td:first').text();
            Hard_Delete(td, 'tax', function (data) {
                if (data) {
                    table.ajax.reload();
                } else {
                    alert('عملیات ناموفق');
                }
            });
        });
    });
    $('#edit').click(function () {
        let tr = $('#view_table tbody').find('tr.selected');
        let td = tr.find('td:first').text();
        Edit_Form('tax', td, function (data) {
            $('#id').val(data[0]['id']);
            $('#darsade_arzeshe_afzode').val(data[0]['darsade_arzeshe_afzode']);
            $('#darsade_maliate_arzeshe_afzode').val(data[0]['darsade_maliate_arzeshe_afzode']);
            $('#darsade_avarez_arzeshe_afzode').val(data[0]['darsade_avarez_arzeshe_afzode']);


            //$('.form-group').each(function(i) {

            //});

        });
    });


});