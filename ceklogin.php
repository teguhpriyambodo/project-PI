<?php session_start();
include_once 'koneksi.php';

if(isset($_POST['login'])) 
{
	//mengambil data dari form
	$username = $_POST['user'];
	$password = $_POST['pass'];
	
	//pencocokan dengan database
	$query = $db->prepare("select username, password, type from login where username=:user_in and password=:pass_in");
	$query->execute(array(':user_in'=>$username, ':pass_in'=>$password));
	
	if($query->rowCount()==1)
	{
		$row = $query->fetch(PDO::FETCH_ASSOC);
		
		if($row['type']=='admin')
		{
			$_SESSION['auth'] = array(
									'username'=>$row['username'], 
									'password'=>$row['password'],
									'type'=>'admin'
								);
			header("location:admin/admin.php");
		}
		else
		{
			$_SESSION['auth'] = array(
									'username'=>$row['username'], 
									'password'=>$row['password'],
									'type'=>'admin'
								);
			header("location:member/member.php");
		}
		
		
	}

	
	
	
	
}