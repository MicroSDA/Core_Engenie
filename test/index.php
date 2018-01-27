<?php
//index.php
$ip = md5(getenv("REMOTE_ADDR")."key".date("i"));
echo $ip;
?>

<video width="320" height="240" controls>
    <source src="/public/video.php?ref=<?php echo $ip;?>" type='video/mp4; codecs="avc1.42E01E, mp4a.40.2"'>
</video>