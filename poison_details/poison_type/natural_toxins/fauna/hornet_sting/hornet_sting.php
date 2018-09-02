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

<section id="hornetsting" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br>
      <h2>Hornet sting</h2>
      
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
						<div class = "row">
                        <div class="column">
						  <input type="hidden" name="Burning_pain" value="no"> 
                          <input type="checkbox" name="Burning_pain" value="yes">   Burning pain
                            </div>
						<div class="column"><input type="hidden" name="Swelling" value="no" > 
						  <input type="checkbox" name="Swelling" value="yes" >   Swelling
						    </div>
						<div class="column"><input type="hidden" name="Pruntus" value="no" >
						  <input type="checkbox" name="Pruntus" value="yes" >   Pruntus
						   </div>
						<div class="column"><input type="hidden" name="Nauka" value="no" >
						  <input type="checkbox" name="Nauka" value="yes" >   Nauka
						    </div>
						<div class="column"><input type="hidden" name="Vomiting" value="no" > 
						  <input type="checkbox" name="Vomiting" value="yes" >   Vomiting
						    </div>
						<div class="column">  <input type="hidden" name="Hypotenisum" value="no" > 
						  <input type="checkbox" name="Hypotenisum" value="yes" >   Hypotenisum
						    </div>
						<div class="column"><input type="hidden" name="Bronchospasm" value="no" >
						  <input type="checkbox" name="Bronchospasm" value="yes" >   Bronchospasm
						     </div>
						<div class="column"><input type="hidden" name="Oliguna" value="no" >  
						  <input type="checkbox" name="Oliguna" value="yes" >   Oliguna
						   
						</div>
						</div>
						
						<div class = "row">
						<div class="column"> 
						  <input type="hidden" name="Renal_failure" value="no" >
						  <input type="checkbox" name="Renal_failure" value="yes" >   Renal failure
						   </div>
						<div class="column"><input type="hidden" name="Diarrhoea" value="no" >
						<input type="checkbox" name="Diarrhoea" value="yes" >   Diarrhoea
						  </div>
						 <div class="column"> <input type="hidden" name="Tightness_of_chest" value="no" > 
						  <input type="checkbox" name="Tightness_of_chest" value="yes" >   Tightness of chest
						   </div>
						 <div class="column"><input type="hidden" name="Malaise" value="no" > 
						  <input type="checkbox" name="Malaise" value="yes" >   Malaise
						    </div>
						 <div class="column"><input type="hidden" name="Urticana" value="no" >
						  <input type="checkbox" name="Urticana" value="yes" >   Urticana
						     </div>
						 <div class="column"><input type="hidden" name="Facial_odema" value="no" > 
						  <input type="checkbox" name="Facial_odema" value="yes" >   Facial odema
						    </div>
						 <div class="column"><input type="hidden" name="Laryngeal_odema" value="no" >
						  <input type="checkbox" name="Laryngeal_odema" value="yes" >   Laryngeal odema
						     </div>
						 <div class="column"><input type="hidden" name="Seizure" value="no" > 
						  <input type="checkbox" name="Seizure" value="yes" >   Seizure
						    </div>
						 <div class="column"><input type="hidden" name="Rhabdomyolysis" value="no" >
						  <input type="checkbox" name="Rhabdomyolysis" value="yes" >     Rhabdomyolysis
						     </div>  
						  <br>
						  
						  
						</div>
                        
                      </div>
					  
					  <div class="form-group">
                        <label class="control-label col-lg-3" for="tags">Features of anaphylaxis:</label>
                        <div class="col-lg-5">
                          <input type="radio" name="foa" value="Provoked"> Present </br>
						  <input type="radio" name="foa" value="Unprovoked"> Absent </br>
                        </div>
                      </div>
					  
					  <div class="pull-right">
                          <a href="#hornetsting" class="btn btn-danger scroll-link" >Back</a>
                          <a href="#management" class="btn btn-danger scroll-link" >Next</a>
						  
                         <!-- <button type="submit" class="btn btn-danger" name="submit2">Save</button>
                          <button type="reset" class="btn btn-default">Reset</button>-->
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
                        
						 
                          <h><b> Apply ice packs :</b></h> 
						  <input type="radio" name="applyicepacks" value="yes"> Yes 
						  <input type="radio" name="applyicepacks" value="no"> No </br>
						  <br>
						  
						  <h><b> Artihistamine :</b></h> 
						  <input type="radio" name="artihistamine" value="yes"> Yes 
						  <input type="radio" name="artihistamine" value="no"> No </br>
						  <br>
						  
						  <h><b> Adranaline(IM) :</b></h> 
						  <input type="radio" name="adranaline" value="yes"> Yes 
						  <input type="radio" name="adranaline" value="no"> No </br>
						  <br>
						  
						  <h><b> ICU care :</b></h> 
						  <input type="radio" name="icucare" value="yes"> Yes 
						  <input type="radio" name="icucare" value="no"> No </br>
						  <br>
						  
						  
						  
						  <h><b> Steroids :</b></h> 
						  <input type="radio" name="steroids" value="yes"> Yes 
						  <input type="radio" name="steroids" value="no"> No </br>
						  <br>
						  
						  <h><b> Need Renal Replacement therapy :</b></h> 
						  <input type="radio" name="needrenalrep" value="yes"> Yes 
						  <input type="radio" name="needrenalrep" value="no"> No </br>
						  <br>
						  
						  <h><b> Need invasive ventilation :</b></h> 
						  <input type="radio" name="needinvasive" value="yes"> Yes 
						  <input type="radio" name="needinvasive" value="no"> No </br>
						  <br>
						  
						  <h><b> Stinger scrapped :</b></h> 
						  <input type="radio" name="stingerscrapped" value="yes"> Yes 
						  <input type="radio" name="stingerscrapped" value="no"> No </br>
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

	/* $querry1 = $connect->query("SELECT * FROM details_about_hornet_stings"); // or die('querry 1 is not work');
	
	while($row = $querry1->fetch_assoc())
	{
		echo " ".$row["Index_Of_hornet_Stings"]."".$row["Place_Of_Stings"]."<br>";
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
		
		$index_of_details_about_hornet_stings = 'fn-hs'.time().'-'.$id;
		
		$Head_and_Neck = $_POST['Head_and_Neck'];
		$Upper_Limb = $_POST['Upper_Limb'];
		$Chest = $_POST['Chest'];
		$Abdomen = $_POST['Abdomen'];
		$Lower_Limb = $_POST['Lower_Limb'];
		$other = $_POST['other'];
		
		$querry1 = $connection->query("INSERT INTO details_about_hornet_stings (index_of_details_about_hornet_stings, Patient_Id, Time_Of_Stings, Number_of_stings, Place_Of_Stings, Head_and_Neck , Upper_Limb, Chest, Abdomen, Lower_Limb, other, Circumstances_Of_Stings) VALUES ('$index_of_details_about_hornet_stings', '$id', '$timeofsting', '$numberofsting', '$placeofsting', '$Head_and_Neck','$Upper_Limb', '$Chest', '$Abdomen', '$Lower_Limb', '$other', '$cos')") or die(mysqli_error($connection));
	
	if(isset($_POST['foa']))
		{
			$foa = $_POST['foa'];
		}
		else
		{
			$foa = "no";
		}
	
	$Index_Of_clinical_features_hornet_stings = time().'-'.$id;
	
	$Burning_pain  =  $_POST['Burning_pain'];
	$Swelling   =  $_POST['Swelling'];
	$Pruntus   =  $_POST['Pruntus'];
	$Nauka   =  $_POST['Nauka'];
	$Vomiting   =  $_POST['Vomiting'];
	$Hypotenisum   =  $_POST['Hypotenisum'];
	$Bronchospasm   =  $_POST['Bronchospasm'];
	$Oliguna  =  $_POST['Oliguna'];
	$Renal_failure   =  $_POST['Renal_failure'];
	$Diarrhoea   =  $_POST['Diarrhoea'];
	$Tightness_of_chest   =  $_POST['Tightness_of_chest'];
	$Malaise   =  $_POST['Malaise'];
	$Urticana   =  $_POST['Urticana'];
	$Facial_odema   =  $_POST['Facial_odema'];
	$Laryngeal_odema   =  $_POST['Laryngeal_odema'];
	$Seizure   =  $_POST['Seizure'];
	$Rhabdomyolysis  =  $_POST['Rhabdomyolysis'];
	
	
		
		$querry2 = $connection->query("INSERT INTO clinical_features_hornet_stings (Index_Of_clinical_features_hornet_stings, Patient_Id, Burning_pain, Swelling, Pruntus, Nauka, Vomiting, Hypotenisum, Bronchospasm, Oliguna, Renal_failure, Diarrhoea, Tightness_of_chest, Malaise, Urticana, Facial_odema, Laryngeal_odema, Seizure, Rhabdomyolysis, Features_of_anaphylaxis) VALUES ('$Index_Of_clinical_features_hornet_stings', '$id', '$Burning_pain' ,'$Swelling' ,'$Pruntus' ,'$Nauka' ,'$Vomiting' ,'$Hypotenisum' ,'$Bronchospasm' ,'$Oliguna' ,'$Renal_failure' ,'$Diarrhoea' ,'$Tightness_of_chest' ,'$Malaise' ,'$Urticana' ,'$Facial_odema' ,'$Laryngeal_odema' ,'$Seizure' ,'$Rhabdomyolysis', '$foa')") or die('querry 2 does not work');
	
	
	
		if(isset($_POST['applyicepacks']))
		{
			$applyicepacks = $_POST['applyicepacks'];
		}
		else
		{
			$applyicepacks = "no";
		}
		
		if(isset($_POST['artihistamine']))
		{
			$artihistamine =$_POST['artihistamine'];
		}
		else
		{
			$artihistamine = "no";
		}
		
		if(isset( $_POST['adranaline']))
		{
			$adranaline = $_POST['adranaline'];
		}
		else
		{
			$adranaline = "no";
		}
	
		if(isset( $_POST['icucare']))
		{
			$icucare = $_POST['icucare'];
		}
		else
		{
			$icucare = "no";
		}
	
		if(isset( $_POST['steroids']))
		{
			$steroids = $_POST['steroids'];
		}
		else
		{
			$steroids = "no";
		}
	
		if(isset( $_POST['needrenalrep']))
		{
			$needrenalrep = $_POST['needrenalrep'];
		}
		else
		{
			$needrenalrep = "no";
		}
		
		if(isset( $_POST['needinvasive']))
		{
			$needinvasive = $_POST['needinvasive'];
		}
		else
		{
			$needinvasive = "no";
		}
	
		if(isset( $_POST['stingerscrapped']))
		{
			$stingerscrapped = $_POST['stingerscrapped'];
		}
		else
		{
			$stingerscrapped = "no";
		}
	 
		
	$index_of_management_of_hornet = 'moh-'.time().'-'.$id;
		
		
		$querry3 = $connection->query("INSERT INTO management_of_hornet (Index_Of_management_Of_Hornet, Patient_Id, Apply_ice_packs, Artihistamine, Adranaline_IM, ICU_care, Steroids, Need_Renal_Replacement_therapy, Need_invasive_ventilation, Stinger_scrapped) VALUES ('$index_of_management_of_hornet', '$id',  '$applyicepacks', '$artihistamine','$adranaline', '$icucare', '$steroids', '$needrenalrep', '$needinvasive', '$stingerscrapped') ") or die('querry 3 does not work');
	}
	
	
	
?>
