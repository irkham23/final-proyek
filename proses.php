<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>
<body>
<div class="jumbotron" align="center">
<a href="lihat.php" style="size: 30px; color: black;">Klik Disini</a>
<?php
echo "<head><title>GUEST BOOK</head></title>";
$fp = fopen("Buku Pembelian.txt","a+");
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$jml	= $_POST['jumlah'];
$total = 0;
$jk = $_POST['jk'];

if ($jk='Xiaomi Note 7') {
	$total = $jml*2199000;
}else if ($jk='Iphone XR') {
	$total = $jml*16499000;
}else if ($jk='Samsung A8') {
	$total = $jml*12000000;
}

fputs($fp,"$nama|$alamat|$jk|$jml|$total\n");
fclose($fp);
echo "<br><br><b>Terima Kasih Atas Pembelian Anda</b><br>";
?>
</div>
</body>
</html>