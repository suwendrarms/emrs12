<?php

if(!empty($_GET))
	{
	require_once('../connection/connect.php');

		$firstname =  $_GET['firstname'];
		$lastname =  $_GET['lastname'];
		$email =  $_GET['email'];
		$username =  $_GET['username'];
		$pass =  $_GET['pass'];
		$compass =  $_GET['compass'];
		$dob =  $_GET['dob'];
		$gender =  $_GET['gender'];
		$mobile =  $_GET['mobile'];
		$land =  $_GET['land'];
		$house =  $_GET['house'];
		$city =  $_GET['city'];
		$state =  $_GET['state'];

		$Address = $house.' ,'.$city.' ,'.$state.'.';
	 

	 $querry1= $connection->query("INSERT INTO doctor_registration (FirstName, LastName, E_mail, Username, Password, Confirm_Password, DateOfBirth, Gender, Mobile_Number, Land_Number, Area_Of_Practice, Medical_Education, Current_Location) values('$firstname', '$lastname', '$email', '$username', '$pass', '$compass', '$dob', '$gender', '$mobile', '$land', 'NULL', 'NULL', '$Address')");

	
}
if(connection){
	echo "<script>alert('successfuly register!!!')</script>";
	 //eader(Location:'docsignup.php');
	 header("Location: ../index.php");
	mysql_close($connection);
}
	
?>