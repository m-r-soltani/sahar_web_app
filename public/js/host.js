$(document).ready(function () {
    GetProvinces('host',function (data) {
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
    GetCities('host',function (data) {
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
    });

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
        Edit_Form('host',td,function (data) {
            $('#id').val(data[0]['id']);
            $('#name_markaz').val(data[0]['name_markaz']);
            $('#tedade_pishshomare').val(data[0]['tedade_pishshomare']);
            $('#mantaghe').val(data[0]['mantaghe']);
            $('#ostan').val(data[0]['ostan']);
            $('#shahr').val(data[0]['shahr']);
            $('#mizban').val(data[0]['mizban']);
            $('#sarshomare').val(data[0]['sarshomare']);
            $('#noe_gharardad').val(data[0]['noe_gharardad']);
            $('#tozihat').val(data[0]['tozihat']);

            //$('#host').prop('checked', true);
            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');
            //$('#shahr option[value="'+data[0]['shahr_id']+'"]').attr('selected','selected');


            //$('#ostan option[value="'+data[0]['ostan_id']+'"]').attr('selected','selected');


            //$('.form-group').each(function(i) {

            //});

        });
    });
});