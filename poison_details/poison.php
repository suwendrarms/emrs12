<?PHP
	session_start();
	require_once('../connection/connect.php');
	
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

<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" type="text/css" href="../css/isotope.css" media="screen" />
<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css" />
<!-- Font Awesome -->
<link href="../font/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
<style>
div.center {
  margin-left: auto;
  margin-right: auto;
  display: table;
}

ul {
  text-align: left;
}
</style>
<header class="header">

  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
	  
         <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button> 
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft" ><b><i></i>Poison Details</b></a>
		
      


		</div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li><a href="#naturaltoxins" class="scroll-link">Natural Toxins</a></li>
          <li><a href="#chemicals" class="scroll-link">Chemicals</a></li>
          <li><a href="#pharmaceuticals" class="scroll-link">Pharmaceuticals</a></li>
          <li><a href="#others" class="scroll-link">Others</a></li>
		  <li><a href="../doctor/doctor_hp.php" style="color: #000000 "  class=" scroll-top animated fadeIn "><b>| DR. <?php echo $doctor_details['FirstName'].' '.$doctor_details['LastName']  ?></b></a></li>
		   <li><a style="color: light-blue" href="../index.php">(logout)</a></li>
			</ul>
      </div>
      <!--/.navbar-collapse--> 
			 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->
<div id="#top"></div>
<!--<section id="home">
  <div class="banner-container"> <img src="../images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="../font-size: 40px;">Belief in recovery always</h1>
        <!-- <a href="#basics" class="arrow-link"> <i class="fa fa-arrow-circle-down fa-2x"></i> </a>  
       </div>
    </div>
  </div>
</section>-->
<section id="naturaltoxins" class="page-section color">
  <div class="container">
  <table class="table table-hover">
    <div class="heading text-center"> 
      <!-- Heading -->
	  <br>
      <h2>Natural Toxins</h2>

    </div>
	

    <div class="row"> 
      <!-- item -->
      <div class="col-md-3"> </i>
        <h3><span class="id-color">Fauna</span></h3>
		<ul>
        <li><a href="#fauna">Snake bite</a><br></li>
        <li><a href="#fauna">Scorpion bite</a><br></li>
        <li><a href="#fauna">Jellyfish</a><br></li>
        <li><a href="poison_type/natural_toxins/fauna/bee_sting/bee_sting.php">Bee sting</a><br></li>
        <li><a href="poison_type/natural_toxins/fauna/hornet_sting/hornet_sting.php">Hornet sting</a><br></li>
        <li><a href="poison_type/natural_toxins/fauna/wasp_sting/wasp_sting.php">Wasp sting</a><br></li>
        <li><a href="poison_type/natural_toxins/fauna/bsw_sting/bsw_sting.php">Black widow spider</a><br></li>
        <li><a href="#fauna">Blister beetle</a><br></li>
        <li><a href="#fauna">Centipede</a><br></li>
        <li><a href="#fauna">Turtle flesh poisoning</a><br></li>
        <li><a href="#fauna">Others</a><br></li>
		</ul>
      </div>
      <!-- end: --> 
      
      <!-- item -->
     <div class="col-md-3"> </i>
        <h3><span class="id-color">Flora</span></h3>
		<ul>
        <li><a href="#flora">Allary</a><br></li>
        <li><a href="#flora">Aththana</a><br></li>
        <li><a href="#flora">Aththe</a><br></li>
        <li><a href="#flora">Karththigai</a><br></li>
        <li><a href="#flora">Kepunkiriya</a><br></li>
        <li><a href="#flora">Hondala</a><br></li>
        <li><a href="#flora">Habarala</a><br></li>
        <li><a href="#flora">Goda Kaduru</a><br></li>
        <li><a href="#flora">Endana</a><br></li>
        <li><a href="#flora">Diya Kadunu</a><br></li>
        <li><a href="#flora">Others</a><br></li>
		</ul>
      </div> 
      <!-- end: --> 
      
      <!-- item -->
       <div class="col-md-3"> </i>
        <h3><span class="id-color">Fungal Poison</span></h3>
		<ul>

		<li> <a href="#microbialpoison">Mushroom</a><br></li>

<br></li>
		
        </ul>
      </div> 
      <!-- end: --> 
      
      <!-- item -->
       <div class="col-md-3"> </i>
        <h3><span class="id-color">Microbial Poison</span></h3>
		<ul>
        <li><a href="#microbialpoison">Botalism</a><br></li>
        <li><a href="#microbialpoison">Food poisoning</a><br></li>
		</ul>
		<br>
      </div> 
      <!-- end:--> 
    </div>
	
  </div>
 </table>
  <!--/.container--> 
</section>

<script src="../js/modernizr-latest.js"></script> 
<script src="../js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="../js/bootstrap.min.js" type="text/javascript"></script> 
<script src="../js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="../js/fancybox/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="../js/jquery.nav.js" type="text/javascript"></script> 
<script src="../js/jquery.fittext.js"></script> 
<script src="../js/waypoints.js"></script> 
<script src="../js/custom.js" type="text/javascript"></script> 
<script src="../js/owl-carousel/owl.carousel.js"></script>
</body>
</html>
