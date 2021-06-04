<?php
session_start();
if(!isset($_SESSION["username"])){
header("Location: login.php");
exit(); }
?>
<html>
<p>Server Error Try Again later Or Clear Cache and Cookies</p>
</html>
