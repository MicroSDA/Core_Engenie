<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">
    <title>Dashboard</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= '/views/public/' . TEMPLATE_PATH ?>/css-js/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/href=be0275fad331666c5484a35df98966a/dashboard">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/admin/secure/href=be0275fad331666c5484a35df98966a/brand">Brands</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/href=be0275fad331666c5484a35df98966a/category">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/href=be0275fad331666c5484a35df98966a/products">Products</a>
            </li>
        </ul>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <h1>Create a new brand</h1>
        <hr>
        <div class="col-lg-12">
            <div class="block">
                <div class="block-body">
                    <form nctype="multipart/form-data" method="POST" class="form-horizontal" action="javascript:addNewBrand();">
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label" >Name</label>
                            <div class="col-sm-9">
                                <input id="brand_name" name="title" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Url</label>
                            <div class="col-sm-9">
                                <input id="brand_url" name="anchor" type="text" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 form-control-label">Description</label>
                            <div class="col-sm-9">
                                <textarea id="brand_description" name="description" type="text" class="form-control note-editor note-frame card"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label id="brand_add_message" class="col-sm-3 form-control-label"></label>
                        </div>
                        <hr>
                        <div class="form-group row">
                            <div class="col-sm-9 ml-auto">
                                <button  type="submit" name="save" class="btn btn-outline-primary">Save</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="<?= '/views/public/' . TEMPLATE_PATH ?>/css-js/js/jquery.js"></script>
<script src="<?= '/views/public/' . TEMPLATE_PATH ?>/css-js/js/bootstrap.min.js"></script>
<script src="<?= '/views/public/' . TEMPLATE_PATH ?>/css-js/js/add-new-brand.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
