<?php

$query ="select * from patient_registration";
	
	$result =mysqli_query($connection,$query);
	
	$patient_details = mysqli_fetch_assoc($result);


	


if(!empty($_GET))
	{
	require_once('../connection/connect.php');

		$firstname =  $_GET['firstname'];
		$lastname =  $_GET['lastname'];
		
		$med =  $_GET['medical'];
		$ic =  $_GET['ic'];
		
		$gname =  $_GET['guardianname'];
		$gcon =  $_GET['guardianphonenumber'];
		$gadd =  $_GET['guardianadress'];
		
		//$compass =  $_GET['compass'];
		$dob =  $_GET['dob'];
		$gender =  $_GET['gender'];
		$mobile =  $_GET['mobile'];
		$land =  $_GET['land'];
		$house =  $_GET['house'];
		$city =  $_GET['city'];
		$state =  $_GET['state'];

		$Address = $house.' ,'.$city.' ,'.$state.'.';
	 

	 $querry1= $connection->query("INSERT INTO patient_registration (FirstName, LastName, medical_history, patient_NIC, about_twenty, guardian_name, guardian_phonenumber, guardian_address ,Date_Of_Birth, Gender, mobile_number, land_number,address) values('$firstname', '$lastname', '$med', '$ic', '$abtw', '$gname', '$gcon', '$gadd', '$dob', '$gender', '$mobile', '$land', '$Address')");

	
}
if(connection)
{
	
	echo "<script>alert('eee')</script>";
	// header("Location:docsignup.php");
	 header("Location: ../");
	mysql_close($connection);
}
	
?>