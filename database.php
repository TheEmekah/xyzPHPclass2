<?php
session_start();

if (isset($_POST['register'])) {
	$Username = $_POST['Username'];
	$email = $_POST['email'];
	$password_1 = $_POST['password_1'];
	$password_2 = $_POST['password_2'];

	$array_data =[
		'Username' => $Username,
		'email' => $email,
		'password_1' => $password_1,
		'password_2' => $password_2,
		
		];

	echo $Username . $email . $password_1 . $password_2;

	file_put_contents('files/' . $array_data['Username'] . ".txt" , $array_data);

	$_SESSION['Username'] = $Username
	$_SESSION['success'] = "Youre now logged in";
	header('location: homepage.php');
}

?> 


