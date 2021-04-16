<?php 
if(isset($_POST['submit'])){
	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$dob = $_POST['dob'];
	$available = $_POST['Available'];

	$array_data =[
		'first_name' => $first_name,
		'last_name' => $last_name,
		'dob' => $dob,
		'Available' => $available


	];

	echo $first_name . $last_name . $dob . $available; 

	file_put_contents('files/' . $array_data['first_name'] . ".json" , json_encode($array_data));
}

?>