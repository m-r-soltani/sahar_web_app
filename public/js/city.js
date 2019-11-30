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
var cols=[{ "data": "shahr",title:'نام شهر' },{ "data": "ostan_id",title:'استان' }];
    DataTable('#view_table','/sahar/helpers/city.php','POST',cols,function (data) {

    });
});