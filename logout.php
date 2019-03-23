<?php 

session_start();
session_destroy();
session_unset();

echo"
		<Script>
		document.location.href='index.php';
		</script>
	";

 ?>