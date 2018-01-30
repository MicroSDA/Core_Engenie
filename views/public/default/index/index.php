<!-- content -->
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText"
            aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
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
            <li class="nav-item">
                <a class="nav-link" href="/ajax">Ajax</a>
            </li>
        </ul>
        <span class="navbar-text">
      Navbar text with an inline element
    </span>
    </div>
</nav>
<div class="container">
    <div class="jumbotron">
        <h1>This is a test Web Site</h1>
        <hr>
        <img class="img-fluid" alt="Responsive image" src="/public/Image/getImage.php?ref=f8baa7bce9b90d1128dd19a6c1f1ee9d">
        <hr>
        <small><b><p  style="text-align: center;"><?= md5(getenv("REMOTE_ADDR") . "key" . date("i")) ?></p></b></small>
    </div>
</div>
<!-- /content -->
