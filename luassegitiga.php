<!DOCYTYPE html>
<html>
<head>
		<title>Luas segitiga</title>
</head>
<body>
		<table>
			<form action="" method="POST" name="luas_segitiga">
			<tr><td colspan="2"><h3>Menghitung Luas Segitiga</h3></td></tr>
			<tr><td Masukkan Nilai Alas : </td><td><input type="text" name="alas"></td></tr>
			<tr><td Masukkan Nilai Tinggi : </td><td><input type="text" name="tinggi"></td></tr>
			<tr><td input type="submit" name="input" value="Hitung"></td><td><input type="reset" 
				value="Reset"></td></tr>
			</form>
		</table>
		
</body>
</html>

<?php
if(isset($_POST['input'])){
		$alas=$_POST['alas'];
		$tinggi=$_POST['tinggi'];
		function menghitung ($al , $tg){
				$hitung=(0.5*$al*$tg);
				return $hitung;
				}
				echo "Luas Alas Segitiga = ".menghitung($alas,$tinggi);
				}
				?>