<?php
	include 'koneksi.php';

	if (isset($_GET['delete_data'])) {
		
		$delete_data = $_GET['delete_data'];

	    $sql = mysqli_query($conn, "DELETE FROM user WHERE id= '$delete_data'");

	    if ($sql) {
	    	echo "<script>alert('Data berhasil dihapus! 😉');document.location='admin.php'</script>";
	    }
	}
    ?>