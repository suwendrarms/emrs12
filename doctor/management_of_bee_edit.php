<?php
session_start();
include_once('../connection/connect.php');

if(isset($_GET['Patient_Id']))
{
  $id=$_GET['Patient_Id'];
   if(isset($_POST['update']))
  {
 
    
  
  $ap=$_POST['eApply_ice_packs'];
  $ar=$_POST['eArtihistamine'];
 
   $ad=$_POST['eAdranaline_IM'];
  $ic= $_POST['eICU_care'];
   $st= $_POST['eSteroids'];
  $ne= $_POST['eNeed_Renal_Replacement_therapy'];
  $nee= $_POST['eNeed_invasive_ventilation'];
    $sti= $_POST['eStinger_scrapped'];
 
   
 
   
   
/*

  $updated = mysqli_query( $connection,"UPDATE patient_registration SET
   
     FirstName='$fname',  
      LastName='$lname',   
      medical_history='  $medi',   
       patient_NIC=' $nic',
      guardian_name='$gn',
    guardian_phonenumber='$gp',
   guardian_address=' $ga',
     Date_Of_Birth=' $dob',
     Gender ='$gen'
       mobile_number=' $mobi',
    land_number=' $land',
    address='$add'  WHERE Registration_Number='$id'")or die();
  if($updated)
  {
  $msg="Successfully Updated!!";
  header('Location:../reception_nurse/nursehome.php');
  }

*/
 

  

   $updated =  " UPDATE management_of_bee SET
   
    Apply_ice_packs='$ap',  
     Artihistamine='$ar',   
       
     
   Adranaline_IM='$ad',
    ICU_care='$ic',
   Steroids=' $st',
    Need_Renal_Replacement_therapy=' $ne',
     Need_invasive_ventilation ='$nee',
      Stinger_scrapped=' $sti'      
       WHERE Patient_Id='$id'" or die();

if (mysqli_query($connection, $updated)) 
{
    echo "Record updated successfully";
} 
else
{
    echo "Error updating record: " . mysqli_error($connection);
}


}
}

?>



<!doctype html>

<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=date],select {
    width: 100%;
    padding: 5px;
    display: inline-block;
    border: none;
    text-align: center;
   
}

label{
  text-align: top;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}

#ab1:hover{
  cursor: pointer;
}
hr { 
    display: block;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-left: auto;
    margin-right: auto;
    border-style: inset;
    border-width: 5px;
</style>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title>Regional Poison Information System</title>
<meta name="description" content="">
<meta name="author" content="Group4p">



<link rel="stylesheet" href="../css/bootstrap.min.css" />

<link rel="stylesheet" href="../js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="../css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="../js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="../css/styles.css" />
<!-- Font Awesome -->
<link href="../css/font-awesome.min.css" rel="stylesheet">



</head>

<body>

 <?php
  if(isset($_GET['Patient_Id']))
  {
  $id=$_GET['Patient_Id'];
  $getselect=mysqli_query($connection,"SELECT * FROM management_of_bee WHERE Patient_Id='$id'");

  // $result =mysqli_query($connection,$query);
  
  //$nurse_details = mysqli_fetch_assoc($result);


  while($profile=mysqli_fetch_assoc($getselect) )
  {
   /* $username=$profile['username'];
    $fname=$profile['first_name'];
    $lname=$profile['last_name'];
    $pat=$profile['patient_ic'];
    $age=$profile['age'];
    $dob=$profile['date_of_birth'];
    $add=$profile['address'];
    $cou=$profile['country'];
    $gen=$profile['gender'];
    $hist=$profile['medical_history'];
*/
 
$ap=$profile['Apply_ice_packs'];
  $ar=$profile['Artihistamine'];
 
   $ad=$profile['Adranaline_IM'];
  $ic= $profile['ICU_care'];
   $st=$profile['Steroids'];
  $ne= $profile['Need_Renal_Replacement_therapy'];
  $nee=$profile['Need_invasive_ventilation'];
    $sti=$profile['Stinger_scrapped'];

   


?>


<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
         <!-- <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li> -->
          
      
           <li><a href="../doctor/doctor_hp.php" class="scroll-link">Home</a></li>
          <!-- <li><a href="#contactUs" class="scroll-link">Contact Us</a></li> -->
        </ul>
      </div>
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header--
<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="../images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="../font-size: 40px;">Belief in recovery always</h1>
         
      </div>
    </div>
  </div>
</section>
-->
<section id="dsuf" class="../contact-parlex">
<div class="parlex-back">
<div class="container" style="width:60%;margin-top:10px;text-align: center; color:rgba(10,10,10,0.9) ;background-color:rgba(250,250,250,0.9) ;">
     <div class="card" >
      <img src="../images/im-7.jpg" class="card-img-top" style="height: 150px ;width: 100%">
      <h2 > management of bee stings Edit Form </h2>
      <div class="card-body">
         <div class="row"> 
  
  <form action="" method="post" name="insertform" >

   
      <tr> Apply ice packs: </tr>
      <td><input type="time" name="eApply_ice_packs" required placeholder=" Apply ice packs"
      value="<?php echo $ap; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr>Artihistamine: </tr>
    <td><input type="number" name="eArtihistamine" required placeholder="Artihistamine"
      value="<?php echo $ar; ?>" id="inputid" /><td>
    <br>
    <br>

    

      <tr> Adranaline iM: </tr>
    <td><input type="text" name="eAdranaline_IM" required placeholder="Adranaline iM"
      value="<?php echo$ad; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr>ICU care: </tr>
    <td>  <input type="text" name="eICU_care" required placeholder=" ICU care"
      value="<?php echo  $ic; ?>" id="inputid" /></td>
    <br>
    <br>
    
     <tr> Steroids: </tr>
    <td>  <input type="text" name="eSteroids" required placeholder="Steroids"
      value="<?php echo  $st; ?>" id="inputid" /></td>
    <br>
    <br>

     <tr>Need Renal Replacement therapy: </tr>
    <td>  <input type="text" name="eNeed_Renal_Replacement_therapy" required placeholder="Need Renal Replacement therapy"
      value="<?php echo  $ne; ?>" id="inputid" /></td>
    <br>
    <br>

     

     <tr>Need invasive ventilation: </tr>
    <td>  <input type="text" name="eNeed_invasive_ventilation" required placeholder="Need invasive ventilation"
      value="<?php echo $nee; ?>" id="inputid" ></td>
    <br>
    <br>

      <tr>Stinger scrapped</tr>
    <td><input type="text" name="eStinger_scrapped" required placeholder=" stinger scrapped"
      value="<?php echo $sti; ?>" id="inputid" /></td>
<br>
<br>

 
     
     
     
     
     
      <input type="submit" name="update" value="Update" id="inputid" />

    </p>
  </form>
<?php } } ?>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>
                    

<!--[if lte IE 8]><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><![endif]--> 
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
