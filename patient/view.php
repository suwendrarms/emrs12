<?php
 include_once('connect.php');
  $select=mysql_query("SELECT * FROM patient_data order by patient_id desc");
  $i=1;
  while($userrow=mysql_fetch_array($select))

  {
  $id=$userrow['patient_id'];
   $pat=$userrow['patient_ic'];
  $fname=$userrow['first_name'];
  $lname=$userrow['last_name'];
  $connect = $userrow['contactnumber'];
  $street = $userrow['street'];
   $city = $userrow['city'];
  $disc = $userrow['district'];
  $guardian_name = $userrow['guardian_name'];
  $guardian_address = $userrow['guardian_address'];
  $guardian_phonenumber = $userrow['guardian_phonenumber'];

  $dob=$userrow['date_of_birth'];
 
 
  $gen=$userrow['gender'];
  $hist=$userrow['medical_history'];
?>


/*<tr> IC NUMBER :</tr><td> <span><?php echo $pat; ?></span>  <a href="delete.php?id=<?php echo $id; ?>"
    onclick="return confirm('Are you sure you wish to delete this Record?');">
    		<span class="delete" title="Delete"> ---------> X </span></a></td>

        */
  <br />
  <tr> FIRST NAME :</tr><td> <span><?php echo $fname; ?></span>
    <a href="edit.php?patient_id=<?php echo $id; ?>"><span class="edit" title="Edit">--------> E </span></a></td>
  <br />
  <tr> LAST NAME:</tr><td> <span><?php echo $lname; ?></span></td>
  <br />
  <tr> CONTACT NUMBER :</tr><td> <span><?php echo  $connect; ?></span></td>
  <br />
  <tr>STREET:</tr><td> <span><?php echo  $street; ?></span></td>
  <br />
  <tr> CITY :</tr><td> <span><?php echo $city; ?></span></td>
  <br />
  <tr>DISTRICT :</tr><td> <span><?php echo  $disc; ?></span></td>
  <br />
  <tr>guardian_name:</tr><td> <span><?php echo $guardian_name; ?></span></td>
  <br />
   <tr>guardian_address:</tr><td> <span><?php echo  $guardian_address; ?></span></td>
  <br />
   <tr>guardian_phonenumber:</tr><td> <span><?php echo $guardian_phonenumber; ?></span></td>
  <br />
   <tr>DOB:</tr><td> <span><?php echo $dob; ?></span></td>
  <br />
  <tr> GENDER : </tr><td><span><?php echo $gen; ?></span></td>
  <br />
  <tr> MEDICAL RECORDS :</tr><td> <span><?php echo $hist; ?></span><td>
  <br />
<br>
<br>
<br>
<br>
<?php } ?>
