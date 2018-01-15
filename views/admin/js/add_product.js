
$(document).ready(function() {
    $('#add_description').summernote({
        height: 300,                 // set editor height
        minHeight: null,             // set minimum height of editor
        maxHeight: null,             // set maximum height of editor
        focus: true                  // set focus to editable area after initializing su
    });
});

function showMessage() {
    var markupStr = $('#add_description').summernote('code');
    alert(markupStr);
}

function send(){

    var this_title = $('#add_title').val();
    var this_anchor = $('#add_anchor').val();
    var this_url = $('#add_url').val();
    var this_keywords = $('#add_keywords').val();
    var this_description = $('#add_description').summernote('code');
    var this_image = $('#image_file').text();
    var this_price = $('#add_price').val();
    var this_currency = $('#add_currency').val();
    var this_product_type = $('#add_product_type').val();
    $.ajax({
        type: 'POST',
        url:  '/libs/admin/add_product.php',
        data:
            {

            title: this_title,
            anchor: this_anchor,
            url: this_url,
            keywords: this_keywords,
            description: this_description,
            image: this_image,
            price: this_price,
            currency: this_currency,
            product_type: this_product_type,

        },
        success: function (html){

            $('#add_warning').empty();
            $('#add_warning').append(html);
        }

    });

};

function scrollToElement(theElement) {

    if (typeof theElement === "string") theElement = document.getElementById(theElement);
    var selectedPosX = 0;

    var selectedPosY = 0;

    while (theElement != null) {

        selectedPosX += theElement.offsetLeft;

        selectedPosY += theElement.offsetTop;

        theElement = theElement.offsetParent;

    }



    window.scrollTo(selectedPosX, selectedPosY);

}






