<?php
include 'db.php';
$state_id = $_POST['state_id'];
$result = mysqli_query($con,"SELECT * FROM districts where state_id = '$state_id'");
?>
<option value="">Select District</option>
<?php
while ($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['district_id']; ?>"><?php echo $row['district']; ?></option>
<?php
}
?>