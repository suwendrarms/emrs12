
<!doctype html>

<html lang="en-gb" class="no-js">
<!--<![endif]-->
<head>
<style>
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

<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li> <a href="../index.php">Home</a></li>
          
          <!--<li><a href="#dsuf" class="scroll-link">Doctor's Sign up form</a></li>
           <li><a href="#contactUs" class="scroll-link">Contact Us</a></li> -->
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
<div id="#top"></div>
<section id="dsuf" class="../contact-parlex">
<!--<div class="parlex-back">-->
<div class="container" style="width:60%;margin-top:10px;text-align: center; color:rgba(10,10,10,0.9) ;background-color:rgba(255-255-255);">
     <div class="card" ><br><br>
      <!--<img src="../images/im-7.jpg" class="card-img-top" style="height: 150px ;width: 100%">-->
      <h2 > Doctor's Registration Form </h2><br>
      <div class="card-body">
         <div class="row"> 
      <form class="form-horizontal" action="register_doctor.php" onSubmit="return formValidation()"
      method="GET" name ='reg'>
                      <p id="head"></p>
                      <!-- Title -->
                     <div class="form-group">
                        <label class="control-label col-lg-3" for="title">Name:</label>
                         <label class="control-label col-lg-1" for="title">Dr.</label>
                        
                        <div class="col-lg-3">
                          <input type="text" id="firstname"  name="firstname" placeholder="First Name" required  class="form-control" style="float: left">  
                          <p id="p1"></p>
                        </div>
                        <div class="col-lg-3">
                          <input type="text"  id="lastname" name="lastname" placeholder="Last Name" required  class="form-control" style="float: right">
                          <p id="p11"></p>  
                        </div>
                       <span class="focus-input100" data-placeholder="&#xf207;"></span>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-lg-3" for="title">Email :</label>
                        <div class="col-lg-5">
                         <input type="email"  name ="email"  id="email" placeholder="Some@gmail.com" required  class="form-control">  
                          <p id="p3"></p>
                      </div>
                      
                    </div>
                      <!-- Cateogry -->
                      <div class="form-group">
                        <label class="control-label col-lg-3">Username :</label>
                        <div class="col-lg-5">
                          <input type="text" id="username" name ="username"   placeholder="UserName" required class="form-control"> 
                           <p   id="p2"></p> 
                        </div>
                  
                        </div>
                         <div class="form-group">
                        <label class="control-label col-lg-3">Password :</label>
                        <div class="col-lg-4">
                          <input type="password" id="pass"  name="pass" placeholder="Password" required  class="form-control" style="float: left"> 
                          <p id="p8"></p>  
                        </div>
                        <div class="col-lg-4">
                          <input type="password" id="compass"  name="compass" placeholder="Confirm Password" required  class="form-control" style="float: right">  
                        </div>
                       <p id="p10"></p>  
                      </div>
                        <div class="form-group ">
                        <label class="control-label col-lg-3">Date of Birth :</label>
                         <div class="col-lg-3">
                        <input type="date"  min="1950-01-01" start="1980-01-01" name ="dob" class="form-control" placeholder="Date of Birth">
                    </div>
                  </div>
                      
                        <div class="form-group">
                        <label class="control-label col-lg-3" for="tags">Gender :</label>
                        <div class="col-lg-2">
                          <input type="radio" id ="gender" name="gender" value="Female"  >Female
                       </div>
                          <div class="col-lg-2">
                          <input type="radio" id ="gender" name="gender" value="Male" >  Male
                        </div>
                      </div>
                       <div class="form-group">
                        <label class="control-label col-lg-3">Contact:</label>
                         <div class="col-lg-3">
                        <input type="text" id="mobile" name ="mobile" placeholder="Mobile(xxx)xxx-xxxx" class="form-control"  style="float: left">
                         <p id="p6"></p>
                     </div>
                     <div class="col-lg-3">
                          <input type="text" id="land" name ="land" placeholder="Land(xxx)xxx-xxxx " class="form-control"  style="float: right;">
                           <p id="p7"></p>
                        </div> 
                       
                        </div>   


                      <div class="form-group">
                        <label class="control-label col-lg-3" for="tags">Address :</label>
                        <div class="col-lg-3">
                           <input type="text"  name ="house" id="inputAddress2" placeholder="House No/Name" >
                           <p id="p5"></p>
                           </div>
                          <div class="col-lg-3">
                             <input type="text"  name ="city" id="inputCity" placeholder="City" >
                             <p id="p9"></p>
                          </div>
                          <div class="col-lg-3">
                          <select id="inputState"  name ="state"  >
                <option selected="" value="Default">State..</option>
								<option value="Ampara">Ampara</option>
								<option value="Anuradhapura">Anuradhapura</option>
								<option value="Badulla">Badulla</option>
								<option value="Batticaloa">Batticaloa</option>
								<option value="Colombo">Colombo</option>
								<option value="Galle">Galle</option>
								<option value="Gampaha">Gampaha</option>
								<option value="Hambantota">Hambantota</option>
								<option value="Jaffna">Jaffna</option>
								<option value="Kalutara">Kalutara</option>
								<option value="Kandy">Kandy</option>
								<option value="Kegalle">Kegalle</option>
								<option value="Kilinochchi">Kilinochchi</option>
								<option value="Kurunegala">Kurunegala</option>
								<option value="Mannar">Mannar</option>
								<option value="Matale">Matale</option>
								<option value="Matara">Matara</option>
								<option value="Monaragala">Monaragala</option>
								<option value="Mullaitivu">Mullaitivu</option>
								<option value="Nuwara Eliya">Nuwara Eliya</option>
								<option value="Polonnaruwa">Polonnaruwa</option>
								<option value="Puttalam">Puttalam</option>
								<option value="Ratnapura">Ratnapura</option>
								<option value="Trincomalee">Trincomalee</option>
								<option value="Vavuniya">Vavuniya</option>
                        </select>
                        
                          </div>
                           <p id="p4"></p>
                      </div>
                      
                      <div class="col-lg-offset-3 col-lg-3">
                           <button type="submit" class="btn btn-danger"  style="float: left">Register</button>
                </div>
                 <div class="col-lg-offset-0 col-lg-3">
                          <button type="reset" class="btn btn-danger" style="float: right;">Reset</button>
                       
                      </div>
                     </form>
                   </div>
                 </div>
               </div>
             </div>
           </div>
         </section>

 <script type="text/javascript">
    function formValidation() {

var firstname = document.getElementById('firstname');
var lastname = document.getElementById('lastname');
var username = document.getElementById('username');
var pass = document. getElementById('pass');
var compass = document.getElementById('compass');
var mobile = document.getElementById('mobile');
var land = document.getElementById('land');
var inputAddress2 = document.getElementById('inputAddress2');
var city = document.getElementById('inputCity');
var state = document.getElementById('inputState');

if (inputAlphabet1(firstname,"* For your name please use alphabets only *")) {
if (inputAlphabet2(lastname, "* For your name please use alphabets only *")) {  
if (lengthDefine1(username, 6, 8)) {
if (passwordvalid(pass, " * Password should Minimum 8 characters  and maximum 10 characters, at least one uppercase letter, one lowercase letter, one number and one character($,@,!,%,*,?,&).")){
if (Confirm(pass, compass)){
if (phonenum1(mobile, "*Enter Correct format Mobile Number.Eg (123) 456-7890")){
if (phonenum2(land, "*Enter Correct format Land Number.Eg (123) 456-7890")){
if (textAlphanumeric(inputAddress2, "* For Address please use numbers and letters *")) {
if (inputAlphabet3(inputCity, "* For your city please use alphabets only *")) {
if (trueSelection(inputState,"* Please Choose any one option")) {


return true;
}
}
}
}
}
}
}
}
}
}
return false;
}

function inputAlphabet1(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
}
else {
document.getElementById('p1').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function inputAlphabet2(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
}
else {
document.getElementById('p11').innerText = alertMsg; 
inputtext.focus();
return false;
}
}

function textAlphanumeric(inputtext, alertMsg) {
var alphaExp = /^[0-9a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
} else {
document.getElementById('p5').innerText = alertMsg; 
return false;
}
}


function lengthDefine1(inputtext, min, max) {
var uInput = inputtext.value;
if (uInput.length >= min && uInput.length <= max) {
return true;
} 
else {
document.getElementById('p2').innerText = "* Please enter between " + min + " and " + max + " characters *";
inputtext.focus();
return false;
}
}

function passwordvalid(inputtext, alertMsg) {
var alphaExp = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[$@$!%*?&])[A-Za-z\d$@$!%*?&]{8,10}/;
if (inputtext.value.match(alphaExp)) {
return true;
 
} 
else {
document.getElementById('p8').innerText = alertMsg;
inputtext.focus();
return false;
}

}

function Confirm(inputtext1, inputtext2) {

        if (inputtext1.value != inputtext2.value) {
           document.getElementById('p10').innerText = "*Passwords do not match.*";
            inputtext1.focus();
            inputtext2.focus();
            return false;
        }
        return true;
}

function phonenum1(inputtext, alertMsg) {
var alphaExp = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
if (inputtext.value.match(alphaExp)) {
return true;
 
} 
else {
document.getElementById('p6').innerText = alertMsg;
inputtext.focus();
return false;
}

}

function phonenum2(inputtext, alertMsg) {
var alphaExp = /^(\()?\d{3}(\))?(-|\s)?\d{3}(-|\s)\d{4}$/;
if (inputtext.value.match(alphaExp)) {
return true;
 
} 
else {
document.getElementById('p7').innerText = alertMsg;
inputtext.focus();
return false;
}

}

function trueSelection(inputtext,alertMsg) {
if (inputtext.value == "Default") {
document.getElementById('p4').innerText = alertMsg; 
inputtext.focus();
return false;
} 
else {
return true;
}
}



function inputAlphabet3(inputtext, alertMsg) {
var alphaExp = /^[a-zA-Z]+$/;
if (inputtext.value.match(alphaExp)) {
return true;
}
else {
document.getElementById('p9').innerText = alertMsg; 
inputtext.focus();
return false;
}
}
</script>
 
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

<!--adding javascrip -->
