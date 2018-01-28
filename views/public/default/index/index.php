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
        <h1>This is a test Engenie for Web Site</h1>
        <p class="lead">Use this document as a way to quickly start any new project.<br> All you get is this text and a
            mostly barebones HTML document.</p>
        <?php
        echo '<a href="http://'.$_SERVER['HTTP_HOST'].'/secure/api/?token=1c0b76fce779f78f51be339c49445c498a5da52ed126447d359e70c05721a8aa&key=23ac22cddf4aa098df0c23ac2f501e70&query=test">Api</a>';
        ?>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
