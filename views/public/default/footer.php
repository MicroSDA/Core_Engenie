<footer>
    <?php
    echo '<div style="text-align: center">Usage: '.round(memory_get_usage()/1024/1024, 2) . 'MB';
    echo '<br>Time: '.(microtime(true) - $GLOBALS['time']).' sec.';
    echo '</div>';
    ?>
</footer>
<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="<?= '/views/public/' . TEMPLATE_PATH ?>/css-js/js/bootstrap.min.js"></script>
</body>
</html>