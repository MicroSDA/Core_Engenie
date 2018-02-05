<body>
<header>
    <nav class="navbar navbar-expand sidebar navbar-dark elegant-color " style="color: #343a40">
        <a class="navbar-brand" href="/admin/secure/dashboard">Dashboard</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup"
                aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link" href="/admin/secure/dashboard">Dashboard</a>
                <a class="nav-link" href="/admin/secure/brand">Brands</a>
                <a class="nav-link" href="/admin/secure/category">Categories</a>
                <a class="nav-link" href="/admin/secure/products">Products</a>
                <a class="nav-link active" href="/admin/secure/settings">Settings</a>
            </div>
        </div>
    </nav>
</header>
<div class="container-fluid">
    <div class="">
        <br>
        <div class="row">
            <div class="col-lg-12 col-sm-12">
                <div class="card">
                    <h4 class="card-title" style="text-align: center"><span
                                class="btn btn-outline-dark"><h1>Site Urls</h1></span></h4>
                    <div class="card-title" style="text-align: center"><button
                                class="btn btn-outline-success" type="button" data-toggle="modal" data-target="#add-new-url-modal"><h5>Add new</h5></button></div>
                    <div class="card-body">
                        <h4 class="card-title"></h4>
                        <p class="card-text"></p>
                        <hr>
                        <table class="table table-bordered">
                            <thead class="elegant-color">
                            <tr style="color:white">
                                <th>#</th>
                                <th>Name</th>
                                <th>Pattern</th>
                                <th>Type</th>
                                <th>Edit</th>
                                <th></th>
                            </tr>
                            </thead>
                            <?php $i = 1;
                            foreach (DataManager::getInstance()->getDataByKey('URLS') as $value): ?>
                                <tr>
                                    <form id="form-edit-<?= $i?>" method="post">
                                    <th scope="row"><?= $i ?></th>
                                    <td><?= $value['name'] ?><input hidden name="name" type="text" value="<?= $value['name'] ?>" required></td>
                                    <td><?= $value['pattern'] ?><input hidden name="pattern" type="text" value="<?= $value['pattern'] ?>" required></td>
                                    <td><?= $value['type'] ?><input hidden name="type" type="text" value="<?= $value['type'] ?>" required></td>
                                    <td>
                                        <button class="btn btn-outline-info" type="button" onclick="editUrlValidate('form-edit-<?=$i?>');">Change</button>
                                    </td>
                                        <td>
                                            <button class="btn btn-outline-warning" type="button" onclick="deleteUrlValidate('form-edit-<?=$i?>');">Delete</button>
                                        </td>
                                    <td  hidden><input  hidden name="model" type="text" value="<?= $value['model'] ?>" required></td>
                                    <td  hidden><input  hidden name="method" type="text" value="<?= $value['method'] ?>" required></td>
                                    <td  hidden><input  hidden name="view" type="text" value="<?= $value['view'] ?>" required></td>


                                    <?php if ($value['cache'] == 'yes'): ?>
                                        <td  hidden><select hidden name="cache" class="mdb-select colorful-select dropdown-primary">
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </td>
                                    <?php else: ?>
                                        <td  hidden><select hidden name="cache" class="mdb-select colorful-select dropdown-primary">
                                                <option value="no">No</option>
                                                <option value="yes">Yes</option>
                                            </select>
                                        </td>
                                    <?php endif ?>
                                    </form>
                                </tr>
                                <?php $i++; ?>
                            <?php endforeach ?>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="col-lg-2 col-sm-2">
            <div class="card">
                <h4 class="card-title" style="text-align: center"><span
                            class="btn btn-outline-info"><h6>System</h6></span>
                </h4>
                <div class="card-body">
                    <p class="card-text"></p>
                    <hr>
                    <form class="form-control" action="" type="Get">
                        <div>
                            <button type="submit" name="submit" value="site-map" class="btn btn-outline-primary"
                                    href="">Generate Site Map
                            </button>
                            <button type="submit" name="submit" value="reset-cache" class="btn btn-outline-warning"
                                    href="">Reset Cache
                            </button>
                        </div>
                        <br>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="card">
                <h4 class="card-title" style="text-align: center"><span class="btn btn-outline-dark"><h6>Template Settings</h6> </span>
                </h4>
                <div class="card-body">
                    <p class="card-text"></p>
                    <hr>
                </div>
            </div>
        </div>
    </div>
    <div id="add-new-url-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form id="add-new-url-form" >
                        <div class="form-row">
                            <div class="col-md-2">
                                <label class="control-label" for="name">Name</label>
                                <input type="text" name="name" class="form-control" PLACEHOLDER="Page name" required>
                            </div>
                            <div class="col-md-8">
                                <label class="control-label" for="name">Pattern</label>
                                <input type="text" name="pattern" class="form-control" PLACEHOLDER="Pattern" required>
                            </div>
                            <div class="col-md-2">
                                <label class="control-label" for="name">Type</label>
                                <input  type="text" name="type" class="form-control" PLACEHOLDER="Url data type" required>
                            </div>
                            <div class="col-md-5">
                                <label class="control-label" for="name">Model</label>
                                <input type="text" name="model" class="form-control" PLACEHOLDER="Monel name" required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="name">Method</label>
                                <input  type="text" name="method" class="form-control" PLACEHOLDER="Method name" required>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label" for="name">View</label>
                                <input  type="text" name="view" class="form-control" PLACEHOLDER="View folder path" required>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label" for="name">Cache</label>
                                <select  name="cache" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        </td>
                    </form>
                    <button class="btn btn-success" onclick="addNewUrl();">Add-new</button>
                    <br>
                    <div id="add-new-url-message"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="edit-url-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <form id="edit-url-form">
                        <div class="form-row">
                            <div class="col-md-3">
                                <label class="control-label" for="name">Name</label>
                                <input id="edit-url-name" type="text" name="name" class="form-control" PLACEHOLDER="Page name" required>
                            </div>
                            <div class="col-md-8">
                                <label class="control-label" for="name">Pattern</label>
                                <input id="edit-url-pattern" type="text" name="pattern" class="form-control" PLACEHOLDER="Pattern" required>
                                <input hidden id="edit-url-pattern-old" type="text" name="pattern" class="form-control" PLACEHOLDER="Pattern" required>
                            </div>
                            <div class="col-md-1">
                                <label class="control-label" for="name">Type</label>
                                <input id="edit-url-type" type="text" name="type" class="form-control" PLACEHOLDER="Url data type" required>
                            </div>
                            <div class="col-md-5">
                                <label class="control-label" for="name">Model</label>
                                <input id="edit-url-model" type="text" name="model" class="form-control" PLACEHOLDER="Monel name" required>
                            </div>
                            <div class="col-md-4">
                                <label class="control-label" for="name">Method</label>
                                <input id="edit-url-method" type="text" name="method" class="form-control" PLACEHOLDER="Method name" required>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label" for="name">View</label>
                                <input id="edit-url-view" type="text" name="view" class="form-control" PLACEHOLDER="View folder path" required>
                            </div>
                            <div class="col-md-3">
                                <label class="control-label" for="name">Cache</label>
                                <select id="edit-url-cache" name="cache" class="form-control">
                                    <option value="yes">Yes</option>
                                    <option value="no">No</option>
                                </select>
                            </div>
                        </div>
                        <button type="button" class="btn btn-success" onclick="editUrl();">Save</button>
                    </form>
                    <br>
                    <div id="edit-url-message"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal" onclick="">Close</button>
                </div>
            </div>
        </div>
    </div>
    <div id="delete-url-modal" class="modal fade">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                </div>
                <div class="modal-body">
                    <input hidden type="text" name="pattern" id="delete-url-pattern">
                    <div style="text-align: center"><div class="btn btn-outline-warning"><h3>Are you sure ?</h3></div></div>
                    <br>
                    <div style="text-align: center"><button type="button" class="btn btn-danger" onclick="deleteUrl()">Yes</button></div>
                    <hr size="15">
                    <br>
                    <div id="delete-url-message"></div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-warning" type="button" data-dismiss="modal" onclick="">Close</button>
                </div>
            </div>
        </div>
    </div>
</div>
