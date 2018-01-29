<?php

$hash = md5(getenv("REMOTE_ADDR")."key".date("i"));
echo '<h1>Random Hash:'.$hash.'</h1>';


// echo '<pre>';
/*foreach (getallheaders() as $name => $value) {
    //echo '<pre>';
    echo "{$name}: {$value}";
    //  echo '<br>';
    // echo '</pre>';
}*/
