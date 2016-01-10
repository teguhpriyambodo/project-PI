<?php 
		include "koneksi.php";
		$nama = $_POST['username'];
		$email = $_POST['email'];
		$password = $_POST['password'];
		$no_telp = $_POST['notelp'];
		$alamat = $_POST['alamat'];
		if($nama == "" || $email == "" || $password == "" || $no_telp == "" || $alamat == "" ){
			echo "Isi dengan lengkap...!!!";
        	?>
        		<form action="daftar.php" method="post">
            		<button type="submit" name="submit">Back</button>
        		</form>
        	<?php
		} else if(!is_numeric($no_telp)){
			echo "Isi no telpon dengan benar...!!!";
        	?>
        		<form action="daftar.php" method="post">
            		<button type="submit" name="submit">Back</button>
        		</form>
        	<?php
		} else {
			$reg = $db->prepare('INSERT INTO member VALUES (NULL,?,?,?,?,?,)');
			$reg->execute(array($nama,$password,$email,$no_telp,$alamat));
			echo "Sukses silahkan Klik OK lalu LOGIN";
        	?>
        		<form action="index.php" method="post">
            		<button type="submit" name="submit">OK</button>
        		</form>
        	<?php
		}


?>