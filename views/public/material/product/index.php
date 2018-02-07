<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="color: #343a40">
        <a class="navbar-brand" href="">General</a>
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
                <a class="nav-link" href="/brands">Brands</a>
                <a class="nav-link active" href="/products">Products</a>
                <a class="nav-link" href="/ajax">Ajax</a>
            </div>
        </div>
    </nav>
</header>
<div class="container">
        <div>
            <br>
            <?php if(isset($_SESSION['order_info'])) {
                          if($_SESSION['order_info'] == 'TRUE'){
                              echo '<div><h1><span class="btn btn-success">We got your message. We will contact you asap! </span></h1></div><hr>';
                              //unset($_SESSION['order_info']);
                              echo '<script>
                              setTimeout( \'location="/products";\', 3000 );
                              </script>';
                          }else{
                              if($_SESSION['order_info'] == 'ERROR'){

                               echo '<h1><span class="btn btn-warning">Your contact info should be filled! </span></h1><hr>';
                              }
                          }

            }?>
        </div>
    <br>
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="height: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')['Title']?></h5>
                        <hr>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')['Description']?></p>
                        <hr>
                        <h5>Specification</h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')['Specification']?></p>
                        <hr>
                        <h5>Keywords</h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')['Keywords']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" >
                    <img class="img-fluid" src="<?=DataManager::getInstance()->getDataByKey('Product')['Image']?>" alt="Product image">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')['Title']?></h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')['Price'].''
                            .DataManager::getInstance()->getDataByKey('Product')['Currency']?></p>
                        <hr>
                        <h6>Brand</h6>
                        <p><?=DataManager::getInstance()->getDataByKey('Product')['Brand']?></p>
                        <hr>
                        <h6>Category</h6>
                        <?=DataManager::getInstance()->getDataByKey('Product')['MainCategory']?>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <br>
            <div class="jumbotron">
            <form action="<?=UrlsDispatcher::getInstance()->getUlrRequest();?>" method="post">
                <div class="row">
                    <div class="col-md-6">
                        <label class="control-label" for="name">First Name</label>
                        <input type="text" name="first_name" id="name" placeholder="" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <label class="control-label" for="name">Last Name</label>
                        <input type="text" name="last_name" id="name" placeholder="" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label class="control-label" for="phone">Phone</label>
                        <input  type="text" name="phone" id="phone" placeholder="" class="form-control" >
                    </div>
                    <div class="col-md-6">
                        <br>
                        <label class="control-label" for="email">E-mail</label>
                        <input type="email"name="email" id="email" placeholder="" class="form-control" >
                    </div>
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="form-group">
                            <br>
                            <label class="control-label" for="textarea">Message</label>
                            <textarea class="form-control" id="textarea" name="message" rows="6" placeholder="" ></textarea>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <button  type="submit" name="submit" class="btn btn-outline-success"
                             <?php
                            if(isset($_SESSION['order_info']) && $_SESSION['order_info'] == 'TRUE'){
                                unset($_SESSION['order_info']);
                                echo 'disabled';
                            }
                             ?>>Get a Quote</button>
                        </div>
                    </div>
                </div>
            </form>
            </div>
        </div>
        <hr>
        <p><a href="/products" class="btn btn-outline-info">Back to all</a></p>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->

