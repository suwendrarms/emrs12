<?php

require_once('../connection/connect.php');



if(!empty($_POST['patient_id'])){

  
$patient_details ="select * from patient_registration" ;
$query ="select * from patient_registration";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Registration_Number"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

}














if ($patient_details){
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

</style>
</head>

<body>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> (1).Details about Curricular Vital</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

   

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
         <table style="width:100%">
     
     <tr>
      <th>Registration Number </th>
      <td><?php echo (int)$patient_details['Registration_Number']; ?></td>
      </tr>
      
      <tr>
      <th>Name: </th>
      <td><?php echo $patient_details['FirstName']." ".$patient_details['LastName']; ?></td>
      </tr>
      
      <tr>
      <th>Medical History: </th>
      <td><?php echo $patient_details['medical_history']; ?></td>
      </tr>
      
      <tr>
      <th>Nic number: </th>
      <td><?php echo $patient_details['patient_NIC']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian name: </th>
      <td><?php echo $patient_details['guardian_name']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian phone number: </th>
      <td><?php echo $patient_details['guardian_phonenumber']; ?></td>
      </tr>
      
      <tr>
      <th>Guardian address: </th>
      <td><?php echo $patient_details['guardian_address']; ?></td>
      </tr>
      
      <tr>
      <th>Date of birth: </th>
      <td><?php echo $patient_details['Date_Of_Birth']; ?></td>
      </tr>
      
      <tr>
      <th>Gender: </th>
      <td><?php echo $patient_details['Gender']; ?></td>
      </tr>
      
      <tr>
      <th>Mobile No.: </th>
      <td><?php echo $patient_details['mobile_number']; ?></td>
      </tr>
      
      <tr>
      <th>Land Line No.: </th>
      <td><?php echo $patient_details['land_number']; ?></td>
      </tr>
      
      <tr>
      <th>Address: </th>
      <td><?php echo $patient_details['address']; ?></td>



</tr>

      </table>
       </div>
  <!--/.container--> 
</section>
<!------------------------------------------------------------------------------------------------------------------------------------------>
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(2). Details about bee stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from details_about_bee_stings" ;
$query ="select * from details_about_bee_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM details_about_bee_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>Place Of Stings
      <th>Nic number: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>


      
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> (3).clinical features bee stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from clinical_features_bee_stings" ;
$query ="select * from clinical_features_bee_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM clinical_features_bee_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Burning pain: </th>
      <td><?php echo $patient_details['Burning_pain']; ?></td>
      </tr>
      
      <tr>
      <th>Swelling: </th>
      <td><?php echo $patient_details['Swelling']; ?></td>
      </tr>
      
      <tr>
      <th>Pruntus: </th>
      <td><?php echo $patient_details['Pruntus']; ?></td>
      </tr>
      
      <tr>
      <th>Nauka: </th>
      <td><?php echo $patient_details['Nauka']; ?></td>
      </tr>
      
      <tr>
      <th>Vomiting: </th>
      <td><?php echo $patient_details['Vomiting']; ?></td>
      </tr>
      
      <tr>
      <th>Hypotenisum </th>
      <td><?php echo $patient_details['Hypotenisum']; ?></td>
      </tr>
      
      <tr>
      <th>Bronchospasm: </th>
      <td><?php echo $patient_details['Bronchospasm']; ?></td>
      </tr>
      
      <tr>
      <th>Oliguna: </th>
      <td><?php echo $patient_details['Oliguna']; ?></td>
      </tr>
      
      <tr>
      <th>Renal failure: </th>
      <td><?php echo $patient_details['Renal_failure']; ?></td>
      </tr>
      
      <tr>
      <th>Diarrhoea: </th>
      <td><?php echo $patient_details['Diarrhoea']; ?></td>

 </tr>
 <tr>
      <th>Tightness of chest : </th>
      <td><?php echo $patient_details['Tightness_of_chest']; ?></td>

 </tr>

 <tr>
      <th>Malaise : </th>
      <td><?php echo $patient_details['Malaise']; ?></td>

 </tr>

 <tr>
      <th>Urticana : </th>
      <td><?php echo $patient_details['Urticana']; ?></td>

 </tr>

 <tr>
      <th>Facial odema : </th>
      <td><?php echo $patient_details['Facial_odema']; ?></td>

 </tr>

 <tr>
      <th>Laryngeal odema : </th>
      <td><?php echo $patient_details['Laryngeal_odema']; ?></td>

 </tr>

 <tr>
      <th>Seizure: </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis : </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Seizure : </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis: </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Circumstances_Of_Stings : </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>

 
 
       
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> (4).management of bee stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from management_of_bee" ;
$query ="select * from management_of_bee";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM management_of_bee WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Apply_ice_packs: </th>
      <td><?php echo $patient_details['Apply_ice_packs']; ?></td>
      </tr>
      
      <tr>
      <th>Artihistamine: </th>
      <td><?php echo $patient_details['Artihistamine']; ?></td>
      </tr>
      
      <tr>
      <th>Adranaline_IM : </th>
      <td><?php echo $patient_details['Adranaline_IM']; ?></td>
      </tr>
      
      <tr>
      <th>ICU_care : </th>
      <td><?php echo $patient_details['ICU_care']; ?></td>
      </tr>
      
      <tr>
      <th>Steroids : </th>
      <td><?php echo $patient_details['Steroids']; ?></td>
      </tr>
      
      <tr>
      <th>Need_Renal_Replacement_therapy : </th>
      <td><?php echo $patient_details['Need_Renal_Replacement_therapy']; ?></td>
      </tr>
      
      <tr>
      <th>Need_invasive_ventilation : </th>
      <td><?php echo $patient_details['Need_invasive_ventilation']; ?></td>
      </tr>
      
      <tr>
      <th>Stinger_scrapped : </th>
      <td><?php echo $patient_details['Stinger_scrapped']; ?></td>
     
     

       
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>


<!-------------------------------------------------------------------------------------------------------------------------------------------------------->
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
      
    </div>
<?php
    $patient_details ="select * from details_about_black_widow_spider" ;
$query ="select * from details_about_black_widow_spider";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_black_widow_spider WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(5).Details about black widow spider</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
       

          <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number Of Stings: </th>
      <td><?php echo $patient_details['Number_Of_Stings']; ?></td>
      </tr>
      
      <tr>Place Of Stings
      <th>Nic number: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>


      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b> (6).clinical features black widow spider</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from clinical_features_black_widow_spider" ;
$query ="select * from clinical_features_black_widow_spider";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM clinical_features_black_widow_spider WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Abdominal_Pain : </th>
      <td><?php echo $patient_details['Abdominal_Pain']; ?></td>
      </tr>
      
      <tr>
      <th>Headache: </th>
      <td><?php echo $patient_details['Headache']; ?></td>
      </tr>
      
      <tr>
      <th>Narea : </th>
      <td><?php echo $patient_details['Narea']; ?></td>
      </tr>
      
      <tr>
      <th>Pain_In _Large_Mscle_Grop : </th>
      <td><?php echo $patient_details['Pain_In_Large_Mscle_Grop']; ?></td>
      </tr>
      
      <tr>
      <th>Pain_At_The_Site : </th>
      <td><?php echo $patient_details['Pain_At_The_Site']; ?></td>
      </tr>
      
      <tr>
      <th>Pain_In_The_Extremities_With_Weakness : </th>
      <td><?php echo $patient_details['Pain_In_The_Extremities_With_Weakness']; ?></td>
      </tr>
      
      <tr>
      <th>Prunts: </th>
      <td><?php echo $patient_details['Prunts']; ?></td>
      </tr>
      
      <tr>
      <th>Urtecana : </th>
      <td><?php echo $patient_details['Urtecana']; ?></td>
      </tr>
      
      <tr>
      <th>Vomiting : </th>
      <td><?php echo $patient_details['Vomiting']; ?></td>
     
      
    
 
       
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>


<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(7).management of black widow spider</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from management_of_black_widow_spider" ;
$query ="select * from management_of_black_widow_spider";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM management_of_black_widow_spider WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Types_Of_Managements : </th>
      <td><?php echo $patient_details['Types_Of_Managements']; ?></td>
      </tr>
      
      <tr>
      <th>Yes_Or_No : </th>
      <td><?php echo $patient_details['Yes_Or_No']; ?></td>
      
     

       
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>
<!---------------------------------------------------------------------------------------------------------------->
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
<?php
    $patient_details ="select * from details_about_hornet_stings" ;
$query ="select * from details_about_hornet_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_hornet_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(8).Details about hornet stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
         <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>
      <th>Place Of Stings: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>

     
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(9). clinical features  hornet stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from clinical_features_hornet_stings" ;
$query ="select * from clinical_features_hornet_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM clinical_features_hornet_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          
          <table style="width:100%">
     
     
      
      <tr>
      <th>Burning pain: </th>
      <td><?php echo $patient_details['Burning_pain']; ?></td>
      </tr>
      
      <tr>
      <th>Swelling: </th>
      <td><?php echo $patient_details['Swelling']; ?></td>
      </tr>
      
      <tr>
      <th>Pruntus: </th>
      <td><?php echo $patient_details['Pruntus']; ?></td>
      </tr>
      
      <tr>
      <th>Nauka: </th>
      <td><?php echo $patient_details['Nauka']; ?></td>
      </tr>
      
      <tr>
      <th>Vomiting: </th>
      <td><?php echo $patient_details['Vomiting']; ?></td>
      </tr>
      
      <tr>
      <th>Hypotenisum </th>
      <td><?php echo $patient_details['Hypotenisum']; ?></td>
      </tr>
      
      <tr>
      <th>Bronchospasm: </th>
      <td><?php echo $patient_details['Bronchospasm']; ?></td>
      </tr>
      
      <tr>
      <th>Oliguna: </th>
      <td><?php echo $patient_details['Oliguna']; ?></td>
      </tr>
      
      <tr>
      <th>Renal failure: </th>
      <td><?php echo $patient_details['Renal_failure']; ?></td>
      </tr>
      
      <tr>
      <th>Diarrhoea: </th>
      <td><?php echo $patient_details['Diarrhoea']; ?></td>

 </tr>
 <tr>
      <th>Tightness of chest : </th>
      <td><?php echo $patient_details['Tightness_of_chest']; ?></td>

 </tr>

 <tr>
      <th>Malaise : </th>
      <td><?php echo $patient_details['Malaise']; ?></td>

 </tr>

 <tr>
      <th>Urticana : </th>
      <td><?php echo $patient_details['Urticana']; ?></td>

 </tr>

 <tr>
      <th>Facial odema : </th>
      <td><?php echo $patient_details['Facial_odema']; ?></td>

 </tr>

 <tr>
      <th>Laryngeal odema : </th>
      <td><?php echo $patient_details['Laryngeal_odema']; ?></td>

 </tr>

 <tr>
      <th>Seizure: </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis : </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Seizure : </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis: </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Circumstances_Of_Stings : </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>

 
 
      
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(10).management of hornet stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from management_of_hornet" ;
$query ="select * from management_of_hornet";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM management_of_hornet WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Types_Of_Managements : </th>
      <td><?php echo $patient_details['Types_Of_Managements']; ?></td>
      </tr>
      
      <tr>
      <th>Yes_Or_No : </th>
      <td><?php echo $patient_details['Yes_Or_No']; ?></td>
     
     
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<!---------------------------------------------------------------------------------------------------------------------->
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
<?php
    $patient_details ="select * from details_about_wasp_stings" ;
$query ="select * from details_about_wasp_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  /* $sql = "SELECT * FROM patient_registration WHERE Registration_Number = '$id'";
  
  $result = mysqli_query($mysqli,$sql);
  $patient_details = mysqli_fetch_assoc($result);
  echo mysqli_error($mysqli);
  //print_r($patient_details); */
  
  
  $query ="SELECT * FROM details_about_wasp_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else{
    echo "<script>alert('Not Found')</script>";
  }
}
  
  ?>

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(11). Details about wasp stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>
<div class="panel">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy">
        <table style="width:100%">
     
     
      
      <tr>
      <th>Time Of Stings: </th>
      <td><?php echo $patient_details['Time_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Number of stings: </th>
      <td><?php echo $patient_details['Number_of_stings']; ?></td>
      </tr>
      
      <tr>
      <th>Place Of Stings: </th>
      <td><?php echo $patient_details['Place_Of_Stings']; ?></td>
      </tr>
      
      <tr>
      <th>Head and Neck: </th>
      <td><?php echo $patient_details['Head_and_Neck']; ?></td>
      </tr>
      
      <tr>
      <th>Upper Limb: </th>
      <td><?php echo $patient_details['Upper_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>Chest: </th>
      <td><?php echo $patient_details['Chest']; ?></td>
      </tr>
      
      <tr>
      <th>Abdomen: </th>
      <td><?php echo $patient_details['Abdomen']; ?></td>
      </tr>
      
      <tr>
      <th>Lower Limb: </th>
      <td><?php echo $patient_details['Lower_Limb']; ?></td>
      </tr>
      
      <tr>
      <th>other.: </th>
      <td><?php echo $patient_details['other']; ?></td>
      </tr>
      
      <tr>
      <th>Circumstances Of Stings.: </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>

      
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>

<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(12). clinical features wasp stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from clinical_features_wasp_stings" ;
$query ="select * from clinical_features_wasp_stings";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM clinical_features_wasp_stings WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

         
          <table style="width:100%">
     
     
      
      <tr>
      <th>Burning pain: </th>
      <td><?php echo $patient_details['Burning_pain']; ?></td>
      </tr>
      
      <tr>
      <th>Swelling: </th>
      <td><?php echo $patient_details['Swelling']; ?></td>
      </tr>
      
      <tr>
      <th>Pruntus: </th>
      <td><?php echo $patient_details['Pruntus']; ?></td>
      </tr>
      
      <tr>
      <th>Nauka: </th>
      <td><?php echo $patient_details['Nauka']; ?></td>
      </tr>
      
      <tr>
      <th>Vomiting: </th>
      <td><?php echo $patient_details['Vomiting']; ?></td>
      </tr>
      
      <tr>
      <th>Hypotenisum </th>
      <td><?php echo $patient_details['Hypotenisum']; ?></td>
      </tr>
      
      <tr>
      <th>Bronchospasm: </th>
      <td><?php echo $patient_details['Bronchospasm']; ?></td>
      </tr>
      
      <tr>
      <th>Oliguna: </th>
      <td><?php echo $patient_details['Oliguna']; ?></td>
      </tr>
      
      <tr>
      <th>Renal failure: </th>
      <td><?php echo $patient_details['Renal_failure']; ?></td>
      </tr>
      
      <tr>
      <th>Diarrhoea: </th>
      <td><?php echo $patient_details['Diarrhoea']; ?></td>

 </tr>
 <tr>
      <th>Tightness of chest : </th>
      <td><?php echo $patient_details['Tightness_of_chest']; ?></td>

 </tr>

 <tr>
      <th>Malaise : </th>
      <td><?php echo $patient_details['Malaise']; ?></td>

 </tr>

 <tr>
      <th>Urticana : </th>
      <td><?php echo $patient_details['Urticana']; ?></td>

 </tr>

 <tr>
      <th>Facial odema : </th>
      <td><?php echo $patient_details['Facial_odema']; ?></td>

 </tr>

 <tr>
      <th>Laryngeal odema : </th>
      <td><?php echo $patient_details['Laryngeal_odema']; ?></td>

 </tr>

 <tr>
      <th>Seizure: </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis : </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Seizure : </th>
      <td><?php echo $patient_details['Seizure']; ?></td>

 </tr>

 <tr>
      <th>Rhabdomyolysis: </th>
      <td><?php echo $patient_details['Rhabdomyolysis']; ?></td>

 </tr>

 <tr>
      <th>Circumstances Of Stings : </th>
      <td><?php echo $patient_details['Circumstances_Of_Stings']; ?></td>

 
 
      
      </tr>
      
            </table>
       </div>
  <!--/.container--> 
</section>
<section id="patient_details" class="page-section color">
  <div class="container">
    <div class="heading text-center"> 
      <!-- Heading -->
     
    </div>
  
  

  
  
<div class="containerr">
<div class="panell">
<div class="panel panel-defaultt">
  <div class="panel-heading clearfixx"> 
        <span class="glyphicon glyphicon-thh"></span> 
        <b>(13).management of wasp Stings</b>
        <!--<div class="pull-right">
          <form method="POST" action="doctor_hp.php">
          <button type="submit" class="btn btn-success" name="name_search" value="Search">
             <span class="glyphicon glyphicon-circle-arrow-left"></span>
          </button></form>
        </div>-->
    </div></div>

    <?php


    $patient_details ="select * from management_of_wasp" ;
$query ="select * from management_of_wasp";
  
  $result =mysqli_query($connection,$query);
  
  $patient_details = mysqli_fetch_assoc($result);

if(isset($_POST['id_search']))  
{  
  $id = $_POST['patient_id'];
  
  
  
  $query ="SELECT * FROM management_of_wasp WHERE Patient_Id = '$id'";
  $result =mysqli_query($connection,$query);
  if(mysqli_num_rows($result)==1)
  {
    
    $patient_details = mysqli_fetch_assoc($result);
    $_SESSION["Patient_Id"] = $id;
  }
  else 
  {
    echo "<script>alert('Not Found')</script>";
  
  }
}

    ?>

<div class="panell">    
<div class="panel clearfixx">
  <div class="panel panel-defaultt">
  <div class="panel-bodyy"> 

          <table style="width:100%">
     
     
      
      <tr>
      <th>Types Of Managements : </th>
      <td><?php echo $patient_details['Types_Of_Managements']; ?></td>
      </tr>
      
      <tr>
      <th>Yes Or No : </th>
      <td><?php echo $patient_details['Yes_Or_No']; ?></td>
      
     
      </tr>
      
            </table>
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
<?php
}
?>


</body>
</html>