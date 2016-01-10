<?php
	include "koneksi.php";
	
	$stmt = $db->prepare('SELECT * FROM member where username = ?');
	$stmt->execute(array($_POST['username']));
	$user = $stmt->fetch(PDO::FETCH_OBJ);
	//$salt = 'dfasdsd<>:IIUY7868756293(*^&^$^%*^*&';
	
	//if($user != null && md5($_POST['password'].$salt) == $user->password){
	if($user != null && $_POST['password'] == $user->password){
	header('location:halamanawal.php');
	// $_SESSION['userlogin'] = 'login';
	
	if($_POST['remember'] == '1'){
	setcookie('user', 'login', time()+(3600));
	} else {
	setcookie('user', 'login');
	}
	} else {
	echo "<h1>Kombinasi Username &amp; Password tidak tepat</h1>";
	}