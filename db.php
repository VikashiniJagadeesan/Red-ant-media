<?php
include_once 'database.php';
if(isset($_POST['save']))
{	 
	 $username = $_POST['username'];
	 $password = $_POST['last_name'];
	
	
	 if (mysqli_query($conn, $sql)) {
		echo "successfully !";
	 } else {
		echo "Error: " . $sql . "
" . mysqli_error($conn);
	 }
	 mysqli_close($conn);
}
?>