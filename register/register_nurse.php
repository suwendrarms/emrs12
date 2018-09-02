<?php

if(!empty($_GET))
	{
	require_once('../connection/connect.php');

		$firstname =  $_GET['firstname'];
		$lastname =  $_GET['lastname'];
		$email =  $_GET['email'];
		$username =  $_GET['username'];
		$pass =  $_GET['pass'];
		//$compass =  $_GET['compass'];
		$dob =  $_GET['dob'];
		$gender =  $_GET['gender'];
		$mobile =  $_GET['mobile'];
		$land =  $_GET['land'];
		//$house =  $_GET['house'];
	//	$city =  $_GET['city'];
	//	$state =  $_GET['state'];

	//	$Address = $house.' ,'.$city.' ,'.$state.'.';
	 

	 $querry1= $connection->query("INSERT INTO receptionist_registration (FirstName, LastName, E_mail, Username, Password, Date_Of_Birth, Gender, Mobile_Number, Land_Number) values( '$firstname', '$lastname', '$email', '$username', '$pass',  '$dob', '$gender', '$mobile', '$land')");

	
}
if(connection)
{
	echo "<script>alert('successfuly register!!!')</script>";
	// header("Location:docsignup.php");
	 header("Location: ../");
	mysql_close($connection);
}
	
?>