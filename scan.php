<!doctype html>
<html class="no-js" lang="ja">
<head>
<meta charset="UTF-8">
<meta name="language" content="ja" />
<title>読み書きテストサイト</title>
</head>
<body>

<?php
$start_time = microtime(true);

$count = 0;
$fp = fopen('/mnt/output/test.txt', 'r');
while (($buf = fgets($fp)) !== false) {
    if (substr($buf, 9, 1) == '0') {
        $count++;
    }
}
fclose($fp);
?>
<h1>10桁目が0の行は、<?php echo $count ?>行ありました。</h1>

<div>処理時間は<?php echo microtime(true) - $start_time ?>秒でした</div>

</body>
</html>
