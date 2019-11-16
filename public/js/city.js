$(document).ready(function () {
   // alert(123);
    /*var request = $.ajax({
        url: 'amin',
        //url:'bootstrap.php',
        // url:'/index.php',
        type: "post",
    });*/
    /*$.ajax({
        type: "post",
        url: "aaa",
        data: {
            amin: 'asd'
        },
        success: function (req,res,status) {
            console.log(req);
        }
    });*/
    var result=GetProvinces('city');
    if(result!=='request_failed'){
        console.log(result);
    }
});