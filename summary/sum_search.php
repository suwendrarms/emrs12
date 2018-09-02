<?PHP
  session_start();
  require_once('../connection/connect.php');
 /* 
  $UserName = $_SESSION["username"];
  $password = $_SESSION["password"];
  $query ="select * from doctor_registration where Username='$UserName' and Password ='$password'";
  
  $result =mysqli_query($connection,$query);
  
  $doctor_details = mysqli_fetch_assoc($result); 
 */

   $query1 ="select * from patient_registration";
  
  $result1 =mysqli_query($connection,$query1);
  
  $patient_details = mysqli_fetch_assoc($result1);
 
  
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}


#navbar {
  overflow: hidden;
  background-color: #333;
}

#navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

#navbar a:hover {
  background-color: #ddd;
  color: black;
}

#navbar a.active {
  background-color: #4CAF50;
  color: white;
}
#mainNav li{

   list-style-type: none;
    float: right;

}

#btn1{


 margin-top: -30px;
 width: 70px ;
  height: 30px;
}
#input{
   margin-top: 25px;
   width: 220px ;
 height: 30px;
 
}
#btn2{
  height: 30px ; 
  width: 50px;
margin-top: 24px;
margin-left:20px
}

#mainNav #home{
  float: right;
}
#headernav{
  background-color: blue;
}

#dropdown {
    float: left;
    overflow: hidden;
}

#dropdown .dropbtn {
    font-size: 16px;    
    border: none;
    outline: none;
    color: white;
    padding: 8px 15px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
}
 #dropdown:hover .dropbtn {
    background-color: #ccc;
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
    font-size:10px;
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
  margin-top: 20px;
}
#home


</style>
</head>
<body>



<header id ="headernav" class="header" style="background-color: blue;">

  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="navbar-header">   
   
      </div>
     
      <div id="main-nav" class="collapse navbar-collapse ">
      
        <ul class="nav navbar-nav" id="mainNav">
      <li id ="home" ><a href="../doctor/doctor_hp.php" class="scroll-link">Home</a></li>
        <li>

        <button id="btn2" onclick="myFunction()" >Print</button>
                    <script>
                    function myFunction() {
                        window.print();
                    }
                    </script>
        </li>
      <li>
        
        <form class="example" action="" method="POST" style="margin:auto;max-width:300px">
          <input id = "input" type="number" placeholder="Enter Patient ID" name="patient_id" >
          <button id="btn1" type="submit"  name="id_search" value="Search" >summary</button>
        </form>
      </li>
      <li >
      <?php
      if(isset($_POST['id_search']))  
            {  
              $id = $_POST['patient_id'];
            }
      ?>
  
  <div id="dropdown">
    <button class="dropbtn">
      <i class="fa fa-caret-down"></i>poison details edit and delet
    </button>
    <div class="dropdown-content">
        
       
        
  <a href="../doctor/patient_bio_delet.php?Registration_Number=<?php echo $id; ?>" onclick="return confirm('Are you sure you wish to delete this Record?');">
      <span class="delete" title="Delete">Curricular Vital Delete</span></a>
  <a href="../doctor/patient_bio_edit.php?Registration_Number=<?php echo $id; ?>"><span class="edit" title="Edit">Curricular Vital Edit</span></a>
<div id="lab">      
<label >Bee Stings</label></div>
          <a href="../doctor/bee_stings_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete"> details Delete</span></a>
          <a href="../doctor/bee_stings_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit"> details Edit</span></a>
                
          <a href="../clinical_features_bee_stings_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete">clinical features Delete </span></a>
          <a href="../doctor/clinical_features_bee_stings_edit.php?Patient_Id=<?php echo $id; ?>">
          <span class="edit" title="sEdit">clinical features Edit</span></a>

           <a href="../doctor/management_of_bee_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');"> <span class="delete" title="Delete">management  Delete </span></a>
          <a href="../doctor/management_of_bee_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">management Edit</span></a>
<div id="lab">      
<label >black widow spider</label></div>
          <a href="../black_widow_spider_delet.php?Patient_Id=<?php echo $id; ?>"
          onclick="return confirm('Are you sure you wish to delete this Record?');">
              <span class="delete" title="Delete">details Delete </span></a></td>
              
          <a href="../doctor/black_widow_spider_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">details Edit</span></a></td>
          <a href="../doctor/clinical_features_black_widow_spider_delet.php?Patient_Id=<?php echo $id; ?>"
          onclick="return confirm('Are you sure you wish to delete this Record?');">
              <span class="delete" title="Delete">clinical features Delete </span></a></td>
             
          <a href="../doctor/clinical_features_black_widow_spider_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">clinical features Edit</span></a>
          <a href="../doctor/management_of_black_widow_spider_delet.php?Patient_Id=<?php echo $id; ?>"
          onclick="return confirm('Are you sure you wish to delete this Record?');">
              <span class="delete" title="Delete"> management Delete </span></a></td>
            
          <a href="../doctor/management_of_black_widow_spider_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit"> management Edit</span></a>
<div id="lab">      
<label >Hornet Stings</label></div>
                  <a href="../doctor/hornet_stings_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete">details Delete </span></a></td>
               
            <a href="../doctor/hornet_stings_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">details Edit</span></a></td>
               
            <a href="../doctor/clinical_features_hornet_stings_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete">clinical features Delete </span></a></td>
               
            <a href="../doctor/clinical_features_hornet_stings_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">clinical features Edit</span></a></td>
               <a href="../doctor/management_of_hornet_delet.php?Patient_Id=<?php echo $id; ?>"
            onclick="return confirm('Are you sure you wish to delete this Record?');">
                <span class="delete" title="Delete"> management Delete </span></a></td>
              
            <a href="../doctor/management_of_hornet_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit"> management Edit</span></a></td>
<div id="lab">      
<label >Wasp Stings</label></div>
     <a href="../doctor/wasp_stings_delet.php?Patient_Id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> details Delete </span></a></td>
       
    <a href="../doctor/wasp_stings_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit"> details Edit</span></a></td>

     <a href="../doctor/clinical_features_wasp_stings_delet.php?Patient_Id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> clinical features Delete </span></a></td>
       
    <a href="../doctor/clinical_features_wasp_stings_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit"> clinical features Edit</span></a></td>

         <a href="../doctor/management_of_wasp_delet.php?Patient_Id=<?php echo $id; ?>"
                onclick="return confirm('Are you sure you wish to delete this Record?');">
        <span class="delete" title="Delete"> management Delete </span></a></td>
        
    <a href="../doctor/management_of_wasp_edit.php?Patient_Id=<?php echo $id; ?>"><span class="edit" title="sEdit">management Edit</span></a></td>
        
    </div>
  </div> 
      
      </li>
          <!--connect with loging page -->
        </ul>
      </div>
   
      <!--/.navbar-collapse--> 
    </nav>
    <!--/.navbar--> 
  </div>
  <!--/.container--> 
</header>




          <section id="patients">
           
          
          <?php

 
               if(!empty($_POST['patient_id']))
               {

                  echo $patient_details['FirstName'].' '.$patient_details['LastName'];
                    require_once('summery.php');
                
                }


          ?>
           
          </section>


  

</section>
 



</body>
</html>


