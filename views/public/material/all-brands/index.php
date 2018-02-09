<body>
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
                <a class="nav-link" href="/">Home</span></a>
                <a class="nav-link" href="/about-us">About Us</a>
                <a class="nav-link" href="/categories">Categories</a>
                <a class="nav-link active" href="/brands">Brands</a>
                <a class="nav-link" href="/products">Products</a>
                <a class="nav-link" href="/ajax">Ajax</a>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <br>
        <h1>Brands</h1>
        <hr>
        <?php $Products = DataManager::getInstance()->getDataByKey('Brands'); ?>
        <div class="row">
            <?php
            foreach ($Products as $value) {
                echo '
                     <div class="col-lg-4 col-sm-4">
                        <div class="card">
                            <div class="view overlay hm-white-slight hm-zoom">
                                 <img src="' . $value['Image'] . '"
                                 class="img-fluid" alt="">
                                 <a href="/products/product/' . $value['Url'] . '">
                                 <div class="mask"></div>
                                 </a>
                            </div>';
                echo '    <div class="card-body">
                        
                              <h4 class="card-title">' . $value['Name'] . '</h4>
                       
                         <p class="card-text">' . $value['Description'] . '</p>
                        <a href="/brands/brand/'.$value['Url'].'" class="btn btn-outline-elegant">View</a>
                    </div>
                </div>
            </div>';

               print_r(exif_imagetype(URL_ROOT.$value['Image']));
               //echo exif_imagetype(basename($value['Url']));
            }
            ?>
        </div>
    </div>
</main>