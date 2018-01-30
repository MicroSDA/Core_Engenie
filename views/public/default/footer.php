<footer style="width: 100%; height: 95px; background-color: #343a40">
    <div class="container">
        <div><br></div>
        <div style="text-align: center; color: #c8cbcf">Usage:<?= round(memory_get_usage() / 1024 / 1024, 2) . 'MB' ?></div>
        <div style="text-align: center; color: #c8cbcf">Time:<?= (microtime(true) - $GLOBALS['time']) . 'Sec' ?></div>
    </div>
</footer>
<!-- Placed at the end of the document so the pages load faster -->
<?= TemplateManager::getInstance()->getAssets(UrlsDispatcher::getInstance()->getCurrentUrlData()['name'], 'js') ?>
</body>
</html>

