<?php
session_start();
session_destroy();
	echo '<script language="javascript">
	alert("Terima kasih telah mencoba kuiz.");
	window.location="../home/index.php";
	</script>';

?>