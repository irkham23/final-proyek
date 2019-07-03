<html>

<head>
<title>
	Validasi Data Mahasiswa
</title>
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body> 
<div class="validasi">	
<center>
	<h1>VALIDASI DATA NAMA DAN NIM</h1>
	<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
		<input type="text" name="nama" class="nama" autocomplete="off" placeholder="Masukkan Nama Anda"><br> 
		<input type="text" name="NIM" class="NIM" autocomplete="off" placeholder="Masukkan NIM Anda"><br> 
		<input type="submit"> 
	</form>
</center>
</div>

<?php 
	$nama= $NIM= ""; 
	$eror = "Nama dan NIM Tidak Boleh Kosong";
	$erornama="Nama Tidak Boleh Kosong";
	$erornim="NIM Tidak Boleh Kosong";
	
	if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nama"]) && isset($_POST["NIM"])) { 
		$nama= $_POST["nama"]; 
		$nim= $_POST["NIM"]; 
		if (empty($nama)&&empty($nim)) {
			echo "<center>".$eror."</center>";
		}
		elseif (empty($nama)) {
			echo "<center>".$erornama."</center>";
		}
		elseif (empty($nim)) {
			echo "<center>".$erornim."</center>";
		}
		elseif (!is_numeric($_POST["NIM"])) {
			echo "<center>NIM Harus Angka</center>";
		}
		elseif (strlen($_POST["NIM"])!=10) {
			echo "<center>NIM Harus 10 Digit</center>";
		}
		elseif (!empty($nama) && !empty($nim)) {
			echo "<center><h2>Selamat Datang</h2></center>";
			echo "<center>" . $nama . "<br>" . $nim . "</center" ;
		}
	} 
	?>

</body>
</html>