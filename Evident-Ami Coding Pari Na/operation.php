<?php 
    if(isset($_POST['userID'])) $userID=$_POST['userID'];
    $result = $_POST['result'];
	$num = $_POST['data'];
	if($num && $userID){
		$sql = "INSERT INTO `data` (`userID`, `num`) 
				VALUES ('$userID', '$num');";
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
			$_SESSION['data'] = $result; 
			header('Location: profile.php');
			echo 'Succssfully registered! Your ID is: '.$id;
		}else{
			header('Location: login.php');
			echo 'Failed to register';
		}
	}else{
		header('Location: register.php');
		echo 'Fields are empty. ';
	}

/*<?php
@session_start();
if(isset($_SESSION['data'])){
  echo '<p>'.$_SESSION['data'].' </p>';
}else{
  header('Location: register.php');
}
?>*/
?>