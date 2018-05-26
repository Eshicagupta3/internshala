<?php
session_start();
session_destroy();
setcookie('emp_com','',time()-3600,"/");

?>
<script type="text/javascript">
	window.location.replace("index.php");
</script>