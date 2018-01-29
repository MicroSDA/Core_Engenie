<footer>
    <?php
    echo '<div style="text-align: center">Usage: '.round(memory_get_usage()/1024/1024, 2) . 'MB';
    echo '<br>Time: '.(microtime(true) - $GLOBALS['time']).' sec.';
    echo '</div>
';
    ?>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<?= TemplateManager::getInstance()->getAssets(UrlsDispatcher::getInstance()->getCurrentUrlData()['name'], 'js') ?>
</body>
</html>