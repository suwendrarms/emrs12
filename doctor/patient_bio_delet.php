<?php
  //session_start();
  include_once("../connection/connect.php");

  /*
  if(isset($_GET['Registration_Number']) != "")
  {
  $delete=$_GET['Registration_Number'];
  $delete=mysql_query("DELETE FROM patient_registration WHERE Registration_Number='$delete'");
  if($delete)
  {
	  header("Location: ../reception_nurse/nursehome.php");
  }
  else
  {
	  echo mysql_error();
  }
  }
*/
if(isset($_GET['Registration_Number']) != "")
{
    $id=$_GET['Registration_Number'];
    echo $id;

  $sql = "DELETE FROM patient_registration WHERE Registration_Number='$id'" or die(mysqli_error($connection));

if (mysqli_query($connection, $sql)) 
{
    header("Location:../reception_nurse/nursehome.php");
     
      $message =  "Record deleted successfully";
        echo "<script type='text/javascript'>alert('$message');</script>";
} 
else 
{
    echo "Error deleting record: " . mysqli_error($connection);
}

}


?>