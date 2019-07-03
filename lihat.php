<html>
<head>
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/bootstrap.js"></script>
</head>

<?php
echo "<head><title>GUEST BOOK</title></head>";
$fp = fopen("Buku Pembelian.txt","r");
echo "<table border=0>";
while ($isi = fgets($fp,2000))
{
$pisah = explode("|",$isi);
echo "<tr><td>Nama </td><td>: $pisah[0]</td></tr>";
echo "<tr><td>Alamat </td><td>: $pisah[1]</td></tr>";
echo "<tr><td>Pesanan  </td><td>: $pisah[2]</td></tr>";
echo "<tr><td>Jumlah  </td><td>: $pisah[3]</td></tr>";
echo "<tr><td>Total </td><td>: Rp $pisah[4]</td></tr>
<tr><td>&nbsp;<hr></td><td>&nbsp;<hr></td></tr>.\n";
}
echo "</table>";
echo "<a class=btn href=buku.html> Isi Form Pembelian </a>";
echo "<a class=btn href=Biodata.html> Profile </a>";
?>

</html>