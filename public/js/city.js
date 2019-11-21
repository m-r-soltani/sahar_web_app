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
});