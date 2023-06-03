<?php
	include '../includes/config.php';
	
	// Check if the 'id' key is present in the $_REQUEST array
	if(isset($_REQUEST['id'])){
		$id = $_REQUEST['id'];
		
		$query = "DELETE FROM client WHERE client_id = '$id'";
		$result = $conn->query($query);
		
		if($result === TRUE){
			echo 'Request has Successfully been Deleted';
			?>
			<meta content="4; client_requests.php" http-equiv="refresh" />
			<?php
		}
	} else {
		echo 'No ID provided.';
	}
?>
