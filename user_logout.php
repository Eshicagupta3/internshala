<?php
session_start();
session_destroy();
setcookie('user_id','',time()-3600,"/");

?>
<script type="text/javascript">
	window.location.replace("index.php");
</script>