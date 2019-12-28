function DATEPICKER_YYYYMMDD(selector) {
    $(selector).persianDatepicker({
        autoClose: true,
        format: "YYYY/MM/DD"
    });
}
function Edit_Form(page,condition,callback){
    $.ajax({
        type: "post",
        url: "editform"+page,
        timeout:5000,
        data: {
            Edit_Form:page,
            condition:condition
        },
        success: function(response){
            response=JSON.parse(response);
            return callback(response);
        },
        error:function (req,res,status) {
            return callback(false);
        }
    });
}
function Initialize(page,callback){
    $.ajax({
        type: "post",
        url: page,
        timeout:5000,
        data: {
            initialize_request:page,
        },
        success: function(response){
            response=JSON.parse(response);
            return callback(response);
        },
        error:function (req,res,status) {
            return callback(false);
        }
    });
}
function Factors_Initialize(request,condition='',callback){
    $.ajax({
        type: "post",
        url: 'factors',
        timeout:5000,
        data: {
            factors_initialize:request,
            condition:condition
        },
        success: function(response){
            response=JSON.parse(response);
            return callback(response);
        },
        error:function (req,res,status) {
            return callback(false);
        }
    });
}

function Hard_Delete(data,param1/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "harddelete",
        timeout:5000,
        data: {
            harddelete:data,
            target:param1
        },
        success: function(response){
            return callback(response);
        },
        error:function (req,res,status) {
            return callback(false);
        }
    });
}
function getostannamebyid(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "getostannamebyid",
        timeout:5000,
        data: {getostannamebyid:data},
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

/**
 * @return {string}
 */
function GetProvinces(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "GetProvinces",
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
function GetCities(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "GetCities",
        timeout:5000,
        data: {GetCities:data},
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
function Get_organization_levels(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "GetProvinces",
        timeout:5000,
        data: {Get_organization_levels:data},
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
function DataTable(selector='view_table',path,type="POST",cols,callback) {
    var table;
    table = $(selector).DataTable({
        sPaginationType: "full_numbers",
        processing: true,
        serverSide: true,
        ajax: {
            url: path,
            type: type,
            timeout: 60000
        },
        columns: cols,
        dom: 'flrtip',
        select: 'single',
        responsive: true,
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
        //order: [[0, "asc"]],
        scrollY: 2000,
        scrollX: true,
        scrollCollapse: true,
        paging: true,
        fixedColumns: false,
        "bDestroy": true,//zamani ke chandta datatable dakhele tab dashte bashim age in nabashe error mide
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
            sLoadingRecords: "درحال بارگزاری...",
            sZeroRecords: "رکوردی یافت نشد!",
            sProcessing: "لطفا صبر کنید...",
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

        emptyTable:"موردی برای نمایش وجود نداشت.",
        autoWidth: false
    });
    callback(table);
}