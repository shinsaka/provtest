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

file_put_contents('/mnt/output/test.txt', 'start line' . PHP_EOL);
for ($i=0; $i<1000000; $i++) {
    $data = hash('sha512', $i) . PHP_EOL;
    file_put_contents('/mnt/output/test.txt', $data, FILE_APPEND);
}
?>

<h1><?php echo $i ?>行のテキストファイルを作成しました。</h1>

<div>処理時間は<?php echo microtime(true) - $start_time ?>秒でした</div>

<a href="scan.php">テストデータをスキャンする</a>

</body>
</html>
