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

function GetProvinces(data){
    $.ajax({
        type: "post",
        url: "aaa",
        data: {GetProvinces:data},
        // dataType:'JSON',
        success: function(response){
            //console.log(response);
            // put on console what server sent back...
            return response;
        },
        error:function (req,res,status) {
            return 'request_failed';
        }
    });
}