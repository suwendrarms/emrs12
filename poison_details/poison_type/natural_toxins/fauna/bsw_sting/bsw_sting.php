<?php
	session_start();
	
	require_once('../../../../../connection/connect.php');
	
	$UserName = $_SESSION["username"];
	$password = $_SESSION["password"];
	$query ="select * from doctor_registration where Username='$UserName' and Password ='$password'";
	
	$result =mysqli_query($connection,$query);
	
	$doctor_details = mysqli_fetch_assoc($result);
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

<link rel="stylesheet" href="../../../../../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../../../../../css/isotope.css" media="screen" />
<link rel="stylesheet" href="../../../../../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../../../../../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../../../../../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../../../../../css/styles.css" />
<!-- Font Awesome -->
<link href="../../../../../font/css/font-awesome.min.css" rel="stylesheet">

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

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=date],select[class=form-control],select {
    width: 100%;
    padding: 5px;
    display: inline-block;
    border: 1px solid #000000;
    text-align: left;
   
}


</style>
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
         <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
		  <li> <a href="../../../../poison.php">Poison details</a></li>
          <!--<li><a href="#beesting" class="scroll-link">Bee sting</a></li>
          <li><a href="#clinicalfeatures" class="scroll-link">Clinical Features</a></li>
          <li><a href="#management" class="scroll-link">Management</a></li>-->
          
		  <li><a href="../../../../../doctor/doctor_hp.php" style="color: #000000 "  class=" scroll-top animated fadeIn "><b>| DR. <?php echo $doctor_details['FirstName'].' '.$doctor_details['LastName']  ?></b></a></li>
		   <li><a style="color: blue" href="../../../../../index.php">(logout)</a></li>
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<!--<div id="#top"></div>-->
<!--<section id="home">
  <div class="banner-container"> <img src="../../../../../images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="../../../../../font-size: 40px;">Belief in recovery always</h1>
        
       </div>
    </div>
  </div>
</section>-->

<section id="bws" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br>
      <h2>Black widow spider</h2>
      
    </div>
    <div class="row"> 
      <!-- item -->
      <form class="form-horizontal" method="post" action="">
                      <!-- Title -->
                      <div class="form-group">
                        <label class="control-label col-lg-4" for="title">Time of sting:</label>
                        <div class="col-lg-5">
                          <input type="text" class="form-control" id="title" name="timeofsting" value="00.00">
                        </div>
                      </div>
                      <!-- Content -->
                      <div class="form-group">
                        <label class="control-label col-lg-4" for="title">Number of sting:</label>
                        <div class="col-lg-5">
                          <input type="text" class="form-control" id="title" name="numberofsting" value="0">
                        </div>
                      </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-4" for="title">Place of sting:</label>
                        <div class="col-lg-5">
                          <select class="form-control" name="placeofsting">
                                                  <option value="">- Choose Category -</option>
                                                  <option value="Indoor">Indoor</option>
                                                  <optgroup label="Outdoor">
													<option value="home">Home</option>
													<option value="garden">Garden</option>
													<option value="paddyfield">Paddy field</option>
													<option value="road">Road</option>
													<option value="forest">Forest</option>
													<option value="ul">Unutilized land</option>
													<option value="other">Other</option>
												  </optgroup>
											
													
                                                </select>
                        
                      </div>
                      
                      <div class="form-group">
                        <label class="control-label col-lg-4" for="tags">Sting site:</label>
                        <div class="col-lg-5">
						
						  <input type="hidden" name="Head_and_Neck" value="no"> 
                          <input type="checkbox" name="Head_and_Neck" value="yes">&thinsp; Head and Neck <br>
						  
						  
						  <input type="hidden" name="Upper_Limb" value="no"> 
                          <input type="checkbox" name="Upper_Limb" value="yes">&thinsp; Upper Limb <br>
						  
						  
						  <input type="hidden" name="Chest" value="no"> 
                          <input type="checkbox" name="Chest" value="yes">&thinsp; Chest <br>
                          
						  
						  <input type="hidden" name="Abdomen" value="no"> 
                          <input type="checkbox" name="Abdomen" value="yes">&thinsp; Abdomen <br>
						  
						  
						  <input type="hidden" name="Lower_Limb" value="no"> 
                          <input type="checkbox" name="Lower_Limb" value="yes">&thinsp; Lower Limb <br>
						  
						  
						  <input type="hidden" name="other" value="no"> 
                          <input type="checkbox" name="other" value="yes">&thinsp; Others <br>
						  
                        </div>
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-4" for="tags">Circumstances of stings:</label>
                        <div class="col-lg-5">
                          <input type="radio" name="cos" value="Provoked"> Provoked </br>
						  <input type="radio" name="cos" value="Unprovoked"> Unprovoked </br>
                        </div>
                      </div>

                      <div class="pull-right" >
                          
						  <a href="#clinicalfeatures" class="btn btn-danger scroll-link" >Next</a>
                          <!--<button type="reset" class="btn btn-default">Reset</button>-->
						  
                        </div>
                    <!--</form>-->
      <!-- end:--> 
    </div>
  </div>
  <!--/.container--> 
</section>

						

<section id="clinicalfeatures" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br>
      <h2>Clinical Features</h2>
      
    </div>
   <div class="panel-body">
                <div class="padd">

                  <div class="form quick-post">
                    <!-- Edit profile form (not working)-->
					
					<!--
                    <form class="form-horizontal" method="post" action=""></form>-->
                      <div class="form-group">
						
						   <input type="hidden" name="Abdominal_Pain" value="no" >
						   <input type="checkbox" name="Abdominal_Pain" value="yes" >   Abdominal pain
						   <br>
						   <br>
						    <input type="hidden" name="Headache" value="no" >
						    <input type="checkbox" name="Headache" value="yes" >   Headache
						   <br>					   
						   <br>					   
						    <input type="hidden" name="Naurea" value="no" > 
						    <input type="checkbox" name="Naurea" value="yes" >   Naurea
						   <br>
						   <br>
						    <input type="hidden" name="Pain_in_large_muscle_group" value="no" > 
						    <input type="checkbox" name="Pain_in_large_muscle_group" value="yes" >   Pain in large muscle group
						   <br>
						   <br>
						    <input type="hidden" name="Pain_At_The_Site" value="no"> 
                            <input type="checkbox" name="Pain_At_The_Site" value="yes">   Pain at the site
                           <br>
                           <br>
						    <input type="hidden" name="Pain_In_The_Extremities_With_Weakness" value="no" >
						    <input type="checkbox" name="Pain_In_The_Extremities_With_Weakness" value="yes" >   Pain in the extremities with weakness
						   <br>
						   <br>
						   <input type="hidden" name="Pruntus" value="no" > 
						   <input type="checkbox" name="Pruntus" value="yes" >   Pruntus
						  <br>
						  <br>
						  <input type="hidden" name="Urtecana" value="no" > 
						  <input type="checkbox" name="Urtecana" value="yes" >   Urtecana
						  <br>
						  <br>
						  <input type="hidden" name="Vomiting" value="no" >
						  <input type="checkbox" name="Vomiting" value="yes" >   Vomiting
						  
						  
						</div>
						
						<!--<h> Others: </h> <br>
					  <textarea rows ="4" cols="100"></textarea>-->
						 
						 <div class="pull-right">
                          <a href="#bws" class="btn btn-danger scroll-link" >Back</a>
                          <a href="#management" class="btn btn-danger scroll-link" >Next</a>
						 </div>
                      </div>
					  
					  
                        </div> 
					<!--</form>-->
					
        </div>
		</div>
		</div>
  </div>
  <!--/.container--> 
</section>

 

<section id="management" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  
      <h2>Management</h2>
      
    </div>
   <div class="panel-body">
                <div class="padd">
                      
                      
                    <!--<<form class="form-horizontal" method="post" action="">/form>-->
                      <div class="form-group">
                        
						 
                          
						  
						  <h><b>  Apply cold packs  :</b></h> 
						  <input type="radio" name="applycoldpacks" value="yes"> Yes 
						  <input type="radio" name="applycoldpacks" value="no"> No </br>
						  <br>
						  
						  <h><b> Calcium gluconate IV :</b></h> 
						  <input type="radio" name="calciumgluconate" value="yes"> Yes 
						  <input type="radio" name="calciumgluconate" value="no"> No </br>
						  <br>
						  
						  <h><b> Diasepam :</b></h> 
						  <input type="radio" name="diasepam" value="yes"> Yes 
						  <input type="radio" name="diasepam" value="no"> No </br>
						  <br>
						  
						  
						  
						  <h><b> Tetanus Prophylaxis :</b></h> 
						  <input type="radio" name="tetanusprophylaxis" value="yes"> Yes 
						  <input type="radio" name="tetanusprophylaxis" value="no"> No </br>
						  <br>
						  
						  <h><b> Wound cleaning :</b></h> 
						  <input type="radio" name="woundcleaning" value="yes"> Yes 
						  <input type="radio" name="woundcleaning" value="no"> No </br>
						  <br>
                        </div>
                      
					  
					  <div class="pull-right">
						<a href="#clinicalfeatures" class="btn btn-danger scroll-link" >Back</a>
						  <button type="submit" class="btn btn-danger" name="submit">SUBMIT</button>
                          <button type="reset" style="color: black" id="reset"><b>RESET All</b></button>
                      </div>
                    </form>
                  </div>


                </div>
  </div>
  <!--/.container--> 
</section>

 

<script src="../../../../../js/modernizr-latest.js"></script> 
<script src="../../../../../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="../../../../../js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../../../../../js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="../../../../../js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="../../../../../js/jquery.nav.js" type="text/javascript"></script> 
<script src="../../../../../js/jquery.fittext.js"></script> 
<script src="../../../../../js/waypoints.js"></script> 

<script src="../../../../../js/custom.js" type="text/javascript"></script> 
<script src="../../../../../js/owl-carousel/owl.carousel.js"></script>
<script>
/* $("#reset").click(function() {
 $('html, body').animate({
        scrollTop: $("#beesting").offset().top
    }, 200);
}); */
$('#reset').click(() => {
    $('html, body').animate({
        scrollTop: $('#beesting').offset().top
    }, 2000);
});
</script>
</body>
</html>
<?php
	
	
	include "../../../../../connection/connect.php";

	/* $querry1 = $connect->query("SELECT * FROM details_about_bee_stings"); // or die('querry 1 is not work');
	
	while($row = $querry1->fetch_assoc())
	{
		echo " ".$row["Index_Of_bee_Stings"]."".$row["Place_Of_Stings"]."<br>";
	} */
	$id = $_SESSION["patient_id"];
	
	if(isset($_POST['submit'])!="")
	{
		if(isset($_POST['timeofsting']))
		{
			$timeofsting = $_POST['timeofsting'];
		}
		else
		{
			$timeofsting = "no";
		}
		
		
		if(isset($_POST['numberofsting']))
		{
			$numberofsting  = $_POST['numberofsting'];
		}
		else
		{
			$numberofsting  = "no";
		}
		
		//$placeofsting = $_POST['placeofsting'];
		if(isset($_POST['placeofsting']))
		{
			$placeofsting = $_POST['placeofsting'];
		}
		else
		{
			$placeofsting = "no";
		}
		
		//$cos	= $_POST['cos'];
		if(isset($_POST['cos']))
		{
			$cos = $_POST['cos'];
		}
		else
		{
			$cos = "no";
		}
		
		$index_of_details_about_black_widow_spider = 'fn-bws'.time().'-'.$id;
		
		$Head_and_Neck = $_POST['Head_and_Neck'];
		$Upper_Limb = $_POST['Upper_Limb'];
		$Chest = $_POST['Chest'];
		$Abdomen = $_POST['Abdomen'];
		$Lower_Limb = $_POST['Lower_Limb'];
		$other = $_POST['other'];
		
		$querry1 = $connection->query("INSERT INTO details_about_black_widow_spider (index_of_details_about_black_widow_spider, Patient_Id, Time_Of_Stings, Number_of_stings, Place_Of_Stings, Head_and_Neck , Upper_Limb, Chest, Abdomen, Lower_Limb, other, Circumstances_Of_Stings) VALUES ('$index_of_details_about_black_widow_spider', '$id', '$timeofsting', '$numberofsting', '$placeofsting', '$Head_and_Neck','$Upper_Limb', '$Chest', '$Abdomen', '$Lower_Limb', '$other', '$cos')") or die(mysqli_error($connection));
	
	
	$Index_Of_clinical_features_black_widow_spider = time().'-'.$id;
	
	$Abdominal_Pain   =  $_POST['Abdominal_Pain'];
	$Headache    =  $_POST['Headache'];
	$Naurea   =  $_POST['Naurea'];
	$Pain_in_large_muscle_group  =  $_POST['Pain_in_large_muscle_group'];
	$Pain_At_The_Site    =  $_POST['Pain_At_The_Site'];
	$Pain_In_The_Extremities_With_Weakness   =  $_POST['Pain_In_The_Extremities_With_Weakness'];
	$Pruntus    =  $_POST['Pruntus'];
	$Urtecana   =  $_POST['Urtecana'];
	$Vomiting    =  $_POST['Vomiting'];
	
	
	
		
		$querry2 = $connection->query("INSERT INTO clinical_features_black_widow_spider (Index_Of_clinical_features_black_widow_spider, Patient_Id, Abdominal_Pain, Headache , Naurea, Pain_in_large_muscle_group, Pain_At_The_Site, Pain_In_The_Extremities_With_Weakness, Pruntus, Urtecana, Vomiting) VALUES ('$Index_Of_clinical_features_black_widow_spider', '$id', '$Abdominal_Pain','$Headache','$Naurea','$Pain_in_large_muscle_group','$Pain_At_The_Site','$Pain_In_The_Extremities_With_Weakness','$Pruntus','$Urtecana','$Vomiting')") or die(mysqli_error($connection));
	
	
	
		if(isset($_POST['applycoldpacks']))
		{
			$applycoldpacks = $_POST['applycoldpacks'];
		}
		else
		{
			$applycoldpacks = "no";
		}
		
		if(isset($_POST['calciumgluconate']))
		{
			$calciumgluconate =$_POST['calciumgluconate'];
		}
		else
		{
			$calciumgluconate = "no";
		}
		
		if(isset( $_POST['diasepam']))
		{
			$diasepam = $_POST['diasepam'];
		}
		else
		{
			$diasepam = "no";
		}
	
		if(isset( $_POST['tetanusprophylaxis']))
		{
			$tetanusprophylaxis = $_POST['tetanusprophylaxis'];
		}
		else
		{
			$tetanusprophylaxis = "no";
		}
	
		if(isset( $_POST['woundcleaning']))
		{
			$woundcleaning = $_POST['woundcleaning'];
		}
		else
		{
			$woundcleaning = "no";
		}
	
		
		
	$Index_Of_management_of_black_widow_spider = 'mobws-'.time().'-'.$id;
		
		
		$querry3 = $connection->query("INSERT INTO management_of_black_widow_spider (Index_Of_management_of_black_widow_spider, Patient_Id, Apply_Cold_Packs, Calcium_Glconate_IV , Diasepam , Tetanus_Prophylaxis , Wound_Cleaning) VALUES ('$Index_Of_management_of_black_widow_spider', '$id',  '$applycoldpacks', '$calciumgluconate','$diasepam', '$tetanusprophylaxis', '$woundcleaning') ") or die(mysqli_error($connection));
	}
	
	
	
?>
