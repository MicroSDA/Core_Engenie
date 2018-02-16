
function editUrlValidate(form_id){

    var this_data = $('#'+form_id).serializeArray();

    //alert(this_data);

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
            $('#edit-url-model').val(obj['model']);
            $('#edit-url-method').val(obj['method']);
            $('#edit-url-view').val(obj['view']);
            $('#edit-url-type').val(obj['type']);
            $('#edit-url-cache').val(obj['cache']);
            $('#edit-url-status').val(obj['status']);


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

            $('#delete-url-message').empty();
            $('#delete-url-pattern').empty();
            $('#delete-url-pattern').append(obj['pattern']);

            $('#delete-url-modal').modal();
        }

    });

};

function deleteUrl(){

    var this_data = $('#delete-url-pattern').text();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/delete-url/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#delete-url-message').empty();
            $('#delete-url-message').append(html);
        }

    });

};


function addNewUrl() {

    var this_data = $('#add-new-url-form').serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/add-url/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#add-new-url-message').empty();
            $('#add-new-url-message').append(html);
        }

    });

    //$('#add-new-url-modal').modal();

}

function addArticleBody() {

     $("#article-body").cleditor({
         height: 350
     });
}

function addArticle() {

    var this_data = $('#add-article').serializeArray();
    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/add-article/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#add-article-error-message').empty();
            $('#add-article-error-message').append(html);
        }

    });

}

function editArticleBody() {

    $("#edit-article-body").cleditor({
        height: 350,
    });
}

function editArtcle() {

    $('#edit-article-modal').modal();

}

function editArticleValidate(form_id) {

    var this_data = $('#'+form_id).serializeArray();


    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/edit-article-validate/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            var obj = JSON.parse(html);

            $('#edit-article-message').empty();
            $('#edit-article-title').val(obj['title']);
            $('#edit-article-url').val(obj['url']);
            $('#edit-article-url-old').val(obj['url']);
            $('#edit-article-writer').val(obj['writer']);

            $('#edit-article-body').val(obj['body']);

            $('#edit-article-modal').modal();
        }

    });
}


function editArticle() {

    var this_data = $('#edit-article-form').serializeArray();

    $.ajax({
        type: 'POST',
        url:  '/ajax-admin/edit-article/',
        headers: { "Ajax": "Ajax" },
        data:
            {
                data: this_data
            },
        success: function (html){

            $('#edit-article-message').empty();
            $('#edit-article-message').append(html);

        }

    });
}