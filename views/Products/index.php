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
                <li class="nav-item ">
                    <a class="nav-link" href="/">Home</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="products">Products
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
    <section class="jumbotron text-center">
        <div class="container">
            <h1 class="jumbotron-heading">Products</h1>
            <p class="lead text-muted">Something short and leading about the
                collection below—its contents, the creator, etc. Make it short and
                sweet, but not too short so folks don't simply skip over it entirely.</p>
        </div>
    </section>
    <div class="album text-muted">


            <div class="row">

                <?php

                while($row = $slq_result->fetch_assoc()){

                    echo '<div class="card">';
                    echo '<img data-src="holder.js/100px280/thumb"  style="height: 300px; width: 100%; display: block;" src="'.$row['Image'].'" data-holder-rendered="true">';
                    echo '<p class="card-body"><h2><a href="products/product/id='.$row['id'].'">'.$row['Title'].'</a></h2></p>';
                    echo '<hr>';
                    echo '<p class="card-text"><h4>'.$row['Description'].'</h4></p>';
                    echo '<p class="card-text"><h2>'.$row['Price'].' '.$row['Currency'].'</h2></p>';
                    echo '</div>';
                }

                ?>
            </div>


    </div>

</div>
<!-- /.container -->