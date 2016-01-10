<?php session_start();
if(isset($_SESSION['auth'])) 
{
	echo 'anda login sebagai admin, <a href=../logout.php>Logout</a>';
}
else 
{
	header('location:../login.html');
}