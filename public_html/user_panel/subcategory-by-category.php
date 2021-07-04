<?php
include 'db.php';
$cat_id = $_POST['cat_id'];
//$cat_id = "1";
$result = mysqli_query($con,"SELECT * FROM sub_category where cat_id = '$cat_id'");
?>
<option value="">Select Sub-Category</option>
<?php
while ($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row['sub_id']; ?>"><?php echo $row['subcat']; ?></option>
<?php
}
?>