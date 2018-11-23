<?php
require_once '../includes/dbconfig.php';
$query = mysqli_query($connect, "SELECT * from location");
while ($location = mysqli_fetch_array($query)){
  echo "<option value = '".$location['location_id']."' name = '".$location['location_name']."'>". $location['location_name']. "</option>";}
?>