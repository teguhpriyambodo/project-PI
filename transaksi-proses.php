<?php
<fieldset>
<table border="1">
	<tr>
		<td>Id</td>
		<td>Nama</td>
		<td>Tanggal Booking</td>
		<td>Tempat Pemotretan</td>
		<td>No Telp</td>
	</tr>
		<?php 
		$nama = @$_POST['nama'];
		include "koneksi.php";
		$no=1;
		$data = $db->query("insert into transaksi set id='', nama='$nama', tgl-booking='$tglbk', tkp='$tkp', telp='$telp','");
		while ($tampil = $data->fetch(PDO::FETCH_LAZY)) {
			?>
			<tr>
				<td><?php echo $no++; ?></td>
				<td><?php echo $tglbk=$_POST['tgl-booking']; ?></td>
				<td><?php echo $tkp=$_POST['tkp'] ?></td>
				<td><?php echo $telp=$_POST['telp']; ?></td>
			</tr>
			<?php
		}
	?>
</table>
</fieldset>
/*	$koneksi = mysql_connect("localhost", "root", "") or die ("gagal koneksi");
	mysql_select_db("gojepret") or die ("database tidak ada");
	
	$nama=$_POST['nama'];
	$tglbk=$_POST['tgl-booking'];
	$tkp=$_POST['tkp'];
	$telp=$_POST['telp'];
	
	$query= mysql_query("insert into transaksi set id='', nama='$nama', tgl-booking='$tglbk', tkp='$tkp', telp='$telp','");
		if($query){
			include "halamanawal.php";
		}else{
			echo"gagal update data"; echo mysql_error();
		}*/