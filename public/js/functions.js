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
function GetCityByProvince(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "getcitybyprovince",
        timeout:5000,
        data: {getcitybyprovince:data},
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
function GetHost(data,callback){
    $.ajax({
        type: "post",
        url: "GetHost",
        timeout:5000,
        data: {gethost:data},
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
function GetPopsite(data,callback){
    $.ajax({
        type: "post",
        url: "GetPopsite",
        timeout:5000,
        data: {getpopsite:data},
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
function Get_Telecommunications_center(data,callback){
    $.ajax({
        type: "post",
        url: "get_telecommunications_center",
        timeout:5000,
        data: {get_telecommunications_center:data},
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
function Get_Branch_Info(data/*felan kari anjam nemide*/,callback){
    $.ajax({
        type: "post",
        url: "Get-branch",
        timeout:5000,
        data: {get_branch_info:data},
        success: function(response){
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
function gregorian_to_jalali(gy,gm,gd){
    var g_d_m,jy,jm,jd,gy2,days;
    g_d_m=[0,31,59,90,120,151,181,212,243,273,304,334];
    if(gy > 1600){
        jy=979;
        gy-=1600;
    }else{
        jy=0;
        gy-=621;
    }
    gy2=(gm > 2)?(gy+1):gy;
    days=(365*gy) +(parseInt((gy2+3)/4)) -(parseInt((gy2+99)/100)) +(parseInt((gy2+399)/400)) -80 +gd +g_d_m[gm-1];
    jy+=33*(parseInt(days/12053));
    days%=12053;
    jy+=4*(parseInt(days/1461));
    days%=1461;
    if(days > 365){
        jy+=parseInt((days-1)/365);
        days=(days-1)%365;
    }
    jm=(days < 186)?1+parseInt(days/31):7+parseInt((days-186)/30);
    jd=1+((days < 186)?(days%31):((days-186)%30));
    return [jy,jm,jd];
}


function jalali_to_gregorian(jy,jm,jd){
    var sal_a,gy,gm,gd,days,v;
    if(jy > 979){
        gy=1600;
        jy-=979;
    }else{
        gy=621;
    }
    days=(365*jy) +((parseInt(jy/33))*8) +(parseInt(((jy%33)+3)/4)) +78 +jd +((jm<7)?(jm-1)*31:((jm-7)*30)+186);
    gy+=400*(parseInt(days/146097));
    days%=146097;
    if(days > 36524){
        gy+=100*(parseInt(--days/36524));
        days%=36524;
        if(days >= 365)days++;
    }
    gy+=4*(parseInt(days/1461));
    days%=1461;
    if(days > 365){
        gy+=parseInt((days-1)/365);
        days=(days-1)%365;
    }
    gd=days+1;
    sal_a=[0,31,((gy%4===0 && gy%100!==0) || (gy%400===0))?29:28,31,30,31,30,31,31,30,31,30,31];
    for(gm=0;gm<13;gm++){
        v=sal_a[gm];
        if(gd <= v)break;
        gd-=v;
    }
    return [gy,gm,gd];
}
