<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                  <a class="nav-link" href="/">Home
                      <span class="sr-only">(current)</span>
                  </a>
              </li>
                <li class="nav-item">
                    <a class="nav-link" href="products">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">
    <div id="sample">
        <div id="err_a">

        </div>
        <script type="text/javascript" src="/public/js/nicEdit.js"></script>
        <script type="text/javascript">
            bkLib.onDomLoaded(function() {
                new nicEditor({fullPanel : true, onSave : function(content, id, instance) {

                        var text = nicEditor.findEditor('sd').getContent();

                        //var data = $('#sd').find('.nicEdit-main').text()
                        $.ajax({
                            type: 'POST',
                            url: '/libs/save_post.php',
                            data:{
                              Text: text
                            },

                            success: function (html){
                                $('#err_a').empty();
                                $('#err_a').append(html);
                            }

                        });



                       // alert('save button clicked for element '+id+' = '+content);

                    }}).panelInstance('sd');
            });
        </script>

        <h4>Textarea</h4>
        <textarea id="sd" name="area3" style="width: 100%; min-height: 300px">
		    <?php

            $op_header_url ='public/text.txt';
            $op_header = fopen($op_header_url,'r');$op_header_r=fread($op_header,filesize($op_header_url));

            fclose($op_header);
            echo $op_header_r;
            ?>
      </textarea>
        <script type="text/javascript">
            nicEditor.findEditor('sd').saveContent();
        </script>

    </div>

</div>
