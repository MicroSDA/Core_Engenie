
/*$(document).ready(function() {
    $('#example_id').DataTable( {
        "ajax": "/views/admin/text.json"
    } );
} );*/

$(document).ready(function() {
    $('#example_id').DataTable( {

        "ajax": "/views/admin/data/products.json",
        "columns": [
            { "data": "id" },
            { "data": "Title" },
            { "data": "Description" },
            { "data": "Price" },
            { "data": "Currency" },
            { "data": "Image" }
        ]
    } );
} );