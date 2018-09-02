
<?php
session_start();

require_once('../connection/connect.php');

	

if(isset($_POST['login_submit'])){
$UserName =$_POST['username'];
$password =$_POST['password'];
$query1 ="select * from doctor_registration where Username='$UserName' and Password ='$password'";
$query2 ="select * from receptionist_registration where Username='$UserName' and Password ='$password'";

$result1 =mysqli_query($connection,$query1);
$result2 =mysqli_query($connection,$query2);

if(mysqli_num_rows($result1)==1)
{
	$_SESSION["username"]  = $UserName;
	$_SESSION["password"]  = $password;
	header("Location: ../doctor/doctor_hp.php");
	mysql_close($connection);
}
else if(mysqli_num_rows($result2)==1)
{
	$_SESSION["username"]  = $UserName;
	$_SESSION["password"]  = $password;
	header("Location: ../reception_nurse/nursehome.php");
	mysql_close($connection);
}
else{
    echo "<script>alert('Error Login!  Enter Correct details')</script>";
    echo "<script>window.open('../index.php','_self')</script>";

  
}
}

?>
