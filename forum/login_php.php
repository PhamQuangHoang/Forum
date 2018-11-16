<?php 
	session_start();
	$conn = mysqli_connect('localhost','root','','endterm');
	
	if(isset($_POST['login_signin'])){
		$password = md5($_POST['login_password']);
		$username = $_POST['login_username'];
		$sql = 'SELECT id FROM login WHERE username = "'.$username.'" AND password = "'.$password.'"';
		$result = mysqli_query($conn,$sql);
		// die($sql);
		$count = mysqli_num_rows($result);
		if($count == 1){
			$_SESSION['username'] = $username;
			header('Location: index.php');
		}
	}

 ?>