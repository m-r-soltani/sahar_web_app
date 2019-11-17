$(document).ready(function () {
    GetProvinces('city',function (data) {
        if (data){
            //has data
            console.log(data);
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });
});