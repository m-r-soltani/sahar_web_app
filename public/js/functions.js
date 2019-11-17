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