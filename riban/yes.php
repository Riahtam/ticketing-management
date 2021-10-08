<?php
	session_start();
	session_destroy();
	
	echo "  <br> <br> <br> <center><font color='red'>Please wait .....</font></center>";
	header('Refresh: 2; URL = index.php');
?>
<html>

<body bgcolor="white" text="black">
</body>
</html>