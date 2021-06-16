<?php 
	
	$matp = $_POST['matp'];
	$sql = "select * from quanhuyen where matp = '$matp'";
	$results = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($results);
	if ($num > 0) {
		while ($row = mysqli_fetch_array($results)) {	


?>

	<option value="<?php echo $row['maqh']?>"><?php echo $row['name']?></option>";

<?php
		}

	}
?>


<?php 
	
	$maqh = $_POST['maqh'];
	$sql = "select * from xaphuongthitran where maqh = '$maqh'";

	$num = mysqli_num_rows($sql);
	if ($num > 0) {
		while ($row = mysqli_fetch_array($results)) {	


?>

	<option value="<?php echo $row['xaid']?>"><?php echo $row['name']?></option>";

<?php
		}

	}
?>