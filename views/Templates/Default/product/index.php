<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/about-us">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/products">Products</a>
            </li>
        </ul>
        <span class="navbar-text">
      Navbar text with an inline element
    </span>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="height: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Title']?></h5>
                        <hr>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Description']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?=DataManager::getInstance()->getDataByKey('Product')[0]['Image']?>" alt="Product image">
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Title']?></h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Price'].''
                            .DataManager::getInstance()->getDataByKey('Product')[0]['Currency']?></p>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <p><a href="/products/" class="btn btn-outline-info">Back to all</a></p>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= '/views/Templates/' . TEMPLATE_PATH ?>/public/js/bootstrap.min.js"></script>
<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
</body>
</html>
