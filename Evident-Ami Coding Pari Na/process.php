<?php  
	$email = $_POST['email'];
	$password = $_POST['password'];
	if($email && $password){
		$sql = "SELECT * FROM user WHERE email ='$email' AND password='$password';";
		$hostname='localhost';
		$user = 'root';
		$password = '';
		$mysql_database = 'evident';
		$db = mysqli_connect($hostname, $user, $password, $mysql_database) or die(mysqli_error());
		mysqli_select_db($db, $mysql_database) or die(mysqli_error());
		$qry = mysqli_query($db, $sql) or die(mysqli_error());
		$id = mysqli_insert_id($db); 
		if($qry){
			@session_start();
			$_SESSION['user'] = $id; 
			header('Location: profile.php');
			echo 'Succssfully registered! Your ID is: '.$id;
		}else{
			header('Location: login.php');
			echo 'Failed to register';
		}
	}else{
		header('Location: login.php');
		echo 'Fields are empty. ';
	}
?>