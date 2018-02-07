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
                <a class="nav-link active" href="/">Home <span class="sr-only">(current)</span></a>
                <a class="nav-link" href="/about-us">About Us</a>
                <a class="nav-link" href="/categories">Categories</a>
                <a class="nav-link" href="/brands">Brands</a>
                <a class="nav-link" href="/products">Products</a>
                <a class="nav-link" href="/ajax">Ajax</a>
            </div>
        </div>
    </nav>
</header>
<main>
    <div class="container">
        <br>
        <h1>This is a test Web Site</h1>
        <hr>
        <div class="view overlay hm-white-slight hm-zoom">
            <img class="img-fluid " alt="Responsive image"
                 src="/public/Image/getImage.php?ref=f8baa7bce9b90d1128dd19a6c1f1ee9d">
        </div>
        <hr>
        <div class="row">
            <div class="col-lg-6 col-sm-6">
                <div class="view overlay hm-white-slight hm-zoom">
                    <img src="/public/image/IMG_1061.gif"
                         class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6 col-sm-6">
                <div class="view overlay hm-white-slight hm-zoom">
                    <img src="/public/image/IMG_1061.gif"
                         class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <hr>
        <small>
            <b>
                <p style="text-align: center;"><?= md5(getenv("REMOTE_ADDR") . "key" . date("i")) ?></p>
            </b>
        </small>
    </div>
</main>
