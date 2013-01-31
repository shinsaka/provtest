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

$scan_code = array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9' ,'a', 'b', 'c', 'd', 'e', 'f');

foreach ($scan_code as $value) {
    $count = 0;
    $fp = fopen('/mnt/output/test.txt', 'r');
    while (($buf = fgets($fp)) !== false) {
        if (substr($buf, 9, 1) == $value) {
            $count++;
        }
    }
    fclose($fp);
?>
<h1>10桁目が<?php echo $value ?>の行は、<?php echo $count ?>行ありました。</h1>
<?php
}
?>

<div>処理時間は<?php echo microtime(true) - $start_time ?>秒でした</div>

</body>
</html>
