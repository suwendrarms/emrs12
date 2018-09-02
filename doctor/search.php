<?php

require_once('../connection/connect.php');

$patient_details ="";

if(isset($_POST['id_search']))  
{  
	$id = $_POST['patient_id'];
	/* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
	
	$result = mysqli_query($mysqli,$sql);
	$patient_details = mysqli_fetch_assoc($result);
	echo mysqli_error($mysqli);
	//print_r($patient_details); */
	
	
	$query ="SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
	$result =mysqli_query($connection,$query);
	if(mysqli_num_rows($result)==1)
	{
		$patient_details = mysqli_fetch_assoc($result);
		$_SESSION["patient_id"] = $id;
	}
	else{
    echo "<script>alert('Not Found')</script>";
	}
}elseif (isset($_POST['name_search'])) {
	
	$name = $_POST['patient_name'];
	/* $sql = "SELECT * FROM patient_registration WHERE FirstName = '$name'";
	
	$result = mysqli_query($mysqli,$sql);
	$patient_details = mysqli_fetch_assoc($result);
	echo mysqli_error($mysqli); */
	$query ="SELECT * FROM patient_registration WHERE FirstName = '$name'";
	$result =mysqli_query($connection,$query);
	if(mysqli_num_rows($result)==1)
	{
		$patient_details = mysqli_fetch_assoc($result);
		$_SESSION["patient_name"] = $name;
	}
	else{
    echo "<script>alert('Not Found')</script>";
	}
}

/* $query ="SELECT * FROM patient_registration WHERE Registration_Number = '$id'";

$result =mysqli_query($connection,$query);


if(mysqli_num_rows($result)==1)
{
	header("Location: ../doctor/doctor_hp.php");
	mysql_close($connection);
}
else if(mysqli_num_rows($result)==1)
{
	header("Location: ../reception_nurse/index.php");
	mysql_close($connection);
}
else{
    echo "<script>alert('Error Login!  Enter Correct details')</script>";
}
 */




if ($patient_details){
?>

<!doctype html>

<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Regional Poison Information System</title>
<meta name="description" content="">
<meta name="author" content="Group4p">

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css" />
<!-- Font Awesome -->
<link href="../font/css/font-awesome.min.css" rel="stylesheet">

<style>
.column {
    float: left;
    width: 50%;
    padding: 10px;
}


.row:after {
    content: "";
    display: table;
    clear: both;
} 

</style>
</head>

<body>




<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h6>Patients details table</h6>
    </div>
  
  

  
  
<div class="container">
<div class="panel">
<div class="panel panel-default">
  <div class="panel-heading clearfix"> 
        <span class="glyphicon glyphicon-th"></span> 
        <b>Patient Details</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panel">    
<div class="panel clearfix">
  <div class="panel panel-default">
  <div class="panel-body">
         <!--<table class="table table-striped table-bordered">
          <thead>
           <tr>
             <th>Id</th>
             <th>Name</th>
			 <th>Address </th>
			 <th>Date of Birth </th>
			 <th>Gender </th>
			 <th>Civil Status </th>
			 <th>Contact Number </th>
			 <th>E_mail </th>
             <th></th>
           <tr>
          </thead>
          <tbody>
              <tr>
                <td><?php echo (int)$patient_details['Registration_Number']; ?></td>
                <td><?php echo $patient_details['FirstName']." ".$patient_details['LastName']; ?></td>
				 <td><?php echo $patient_details['Address']; ?></td>
				 <td><?php echo $patient_details['Date_Of_Birth']; ?></td> 
				 <td><?php echo $patient_details['Gender']; ?></td> 
				 <td><?php echo $patient_details['Civil_Status']; ?></td>
				 <td><?php echo $patient_details['Contact_Number']; ?></td> 
				 <td><?php echo $patient_details['E_mail']; ?></td> 						 
                <td>
				
				<form action="../poison_details/poison.php" method="post">
					<input type="submit" name="submit_poison" value="Poison">
				</form>
				
				
				</td>
              </tr>
          <tbody>
         </table>-->
		 <table style="width:100%">
		 
		 <tr>
			<th>Id: </th>
			<td><?php echo (int)$patient_details['Registration_Number']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Name: </th>
			<td><?php echo $patient_details['FirstName']." ".$patient_details['LastName']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Medical_History: </th>
			<td><?php echo $patient_details['medical_history']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Nic number: </th>
			<td><?php echo $patient_details['patient_NIC']; ?></td>
		  </tr>
		  
		  <tr>
			<th> caretaker  name: </th>
			<td><?php echo $patient_details['guardian_name']; ?></td>
		  </tr>
		  
		  <tr>
			<th> caretaker phone number: </th>
			<td><?php echo $patient_details['guardian_phonenumber']; ?></td>
		  </tr>
		  
		  <tr>
			<th> caretaker  address: </th>
			<td><?php echo $patient_details['guardian_address']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Date of birth: </th>
			<td><?php echo $patient_details['Date_Of_Birth']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Gender: </th>
			<td><?php echo $patient_details['Gender']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Mobile No.: </th>
			<td><?php echo $patient_details['mobile_number']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Land Line No.: </th>
			<td><?php echo $patient_details['land_number']; ?></td>
		  </tr>
		  
		  <tr>
			<th>Address: </th>
			<td><?php echo $patient_details['address']; ?></td>
		  </tr>
		  </table><br>
       </div>
	   
	   <form action="../poison_details/poison.php" method="post">
		 <input type="submit" name="submit_poison" value="Poison">
				</form>
	    <br>
		
  <!--/.container--> 
</section>
<script src="../js/modernizr-latest.js"></script> 
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="../js/fancybox
/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="../js/jquery.nav.js" type="text/javascript"></script> 
<script src="../js/jquery.fittext.js"></script> 
<script src="../js/waypoints.js"></script> 
<script src="../js/custom.js" type="text/javascript"></script> 
<script src="../js/owl-carousel/owl.carousel.js"></script>

</body>
</html>                 
<?php
}
?>


</body>
</html>