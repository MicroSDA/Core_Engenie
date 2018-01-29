<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/admin/secure/dashboard">Dashboard</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/dashboard">Dashboard<span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/admin/secure/brand">Brands</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/category">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/admin/secure/products">Products</a>
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
</div>
