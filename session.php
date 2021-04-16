<?php
if(isset($_POST['login'])){
	$Username = $_POST['Username'];
	$password_1 = $_POST['password_1'];

	$array_data1 =[
		'Username' => $Username,
		'password_1' => $password_1,
		
		];

	echo $Username . $password_1;

	file_put_contents('files/' . $array_data1['Username'] . ".txt" , $array_data1);
}

?> 
	
