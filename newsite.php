<?php
require ' userid.php';

if(isset($_POST['username'])&&isset($_POST['password'])){
	$username = htmlentities($_POST['username']);
	$password = htmlentities($_POST['password']);
	if(!empty($username)&&!empty($password))
	{
		if($username==$user && $password==$pass){
			header ('Location: '.$redirect_page);
		}
		else{
			echo "You have entered wrong credentials.<br> Please try loging in again";
		}
		
	}
	else
	{
		echo 'Please fill in your details';
	}
}

?>

<hr>
<form action="newsite.php" method="POST">
Username:<br><br>
<input type="text" name="username"><br><br>
Password:<br><br>
<!--New Comment-->
<input type="password" name="password"><br><br>
<input type="submit" value="Submit">
</form>