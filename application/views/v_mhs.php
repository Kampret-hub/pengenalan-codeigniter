<!DOCTYPE html>
<html>
<head>
	<title>Daftar Mahsiswa</title>
</head>
<body>
	<table border="1px solid black">
		<tr>
			<th>nama</th>
			<th>alamat</th>
			<th>no hp</th>

			<?php foreach ($mahasiswa as $mhs) : ?>

				<tr>
					<td><?php echo $mhs['nama']; ?></td>
					<td><?php echo $mhs['alamat']; ?></td>
					<td><?php echo $mhs['no_hp']; ?></td>
				</tr>

			<?php endforeach; ?>
			
			
		</tr>
	</table>
	
</body>
</html>