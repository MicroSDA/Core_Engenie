<body>
<header>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
        <a class="navbar-brand" href="/">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
                aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/products">Products<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/about_us">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/contact_us">Contact Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/articles">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="/admin/login/href=be0275fad331666c5484a35df98966a">Admin</a>
                </li>
            </ul>
            <!--<form class="form-inline mt-2 mt-md-0">
                <input class="form-control mr-sm-2" placeholder="Search" aria-label="Search" type="text">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>-->
        </div>
    </nav>
</header>
<main role="main"class="container-fluid" style="width:auto">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Products</h1>
            <p class="lead text-muted">Something short and leading about
                the collection below—its contents, the creator, etc. Make it short and
                sweet, but not too short so folks don't simply skip over it entirely.</p>
        </div>
    </section>
    <div class="album text-dark" style="width: auto">
        <div class="">
            <div class="">
        <?php
       /* foreach ($this->product_arry as $product_draw) {
            echo '<div class="card">';
            echo '<img data-src="holder.js/100px280/thumb"  style="height: 300px; width: 100%; display: block;" src="' . $product_draw->getProductImage() . '" data-holder-rendered="true">';
            echo '<p class="card-body"><h2><a href="products/product/id=' . $product_draw->getProductId() . '">' . $product_draw->getProductTitle() . '</a></h2></p>';
            echo '<hr>';
            echo '<p class="card-text"><h4>' . $product_draw->getProductDescription() . '</h4></p>';
            echo '<p class="card-text"><h2>' . $product_draw->getProductPrice() . ' ' . $product_draw->getProductCurrency() . '</h2></p>';
            echo '</div>';

        }*/
        ?>
            </div>
           <!-- <h3 class="my-4">Related Projects</h3>-->
            <div class="row">
             <?php
             foreach ($this->product_arry as $product_draw) {
                 echo '<div class="col-md-2 col-sm-6 mb-5">
                          <div style="min-height: 150px; max-height: 300px; ">
                          <a href="products/product/id=' . $product_draw->getProductId() . '">
                            <img class="img-thumbnail" style="min-height:300px" src="' . $product_draw->getProductImage() . '" alt="">
                          </a>
                          </div>
                          <h4 class="text-center">' . $product_draw->getProductTitle() . '</h4>
                          <hr>
                          <h5 class="text-truncate container" style="min-height: 100px; ">' . $product_draw->getProductDescription() . '</h5>
                       </div>';

             }
                ?>
            </div>
        </div>
    </div>
</main>