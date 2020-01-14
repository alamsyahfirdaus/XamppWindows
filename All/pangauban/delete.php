<?php 
require 'connect.php';
$user_id = $_GET["user_id"];
if( delete($user_id) > 0 ) {
	echo "
		<script>
			alert('data berhasil dihapus');
			document.location.href = 'index.php';
		</script>
	";
} else {
	echo "
		<script>
			alert('data gagal dihapus');
			document.location.href = 'index.php';
		</script>
	";
}
// $id = isset($_GET['id']) ? $_GET['id'] : ''; 

?>