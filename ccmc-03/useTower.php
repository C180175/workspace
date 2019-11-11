<?php
requirce_once("class/Tower.php");
$tokyoTower = new Tower("東京タワー",333,1958);
echo "<per>";
var_dump($tokyoTower);
echo "</per>";
exit (0);
?>
<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="UTF-8">
	<title>Towerクラスを利用する</title>
	<link rel="stylesheet" href="../assets/css/style.css" />
	<link rel="stylesheet" href="../assets/css/ccmc-03.css" />
</head>

<body>
	<h1>Towerクラスを利用する</h1>
	<dl>
		<dt>東京タワー</dt>
		<dd>東京タワー の高さは 333 mで 1958 年に開業しました。</dd>
	</dl>
	<dl>
		<dt>東京スカイツリー</dt>
		<dd>東京スカイツリー の高さは 634 mで、2012 年に開業しました。</dd>
	</dl>
	<p><a href="index.html">インデックスに戻る</a></p>
</body>

</html>