<?php
$logoutbtn = @$_GET['logout'];
if ($logoutbtn == 'y' ){
	session_start();
	session_destroy();
	header('location:index.php');
}
?>