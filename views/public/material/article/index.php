<body>
<!-- Start your project here-->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="color: #343a40">
        <a class="navbar-brand" href="/">General</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="/about-us">About Us</a>
                <a class="nav-link" href="/categories">Categories</a>
                <a class="nav-link" href="/brands">Brands</a>
                <a class="nav-link" href="/products">Products</a>
                <a class="nav-link active" href="/articles">Articles</a>
                <a class="nav-link" href="/ajax">Ajax</a>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="col-lg-12 col-sm-12" style="margin-top: 30px">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title"><?= DataManager::getInstance()->getDataByKey('Article')['Title'] ?></h4>
                <hr>
                <p class="card-text"><?= DataManager::getInstance()->getDataByKey('Article')['Body'] ?></p>
                <hr>
                <div class="view overlay hm-white-slight hm-zoom">
                    <img style="max-width: 200px" src="/assets/image/?hash=d372b2b0369e3eae0ad8e8d7efa89845"
                         class="thumbnail" alt="">
                </div>
                <br>
                <p>Created by: <?= DataManager::getInstance()->getDataByKey('Article')['Writer'] ?></p>
                <p class="card-text"><?= DataManager::getInstance()->getDataByKey('Article')['Time'] ?></p>
                <hr>
                <div ><a href="/articles"><span class="btn btn-outline-info"><h7>Back to all</h7></span></a></div>
            </div>
        </div>
    </div>
    <br>
    <br>
</div><!-- /.container -->
