<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="/views/admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="/views/admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="/views/admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="/views/admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="/views/admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="/views/admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<body>
<header class="header">
    <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
            <div class="search-inner d-flex align-items-center justify-content-center">
                <div class="close-btn">Close <i class="fa fa-close"></i></div>
                <form id="searchForm" action="#">
                    <div class="form-group">
                        <input type="search" name="search" placeholder="What are you searching for...">
                        <button type="submit" class="submit">Search</button>
                    </div>
                </form>
            </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
            <div class="navbar-header"><a href="dashboard" class="navbar-brand">
                    <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
                    <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
                <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
            </div>
            <ul class="right-menu list-inline no-margin-bottom">
                <li class="list-inline-item"><a href="#" class="search-open nav-link"><i class="icon-magnifying-glass-browser"></i></a></li>
                <li class="list-inline-item dropdown"><a id="navbarDropdownMenuLink1" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link messages-toggle"><i class="icon-email"></i><span class="badge dashbg-1">5</span></a>
                    <ul aria-labelledby="navbarDropdownMenuLink1" class="dropdown-menu messages">
                        <li><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="/views/admin/img/avatar-3.jpg" alt="..." class="img-fluid">
                                    <div class="status online"></div>
                                </div>
                                <div class="content">   <strong class="d-block">Nadia Halsey</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">9:30am</small></div></a></li>
                        <li><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="/views/admin/img/avatar-2.jpg" alt="..." class="img-fluid">
                                    <div class="status away"></div>
                                </div>
                                <div class="content">   <strong class="d-block">Peter Ramsy</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">7:40am</small></div></a></li>
                        <li><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="/views/admin/img/avatar-1.jpg" alt="..." class="img-fluid">
                                    <div class="status busy"></div>
                                </div>
                                <div class="content">   <strong class="d-block">Sam Kaheil</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">6:55am</small></div></a></li>
                        <li><a href="#" class="dropdown-item message d-flex align-items-center">
                                <div class="profile"><img src="/views/admin/img/avatar-5.jpg" alt="..." class="img-fluid">
                                    <div class="status offline"></div>
                                </div>
                                <div class="content">   <strong class="d-block">Sara Wood</strong><span class="d-block">lorem ipsum dolor sit amit</span><small class="date d-block">10:30pm</small></div></a></li>
                        <li><a href="#" class="dropdown-item text-center message"> <strong>See All Messages <i class="fa fa-angle-right"></i></strong></a></li>
                    </ul>
                </li>
                <li class="list-inline-item dropdown"><a id="navbarDropdownMenuLink2" href="http://example.com" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link tasks-toggle"><i class="icon-new-file"></i><span class="badge dashbg-3">9</span></a>
                    <ul aria-labelledby="navbarDropdownMenuLink2" class="dropdown-menu tasks-list">
                        <li><a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 1</strong><span>40% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div></a></li>
                        <li>           <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 2</strong><span>20% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-2"></div>
                                </div></a></li>
                        <li>           <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 3</strong><span>70% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 70%" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-4"></div>
                                </div></a></li>
                        <li>           <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 4</strong><span>40% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-1"></div>
                                </div></a></li>
                        <li>           <a href="#" class="dropdown-item">
                                <div class="text d-flex justify-content-between"><strong>Task 5</strong><span>30% complete</span></div>
                                <div class="progress">
                                    <div role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" class="progress-bar dashbg-3"></div>
                                </div></a></li>
                        <li>           <a href="#" class="dropdown-item text-center"> <strong>See All Tasks <i class="fa fa-angle-right"></i></strong></a></li>
                    </ul>
                </li>
                <li class="list-inline-item dropdown menu-large"><a href="#" data-toggle="dropdown" class="nav-link">Mega <i class="fa fa-ellipsis-v"></i></a>
                    <ul class="dropdown-menu megamenu">
                        <div class="row">
                            <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                                <ul class="list-unstyled">
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Sed ut perspiciatis</a></li>
                                    <li><a href="#">Voluptatum deleniti</a></li>
                                    <li><a href="#">At vero eos</a></li>
                                    <li><a href="#">Consectetur adipiscing</a></li>
                                    <li><a href="#">Duis aute irure</a></li>
                                    <li><a href="#">Necessitatibus saepe</a></li>
                                    <li><a href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                                <ul class="list-unstyled">
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Sed ut perspiciatis</a></li>
                                    <li><a href="#">Voluptatum deleniti</a></li>
                                    <li><a href="#">At vero eos</a></li>
                                    <li><a href="#">Consectetur adipiscing</a></li>
                                    <li><a href="#">Duis aute irure</a></li>
                                    <li><a href="#">Necessitatibus saepe</a></li>
                                    <li><a href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                                <ul class="list-unstyled">
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Sed ut perspiciatis</a></li>
                                    <li><a href="#">Voluptatum deleniti</a></li>
                                    <li><a href="#">At vero eos</a></li>
                                    <li><a href="#">Consectetur adipiscing</a></li>
                                    <li><a href="#">Duis aute irure</a></li>
                                    <li><a href="#">Necessitatibus saepe</a></li>
                                    <li><a href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                            <div class="col-lg-3"><strong class="text-uppercase">Elements Heading</strong>
                                <ul class="list-unstyled">
                                    <li><a href="#">Lorem ipsum dolor</a></li>
                                    <li><a href="#">Sed ut perspiciatis</a></li>
                                    <li><a href="#">Voluptatum deleniti</a></li>
                                    <li><a href="#">At vero eos</a></li>
                                    <li><a href="#">Consectetur adipiscing</a></li>
                                    <li><a href="#">Duis aute irure</a></li>
                                    <li><a href="#">Necessitatibus saepe</a></li>
                                    <li><a href="#">Maiores alias</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row megamenu-buttons text-center">
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-1"><i class="fa fa-clock-o"></i><strong>Demo 1</strong></a></div>
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-2"><i class="fa fa-clock-o"></i><strong>Demo 2</strong></a></div>
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-3"><i class="fa fa-clock-o"></i><strong>Demo 3</strong></a></div>
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link dashbg-4"><i class="fa fa-clock-o"></i><strong>Demo 4</strong></a></div>
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-danger"><i class="fa fa-clock-o"></i><strong>Demo 5</strong></a></div>
                            <div class="col-lg-2 col-md-4"><a href="#" class="d-block megamenu-button-link bg-info"><i class="fa fa-clock-o"></i><strong>Demo 6</strong></a></div>
                        </div>
                    </ul>
                </li>
                <li class="list-inline-item logout">                   <a id="logout" href="login.html" class="nav-link">Logout <i class="icon-logout"></i></a></li>
            </ul>
        </div>
    </nav>
</header>
<div class="d-flex align-items-stretch">
    <!-- Sidebar Navigation-->
    <nav id="sidebar">
        <div class="sidebar-header d-flex align-items-center">
            <div class="avatar"><img src="/views/admin/img/avatar-6.jpg" alt="..." class="img-fluid rounded-circle"></div>
            <div class="title">
                <h1 class="h5">Mark Stephen</h1>
                <p>Web Designer</p>
            </div>
        </div><span class="heading">Main</span>
        <ul class="list-unstyled">
            <li><a href="/<?php echo $this->getThisUrl(); ?>"> <i class="icon-home"></i>Dashboard</a></li>
            <li><a href="#products" aria-expanded="false" data-toggle="collapse"> <i class="icon-new-file"></i>Products</a>
                <ul id="products" class="collapse list-unstyled ">
                    <li><a href="/<?php echo $this->getThisUrl(); ?>products/all">All Products</a></li>
                    <li><a href="/<?php echo $this->getThisUrl(); ?>products/add">Add New</a></li>
                    <li><a href="/<?php echo $this->getThisUrl(); ?>products/edit">Edit Product</a></li>
                </ul>
            </li>
            <li><a href="#articles" aria-expanded="false" data-toggle="collapse"> <i class="icon-new-file"></i>Articles</a>
                <ul id="articles" class="collapse list-unstyled ">
                    <li><a href="#">All Articles</a></li>
                    <li><a href="#">Add New</a></li>
                    <li><a href="#">Edit Article</a></li>
                </ul>
            </li>
            <li><a href="/<?php echo $this->getThisUrl(); ?>tables"> <i class="icon-grid"></i>Tables </a></li>
            <li><a href="/<?php echo $this->getThisUrl(); ?>charts"> <i class="fa fa-bar-chart"></i>Charts </a></li>
            <li class="active"><a href="/<?php echo $this->getThisUrl(); ?>forms"> <i class="icon-padnote"></i>Forms </a></li>

            <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li>
        </ul><span class="heading">Extras</span>
        <ul class="list-unstyled">
            <li> <a href="#"> <i class="icon-settings"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-writing-whiteboard"></i>Demo </a></li>
            <li> <a href="#"> <i class="icon-chart"></i>Demo </a></li>
        </ul>
    </nav>
    <div class="page-content form-page">
        <div class="page-header no-margin-bottom">
            <div class="container-fluid">
                <h2 class="h5 no-margin-bottom">Basic forms</h2>
            </div>
        </div>
        <div class="container-fluid">
            <ul class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
                <li class="breadcrumb-item active">Basic forms</li>
            </ul>
        </div>
        <section class="no-padding-top">
            <div class="container-fluid">
                <div class="row">
                    <!-- Basic Form-->
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong class="d-block">Basic Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                            <div class="block-body">
                                <form>
                                    <div class="form-group">
                                        <label class="form-control-label">Email</label>
                                        <input type="email" placeholder="Email Address" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="form-control-label">Password</label>
                                        <input type="password" placeholder="Password" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Signin" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Horizontal Form-->
                    <div class="col-lg-6">
                        <div class="block">
                            <div class="title"><strong class="d-block">Horizontal Form</strong><span class="d-block">Lorem ipsum dolor sit amet consectetur.</span></div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Email</label>
                                        <div class="col-sm-9">
                                            <input id="inputHorizontalSuccess" type="email" placeholder="Email Address" class="form-control form-control-success"><small class="form-text">Example help text that remains unchanged.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input id="inputHorizontalWarning" type="password" placeholder="Pasword" class="form-control form-control-warning"><small class="form-text">Example help text that remains unchanged.</small>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 offset-sm-3">
                                            <input type="submit" value="Signin" class="btn btn-primary">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Inline Form-->
                    <div class="col-lg-8">
                        <div class="block">
                            <div class="title"><strong>Inline Form</strong></div>
                            <div class="block-body">
                                <form class="form-inline">
                                    <div class="form-group">
                                        <label for="inlineFormInput" class="sr-only">Name</label>
                                        <input id="inlineFormInput" type="text" placeholder="Jane Doe" class="mr-sm-3 form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="inlineFormInputGroup" class="sr-only">Username</label>
                                        <input id="inlineFormInputGroup" type="text" placeholder="Username" class="mr-sm-3 form-control form-control">
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Submit" class="btn btn-primary">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Modal Form-->
                    <div class="col-lg-4">
                        <div class="block">
                            <div class="title"><strong>Modal Form</strong></div>
                            <div class="block-body text-center">
                                <button type="button" data-toggle="modal" data-target="#myModal" class="btn btn-primary">Form in simple modal </button>
                                <!-- Modal-->
                                <div id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
                                    <div role="document" class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header"><strong id="exampleModalLabel" class="modal-title">Signin Modal</strong>
                                                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
                                            </div>
                                            <div class="modal-body">
                                                <p>Lorem ipsum dolor sit amet consectetur.</p>
                                                <form>
                                                    <div class="form-group">
                                                        <label>Email</label>
                                                        <input type="email" placeholder="Email Address" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <label>Password</label>
                                                        <input type="password" placeholder="Password" class="form-control">
                                                    </div>
                                                    <div class="form-group">
                                                        <input type="submit" value="Signin" class="btn btn-primary">
                                                    </div>
                                                </form>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" data-dismiss="modal" class="btn btn-secondary">Close</button>
                                                <button type="button" class="btn btn-primary">Save changes</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Form Elements -->
                    <div class="col-lg-12">
                        <div class="block">
                            <div class="title"><strong>All form elements</strong></div>
                            <div class="block-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Normal</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Help text</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control"><small class="help-block-none">A block of help text that breaks onto a new line and may extend beyond one line.</small>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Password</label>
                                        <div class="col-sm-9">
                                            <input type="password" name="password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Placeholder</label>
                                        <div class="col-sm-9">
                                            <input type="text" placeholder="placeholder" class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Disabled</label>
                                        <div class="col-sm-9">
                                            <input type="text" disabled="" placeholder="Disabled input here..." class="form-control">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Checkboxes and radios <br><small class="text-primary">Normal Bootstrap elements</small></label>
                                        <div class="col-sm-9">
                                            <div>
                                                <input id="option" type="checkbox" value="">
                                                <label for="option">Option one is this and that—be sure to include why it's great</label>
                                            </div>
                                            <div>
                                                <input id="optionsRadios1" type="radio" checked="" value="option1" name="optionsRadios">
                                                <label for="optionsRadios1">Option one is this and that be sure to include why it's great</label>
                                            </div>
                                            <div>
                                                <input id="optionsRadios2" type="radio" value="option2" name="optionsRadios">
                                                <label for="optionsRadios2">Option two can be something else and selecting it will deselect option one</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Inline checkboxes</label>
                                        <div class="col-sm-9">
                                            <label class="checkbox-inline">
                                                <input id="inlineCheckbox1" type="checkbox" value="option1"> a
                                            </label>
                                            <label class="checkbox-inline">
                                                <input id="inlineCheckbox2" type="checkbox" value="option2"> b
                                            </label>
                                            <label class="checkbox-inline">
                                                <input id="inlineCheckbox3" type="checkbox" value="option3"> c
                                            </label>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Checkboxes &amp; radios <br><small class="text-primary">Custom elements</small></label>
                                        <div class="col-sm-9">
                                            <div class="i-checks">
                                                <input id="checkboxCustom1" type="checkbox" value="" class="checkbox-template">
                                                <label for="checkboxCustom1">Option one</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="checkboxCustom2" type="checkbox" value="" checked="" class="checkbox-template">
                                                <label for="checkboxCustom2">Option two checked</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="checkboxCustom" type="checkbox" value="" disabled="" checked="" class="checkbox-template">
                                                <label for="checkboxCustom">Option three checked and disabled</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="checkboxCustom3" type="checkbox" value="" disabled="" class="checkbox-template">
                                                <label for="checkboxCustom3">Option four disabled</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="radioCustom1" type="radio" value="option1" name="a" class="radio-template">
                                                <label for="radioCustom1">Option one</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="radioCustom2" type="radio" checked="" value="option2" name="a" class="radio-template">
                                                <label for="radioCustom2">Option two checked</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="radioCustom3" type="radio" disabled="" checked="" value="option2" class="radio-template">
                                                <label for="radioCustom3">Option three checked and disabled</label>
                                            </div>
                                            <div class="i-checks">
                                                <input id="radioCustom4" type="radio" disabled="" name="a" class="radio-template">
                                                <label for="radioCustom4">Option four disabled</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Select</label>
                                        <div class="col-sm-9 select">
                                            <select name="account" class="form-control mb-3">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-9 ml-auto select">
                                            <select multiple="" class="form-control">
                                                <option>option 1</option>
                                                <option>option 2</option>
                                                <option>option 3</option>
                                                <option>option 4</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row has-success">
                                        <label class="col-sm-3 form-control-label">Input with success</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control is-valid">
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row has-danger">
                                        <label class="col-sm-3 form-control-label">Input with error</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control is-invalid">
                                            <div class="invalid-feedback">Please provide your name.</div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Control sizing</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <input type="text" placeholder=".input-lg" class="form-control form-control-lg">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder="Default input" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <input type="text" placeholder=".input-sm" class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Column sizing</label>
                                        <div class="col-sm-9">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <input type="text" placeholder=".col-md-3" class="form-control">
                                                </div>
                                                <div class="col-md-4">
                                                    <input type="text" placeholder=".col-md-4" class="form-control">
                                                </div>
                                                <div class="col-md-5">
                                                    <input type="text" placeholder=".col-md-5" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"> </div>
                                    <div class="row">
                                        <label class="col-sm-3 form-control-label">Material Inputs</label>
                                        <div class="col-sm-9">
                                            <div class="form-group-material">
                                                <input id="register-username" type="text" name="registerUsername" required class="input-material">
                                                <label for="register-username" class="label-material">User Name</label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="register-email" type="email" name="registerEmail" required class="input-material">
                                                <label for="register-email" class="label-material">Email Address      </label>
                                            </div>
                                            <div class="form-group-material">
                                                <input id="register-password" type="password" name="registerPassword" required class="input-material">
                                                <label for="register-password" class="label-material">Password        </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Input groups</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">@</span>
                                                    <input type="text" placeholder="Username" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">$</span>
                                                    <input type="text" class="form-control"><span class="input-group-addon">.00</span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">
                                <input type="checkbox"></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">
                                <input type="checkbox" class="checkbox-template"></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">
                                <input type="radio"></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-addon">
                                <input type="radio" class="radio-template"></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">Button addons</label>
                                        <div class="col-sm-9">
                                            <div class="form-group">
                                                <div class="input-group"><span class="input-group-btn">
                                <button type="button" class="btn btn-primary">Go!</button></span>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="input-group">
                                                    <input type="text" class="form-control"><span class="input-group-btn">
                                <button type="button" class="btn btn-primary">Go!</button></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <label class="col-sm-3 form-control-label">With dropdowns</label>
                                        <div class="col-sm-9">
                                            <div class="input-group">
                                                <div class="input-group-btn">
                                                    <button data-toggle="dropdown" type="button" class="btn btn-white dropdown-toggle">Action <span class="caret"></span></button>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                                <input type="text" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="line"></div>
                                    <div class="form-group row">
                                        <div class="col-sm-9 ml-auto">
                                            <button type="submit" class="btn btn-secondary">Cancel</button>
                                            <button type="submit" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer class="footer">
            <div class="footer__block block no-margin-bottom">
                <div class="container-fluid text-center">
                    <!-- Please do not remove the backlink to us unless you support us at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
                    <p class="no-margin-bottom">2017 &copy; Your company. Design by <a href="https://bootstrapious.com">Bootstrapious</a>.</p>
                </div>
            </div>
        </footer>
    </div>
</div>
<!-- Javascript files-->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"> </script>
<script src="/views/admin/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/views/admin/vendor/jquery.cookie/jquery.cookie.js"> </script>
<script src="/views/admin/vendor/chart.js/Chart.min.js"></script>
<script src="/views/admin/js/front.js"></script>
</body>
</html>