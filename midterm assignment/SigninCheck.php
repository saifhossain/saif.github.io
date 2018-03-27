<?php
$auth=array();
include("library.php");
loadxml();
$u=$_REQUEST['email'];
$p=$_REQUEST['password'];

if(isset($auth[$u]) && $auth[$u]==$p)
{
	header("Location:myBlogIndex.php?");
}
else
{
	echo "I can't recognize you";
	echo "<pre>";print_r($GLOBALS);echo "</pre>";
	header("Location:login.php?error=Invalid Username/Password");
}

?>