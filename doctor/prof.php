<?php
session_start();
include_once('../connection/connect.php');


if(isset($_GET['username']))
{
  $UserName=$_GET['username'];
  if(isset($_POST['update']))
  {
 
    
  
  $fn=$_POST['eFirstName'];
  $ln=$_POST['eLastName'];
  $em = $_POST['eE_mail'];
   $us=$_POST['eUsername'];
   $pa=$_POST['ePassword'];
  
   
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

 

   $updated =  " UPDATE doctor_registration SET
   
     FirstName='$fn',  
      LastName='$ln',   
      E_mail='$em',   
      Username='$us',
      Password ='$pa' WHERE username ='$UserName'" or die();

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
<!--body {font-family: Arial, Helvetica, sans-serif;}
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

<!--/* Clear floats */
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
    border-width: 5px;-->
	
div.center {
  margin-left: auto;
  margin-right: auto;
  display: table;
}

ul {
  text-align: left;
}

body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=password],input[type=email],input[type=date],select {
    width: 100%;
    padding: 5px;
    display: inline-block;
    border: 1px solid #000000;
    text-align: center;
   
}

label{
  text-align: top;
}

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


/* Modal Content/Box */
.modal-content {
    background-color: #808080;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 2px solid #000000;
    width: 80%; /* Could be more or less, depending on screen size */
}
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
  if(isset($_GET['username']))
  {
  $id=$_GET['username'];
  $getselect=mysqli_query($connection,"SELECT * FROM doctor_registration WHERE username='$UserName'");

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
 

   $fn=$profile['FirstName'];
  $ln=$profile['LastName'];
  $em = $profile['E_mail'];
   $us=$profile['Username'];
   $pa=$profile['Password'];
  

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
          
          <!--<li><a href="#dsuf" class="scroll-link">Patient's details edit</a></li>-->
           <li><a href="doctor_hp.php" class="scroll-link">Home</a></li>
          <!-- <li><a href="#contactUs" class="scroll-link">Contact Us</a></li> -->
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
         
      </div>
    </div>
  </div>
</section>-->

<section id="dsuf" class="../contact-parlex">
<!--<div class="parlex-back">-->
<div class="container" style="width:60%;margin-top:10px;text-align: left; color:rgba(10,10,10,0.9) ;background-color:rgba(255-255-255);">
     <div class="card" >
      <!--<img src="../images/im-7.jpg" class="card-img-top" style="height: 150px ;width: 100%">-->
      <h2 > profile Edit Form </h2>
      <div class="card-body">
         <div class="row"> 
  
  <form action="" method="post" name="insertform" >

    
      <tr> First Name : </tr>
      <td><input type="text" style="text-align:left" name="eFirstName" required placeholder=" First Name"
      value="<?php echo $fn; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr> Last Name : </tr>
    <td><input type="text" style="text-align:left" name="eLastName" required placeholder="Last Name"
      value="<?php echo $ln; ?>" id="inputid" /><td>
    <br>
    <br>

     <tr>email: </tr>
    <td>  <input type="text" style="text-align:left" name="eE_mail" required placeholder="email"
      value="<?php echo $em; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr> Username : </tr>
    <td><input type="text" style="text-align:left" name="eUsername" required placeholder=" username"
      value="<?php echo$us; ?>" id="inputid" /></td>
    <br>
    <br>
	<tr> Password: </tr>
    <td><input type="text" name="ePassword" required placeholder=" password"
      value="<?php echo $pa; ?>" id="inputid" /></td>
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

  <!-- <script type ="text/javascript">
	$(function(){
		$(".div1").load("index1.html");
	});
</script>   -->