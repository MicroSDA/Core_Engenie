<?php $ip = md5(getenv("REMOTE_ADDR")."key".date("i")); ?>

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
        <h1>About Us</h1>
         <p> Part</p>
        <!--<video width="320" height="240" controls>
            <source src="/public/test.php" type="video/mp4">
        </video>-->
        <p>test_2.php</p>
        <video controls width="400" height="300">
            <source src="/public/test_2.php" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
        </video>
        <!--<video width="320" height="240" controls>
            <source src="/public/video.php?ref=<?=$ip?>&filename=video.mp4" type="video/mp4">
        </video>-->

        <br>
    </div>
</div><!-- /.container -->

<body>

<!-- Bootstrap core JavaScript
================================================== -->
