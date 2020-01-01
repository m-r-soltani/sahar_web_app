$(document).ready(function () {
    $(".custom_select").select2();
    $('#menu_access').select2();
    $('#edit_access').select2();
    $('#delete_access').select2();
    $('#add_access').select2();
    Initialize('restrictions_menu', function (data) {
        if (data) {
            var access_menu=$("#menu_access");
            var edit_access=$("#edit_access");
            var delete_access=$("#delete_access");
            var add_access=$("#add_access");
            for (let i = 0;i<data.length; i++) {
                //$("#access_menu").append("<option value='"+data[i]['en_name']+"'>"+data[i]['fa_name']+"</option>");
                access_menu.append($('<option>', {
                    value: data[i]['en_name'],
                    text: data[i]['fa_name']
                }));
                edit_access.append($('<option>', {
                    value: data[i]['en_name'],
                    text: data[i]['fa_name']
                }));
                add_access.append($('<option>', {
                    value: data[i]['en_name'],
                    text: data[i]['fa_name']
                }));
                delete_access.append($('<option>', {
                    value: data[i]['en_name'],
                    text: data[i]['fa_name']
                }));
            // <option value=""></option>
                //menu_checkboxes.append("<input type='text'>a</input>");
                BootstrapMultiselect.init();
            }
            //$("#access_menu").append("<option value='asd'>asdasd</option>");

        } else {
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });
    Initialize('restrictions_users', function (data) {
        if (data) {
            for (let i = 0; i < data.length; i++) {
                $('#user').append($('<option>', {
                    value: data[i]['name_karbari'],
                    text: data[i]['name_karbari']
                }));
            }
            //has data
            //var element=$('#ostan');

        } else {
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });

});


// document.addEventListener('DOMContentLoaded', function() {
//     BootstrapMultiselect.init();
// });