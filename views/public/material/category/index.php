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
                <a class="nav-link" href="/">Home</a>
                <a class="nav-link" href="/about-us">About Us</a>
                <a class="nav-link active" href="/categories">Categories</a>
                <a class="nav-link" href="/brands">Brands</a>
                <a class="nav-link" href="/products">Products</a>
                <a class="nav-link" href="/ajax">Ajax</a>
            </div>
        </div>
    </nav>
</header>
<main>
<div class="container">
        <h1><?=DataManager::getInstance()->getDataByKey('Category')['Name']?></h1>
       <?php $Products = DataManager::getInstance()->getDataByKey('Products'); ?>
     <div class="row">
        <?php
        foreach ($Products as $value) {
            echo '
                     <div class="col-lg-4 col-sm-4">
                        <div class="card">
                            <div class="view overlay hm-white-slight hm-zoom">
                                 <img src="' . $value['Image'] . '"
                                 class="img-fluid" alt="">
                                 <a href="#">
                                 <div class="mask"></div>
                                 </a>
                            </div>';
            echo '    <div class="card-body">
                        
                              <h4 class="card-title">' . $value['Title'] . '</h4>
                       
                         <p class="card-text">' . $value['Description'] . '</p>
                        <a href="/products/product/' . $value['Url'] . '" class="btn btn-outline-elegant">View</a>
                    </div>
                </div>
            </div>';

        }
        ?>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
