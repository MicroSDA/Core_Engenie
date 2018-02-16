<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="color: #343a40">
        <a class="navbar-brand" href="/admin/secure/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/admin/secure/dashboard">Dashboard</a>
                <a class="nav-link  active" href="/brands">Brands</a>
                <a class="nav-link" href="/admin/secure/category">Categories</a>
                <a class="nav-link" href="/admin/secure/products">Products</a>
                <a class="nav-link" href="/admin/secure/articles">Articles</a>
                <a class="nav-link" href="/admin/secure/settings">Settings</a>
            </div>
        </div>
    </nav>
</header>
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
