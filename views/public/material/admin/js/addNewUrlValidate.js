function addNewUrlValidate(form_id){

    var this_data = $('#'+form_id).serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/add-new-url/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            var obj = JSON.parse(html);

            $('#edit-url-message').empty();
            $('#edit-url-message').append(obj['type']);
            $('#edit-url-modal').modal();
        }

    });

};