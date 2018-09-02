
<!doctype html>

<html lang="en-gb" class="no-js">
<head>
<style>
@import "bourbon";

body {
	background: #eee !important;	
}

.wrapper {	
	margin-top: 10px;
  margin-bottom: 10px;
}


	.form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
    color: rgba(128,128,128,0.1);
		
		}

body {font-family: Arial, Helvetica, sans-serif;}
	input[type="text"] {
	  width: 100%;
    padding: 5px;
    display: inline-block;
    border: 1px solid #000000;
    text-align: center;
	}

	input[type="password"] {
	  width: 100%;
    padding: 5px;
    display: inline-block;
    border: 1px solid #000000;
    text-align: center;
	}
	
	label{
  text-align: left;
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
    border-width: 15px;
} 

.circular--square {
  border-top-left-radius: 70% 70%;
  border-top-right-radius: 70% 70%;
  border-bottom-right-radius: 70% 70%;
  border-bottom-left-radius: 70% 70%;
}

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

<link rel="stylesheet" href="css/bootstrap.min.css" />

<link rel="stylesheet" href="js/fancybox/jquery.fancybox.css" type="text/css" media="screen" />
<link href="css/animate.css" rel="stylesheet" media="screen">
<!-- Owl Carousel Assets -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet">
<link rel="stylesheet" href="css/styles.css" />
<!-- Font Awesome -->
<link href="font/css/font-awesome.min.css" rel="stylesheet">

</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">
        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-tarPOST="#main-nav"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
        <a href="#" class="navbar-brand scroll-top logo  animated bounceInLeft"><b><i></i></b></a> </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse">
        <ul class="nav navbar-nav" id="mainNav">
          <li class="active" id="firstLink"><a href="#home" class="scroll-link">Home</a></li>
          
          <li><a href="#login" class="scroll-link">Login</a></li>
          
        </ul>
      </div>
    </nav>
   </div>
</header>

<div id="#top"></div>
<section id="home">
  <div class="banner-container"> <img src="images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeInDownBig">
        <h1 class="responsive-headline" style="font-size: 40px;">Belief in recovery always</h1>
         
      </div>
    </div>
  </div>
</section>
<section id="login" class="../contact-parlex">
<!--<div class="parlex-back">-->
  <div class="container">
    <div class="heading text-center">   
       <div class="wrapper">
<div class="container" style="width:50%;margin-top:10px;text-align: center; <!--color:rgba(10,10,10,0.9) ;background-color:rgba(250,250,250,0.9)--> ;">
     <div class="card" >
      <!--<img src="images/im-1.jpg" class="card-img-top" style="width:100%;height: 100px">-->
      <h2 > LOGIN </h2><br>

      <div class="card-body">
        <form class="form-group" action="redirect/logincon.php" method="POST"  style="text-align: center">
            <div class="form-group">
              <label>Username :</label><br>
              <input type="text"  class="form-group" style="text-align:left; width:70%"name="username" placeholder="Enter Username" required data-validation-required-message="Please enter your UserName">
           </div>
            <div class="form-group">
              <label >Password :</label>
			  <br>
               <input type="password" class="form-group" style="text-align: left; width:70%" name ="password"  placeholder=" Enter Password" required data-validation-required-message="Please enter your Password">
           </div>
           
		   <div class="form-group">
		    <input type="checkbox" id="remember_me" name="_remember_me"  />
			<label for="remember_me">&thinsp; Remember me</label>
		   </div>
			
           <button type="submit"  name="login_submit" id="ab1" class="btn btn-primary" style="display: block; margin-left: auto;margin-right: auto;">Login</button>
			 
          </form>
		  <div class="container" style="float: center;">
			<span class="psw">Forgot <a href="#">username/password?</a></span>
		  </div>
		  <form class="form-group" action="#home" method="POST">
		    
            
          </form>
		  <br>
		  <br>
		  
		  
		  
          
		    <div class="container" style="float: right;">
		    <span class="psw">Don't you have an account? <a href="#register">Register</a></span>
			</div>
			<br>
			<br>
			<br>
			<br>
			
            <!--<form class="form-group" action="#register" method="POST">
            <button type="submit"  name="login_register" class="btn btn-primary" style="display: block; margin-left: auto;margin-right: auto;">Register</button>
          </form>-->
		  
		 
		  
        </div>
      </div>
    </div>
    </div>
  </div>
</div>
</div>

</section>



	

<br>
<br>
<br>
<section id="register" class="../contact-parlex">

<!--<div class="parlex-back">-->
  <div class="container">
    <div class="heading text-center">   
       <div class="wrapper">
<div class="container" style="width:50%; margin-top:10px;text-align: center; <!--color:rgba(10,10,10,0.9) ;background-color:rgba(250,250,250,0.9)--> ;">
     <div class="card" >
      <!--<img src="images/im-1.jpg" class="card-img-top" style="width:100%;height: 100px">-->
      <h1 > REGISTER </h1>
	  <br>
			<div class="card-body">
		 <div class="card" style="float: left;width:30% ;">
      <!--<img src="images/im-6.jpg" class="card-img-top" style="height: 100px ;width:100%">-->
	  <img class="circular--square" src="images/doctor-img2.png" style="height: 300px ;width:400%" />
      <div class="card-body">
         <form class="form-group" action="register/docsignup.php" method="POST">
            <div class="form-group"> <br>
                <button type="submit" id="ab1" name="asdoc" class="btn btn-primary" style="display: block; margin-left: auto;margin-right: auto;" >As a Doctor</button>
             </div>
           </form>
            </div>
          </div>	

  <div class="card" style="float: right; width:30%;">
			<!--<img src="images/im-4.jpg" class="card-img-top" style="width:  100%;height: 100px">-->
			<img class="circular--square" src="images/nurse.png" style="width:  200%;height: 200px" />
			<div class="card-body">
				 <form class="form-group" action="register/nursinup.php" method="post">
            <div class="form-group"> <br><br><br><br>
                 <button type="submit" id="ab1" name="asoff" class="btn btn-primary" style="display: block; margin-left: auto;margin-right: auto;" >As an Officer</button>
             </div>
           </form>
            </div>
          </div>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>




<script src="js/modernizr-latest.js"></script> 
<script src="js/jquery-1.8.2.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/jquery.isotope.min.js" type="text/javascript"></script> 
<script src="js/fancybox
/jquery.fancybox.pack.js" type="text/javascript"></script> 
<script src="js/jquery.nav.js" type="text/javascript"></script> 
<script src="js/jquery.fittext.js"></script> 
<script src="js/waypoints.js"></script> 

<script src="js/custom.js" type="text/javascript"></script> 
<script src="js/owl-carousel/owl.carousel.js"></script>


</body>
</html>

  