<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark elegant-color" style="color: #343a40">
        <a class="navbar-brand" href="/admin/secure/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/admin/secure/dashboard">Dashboard</a>
                <a class="nav-link" href="/admin/secure/brands">Brands</a>
                <a class="nav-link" href="/admin/secure/category">Categories</a>
                <a class="nav-link" href="/admin/secure/products">Products</a>
                <a class="nav-link active" href="/admin/secure/articles">Articles</a>
                <a class="nav-link" href="/admin/secure/settings">Settings</a>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <h4 class="card-title" style="text-align: center"><span
                class="btn btn-outline-dark"><h5>Articles</h5></span></h4>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs nav-justified">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#panel1" role="tab">New</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">All</a>
        </li>
    </ul>
    <!-- Tab panels -->
    <div class="tab-content card">
        <!--Panel 1-->
        <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
            <div id="add-article-error-message"></div>
            <script>
                document.addEventListener("DOMContentLoaded", function () {
                    addArticleBody();
                    editArticleBody();
                });
            </script>
            <hr>
            <br>
            <form id="add-article">
                <div class="form-row">
                    <div class="col-lg-6">
                        <input type="text" name="title" class="form-control" PLACEHOLDER="Title" required>
                    </div>
                    <div class="col-lg-6">
                        <input type="text" name="url" class="form-control" PLACEHOLDER="Url" required>
                    </div>
                    <div class="col-lg-12">
                        <textarea id="article-body" name="article-body"></textarea>
                    </div>
                </div>
            </form>
            <div>
                <br>
                <button class="btn btn-success" onclick="addArticle();">Add</button>
            </div>
        </div>
        <!--/.Panel 1-->
        <!--Panel 2-->
        <div class="tab-pane fade" id="panel2" role="tabpanel">
            <hr>
            <br>
            <div style="height:507px; overflow-y: auto; display: block">
            <table class="table table-bordered">
                <thead class="elegant-color">
                <tr style="color:white">
                    <th>#</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Url</th>
                    <th>Writer</th>
                    <th></th>
                    <th></th>
                </tr>
                </thead>
                <tbody>
                <?php $i=1;?>
                <?php foreach (DataManager::getInstance()->getDataByKey('Articles') as $value): ?>
                <form id="form-article-edit-<?= $i?>">
                <tr>
                    <td><?= $i?></td>
                    <td><?= $value['Title'] ?><input hidden name="title" type="text" value="<?= $value['Title'] ?>"></td>
                    <td><?= $value['Description'] ?>></td>
                    <td><?= $value['Url'] ?><input hidden name="url" type="text" value="<?= $value['Url'] ?>" ></td>
                    <td><?= $value['Writer'] ?><input hidden name="name" type="text" value="<?= $value['Writer'] ?>" ></td>
                    <td><button class="btn btn-outline-info" type="button" onclick="editArticleValidate('form-article-edit-<?=$i?>');">Edit</button></td>
                    <td><button class="btn btn-outline-warning" type="button" onclick="">Delete</button></td>
                    <td hidden><input hidden name="body" type="text" value="<?= $value['Body'] ?>" ></td>
                </tr>
                </form>
                    <?= $i++?>
                <?php endforeach ?>
                </tbody>
            </table>
            </div>
        </div>
        <!--/.Panel 2-->
    </div>
</div>
<div id="edit-article-modal" class="modal fade">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            </div>
            <div class="modal-body">
                <form id="edit-article-form" >
                    <div class="form-row">
                        <div class="col-md-4">
                            <label class="control-label" for="name">Title</label>
                            <input type="text" id="edit-article-title" name="title" class="form-control" PLACEHOLDER="Page name" required>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label" for="name">Url</label>
                            <input type="text" id="edit-article-url" name="url"   class="form-control" PLACEHOLDER="Url" required>
                            <input type="text" id="edit-article-url-old"  name="url-old" class="form-control" hidden>
                        </div>
                        <div class="col-md-4">
                            <label class="control-label" for="name">Writer</label>
                            <input type="text" id="edit-article-writer" name="writer" class="form-control" PLACEHOLDER="Writer name" required>
                        </div>
                        <div class="col-md-12">
                            <textarea id="edit-article-body" name="edit-article-body"></textarea>
                        </div>
                    </div>
                    </td>
                    <button type="button" class="btn btn-success" onclick="editArticle();">Save</button>
                </form>
                <br>
                <div id="edit-article-message"></div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

