<?php
 session_start();

unset($_SESSION['name']);
unset($_SESSION['email']);
unset($_SESSION['password']);
unset($_SESSION['logincheck']);

 header ("location: index.php");

?>
