<!DOCTYPE html>
<html>
<head>
	<title>Kalkulator Sederhana</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<?php 
	if(isset($_POST['hitung'])){
		$bil1 = $_POST['bil1'];
		$bil2 = $_POST['bil2'];
		$operasi = $_POST['operasi'];
		if ($operasi=='tambah') {
			$hasil=$bil1+$bil2;
		}
		elseif ($operasi=='kurang') {
			$hasil=$bil1-$bil2;
		}
		elseif ($operasi=='kali') {
			$hasil=$bil1*$bil2;
		}
		elseif ($operasi=='bagi') {
			$hasil=$bil1/$bil2;
		}
	}
	?>
	<div class="kalkulator" align="center">
		<h2 class="judul">KALKULATOR</h2>
		<form method="post">			
			<input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Pertama"><br>
			<input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan Bilangan Kedua"><br>
			<select class="pilih" name="operasi">
				<option value="tambah">Penjumlahan (+)</option>
				<option value="kurang">Pengurangan (-)</option>
				<option value="kali">Perkalian (x)</option>
				<option value="bagi">Pembagian (/)</option>
			</select>
			<input type="submit" name="tambah" value="tambah" class="tombol">											
		</form>
		<?php if(isset($_POST['tambah'])){ ?>
			<input type="text" value="<?php echo $hasil; ?>" class="bil">
		<?php }else{ ?>
			<input type="text" value="0" class="bil">
		<?php } ?>			
	</div>
</body>
</html>