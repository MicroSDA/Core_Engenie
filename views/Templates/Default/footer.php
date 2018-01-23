<?php
echo '<div style="text-align: center">Usage: '.round(memory_get_usage()/1024/1024, 2) . 'MB';
echo '<br>Time: '.(microtime(true) - $GLOBALS['time']).' sec.';
echo '</div>';
?>

<link href="<?= '/views/Templates/' . TEMPLATE_PATH ?>/public/css/bootstrap.min.css" rel="stylesheet">


<!-- Custom styles for this template -->
<link href="<?= '/views/Templates/' . TEMPLATE_PATH ?>/public/css/dashboard.css" rel="stylesheet">
