function addNewUrl(form_id){

    var this_data = $('#'+form_id).serializeArray();

    var data_name = $("#form-edit-1 input").val();
    var data_name_2 = $( "#form-edit-1 #name").val();


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
            alert(this_data);
        }

    });

};