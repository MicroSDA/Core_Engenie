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
                <a class="nav-link active" href="/admin/secure/dashboard">Dashboard</a>
                <a class="nav-link" href="/admin/secure/brands">Brands</a>
                <a class="nav-link" href="/admin/secure/category">Categories</a>
                <a class="nav-link" href="/admin/secure/products">Products</a>
                <a class="nav-link" href="/admin/secure/settings">Settings</a>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="btn-group">
        <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Basic dropdown</button>

        <div class="dropdown-menu">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Separated link</a>
        </div>
    </div>
    <div class="dropdown">
        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Dropdown button
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
        </div>
    </div>


    <?php
   // var_dump(UrlsDispatcher::getInstance()->getUrlsDataList());

    //$array_ulr;
  /*  foreach (array_reverse(UrlsDispatcher::getInstance()->getUrlsDataList()) as $value){

        DataBase::getInstance()->getDB()->query('INSERT INTO c_urls (Pattern, Name, Type, View, Cache, Model, Method) VALUES (?s,?s,?s,?s,?s,?s,?s)',
          $value['pattern'],$value['name'],$value['type'],$value['view'],$value['cache'],$value['model'],$value['method']);


    }*/

    ?>

</div>

