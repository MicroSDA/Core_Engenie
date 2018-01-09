<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
        <a class="navbar-brand" href="">Home</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="/">Home
                  </a>
              </li>
                <li class="nav-item active">
                    <a class="nav-link" href="/products">Products
                        <span class="sr-only">(current)</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="about-us">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="register">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- Page Content -->
<div class="container">

    <div class="row">


        <!-- /.col-lg-3 -->

        <div class="col-lg-9">

                <?php
                echo '<div class="card mt-4">';
                echo '<img class="card-img-top img-fluid" src="'.$this->product->getProductImage().'" alt="">';
                echo '<div class="card-body">';
                echo '<h3 class="card-title">'.$this->product->getProductTitle().'</h3>';
                echo '<h4>'.$this->product->getProductCurrency().' '.$this->product->getProductPrice().'</h4>';
                echo '<p class="card-text">'.$this->product->getProductDescription().'</p>';
                echo ' <span class="text-warning">★ ★ ★ ★ ☆</span>';
                echo ' 4.0 stars';
                echo '</div>';
                echo '</div>';

                echo '
                      <div class="jumbotron">
                      <div class="card-header">
                      <h3 class="card-title">'.$this->product->getProductTitle().'</h3>
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