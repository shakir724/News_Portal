<?php
include "db.php";
$city_id = $_POST["city_id"];

$result1 = mysqli_query($con,"SELECT * FROM cities where district_id = $city_id");
?>
<select>
<option value="">Select City</option>
<?php
while($row = mysqli_fetch_array($result1)) {
?>
<option value="<?php echo $row["city_id"];?>"><?php echo $row["city"];?></option>
<?php
}
?>
</select>