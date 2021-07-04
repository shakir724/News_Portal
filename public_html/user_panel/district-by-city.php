<?php
include "db.php";
$city_id = $_POST["city_id"];

$result1 = mysqli_query($con,"SELECT * FROM districts where city_id = $city_id");
?>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result1)) {
?>
<option value="<?php echo $row["district_id"];?>"><?php echo $row["district"];?></option>
<?php
}
?>