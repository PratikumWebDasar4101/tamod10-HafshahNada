<?php  
include_once 'koneksi.php';
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Jurnal 10</title>
</head>
<body>
	<br>
	<br>
	<center>
		<a href="dashboard.php">Dashboard</a>
		<h3>EDIT USER</h3>
		<table bgcolor="grey">
			<form action="prosesEdit.php" method="POST">
			<?php
			$id = $_GET['id'];
			$query ="SELECT * FROM data_user WHERE id = '$id'";
			$result = mysqli_query($conn,$query);
			$data = mysqli_fetch_array($result);
			?>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
		
			<tr>
				<td>Nama Depan</td>
				<td>
					<input type="text" name="nama_depan" value="<?php echo $data['nama_depan']?>">
				</td>
			</tr>
			<tr>
				<td>Nama Belakang</td>
				<td>
					<input type="text" name="nama_belakang" value="<?php echo $data['nama_belakang']?>">
				</td>
			</tr>
			<tr>
				<td>NIM</td>
				<td>
					<input type="text" name="nim" value="<?php echo $data['nim']?>">
				</td>
			</tr>
			<tr>
				<td>Kelas</td>
				<td>
					<input type="text" name="kelas" value="<?php echo $data['kelas']?>">
				</td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>
					<?php 
						$hobi = explode(", ", $data['hobi']);
					?>
					<input type="checkbox" name="hobi[]" value="Menulis" <?php echo in_array("Menulis", $hobi) ? "checked" : ""; ?>>Menulis
					<input type="checkbox" name="hobi[]" value="Membaca" <?php echo in_array("Membaca", $hobi) ? "checked" : ""; ?>>Membaca
					<input type="checkbox" name="hobi[]" value="Berenang" <?php echo in_array("Berenang", $hobi) ? "checked" : ""; ?>>Berenang
					<input type="checkbox" name="hobi[]" value="Basket" <?php echo in_array("Basket", $hobi) ? "checked" : ""; ?>>Basket
	
				</td>
			</tr>
			<tr>
				<td>Genre Film</td>
				<td>
					<?php 
						$film = explode(", ", $data['genre_film']);
					?>
					<input type="checkbox" name="genre_film[]" value="horror" <?php echo in_array("horror", $film) ? "checked" : ""; ?>>Horror
					<input type="checkbox" name="genre_film[]" value="anime" <?php echo in_array("anime", $film) ? "checked" : ""; ?>>Anime
					<input type="checkbox" name="genre_film[]" value="action" <?php echo in_array("action", $film) ? "checked" : ""; ?>>Action
					<input type="checkbox" name="genre_film[]" value="drama" <?php echo in_array("drama", $film) ? "checked" : ""; ?>>Drama
				</td>
			</tr>
			<tr>
				<td>Tempat Wisata</td>
				<td>
					<?php 
						$wisata = explode(", ", $data['tempat_wisata']);
					?>
					<input type="checkbox" name="tempat_wisata[]" value="bali" <?php echo in_array("bali", $wisata) ? "checked" : ""; ?>>Bali
					<input type="checkbox" name="tempat_wisata[]" value="tanjung_selor" <?php echo in_array("tanjung_selor", $wisata) ? "checked" : ""; ?>>Tanjung Selor
					<input type="checkbox" name="tempat_wisata[]" value="jakarta" <?php echo in_array("jakarta", $wisata) ? "checked" : ""; ?>>Jakarta
					<input type="checkbox" name="tempat_wisata[]" value="lombok" <?php echo in_array("lombok", $wisata) ? "checked" : ""; ?>>Lombok
				</td>
			<tr>
			<tr>
				<td>Tanggal Lahir</td>
				<td>
					<input type="date" name="tanggal_lahir" value="<?php echo $data['tanggal_lahir']?>">
				</td>
			</tr>
			<tr>
				<td>
					<input type="submit" name="submit" value="submit">
				</td>
			</tr>
		</form>
		
	</table>
	

</body>
</html>