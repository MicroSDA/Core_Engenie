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
                <a class="nav-link" href="/categories">Categories</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/brands">Brands</a>
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
        <h1><?=DataManager::getInstance()->getDataByKey('Category')['Name']?></h1>
        <div class="row">
            <?php
            $Products = array();
            $Products = DataManager::getInstance()->getDataByKey('Products');
            foreach ($Products as $value){
                echo '
           <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="'.$value['Image'].'" alt="Product image">
                    <div class="card-body">
                        <h5 class="card-title">'.$value['Title'].'</h5>
                        <p class="card-text">'.$value['Description'].'</p>
                        <p><a href="/products/product/'.$value['Url'].'" class="btn btn-outline-info">Products</a></p>
                    </div>
                </div>
            </div>      
           ';

            }
            ?>
        </div>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
