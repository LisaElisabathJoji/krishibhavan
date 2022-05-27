<?php
require_once "includes/connection.php";
$country_id = $_POST["country_id"];
$result = mysqli_query($con,"SELECT * FROM tbl_taluk where state_id = $country_id");
?>
<option value="">Select Taluk</option>
<?php
while($row = mysqli_fetch_array($result)) {
?>
<option value="<?php echo $row["id"];?>"><?php echo $row["name"];?></option>
<?php
}
?>