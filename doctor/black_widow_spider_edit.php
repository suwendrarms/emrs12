<?php
session_start();
include_once('../connection/connect.php');

if(isset($_GET['Patient_Id']))
{
  $id=$_GET['Patient_Id'];
   if(isset($_POST['update']))
  {
 
    
  
  $ti=$_POST['eTime_Of_Stings'];
  $nu=$_POST['eNumber_Of_Stings'];
  $pl= $_POST['ePlace_Of_Stings'];
   $he=$_POST['eHead_and_Neck'];
  $up= $_POST['eUpper_Limb'];
   $ch= $_POST['eChest'];
  $ab= $_POST['eAbdomen'];
  $lo= $_POST['eLower_Limb'];
  $ot= $_POST['eother'];
  $ci= $_POST['eCircumstances_Of_Stings'];

 
   
   
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

   $updated =  " UPDATE details_about_black_widow_spider SET
   
    Time_Of_Stings='$ti',  
      Number_Of_Stings='$nu',   
      Place_Of_Stings='  $pl',   
       Head_and_Neck=' $he',
     Upper_Limb='$up',
    Chest='$ch',
   Abdomen=' $ab',
     Lower_Limb=' $lo',
     other ='$ot',
       Circumstances_Of_Stings=' $ci'  WHERE Patient_Id='$id'" or die();

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
  $getselect=mysqli_query($connection,"SELECT * FROM details_about_black_widow_spider WHERE Patient_Id='$id'");

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
 
$ti=$profile['Time_Of_Stings'];
  $nu=$profile['Number_Of_Stings'];
  $pl= $profile['Place_Of_Stings'];
   $he=$profile['Head_and_Neck'];
  $up= $profile['Upper_Limb'];
   $ch= $profile['Chest'];
  $ab= $profile['Abdomen'];
  $lo=$profile['Lower_Limb'];
  $ot= $profile['other'];
  $ci= $profile['Circumstances_Of_Stings'];
 

   


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
      <h2 >black widow spider Edit Form </h2>
      <div class="card-body">
         <div class="row"> 
  
  <form action="" method="post" name="insertform" >

   
      <tr> Time Of Stings: </tr>
      <td><input type="time" name="eTime_Of_Stings" required placeholder=" Time Of Stings"
      value="<?php echo $ti; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr> Number of stings: </tr>
    <td><input type="number" name="eNumber_Of_Stings" required placeholder="Number of stings"
      value="<?php echo $nu; ?>" id="inputid" /><td>
    <br>
    <br>

     <tr> Place Of Stings : </tr>
    <td>  <input type="text" name="ePlace_Of_Stings" required placeholder=" Place Of Stings"
      value="<?php echo $pl; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr> Head and Neck: </tr>
    <td><input type="text" name="eHead_and_Neck" required placeholder=" Head and Neck"
      value="<?php echo$he; ?>" id="inputid" /></td>
    <br>
    <br>

      <tr>Upper Limb: </tr>
    <td>  <input type="text" name="eUpper_Limb" required placeholder="Upper Limb"
      value="<?php echo  $up; ?>" id="inputid" /></td>
    <br>
    <br>
    
     <tr> Chest: </tr>
    <td>  <input type="text" name="eChest" required placeholder="Chest"
      value="<?php echo  $ch; ?>" id="inputid" /></td>
    <br>
    <br>

     <tr> Abdomen: </tr>
    <td>  <input type="text" name="eAbdomen" required placeholder="Abdomen"
      value="<?php echo  $ab; ?>" id="inputid" /></td>
    <br>
    <br>

     

     <tr> Lower Limb: </tr>
    <td>  <input type="text" name="eLower_Limb" required placeholder="Lower Limb"
      value="<?php echo $lo; ?>" id="inputid" ></td>
    <br>
    <br>

      <tr>other: </tr>
    <td><input type="text" name="eother" required placeholder=" other"
      value="<?php echo $ot; ?>" id="inputid" /></td>
<br>
<br>

 <tr>Circumstances Of Stings: </tr>
    <td><input type="text" name="eCircumstances_Of_Stings" required placeholder="Circumstances Of Stings"
      value="<?php echo $ci; ?>" id="inputid" /></td>
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
