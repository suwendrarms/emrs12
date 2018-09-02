<?PHP
	session_start();
	require_once('../connection/connect.php');
	
	$UserName = $_SESSION["username"];
	$password = $_SESSION["password"];
 
  
	$query ="select * from receptionist_registration where Username='$UserName' and Password ='$password'";
	
	$result =mysqli_query($connection,$query);
	
	$nurse_details = mysqli_fetch_assoc($result);
	
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
    padding: 8px 15px;
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
	  <a href="#" class="not-active scroll-top animated fadeIn "><h1> <?php echo $nurse_details['FirstName'].' '.$nurse_details['LastName']  ?></h1></a>
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
		      <li> </li>
		  <li><a href="../patient/patient_reg.php" class="scroll-link">Enter Patient's details</a></li>
          <!--<li><a href="#add_poison" class="scroll-link">View patient's details</a></li>
          <li><a href="#setting" class="scroll-link">Manage profile</a></li>-->
          <li></li>

          <li>
                          <div id="dropdown">
                          <button class="dropbtn">

                           <?php

                              if(isset($_SESSION['username']))
                              {

                                       $id=$_SESSION['username'];
                                      //$actual_image_name = $id.'.'.$ext;
                              }
                             ?>
                            <i class="fa fa-caret-down" "></i> <a><img   class="img-circle img-size-2" src="<?php echo  'profile/images/tmp/'.$id.'.jpg'?>"  width="50px" height="50px"></a>
                          </button>
                          <div class="dropdown-content">
                          <a href="prof_nurse.php?username=<?php echo $UserName; ?>"><span class="edit" title="sEdit"> profile Edit</span></a>
                              <a href="profile/index.php">change profile picture</a>
                              <a href="../index.php" class="scroll-link">Log out</a>
                        </div>
                        </div>
          </li>
         <!-- <li>
            <table border="0" width="50px" height="50px">
            <?php

            if(isset($_SESSION['username'])){

                $id=$_SESSION['username'];
                  //$actual_image_name = $id.'.'.$ext;
              }
            ?>
            
            
              <a><img   class="img-circle img-size-2" src="<?php echo  'profile/images/tmp/'.$id.'.jpg'?>"  width="50px" height="50px"></a>
              
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
<div id="#top"></div>
<!--<section id="home">
  <div class="banner-container"> <img src="../images/banner-bg.jpg" alt="banner" />
    <div class="container banner-content">
      <div class="hero-text animated fadeIn">
        <h1 class="responsive-headline" style="../font-size: 40px;">   Welcome  <?php echo $nurse_details['FirstName'].' '.$nurse_details['LastName']  ?> </h1>-->
        
       </div>
    </div>
  </div>
</section>
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
	<br>
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
if(!empty($_POST['patient_id']) || !empty($_POST['patient_name'])  ){
	
		require_once('search.php');
}

?>
</section>

<section id="add_poison" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     <!-- <h2>Add Poisons</h2> -->
      
    </div>
	 </div>
  <!--/.container--> 
</section>
<!--<section id="setting" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
     
      <h2>Manage profile</h2>   

	 <!-- php
update user image
  if(isset($_POST['submit'])) {
  $photo = new Media();
  $user_id = (int)$_POST['user_id'];
  $photo->upload($_FILES['file_upload']);
  if($photo->process_user($user_id)){
    $session->msg('s','photo has been uploaded.');
    redirect('edit_account.php');
    } else{
      $session->msg('d',join($photo->errors));
      redirect('edit_account.php');
    }
  }
?>

 //update user other info
  if(isset($_POST['update'])){
    $req_fields = array('name','username' );
    validate_fields($req_fields);
    if(empty($errors)){
             $id = (int)$_SESSION['user_id'];
           $name = remove_junk($db->escape($_POST['name']));
       $username = remove_junk($db->escape($_POST['username']));
            $sql = "UPDATE users SET name ='{$name}', username ='{$username}' WHERE id='{$id}'";
    $result = $db->query($sql);
          if($result && $db->affected_rows() === 1){
            $session->msg('s',"Acount updated ");
            redirect('edit_account.php', false);
          } else {
            $session->msg('d',' Sorry failed to updated!');
            redirect('edit_account.php', false);
          }
    } else {
      $session->msg("d", $errors);
      redirect('edit_account.php',false);
    }
  }
?>-->

<div class="row">
  <div class="col-md-12">
 
  
  <!-- <div class="col-md-6">
      <div class="panel panel-default">
        <div class="panel-heading">
          <div class="panel-heading clearfix">
            <span class="glyphicon glyphicon-camera"></span>
            <span>Change My photo</span>
          </div>
        </div>
        <div class="panel-body">
          <div class="row">
            <div class="col-md-4">
                <img class="img-circle img-size-2" src="uploads/users/<?php echo $user['image'];?>" alt="">
            </div>
            <div class="col-md-8">
              <form class="form" action="edit_account.php" method="POST" enctype="multipart/form-data">
              <div class="form-group">
                <input type="file" name="file_upload" multiple="multiple" class="btn btn-default btn-file"/>
              </div>
              <div class="form-group">
                <input type="hidden" name="user_id" value="<?php echo $user['id'];?>">
                 <button type="submit" name="submit" class="btn btn-warning">Change</button>
              </div>
             </form>
            </div>
          </div>
        </div>
      </div>
  </div> 
  <div class="col-md-6">
    <div class="panel panel-default">
      <div class="panel-heading clearfix">
        <span class="glyphicon glyphicon-edit"></span>
        <span>Edit My Account</span>
      </div>
      <div class="panel-body">
          <form method="post" action="edit_account.php?id=<?php echo (int)$user['id'];?>" class="clearfix">
            <div class="form-group">
                  <label for="name" class="control-label">Name</label>
                  <input type="name" class="form-control" name="name" value="<?php echo remove_junk(ucwords($user['name'])); ?>">
            </div><br>
            <div class="form-group">
                  <label for="username" class="control-label">Username</label>
                  <input type="text" class="form-control" name="username" value="<?php echo remove_junk(ucwords($user['username'])); ?>">
            </div><br>
            <div class="form-group clearfix">
                    <a href="change_password.php" title="change password" class="btn btn-danger pull-right">Change Password</a>
                    <button type="submit" name="update" class="btn btn-info">Update</button>
            </div>
        </form>
      </div>
    </div>
  </div>
</div>





  
  
  </div>
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