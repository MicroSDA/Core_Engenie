
function editUrlValidate(form_id){

    var this_data = $('#'+form_id).serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/edit-url-validate/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            var obj = JSON.parse(html);

            $('#edit-url-message').empty();
            $('#edit-url-name').val(obj['name']);
            $('#edit-url-pattern').val(obj['pattern']);
            $('#edit-url-pattern-old').val(obj['pattern']);
            $('#edit-url-type').val(obj['type']);
            $('#edit-url-model').val(obj['model']);
            $('#edit-url-method').val(obj['method']);
            $('#edit-url-view').val(obj['view']);
            $('#edit-url-cache').val(obj['cache']);


            $('#edit-url-modal').modal();
        }

    });

};

function editUrl(){

    var this_data = $('#edit-url-form').serializeArray();

    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/edit-url/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#edit-url-message').empty();
            $('#edit-url-message').append(html);

        }

    });

};

function deleteUrlValidate(form_id){

    var this_data = $('#'+form_id).serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/delete-url-validate/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            var obj = JSON.parse(html);

            $('#delete-url-pattern').val(obj['pattern']);

            $('#delete-url-modal').modal();
        }

    });

};

function deleteUrl(){

    var this_data = $('#delete-url-form').serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/edit-url-validate/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#edit-url-message').empty();
            $('#edit-url-message').append(html);
        }

    });

};