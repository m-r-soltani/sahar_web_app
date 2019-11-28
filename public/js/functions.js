function DATEPICKER_YYYYMMDD(selector,type) {
    if (type==='class'){
        selector='.'+selector;
        $(selector).persianDatepicker({
            autoClose: true,
            format: "YYYY/MM/DD"
        });
    }else if(type==='id'){
        selector='#'+selector;
        $(selector).persianDatepicker({
            autoClose: true,
            format: "YYYY/MM/DD"
        });
    }
}
function Form_Maker(selector,data){
    $(selector).append(function () {
            for (let i=0;i=data.length;i++){

            }
    });
}
function GETSITEURL(){

}

/**
 * @return {string}
 */
function GetProvinces(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "aaa",
        timeout:5000,
        data: {GetProvinces:data},
        // dataType:'JSON',
        success: function(response){
            //console.log(response);
            // put on console what server sent back...
            //console.log(response);
            response=JSON.parse(response);
            return callback(response);
        },
        error:function (req,res,status) {
            return callback(false);
        }
    });
}
function DataTable(selector='view_table',path,type="POST",callback) {
    var table;
    var data = [
        ["Tiger Nixon", "System Architect", "Edinburgh", "111", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "222", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "333", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "444", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "555", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "666", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "777", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "888", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "999", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "123", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "456", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "789", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "122", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "233", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "455", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "677", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "899", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "000", "2011/04/25"],
        ["Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25"],
        ["Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25"]
    ];

    var cols =
        [
            {title: "Name"},
            {title: "Position"},
            {title: "Office"},
            {title: "Extn."},
            {title: "Start date"},
        ];
    table = $(selector).DataTable({
        sPaginationType: "full_numbers",
        processing: true,
        serverSide: true,
        ajax: {
            url: path,
            type: type,
            timeout: 60000
        },
        data: data,        // data from above
        columns: cols,  // columns from above
        dom: 'flrtip',        // element order: NEEDS BUTTON CONTAINER (B) ****
        select: 'single',     // enable single row selection
        responsive: true,     // enable responsiveness
        //altEditor: true,      // Enable altEditor ****
        /*dom: 'Bflrtip',        // element order: NEEDS BUTTON CONTAINER (B) ****
        buttons: [
            {
                extend: 'copy',footer: true, text: 'کپی' , attr:  {title: 'copy', id: 'copybtn', class:'btn btn-secondary col-lg-auto float-lg-right'}
            },
            {
                extend: 'csv', text: 'خروجی csv' , attr:  {title: 'csv', id: 'csvbtn', class:'btn btn-secondary col-lg-auto float-lg-right'}
            },
            {
                extend: 'print', text: 'پرینت', attr:  {title: 'Copy',id: 'printbtn',class:'btn btn-secondary col-lg-auto float-lg-right'}
            }
        ],*/
        order: [[0, "asc"]],
        scrollY: 1000,
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: false,

        oLanguage: {
            select: {
                rows: {
                    _: "شما %d خط را انتخاب کرده ایید",
                    0: "برای انتخاب کلیک کنید",
                    1: "1 آیتم انتخاب شده",
                    2: "2 آیتم انتخاب شده",
                    3: "3 آیتم انتخاب شده",
                    4: "4 آیتم انتخاب شده",
                    5: "5 آیتم انتخاب شده",
                    6: "6 آیتم انتخاب شده",
                    7: "7 آیتم انتخاب شده",
                    8: "8 آیتم انتخاب شده",
                    9: "9 آیتم انتخاب شده",
                    10: "10 آیتم انتخاب شده",
                }
            },
            sSearch: "جستجو : ",
            oPaginate: {
                sPrevious: "قبلی",
                sNext: "بعدی",
                sLast: "آخر",
                sEmptyTable: "موردی یافت نشد!",
                sFirst: "ابتدا"
            },
            sLoadingRecords: "لطفا صبر کنید - درحال بارگزاری...",
            sZeroRecords: "رکوردی یافت نشد!",
            sProcessing: "در حال انجام درخواست لطفا صبر کنید...",
            sInfo: "_TOTAL_ رکورد یافت شده (_START_ تا _END_)",
            sInfoFiltered: "فیلتر شده از _MAX_ رکورد",
            sInfoThousands: "K",
            sLengthMenu:
                'نمایش <select id="datatable_rownum">'+
                '<option value="10">10</option>'+
                '<option value="20">20</option>'+
                '<option value="30">30</option>'+
                '<option value="40">40</option>'+
                '<option value="50">50</option>'+
                '<option value="50">100</option>'+
                '</select> رکورد',

        },

        "emptyTable":"موردی برای نمایش وجود نداشت.",
        autoWidth: false
    });
    callback(table);
}