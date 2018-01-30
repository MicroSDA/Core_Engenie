<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a class="navbar-brand" href="/">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item ">
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
            <li class="nav-item active">
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
        <div>
            <?php if(isset($_SESSION['order_info'])) {
                          if($_SESSION['order_info'] == 'TRUE'){
                              echo '<div  class="bnt btn-success"><h1>We got your message. We will contact you asap! </h1></div><hr>';
                              //unset($_SESSION['order_info']);
                              echo '<script>
                              setTimeout( \'location="/products";\', 3000 );
                              </script>';
                          }else{
                              if($_SESSION['order_info'] == 'ERROR'){
                               echo '<h1 class="bnt btn-warning">Your contact info should be filled! </h1><hr>';
                              }
                          }

            }?>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="height: 100%">
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Title']?></h5>
                        <hr>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Description']?></p>
                        <hr>
                        <h5>Specification</h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Specification']?></p>
                        <hr>
                        <h5>Keywords</h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Keywords']?></p>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top" src="<?=DataManager::getInstance()->getDataByKey('Product')[0]['Image']?>" alt="Product image">
                    <hr>
                    <div class="card-body">
                        <h5 class="card-title"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Title']?></h5>
                        <p class="card-text"><?=DataManager::getInstance()->getDataByKey('Product')[0]['Price'].''
                            .DataManager::getInstance()->getDataByKey('Product')[0]['Currency']?></p>
                        <hr>
                        <h6>Brand</h6>
                        <p><?=DataManager::getInstance()->getDataByKey('Product')[0]['Brand']?></p>
                        <hr>
                        <h6>Category</h6>
                        <?=DataManager::getInstance()->getDataByKey('Product')[0]['MainCategory']?>
                    </div>
                </div>
            </div>
        </div>
        <div>
            <br><hr>
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
                        <input  type="text" name="phone" id="phone" placeholder="" class="form-control">
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
                            <textarea class="form-control" id="textarea" name="message" rows="6" placeholder=""></textarea>
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
        <hr>
        <p><a href="/products/" class="btn btn-outline-info">Back to all</a></p>
    </div>
</div><!-- /.container -->
<!-- Bootstrap core JavaScript
================================================== -->

