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
                <li class="nav-item ">
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
<main role="main" class="container">
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Product</h1>
            <p class="lead text-muted">Something short and leading about
                the collection below—its contents, the creator, etc. Make it short and
                sweet, but not too short so folks don't simply skip over it entirely.</p>
        </div>
    </section>
    <!-- Page Content -->
    <div class="container">
        <div class="row">
            <!-- /.col-lg-3 -->
            <div class="col-lg-9">
                <?php
                echo '<div class="card mt-4">';
                echo '<img class="card-img-top img-fluid" src="' . $this->product->getProductImage() . '" alt="">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">' . $this->product->getProductTitle() . '</h3>';
                echo '<h4>' . $this->product->getProductCurrency() . ' ' . $this->product->getProductPrice() . '</h4>';
                echo '<p class="card-text">' . $this->product->getProductDescription() . '</p>';
                echo ' <span class="text-warning">★ ★ ★ ★ ☆</span>';
                echo ' 4.0 stars';
                echo '</div>';
                echo '</div>';

                echo '
                      <div class="jumbotron">
                      <div class="card-header">
                      <h3 class="card-title">' . $this->product->getProductTitle() . '</h3>
                      </div>
                 <p>Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Omnis et enim aperiam inventore, similique necessitatibus neque
                    non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi
                    mollitia, necessitatibus quae sint natus.Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Omnis et enim aperiam inventore, similique necessitatibus neque
                    non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi
                    mollitia, necessitatibus quae sint natus.Lorem ipsum dolor sit amet, consectetur adipisicing
                    elit. Omnis et enim aperiam inventore, similique necessitatibus neque
                    non! Doloribus, modi sapiente laboriosam aperiam fugiat laborum. Sequi
                    mollitia, necessitatibus quae sint natus.</p>
                   <small class="text-muted">Posted by Anonymous on 3/1/17</small>
                   <hr>
                   <a href="/" class="btn btn-outline-danger">Buy</a>
                   </div>';

                ?>
                <!-- /.card -->
                <!-- /.card -->
            </div>
            <!-- /.col-lg-9 -->
        </div>
    </div>
    <!-- /.container -->
</main>
