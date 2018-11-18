<!DOCTYPE html>
<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset="UTF-8" ">
		<title><?php echo $pageTitle; ?></title>
	</head>
	<body>
		<h1><?php echo $pesanPertama; ?></h1>
		<p><?php echo $pesanKedua; ?></p>
		<p><?php echo $pesanKetiga; ?></p>

		<hr>
		<h1>Data ini diambil dari M_alumni</h1>

		<ul>
			<?php foreach ($alumni->result() as $row): ?>
			<li>
				<p><?php echo $row->nama_lengkap; ?></p>
				<span><?php echo $row->jurusan; ?></span> | <span><?php echo $row->jenis_kelamin; ?></span>
			</li>
		<?php endforeach; ?>
		</ul>
	</body>
</html>