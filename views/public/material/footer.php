<!--Footer-->
<footer class="page-footer elegant-color center-on-small-only footer">

    <!--Footer Links-->
    <div class="container-fluid">

        <div class="row justify-content-md-center">
            <!--First column-->
            <div class="col-lg-10">
                <h5 class="title">Contents</h5>
            </div>
            <!--/.First column-->

            <!--Second column-->
            <div class="col-lg-2">
                <h5 class="title"></h5>
                <ul>
                    <li><a href="https://github.com/MicroSDA/">GitHub</a></li>
                    <li><a href="https://vk.com/id40372407">Vk</a></li>
                    <li><a href="/sitemap.xml">Site Map</a></li>
                </ul>
            </div>
            <!--/.Second column-->
        </div>
    </div>
    <!--/.Footer Links-->

    <!--Copyright-->
    <div class="footer-copyright">
        <div class="container-fluid">
            © 2018 Copyright: Ro
        </div>
    </div>
    <!--/.Copyright-->
</footer>
<!--/.Footer-->
<!-- Placed at the end of the document so the pages load faster -->
<?= TemplateManager::getInstance()->assetsDraw(UrlsDispatcher::getInstance()->getCurrentUrlData()['name'], 'js') ?>
</body>
</html>
