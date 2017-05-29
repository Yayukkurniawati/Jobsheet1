<html>
<head>
<title>Menghitung Volume Balok Kardus</title>
</head>
<body>
<?php 
echo "Nama  : Yayuk Kurniawati<br>";
echo "Kelas : SKA-15.A2<br>";
echo "NPM   : 888740306150114<br>";
echo "Matakuliah   : Pemrograman Web<br>";
echo "<hr>";
echo "<h3>Program Menghitung Volume Balok Kardus</h3>";
echo "<hr><br>";
echo "<form method = 'post' action = ''>";
echo "<td>Panjang</td>	<td>:</td><input name = 'panjang' type = 'text' size = '20'><br>";
echo "<td>Lebar</td>	<td>:</td><input name = 'lebar' type = 'text' size = '20'><br>";
echo "<td>Tinggi</td>	<td>:</td><input name = 'tinggi' type = 'text' size = '20'><br>
				<input name = 'Hitung' type = 'submit' value = 'Hitung Volume'>
</form>";
if(isset($_POST['Hitung']))
{
	$panjang = $_POST['panjang'];
	$lebar   = $_POST['lebar'];
	$tinggi  = $_POST['tinggi'];
	$volume  = $panjang*$lebar*$tinggi;
	echo "<b>Volume Balok Kardus adalah $volume</b>";
}
?>
</body>
</html>