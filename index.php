<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Export Excel</title>
</head>
<body>
    <h2>IMPORT EXCEL KE MYSQL DENGAN PHP</h2>
    <?php 
	if(isset($_GET['berhasil'])){
		echo "<p>".$_GET['berhasil']." Data berhasil di import.</p>";
	}
	?>
    <a href="upload.php">IMPORT DATA</a>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>ALamat</th>
			<th>Telepon</th>
		</tr>
		<?php 
		include 'koneksi.php';
		$no=1;
		$data = mysqli_query($koneksi,"select * from data_pegawai");
		while($d = mysqli_fetch_array($data)){
			?>
			<tr>
				<th><?php echo $no++; ?></th>
				<th><?php echo $d['nama']; ?></th>
				<th><?php echo $d['alamat']; ?></th>
				<th><?php echo $d['telepon']; ?></th>
			</tr>
			<?php 
		}
		?>
 
	</table>
</body>
</html>