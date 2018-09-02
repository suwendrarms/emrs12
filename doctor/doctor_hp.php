<?PHP
	session_start();
	require_once('../connection/connect.php');
	
	$UserName = $_SESSION["username"];
	$password = $_SESSION["password"];
	$query ="select * from doctor_registration where Username='$UserName' and Password ='$password'";
	
	$result =mysqli_query($connection,$query);
	
	$doctor_details = mysqli_fetch_assoc($result);
	
  $query1 ="select * from users";
  
  $result1 =mysqli_query($connection,$query1);
  
  $doctor_details1 = mysqli_fetch_assoc($result1);
  
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

.not-active:link {
    color: #000000;
	text-decoration:none;
}

/* visited link */
.not-active:visited {
    color: #000000;
}

/* mouse over link */
.not-active:hover {
    color: #000000;
}

/* selected link */
.not-active:active {
    color: #000000;
}
#dropdown {
    float: left;
    overflow: hidden;
}

#dropdown .dropbtn {
    font-size: 23px;
    font-color:#ccc;     
    border: none;
    outline: none;
    color: #ccc;
    padding: 8px 20px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
 #dropdown:hover .dropbtn {
    background-color: #fff;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    float: none;
    color: black;
    font-size:12px;
    padding: 2px 70px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: green;
}

#dropdown:hover .dropdown-content {
    display: block;
}
#lab{
  font-size: 12px;
}
#dropdown{
  margin-top: 10px;
}
</style>
</head>

<body>
<header class="header">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">   
	  <a href="#" class="not-active scroll-top animated fadeIn "><h1 font-size = "5px">WELCOME DR. <?php echo $doctor_details['FirstName'].' '.$doctor_details['LastName']  ?></h1></a>
      </div>
      <!--/.navbar-header-->
      <div id="main-nav" class="collapse navbar-collapse ">
        <ul class="nav navbar-nav" id="mainNav">
        <?php
            if(isset($_GET['username']))
              {
                $UserName=$_GET['username'];
              }
        ?>
		 
		  <li><a href="../summary/sum_search.php" class="scroll-link">Patient's summary</a></li>
          <!--<li><a href="#setting" class="scroll-link">Manage profile</a></li>-->
           <!-- connect with loging page -->
          <li> <div id="dropdown">
                      <button class="dropbtn">
                        <?php
                          if(isset($_SESSION['username']))
                          {

                                  $id=$_SESSION['username'];
                       

                          }
                        ?>
                            <i class="fa fa-caret-down" "></i><a><img class="img-circle img-size-2"  src="<?php echo  'profile/images/tmp/'.$id.'.jpg'?>"  width="50px" height="50px"></a>
                      </button>
                          <div class="dropdown-content">
                          <a href="prof.php?username=<?php echo $UserName; ?>"><span class="edit" title="sEdit">profile Edit</span></a>
                              <a href="profile/index.php">change profile picture</a>
                              <a href="../index.php" class="scroll-link">Log out</a>
                        </div>
                        </div>
          </li>
        <!-- <li>
            <table border="2" width="50px" height="50px">
            <?php
                if(isset($_SESSION['username'])){

                      $id=$_SESSION['username'];
                       

                    }
            ?>
              <a><img class="img-circle img-size-2"  src="<?php echo  'profile/images/tmp/'.$id.'.jpg'?>"  width="50px" height="50px"></a>
               
            </table>
          </li>
           connect with loging page -->
        </ul>
      </div>
	 
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>
<!--/.header-->

<br>
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      <h2>Patients details</h2>
    </div>	
<div class="container">
<div class="panel">
<div class="col-sm-6">
<form action="" method="POST">
<div class="panel panel-default">
    <div class="panel-heading clearfix"> 
        <span class="glyphicon glyphicon-th"></span> 
        <b>Search Patient Using ID</b>
        <div class="pull-right">
          <button type="submit"  class="btn btn-primary " name="id_search" value="Search">
             <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
    </div>
    <div class="panel clearfix">
    <div class="form-group">
      <input type="number" class="form-control" placeholder="Enter Patient ID" name="patient_id">
    </div>
  </form>
</div>
</div></div>
<div class="panel">
<div class="col-sm-6">
<form action="" method="POST">
<div class="panel panel-default">
    <div class="panel-heading clearfix"> 
        <span class="glyphicon glyphicon-th"></span> 
        <b>Search Patient Using Name</b>
        <div class="pull-right">
          <button type="submit" class="btn btn-primary" name="name_search" value="Search">
             <span class="glyphicon glyphicon-search"></span>
          </button>
        </div>
    </div>
    <div class="panel clearfix">
      <input type="text" class="form-control" placeholder="Enter Patient Name" name="patient_name">
	</div>
	</div>
  </form>
  </div></div>
  </div>
  <!--/.container--> 
</section>

<section id="patients">
<?php
require_once('search.php');

?>
</section>


<!--<section id="setting" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      
      <h2>Manage profile</h2>
     </div>
	 </div>
</section>-->
   
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