/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";


// Kebutuhan Sweetalert Delete Confirmation
$('.swal-confirm').click(function(event){
    var form =  $(this).closest("form");
    event.preventDefault();
    swal({
        // title: "Apakah yakin anda akan menghapus?",
        text: "Apakah yakin anda akan menghapus?",
        icon: "warning",
        type: "warning",
        buttons: ["Batal","Iya!"],
        dangerMode: true

    }).then((willDelete) => {
        if (willDelete) {
            form.submit();
            swal('Poof! Your imaginary file has been deleted!', {
                icon: 'success',
            });
        }else {
            swal('Your imaginary file is safe!');
        }
    });
});

window.setTimeout(function () {
    $(".alert").fadeTo(500, 0).slideUp(500, function (){
        $(this).remove();
    });
}, 3000);

$(document).ready(function() {
    // var selItem = sessionStorage.getItem("SelItem");
    $('#ple').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            {
                extend: 'excel',
                // messageTop: $('option').text(),
                messageBottom: null
            },
            // {
            //     extend: 'pdfHtml5',
            //     // messageTop: selItem.text(),
            //     customize: function ( win ) {
            //         $(win.document.body).find( 'thead' ).prepend('<div class="header-print">' + $('#id_mapel').val() + '</div>');
            //     },
            //     messageBottom: null
            // },
            {
                extend: 'print',
                // messageTop: function() {
                //     return '\r\n this is the first line preceeded by an empty line' +
                //            '\r\n this is the second line' +
                //            '\r\n \r\n this is the third line preceeded by an empty line';
                // },
                messageBottom: null
            }
        ]
    } );
} );

$(document).ready(function() {
    $('#exest').DataTable( {
        responsive: true,
        "language":{
            "url":"https://cdn.datatables.net/plug-ins/1.13.2/i18n/id.json",
            "sEmptyTable":"Tidads"
        }
    } );
    setInterval( function () {
        table.ajax.reload( null, false ); // user paging is not reset on reload
    }, 30000 );
} );



$("#modalx").fireModal({ title: 'diskon', body: 'Modal body text goes here.', center: true});
$("#modaly").fireModal({body: 'Modal body text goes here.', center: true});



