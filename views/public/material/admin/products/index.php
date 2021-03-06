<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="font-size: 85%">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/dashboard/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Dashboard</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/brands/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Brands</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/category/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Categories</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link active" href="/admin/secure/products/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/articles/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/employee/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/admin/secure/settings/<?= DataManager::getInstance()->getDataByKey('admin-href')?>">Settings</a>
                </li>
            </ul>
            <span class="navbar-text white-text">Welcome <span class="text-info"><?= DataManager::getInstance()->getDataByKey('employee-info')['FirstName'] ?>&nbsp;&nbsp;&nbsp;</span>
                <span><a href="/admin/secure/dashboard/<?= DataManager::getInstance()->getDataByKey('admin-href')?>?submit=logout">Logout</a></span>
            </span>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div id="editor">
        <h1>Hello world!</h1>
    </div>
    <script type="text/javascript">

    </script>
    <script type="text/javascript">
        var CKEDITOR_BASEPATH = '/public/contents/ckeditor/';
        var CKEDITOR_CONFIG_BASEPATH = '/assets/js/?page=Admin&hash=44asdasdasdasdf27dbs39df6aee19b615b430f333a0/';
        document.addEventListener("DOMContentLoaded", function (){initSample();});
    </script>
</div>
