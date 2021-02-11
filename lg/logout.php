<?php
session_start();
if (isset($_SEESION['u_name'])) {
	session_destroy();
	echo "<script>location.href='../home.php'</script>";
}
else {
	session_destroy();
	echo "<script>location.href='../home.php'</script>";
}
?>