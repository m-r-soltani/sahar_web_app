$(document).ready(function () {
    /*GetProvinces('city',function (data) {
        if (data){
            //has data
            console.log(data);
        }else{
            //data az db gerefte nashod
            alert('درخواست ناموفق');
        }
    });*/
    var dataSet = [
        ["Tiger Nixon", "System Architect", "Edinburgh", "5421", "2011/04/25", "$320,800"],
        ["Garrett Winters", "Accountant", "Tokyo", "8422", "2011/07/25", "$170,750"],
        ["Ashton Cox", "Junior Technical Author", "San Francisco", "1562", "2009/01/12", "$86,000"],
        ["Cedric Kelly", "Senior Javascript Developer", "Edinburgh", "6224", "2012/03/29", "$433,060"],
        ["Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700"],
        ["Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700"],
        ["Airi Satou", "Accountant", "Tokyo", "5407", "2008/11/28", "$162,700"],
        ["Brielle Williamson", "Integration Specialist", "New York", "4804", "2012/12/02", "$372,000"],
        ["Herrod Chandler", "Sales Assistant", "San Francisco", "9608", "2012/08/06", "$137,500"],
        ["Rhona Davidson", "Integration Specialist", "Tokyo", "6200", "2010/10/14", "$327,900"],
        ["Colleen Hurst", "Javascript Developer", "San Francisco", "2360", "2009/09/15", "$205,500"],
        ["Sonya Frost", "Software Engineer", "Edinburgh", "1667", "2008/12/13", "$103,600"],
        ["Jena Gaines", "Office Manager", "London", "3814", "2008/12/19", "$90,560"]
    ];

    var columnDefs =
        [
            { title: "Name" },
            { title: "Position" },
            { title: "Office" },
            { title: "Extn." },
            { title: "Start date" },
            { title: "Salary" }
        ];
    var editor;
    editor = $('#example').DataTable({
        "sPaginationType": "full_numbers",
        data: dataSet,        // data from above
        columns: columnDefs,  // columns from above
        dom: 'Bfrtip',        // element order: NEEDS BUTTON CONTAINER (B) ****
        select: 'single',     // enable single row selection
        responsive: true,     // enable responsiveness
        altEditor: true,      // Enable altEditor ****
        buttons: [{
            text: 'Add',
            name: 'add'        // DO NOT change name
        },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Edit',
                name: 'edit'        // DO NOT change name
            },
            {
                extend: 'selected', // Bind to Selected row
                text: 'Delete',
                name: 'delete'      // DO NOT change name
            }],
        order: [[ 5, "desc" ]],
        scrollY:        400,
        scrollX:        true,
        scrollCollapse: true,
        paging:         false,
        fixedColumns:   true
    });



    // var versionNo = $.fn.dataTable.version;
    // alert(versionNo);
});